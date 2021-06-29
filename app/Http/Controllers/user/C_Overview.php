<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\M_Overview;
use Illuminate\Http\Request;

class C_Overview extends Controller
{
    public function index()
    {
        $model = new M_Overview();
        $data['product'] = $model->getRandomProducts();
        return view('user.home', $data);
    }

    public function login(Request $request)
    {
        $model = new M_Overview();
        $login = $model->login($request->input());
        if ($login !== null) {
            // Jika belum verifikasi
            if ($login == 'error-verification') {
                session(['status' => 'error']);
                session(['msg' => 'Email belum diverifikasi, mohon periksa kembali email anda.']);
                return redirect('/login');
            } else {
                // Jika sudah verifikasi
                if ($login->role == '1') {
                    return redirect('/adm');
                } else {
                    return redirect('/');
                }
            }
        } else {
            session(['status' => 'error']);
            session(['msg' => 'Username atau password tidak sesuai.']);
            return redirect('/login');
        }

    }

    public function register()
    {
        return view('user/register');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect('/');
    }
}
