<?php

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