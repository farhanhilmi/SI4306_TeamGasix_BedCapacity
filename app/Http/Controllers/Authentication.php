<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Authentication extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function prosesLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/pengelola')
                ->withSuccess('Signed in');
        }

        return redirect("/login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('auth.registration');
    }


    public function prosesRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
            'email' => 'required|email|unique:patients',
            'password' => 'required|min:5',
        ]);

        $data = $request->all();
        $check = $this->createPatient($data);

        return redirect("admin.pengelola")->withSuccess('You have signed-in');
    }


    public function createPatient(array $data)
    {
        $newUser = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        if ($newUser) {
            $patient_id = generatePatientID();
            return Patient::create([
                'id' => $patient_id,
                'id_users' => $newUser->id,
                'nama' => $data['name'],
                'email' => $data['email'],
                'nik' => $data['nik'],
                'alamat' => $data['alamat'],
                'no_hp' => $data['nohp'],
            ]);
        }
    }


    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}