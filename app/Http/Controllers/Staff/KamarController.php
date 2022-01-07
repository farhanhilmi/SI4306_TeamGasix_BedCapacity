<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\Kamar;
use App\Models\Pengelola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class KamarController extends Controller
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
        $kamars = Kamar::orderBy('nama')->get();
        $pengelola = current_staff();
        $page = $pengelola->rs . ' | Data Kamar';
        return view('staff.kamar.kamar', compact('kamars', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $current_staff = Pengelola::where('id_users', Auth()->id());
        $pengelola = current_staff();
        $page = $pengelola->rs . ' | Tambah Kamar';
        return view('staff.kamar.input_kamar', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengelola = current_staff();
        $imgName = $request->image;
        if ($request->image) {
            $imgName = $request->image->getClientOriginalName() . '-' . time()
                . '.' . $request->image->extension();
            $kamar = Kamar::create([
                'id_hospital' => $pengelola->id_hospital,
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'harga' => $request->harga,
                'qty' => $request->qty,
                'deskripsi' => $request->deskripsi,
                'gambar' => $imgName
            ]);

            if ($kamar) {
                $request->image->move(public_path('images/kamar/' . $pengelola->rs), $imgName);
            }
        }

        return redirect('/staff/kamar');
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
        $pengelola = current_staff();
        $page = $pengelola->rs . ' | Tambah Kamar';
        $kamar = Kamar::find($id);
        return view('staff.kamar.update_kamar', compact('page', 'kamar'));
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
        $pengelola = current_staff();
        $imgName = $request->image;

        $imgName = $request->image;
        if ($request->image) {
            $imgName = $request->image->getClientOriginalName() . '-' . time()
                . '.' . $request->image->extension();
            $kamar = Kamar::find($id)->update([
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'harga' => $request->harga,
                'qty' => $request->qty,
                'deskripsi' => $request->deskripsi,
                'gambar' => $imgName
            ]);

            if ($kamar) {
                $request->image->move(public_path('images/kamar/' . $pengelola->rs), $imgName);
            }
        } else {
            Kamar::find($id)->update([
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'harga' => $request->harga,
                'qty' => $request->qty,
                'deskripsi' => $request->deskripsi,
            ]);
        }

        return redirect('/staff/kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamar = Kamar::find($id);
        $img_path = "images/kamar/" . current_staff()->rs . "/" . $kamar->gambar;
        $del = $kamar->delete();
        if ($del) {
            if (File::exists($img_path)) {
                File::delete($img_path);
            }
        }
        return redirect('/staff/kamar');
    }
}