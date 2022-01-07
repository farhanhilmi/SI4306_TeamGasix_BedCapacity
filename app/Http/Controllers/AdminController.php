<?php

namespace App\Http\Controllers;

use App\Models\PesanKamar;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $total_kamar = DB::table('kamar')->count();
        $total_hospital = DB::table('hospitals')->count();
        $total_pengelola = DB::table('pengelola')->count();
        $total_dirawat = DB::table('rawat')->count();


        // dd($split['month']);

        $page = 'Dashboard';
        return view('admin.dashboard', compact('page', 'total_kamar', 'total_hospital', 'total_pengelola', 'total_dirawat'));
    }

    public function rekapbulanan(Request $request)
    {
        $total_kamar = DB::table('kamar')->count();
        $total_hospital = DB::table('hospitals')->count();
        $total_pengelola = DB::table('pengelola')->count();
        $total_dirawat = DB::table('rawat')->count();

        $tagihan = Tagihan::get();
        $bulan = $request->bulan;


        $page = 'Dashboard';
        return view('admin.dashboard', compact('page', 'total_kamar', 'total_hospital', 'total_pengelola', 'total_dirawat', 'tagihan', 'bulan'));
    }
}