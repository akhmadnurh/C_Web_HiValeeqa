<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Mail\HiValeeqaMail;
use App\Models\user\M_User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class C_User extends Controller
{
    public function registerProcess(Request $request)
    {
        $model = new M_User();

        // Cek keunikan email dan username
        $check = $model->uniqueDataCheck($request->input());
        if ($check == 'email-exist') {
            session(['msg' => 'Email sudah pernah terdaftar!']);
            session(['status' => 'error']);
            return redirect('/register');
        } elseif ($check == 'username-exist') {
            session(['msg' => 'Username tidak tersedia, coba username lain!']);
            session(['status' => 'error']);
            return redirect('/register');
        }

        // Generate token
        $token = $this->generateToken();

        // Save token
        $model->saveEmailToken($request->input(), $token);

        // Kirim Email
        $this->sendEmail($request->input('email'), $request->input('fullname'), $token);

        // Register
        $register = $model->register($request->input());
        if ($register) {
            session(['msg' => 'Pendaftaran berhasil! Silakan cek email anda untuk melakukan verifikasi.']);
            session(['status' => 'success']);
        } else {
            session('msg', 'Pendaftaran gagal! Periksa kembali data anda.');
            session('status', 'error');
        }

        return redirect('/register');
    }

    public function sendEmail($email, $name, $token)
    {
        Mail::to($email)->send(new HiValeeqaMail($name, $token));
    }

    public function generateToken()
    {
        return Str::random('6');
    }

    public function verifyEmail(Request $request)
    {
        $input = $request->input();
        $model = new M_User();
        $verify = $model->verifyEmail($input['token']);
        if ($verify) {
            session(['msg' => 'Verifikasi email berhasil!']);
            session(['status' => 'success']);
            return redirect('/login');
        } else {
            session(['msg' => 'Kode token tidak sesuai!']);
            session(['status' => 'error']);
            return redirect('/verify-email');
        }
    }
}
