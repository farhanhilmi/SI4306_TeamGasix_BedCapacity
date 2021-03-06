<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Patient;
use App\Models\PesanKamar;
use App\Models\Tagihan;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $total_kamar = DB::table('kamar')->count();
        $total_hospital = DB::table('hospitals')->count();
        $total_pengelola = DB::table('pengelola')->count();
        $total_dirawat = Tagihan::where('status', 'Dalam Perawatan')->count();


        $date = Tagihan::groupBy('date')
            ->orderBy('date', 'DESC')
            ->get(array(
                DB::raw('Date(created_at) as date'),
                DB::raw('COUNT(*) as "views"')
            ));

        // dd($split['month']);

        $page = 'Dashboard';
        return view('admin.dashboard', compact('page', 'total_kamar', 'total_hospital', 'total_pengelola', 'total_dirawat', 'date'));
    }

    public function rekapbulanan(Request $request)
    {
        $total_kamar = DB::table('kamar')->count();
        $total_hospital = DB::table('hospitals')->count();
        $total_pengelola = DB::table('pengelola')->count();
        $total_dirawat = Tagihan::where('status', 'Dalam Perawatan')->count();

        $date = Tagihan::groupBy('date')
            ->orderBy('date', 'DESC')
            ->get(array(
                DB::raw('Date(created_at) as date'),
                DB::raw('COUNT(*) as "views"')
            ));
        $bulan = $request->bulan;

        if ($request->bulan) {
            $patient = Patient::get();
            $tagihan = Tagihan::get();


            $pesan_kamar = PesanKamar::whereMonth('created_at', '=', $bulan)->get();
            $sedang_rawat = Tagihan::whereMonth('created_at', '=', $bulan)->where('status', 'Dalam Perawatan')->get();
            $kamarByMonth = Kamar::whereMonth('created_at', '=', $bulan)->get();

            $page = 'Dashboard';
            return view('admin.dashboard', compact('page', 'total_kamar', 'total_hospital', 'total_pengelola', 'total_dirawat', 'tagihan', 'bulan', 'patient', 'pesan_kamar', 'kamarByMonth', 'sedang_rawat', 'date'));
        }

        if ($request->date) {
            $patient = Patient::get();
            $tagihan = Tagihan::get();

            $pesan_kamar = PesanKamar::whereDate('created_at', '=', $request->date)->get();
            $sedang_rawat = Tagihan::whereDate('created_at', '=', $request->date)->where('status', 'Dalam Perawatan')->get();
            $kamarByMonth = Kamar::whereDate('created_at', '=', $request->date)->get();

            $page = 'Dashboard';
            return view('admin.dashboard', compact('page', 'total_kamar', 'total_hospital', 'total_pengelola', 'total_dirawat', 'tagihan', 'bulan', 'patient', 'pesan_kamar', 'kamarByMonth', 'sedang_rawat', 'date'));
        }
    }

    public function rekapHarian(Request $request)
    {
        $total_kamar = DB::table('kamar')->count();
        $total_hospital = DB::table('hospitals')->count();
        $total_pengelola = DB::table('pengelola')->count();
        $total_dirawat = DB::table('rawat')->count();

        $patient = Patient::get();
        $tagihan = Tagihan::get();
        $date = $request->date;


        // $visitorTraffic = PesanKamar::whereDate('created_at', '=', $date)
        //                     ->groupBy('date')
        //                     ->orderBy('date', 'DESC')
        //                     ->get(array(
        //                         DB::raw('Date(created_at) as date'),
        //                         DB::raw('COUNT(*) as "views"')
        //                     ));

        $pesan_kamar = PesanKamar::whereDate('created_at', '=', $date)->get();
        $sedang_rawat = Tagihan::whereDate('created_at', '=', $date)->where('status', 'Dalam Perawatan')->get();
        $kamarByMonth = Kamar::whereDate('created_at', '=', $date)->get();

        $page = 'Dashboard';
        return view('admin.dashboard', compact('page', 'total_kamar', 'total_hospital', 'total_pengelola', 'total_dirawat', 'tagihan', 'bulan', 'patient', 'pesan_kamar', 'kamarByMonth', 'sedang_rawat'));
    }
}