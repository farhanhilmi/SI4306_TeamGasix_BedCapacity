<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\Kamar;
use App\Models\PesanKamar;
use App\Models\PesanObat;
use App\Models\Rawat;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerPasien extends Controller
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
        $user = current_pasien();
        $page = $user->nama . ' | Dashboard';
        return view('patient/dashboard', compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospital = Hospital::orderBy('nama')->get();

        $user = current_pasien();
        $page = $user->nama . ' | Pilih Rumah Sakit';
        return view('patient/booking_kamar/pilih_hospital', compact('page', 'hospital'));
    }

    public function pilih_kamar(Request $request)
    {
        $request->validate([
            'id_hospital' => 'required',
        ]);

        $kamar = Kamar::where('id_hospital', $request->id_hospital)->get();
        $hospital = Hospital::find($request->id_hospital);

        $user = current_pasien();
        $page = $user->nama . ' | Pilih Kamar';
        return view('patient/booking_kamar/pilih_kamar', compact('page', 'kamar', 'hospital'));
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
            'check_in' => 'required',
        ]);

        $kamar = Kamar::find($request->id_kamar);

        DB::transaction(function () use ($request, $kamar) { // Start the transaction
            $pesan_kamar = new PesanKamar();
            $pesan_kamar->id_kamar = $kamar->id;
            $pesan_kamar->id_hospital = $kamar->id_hospital;
            $pesan_kamar->id_patient = current_pasien()->id;
            $pesan_kamar->save();

            $rawat = new Rawat();
            $rawat->id_patient = current_pasien()->id;
            $rawat->jenis_rawat = 'Rawat Inap';
            $rawat->id_hospital = $kamar->id_hospital;
            $rawat->save();

            $pesan_obat = new PesanObat();
            $pesan_obat->id_patient = current_pasien()->id;
            $pesan_obat->save();

            $kamar = Kamar::find($pesan_kamar->id_kamar);
            $kamar->qty = $kamar->qty - 1;
            $kamar->save();

            $tagihan = new Tagihan();
            $tagihan->id_patient = current_pasien()->id;
            $tagihan->id_pesan_kamar = $pesan_kamar->id;
            $tagihan->jenis_rawat = 'Rawat Inap';
            $tagihan->id_pesan_obat = $pesan_obat->id;
            $tagihan->check_in = $request->check_in;
            $tagihan->biaya_total = $request->biaya_total;
            $tagihan->save();
        });

        return redirect('patient/data_booking');
    }

    public function data_booking()
    {
        $user = current_pasien();
        $tagihan = Tagihan::join('patients', 'tagihan.id_patient', '=', 'patients.id')->join('pesan_obat', 'pesan_obat.id', '=', 'tagihan.id_pesan_obat')->join('pesan_kamar', 'tagihan.id_pesan_kamar', '=', 'pesan_kamar.id')->join('kamar', 'kamar.id', '=', 'pesan_kamar.id_kamar')->where('tagihan.id_patient', $user->id)->get(['tagihan.*', 'patients.nama AS nama_patient, patients.id AS id_patient', 'pesan_obat.harga AS harga_obat', 'kamar.nama AS nama_kamar', 'kamar.kelas AS kelas_kamar']);
        $page = $user->nama . ' | Data Tagihan Rawat';
        return view('patient/data_tagihan', compact('page', 'tagihan'));
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