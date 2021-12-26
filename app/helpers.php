<?php

use App\Models\Hospital;
use App\Models\Patient;

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

function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}

function current_staff()
{
    return Hospital::join('pengelola', 'pengelola.id_hospital', '=', 'hospitals.id')->where('id_users', Auth()->id())->get(['pengelola.*', 'hospitals.nama AS rs'])->first();
}