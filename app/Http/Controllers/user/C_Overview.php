<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Mail\resetPassword;
use App\Models\user\M_Overview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function forgotPassword(Request $request)
    {
        $input = $request->input();
        $model = new M_Overview();

        $forgotPwd = $model->forgotPassword($input['email']);

        if ($forgotPwd['count'] > 0) {
            $controller = new C_User();
            $token = $controller->generateToken();

            // Save token to Database
            $saveToken = $model->saveResetPasswordToken($input['email'], $token);

            // Send Email
            if ($saveToken) {
                $this->sendResetPasswordEmail($input['email'], $forgotPwd['data']->name, $token);
                session(['status' => 'success']);
                session(['msg' => 'Pesan telah dikirim, silakan cek email anda.']);
                return redirect('forgot-password');
            } else {
                echo 'email gagal dikirim';
            }
        } else {
            session(['status' => 'not-found']);
            session(['msg' => 'Email tidak terdaftar dalam akun manapun.']);
            return redirect('forgot-password');
        }
    }

    public function sendResetPasswordEmail($email, $name, $token)
    {
        Mail::to($email)->send(new resetPassword($name, $token));
    }
}
