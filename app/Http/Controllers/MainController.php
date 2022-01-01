<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::limit(3)->get();
        return view('index', compact('testimonials'));
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
}