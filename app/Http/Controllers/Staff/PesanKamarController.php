<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PesanKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengelola = current_staff();
        $page = $pengelola->rs . ' | Data Pesan Kamar';
        $pesan_kamar = Patient::join('pesan_kamar', 'pesan_kamar.id_patient', '=', 'patients.id')->join('kamar', 'kamar.id', '=', 'pesan_kamar.id_kamar')->join('tagihan', 'tagihan.id_pesan_kamar', '=', 'pesan_kamar.id')->where('pesan_kamar.id_hospital', $pengelola->id_hospital)->get(['pesan_kamar.*', 'patients.nama AS nama_patient', 'patients.id AS id_patient', 'kamar.nama AS nama_kamar', 'kamar.kelas AS kelas_kamar', 'tagihan.status AS status', 'tagihan.check_in AS check_in', 'tagihan.check_out AS check_out']);
        return view('staff.pesan_kamar.pesan_kamar', compact('page', 'pesan_kamar'));
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