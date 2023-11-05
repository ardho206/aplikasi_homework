<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function login()
    {
        if(Auth::guard('guru')->check()) {
            return redirect('/guru');
        }
        return view('auth.login');
    }

    public function regist()
    {
        return view('auth.regist');
    }

    public function authenticate(Request $request) : RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($request->role === "guru") {

            $guruData = Guru::where('email', $request->email)->first();

            if ($guruData && Auth::guard('guru')->attempt($credentials)) {

                $request->session()->regenerate();

                return redirect()->intended('/guru');
            } else {

                return back()->with('loginError', 'Login Failed');
            }

        } elseif ($request->role === "siswa") {

            $siswaData = Siswa::where('email', $request->email)->first();

            if ($siswaData && Auth::guard('siswa')->attempt($credentials)) {

                $request->session()->regenerate();

                return redirect()->intended('/siswa');
            } else {

                return back()->with('loginError', 'Login Failed');
            }

        }

        return back()->with('loginError', 'Login Failed');
    }

    public function registration(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Hash the password
        $validate['password'] = bcrypt($validate['password']);

        if ($request->role == "guru") {

            $guru = Guru::create($validate);

            Auth::guard('guru')->login($guru);

            return redirect()->intended('/guru');
        }

        // Handle other roles here if needed
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
