<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HospitalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = DB::table('hospitals')->count();
        $hospitals = Hospital::orderBy('nama')->get();
        $page = 'Data Rumah Sakit';
        return view('admin.hospital', compact('hospitals', 'count', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = 'Input Rumah Sakit';
        return view('admin.input_hospital', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgName = $request->image;
        if ($request->image) {
            $imgName = $request->image->getClientOriginalName() . '-' . time()
                . '.' . $request->image->extension();
            $hospital = Hospital::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'no_telp_rs' => $request->no_telp_rs,
                'maps' => $request->maps,
                'gambar' => $imgName
            ]);

            if ($hospital) {
                $request->image->move(public_path('images/hospital/' . $request->nama), $imgName);
            }
        }

        return redirect('/data/hospitals');
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
        $hospital = Hospital::find($id);
        $page = 'Update Rumah Sakit ' . $hospital->nama;
        return view('admin.update_hospital', compact('hospital', 'page'));
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
        $imgName = $request->image;
        if ($request->image) {
            $imgName = $request->image->getClientOriginalName() . '-' . time()
                . '.' . $request->image->extension();

            $rs = Hospital::find($id);
            $img_path = "images/hospital/" . $rs->nama . "/" . $rs->gambar;
            if (File::exists($img_path)) {
                File::delete($img_path);
            }

            $hospital = Hospital::find($id)->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'no_telp_rs' => $request->no_telp_rs,
                'gambar' => $imgName
            ]);

            if ($hospital) {
                $request->image->move(public_path('images/hospital/' . $request->nama), $imgName);
            }
        } else {
            Hospital::find($id)->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'no_telp_rs' => $request->no_telp_rs
            ]);
        }

        return redirect('/data/hospitals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hospital::find($id)->delete();
        return redirect('/data/hospitals');
    }
}