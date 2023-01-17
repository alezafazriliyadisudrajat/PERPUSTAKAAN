<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registercontroller extends Controller
{
    public function register(Request $request){
        $validateDate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'password' => 'required',
        ]);
        $validateDate['password'] = bcrypt($validateDate['password']);

        User::create($validateDate);

        return back()->with('berhasil', 'Register Berhasil');
        return redirect('login')->with('successRegister', 'Berhasil menambahkan akun, silahkan login');
    }
}
