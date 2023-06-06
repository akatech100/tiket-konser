<?php

namespace App\Http\Controllers;

use App\Models\Penonton;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class PenontonController extends Controller
{
    public function resume()
    {
        return view('resume');
    }
    public function create(Request $request)
    {
        $validateData = $request->validate([
            'id_cek' => 'required',
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'phone' => 'required',
            'created_at' => 'required',

        ]);


        Penonton::create($validateData);

        Transaksi::create([
            'id_penonton'     => $request->id_cek,
            'sts_cek'         => 0,
            'date_trans'      => $request->created_at
        ]);

        return view('resume', [
            'data' => $validateData,
        ]);
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // return redirect()->intended('/');
            return redirect('/dashboard');
        }

        return back()->with('statusError', 'Account in corect !!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
