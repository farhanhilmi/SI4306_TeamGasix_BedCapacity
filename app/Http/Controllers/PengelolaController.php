<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Pengelola;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PengelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = 'Data Pengelola';
        $pengelola = Hospital::join('pengelola', 'pengelola.id_hospital', '=', 'hospitals.id')->get(['pengelola.*', 'hospitals.nama AS rs']);
        return view('admin.pengelola.pengelola', compact('page', 'pengelola'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = 'Input Pengelola Rumah Sakit';
        $hospitals = Hospital::orderBy('nama')->get();
        return view('admin.pengelola.input_pengelola', compact('page', 'hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'alamat' => 'required',
            'id_hospital' => 'required',
        ]);

        DB::transaction(function () use ($request) { // Start the transaction
            $newAcc = new User();

            $email = $request->email;
            $password = $request->password;

            $newAcc->email = $email;
            $newAcc->password = Hash::make($password);
            $newAcc->level = 'staff';
            $newAcc->save();

            $newPengelola = new Pengelola();
            $newPengelola->id_users = $newAcc->id;
            $newPengelola->email = $email;
            $newPengelola->nama = $request->nama;
            $newPengelola->id_hospital = $request->id_hospital;
            $newPengelola->alamat = $request->alamat;
            $newPengelola->save();
        }); // End transaction

        // $newUser = User::create([
        //     'email' => $email,
        //     'password' => Hash::make($password),
        //     'level' => 'staff',
        // ]);

        // if ($newUser) {
        //     Pengelola::create([
        //         'nama' => $request->nama,
        //         'id_users' => $newUser->id,
        //         'alamat' => $request->alamat,
        //         'email' => $email,
        //         'id_hospital' => $request->id_hospital,
        //     ]);
        // }

        return redirect('/data/pengelola');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengelola::find($id)->delete();
        return redirect('/data/pengelola');
    }
}