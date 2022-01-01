<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use App\Models\Tagihan;
use Illuminate\Http\Request;

class ControllerPembayaran extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = current_pasien();
        $tagihan = Tagihan::join('patients', 'tagihan.id_patient', '=', 'patients.id')->join('pesan_obat', 'pesan_obat.id', '=', 'tagihan.id_pesan_obat')->join('pesan_kamar', 'tagihan.id_pesan_kamar', '=', 'pesan_kamar.id')->join('kamar', 'kamar.id', '=', 'pesan_kamar.id_kamar')->join('hospitals', 'hospitals.id', 'pesan_kamar.id_hospital')->where('tagihan.id', $id)->get(['tagihan.*', 'patients.nama AS nama_patient, patients.id AS id_patient', 'pesan_obat.harga AS harga_obat', 'pesan_obat.jenis_obat AS nama_obat', 'kamar.nama AS nama_kamar', 'kamar.kelas AS kelas_kamar', 'hospitals.nama AS rs'])->first();
        $page = $user->nama . ' | Pembayaran';
        return view('patient/bayar/checkout', compact('page', 'tagihan'));
    }

    public function bayar($id)
    {
        $user = current_pasien();
        $tagihan = Tagihan::join('patients', 'tagihan.id_patient', '=', 'patients.id')->join('pesan_obat', 'pesan_obat.id', '=', 'tagihan.id_pesan_obat')->join('pesan_kamar', 'tagihan.id_pesan_kamar', '=', 'pesan_kamar.id')->join('kamar', 'kamar.id', '=', 'pesan_kamar.id_kamar')->join('hospitals', 'hospitals.id', 'pesan_kamar.id_hospital')->where('tagihan.id', $id)->get(['tagihan.*', 'patients.nama AS nama_patient, patients.id AS id_patient', 'pesan_obat.harga AS harga_obat', 'pesan_obat.jenis_obat AS nama_obat', 'kamar.nama AS nama_kamar', 'kamar.kelas AS kelas_kamar', 'hospitals.nama AS rs'])->first();
        $page = $user->nama . ' | Pembayaran';
        return view('patient/bayar/proses-bayar', compact('page', 'tagihan'));
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
        //
    }
}