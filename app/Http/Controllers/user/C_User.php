<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\M_User;
use Illuminate\Http\Request;

class C_User extends Controller
{
    public function registerProcess(Request $request)
    {
        $model = new M_User();
        $register = $model->register($request->input());
        if ($register) {
            session(['msg' => 'Pendaftaran berhasil!']);
            session(['status' => 'success']);
        } else {
            session('msg', 'Pendaftaran gagal! Periksa kembali data anda.');
            session('status', 'error');
        }
        return redirect('/register');
    }
}
