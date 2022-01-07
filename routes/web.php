<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\patient\ControllerPasien;
use App\Http\Controllers\patient\ControllerPembayaran;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\Staff\KamarController;
use App\Http\Controllers\Staff\PesanKamarController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Staff\TagihanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [MainController::class, 'index']);
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/register', [MainController::class, 'register']);
Route::get('/bedcapacity', [MainController::class, 'bedCapacity']);
Route::post('/register/proses', [Authentication::class, 'prosesRegistration'])->name('prosesRegis');
Route::post('/login/proses', [Authentication::class, 'prosesLogin'])->name('prosesLogin');
Route::get('/signOut', [Authentication::class, 'signOut'])->name('signOut');


// !ADMIN
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('data/dashboard', [AdminController::class, 'index'])->name('dashboardAdmin');
    // Rekam Medis
    Route::get('data/rekammedis', [PatientController::class, 'rekam_medis']);

    // PENGELOLA
    Route::resource('data/pengelola', PengelolaController::class);
    // HOSPITAL
    Route::resource('data/hospitals', HospitalController::class);
    // PATIENT
    Route::resource('data/patient', PatientController::class);
    Route::post('data/rekap/bulanan', [AdminController::class, 'rekapbulanan']);
});


// !STAFF ROUTE
Route::group(['middleware' => ['role:staff']], function () {
    Route::get('staff/dashboard', [StaffController::class, 'index']);
    Route::get('staff/patient', [StaffController::class, 'get_patients']);
    Route::get('staff/data_pesan_obat', [StaffController::class, 'data_pesan_obat']);
    Route::post('staff/edit_pesan_obat', [StaffController::class, 'update_pesan_obat']);
    // KAMAR
    Route::resource('staff/kamar', KamarController::class);
    Route::resource('staff/pesan_kamar', PesanKamarController::class);
    Route::resource('staff/tagihan', TagihanController::class);
});

// !PATIENT ROUTE
Route::group(['middleware' => ['role:patient']], function () {
    Route::get('patient/dashboard', [ControllerPasien::class, 'index']);
    Route::get('patient/booking', [ControllerPasien::class, 'create']);
    Route::post('patient/booking/kamar', [ControllerPasien::class, 'pilih_kamar']);
    Route::post('patient/booking/kamar/booknow', [ControllerPasien::class, 'store']);
    Route::get('patient/data_booking', [ControllerPasien::class, 'data_booking']);

    // Input Rekam medis
    Route::get('patient/create_rekam_medis', [ControllerPasien::class, 'create_rekam_medis']);
    Route::post('patient/store_rekam_medis', [ControllerPasien::class, 'store_rekam_medis']);

    Route::get('patient/checkout/{id}/', [ControllerPembayaran::class, 'create']);
    Route::get('patient/bayar/{id}/', [ControllerPembayaran::class, 'bayar']);

    // Testi
    Route::post('patient/testimonial', [ControllerPasien::class, 'store_testimonial']);
});


// !TEST
// Route::get('admin-page', function () {
//     return 'Halaman untuk Admin';
// })->middleware('role:admin')->name('admin.page');

// Route::get('user-page', function () {
//     return 'Halaman untuk User';
// })->middleware('role:user')->name('user.page');