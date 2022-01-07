<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Kamar;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $total_kamar = DB::table('kamar')->count();
        $total_hospital = DB::table('hospitals')->count();

        $testimonials = Testimonial::limit(3)->get();
        return view('index', compact('testimonials', 'total_kamar', 'total_hospital'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        // $jenis_pasien = "";
        // if ($request->has('pasien')) {
        //     $jenis_pasien = $request->input('pasien');
        // }

        // if ($jenis_pasien == "lama") {
        //     return view('auth.login');
        // } else {
        //     return view('auth.register');
        // }
        return view('auth.register');
    }

    public function bedCapacity()
    {
        $hospital = Kamar::join('hospitals', 'hospitals.id', 'kamar.id_hospital')->get(['hospitals.nama AS nama_rs', 'hospitals.alamat AS alamat', 'hospitals.email AS email', 'hospitals.no_telp_rs AS no_hp', 'hospitals.gambar AS rs_gambar', 'kamar.*']);
        return view('bedcapacity', compact('hospital'));
    }
}