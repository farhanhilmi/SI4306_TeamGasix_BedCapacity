<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Tagihan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengelola = current_staff();
        $page = $pengelola->rs . ' | Data Tagihan';
        $tagihan = Tagihan::join('patients', 'tagihan.id_patient', '=', 'patients.id')->join('pesan_obat', 'pesan_obat.id', '=', 'tagihan.id_pesan_obat')->join('pesan_kamar', 'tagihan.id_pesan_kamar', '=', 'pesan_kamar.id')->where('pesan_kamar.id_hospital', $pengelola->id_hospital)->get(['tagihan.*', 'patients.nama AS nama_patient', 'patients.id AS id_patient', 'pesan_obat.harga AS harga_obat']);
        return view('staff.tagihan.tagihan', compact('page', 'tagihan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $request->validate([
            'status' => 'required',
        ]);

        $status = $request->status;

        if ($status == "Belum Bayar") {
            Tagihan::find($id)->update([
                'status' => $status,
                'check_out' => date("Y-m-d")
            ]);
        } else {
            Tagihan::find($id)->update([
                'status' => $status
            ]);
        }

        return redirect('/staff/tagihan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}