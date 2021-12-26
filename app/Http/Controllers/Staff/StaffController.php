<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $total_kamar = DB::table('kamar')->count();
        $total_rawat_inap_saat_ini = DB::table('rawat')->where('jenis_rawat', 'Rawat Inap')->count();

        $total_kamar_terisi = $total_kamar - $total_rawat_inap_saat_ini;

        $total_rawat_jalan = DB::table('tagihan')->where('jenis_rawat', 'Rawat Jalan')->count();
        $total_rawat_inap = DB::table('tagihan')->where('jenis_rawat', 'Rawat Inap')->count();
        $pengelola = current_staff();
        $page = $pengelola->rs . ' | Dashboard';
        $inap = Tagihan::where('jenis_rawat', 'Rawat Inap')->orderBy('check_in')->get();
        $jalan = Tagihan::where('jenis_rawat', 'Rawat Jalan')->orderBy('check_in')->get();

        return view('staff/dashboard', compact('page', 'inap', 'jalan', 'total_kamar', 'total_kamar_terisi', 'total_rawat_jalan', 'total_rawat_inap'));
    }
}