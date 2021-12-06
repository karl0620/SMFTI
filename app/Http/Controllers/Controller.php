<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function loginAdmin(Request $request)
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
            $nama = DB::table('user')->select('name')->where('nim=nim');
            return redirect()->route('Dashboard\dashboard');

        } else { // false

            //Login Fail
            Session::flash('error', 'NIM atau Password salah');
            return redirect()->route('Admin/loginAdmin');
        }

    }
}
