<?php

use App\Models\Hospital;
use App\Models\Patient;
use App\Models\RekamMedis;
use App\Models\Tagihan;
use Illuminate\Support\Facades\Auth;

function patientIdExist($id)
{
    return Patient::where('id', $id)->exists();
}

function generatePatientID()
{
    $number = mt_rand(1000000000, 9999999999);

    if (patientIdExist($number)) {
        return generatePatientID();
    }

    return $number;
}

function generateIDTagihan()
{
    $number = mt_rand(10000000, 99999999);
    $tagihan =  Tagihan::where('id',  $number)->exists();
    if (patientIdExist($tagihan)) {
        return generateIDTagihan();
    }

    return $number;
}

function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}

function current_staff()
{
    return Hospital::join('pengelola', 'pengelola.id_hospital', '=', 'hospitals.id')->where('id_users', Auth()->id())->get(['pengelola.*', 'hospitals.nama AS rs'])->first();
}

function current_pasien()
{
    return Patient::where('id_users', Auth()->id())->first();
    // return Patient::join('users', 'users.id', '=', 'patients.id_users')->where('id_users', Auth()->id())->get(['patients.*'])->first();
}

function get_rekam_medis_patient()
{
    return RekamMedis::where('id_patient', current_pasien()->id)->first();
}

function pasien_layak_inap()
{
    $rekam_medis = get_rekam_medis_patient();
    if ($rekam_medis) {
        if ($rekam_medis->rekomendasi_jenis_rawat == "Rawat Inap") {
            return true;
        }
        return false;
    }
    return false;
}