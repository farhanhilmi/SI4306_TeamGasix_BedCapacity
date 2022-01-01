<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\PesanObat;
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
        $total_kamar = DB::table('kamar')->where('id_hospital', current_staff()->id_hospital)->count();
        $total_kamar_terisi = DB::table('rawat')->where('jenis_rawat', 'Rawat Inap')->where('id_hospital', current_staff()->id_hospital)->count();

        // $total_kamar_terisi = $total_kamar - $total_rawat_inap_saat_ini;

        $total_rawat_jalan = DB::table('tagihan')->where('jenis_rawat', 'Rawat Jalan')->count();
        $total_rawat_inap = DB::table('tagihan')->where('jenis_rawat', 'Rawat Inap')->count();
        $pengelola = current_staff();
        $page = $pengelola->rs . ' | Dashboard';
        $inap = Tagihan::where('jenis_rawat', 'Rawat Inap')->orderBy('check_in')->get();
        $jalan = Tagihan::where('jenis_rawat', 'Rawat Jalan')->orderBy('check_in')->get();

        return view('staff/dashboard', compact('page', 'inap', 'jalan', 'total_kamar', 'total_kamar_terisi', 'total_rawat_jalan', 'total_rawat_inap'));
    }

    public function get_patients()
    {
        $pengelola = current_staff();
        $page = $pengelola->rs . ' | Data Pasien';
        $patients = Patient::orderBy('nama')->get();
        return view('staff/patients', compact('page', 'patients'));
    }
    public function data_pesan_obat()
    {
        $pengelola = current_staff();
        $page = $pengelola->rs . ' | Data Pesan Obat';
        $pesan_obat = PesanObat::join('tagihan', 'tagihan.id_pesan_obat', 'pesan_obat.id')->where('tagihan.status', '!=', 'Sudah Bayar')->orderBy('created_at')->get(['pesan_obat.*', 'tagihan.id AS id_tagihan']);
        return view('staff/pesan_obat', compact('page', 'pesan_obat'));
    }

    public function update_pesan_obat(Request $request)
    {
        $request->validate([
            'harga' => 'required',
            'jenis_obat' => 'required',
        ]);

        DB::transaction(function () use ($request) { // Start the transaction
            $harga = $request->harga;
            $jenis_obat = $request->jenis_obat;

            $tagihan = Tagihan::find($request->id_tagihan);
            $tagihan->biaya_total = strval(intval($tagihan->biaya_kamar) + $harga);
            $tagihan->save();

            $pesan_obat = PesanObat::find($request->id_obat);
            $pesan_obat->jenis_obat = $jenis_obat;
            $pesan_obat->harga = $harga;
            $pesan_obat->save();
        });



        return redirect('staff/data_pesan_obat');
    }
}