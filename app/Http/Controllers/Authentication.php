<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Pengelola;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Authentication extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticated(Request $request, $user)
    {
        if ($user->hasRole('admin')) {
            Session::put('level', 'admin');
            return redirect('data/dashboard');
        }
        if ($user->hasRole('staff')) {
            Session::put('level', 'staff');
            return redirect('staff/dashboard');
        }
        // if ($user->hasRole('admin')) {
        //     return redirect('data/pengelola');
        // }

        return redirect('/login');
    }

    // protected function attemptLogin(Request $request, $user)
    // {
    //     if ($this->guard()->attempt(
    //         $this->credentials($request),
    //         $request->filled('remember')
    //     )) { // Credential auth was successful
    //         // Get user model
    //         // $user = Auth::user();
    //         return $user->hasRole([2, 3]); // Check if user has role ids 2 or 3
    //     }

    //     return false;
    // }


    public function prosesLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // $request->session()->put('email', $request->email);
            $user = User::where("email", $request->email)->first();

            Session::put('email', $request->email);
            return $this->authenticated($request, $user);
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
        // $newUser = User::create([
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password'])
        // ]);
        // $newUser->assignRole('patient');

        // if ($newUser) {
        //     $patient_id = generatePatientID();
        //     return Patient::create([
        //         'id' => $patient_id,
        //         'id_users' => $newUser->id,
        //         'nama' => $data['name'],
        //         'email' => $data['email'],
        //         'nik' => $data['nik'],
        //         'alamat' => $data['alamat'],
        //         'no_hp' => $data['nohp'],
        //     ]);
        // }
        DB::transaction(function () use ($data) { // Start the transaction
            $newUser = new User();

            $email = $data['email'];
            $password = $data['password'];

            $newUser->email = $email;
            $newUser->password = Hash::make($password);
            $newUser->save();
            $newUser->assignRole('patient');

            $patient_id = generatePatientID();
            $pengelola = new Patient();
            $pengelola->patient_id = $patient_id;
            $pengelola->id_users = $$newUser->id;
            $pengelola->nama = $data['name'];
            $pengelola->email = $data['email'];
            $pengelola->nik = $data['nik'];
            $pengelola->alamat = $data['alamat'];
            $pengelola->no_hp = $data['no_hp'];
            $pengelola->save();
        });
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