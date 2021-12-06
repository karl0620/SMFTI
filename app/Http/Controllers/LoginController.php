<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showFormLoginMhs()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('Navbar\navbar');
        }
        return view('Mahasiswa\loginMhs');
    }

    public function loginMhs(Request $request)
    {
        $rules = [
            'nim'                 => 'required|string',
            'password'              => 'required|string'
        ];

        $messages = [
            'nim.required'        => 'NIM wajib diisi',
            'nim.email'           => 'NIM tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'nim'     => $request->input('nim'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('Dashboard\dashboard');

        } else { // false

            //Login Fail
            Session::flash('error', 'NIM atau Password salah');
            return redirect()->route('Mahasiswa\loginMhs');
        }

    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
}
