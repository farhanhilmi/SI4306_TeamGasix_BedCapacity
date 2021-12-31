<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\RekamMedis;
use Illuminate\Http\Request;

class PatientController extends Controller
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
        $patients = Patient::orderBy('nama')->get();
        $page = 'Data Patients';
        return view('admin.patient.patient', compact('patients', 'page'));
    }

    public function rekam_medis()
    {
        $rekam_medis = RekamMedis::join('patients', 'patients.id', 'rekam_medis.id_patient')->get(['rekam_medis.*', 'patients.nama AS nama_patient']);
        $page = 'Data Rekam Medis';
        return view('admin.patient.rekam_medis', compact('rekam_medis', 'page'));
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
        RekamMedis::find($id)->update([
            'rekomendasi_jenis_rawat' => $request->jenis_rawat,
        ]);
        return redirect('/data/rekammedis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::find($id)->delete();
        return redirect('/data/patient');
    }
}