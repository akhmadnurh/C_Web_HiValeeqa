<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Mail\HiValeeqaMail;
use App\Mail\resendToken;
use App\Mail\resetPassword;
use App\Models\user\M_Overview;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class C_Overview extends Controller
{
    public function index()
    {
        $model = new M_Overview();
        $data['product'] = $model->getRandomProducts();
        $data['cart'] = $model->getUserCartTotal();

        return view('user.home', $data);
    }

    public function login(Request $request)
    {
        $model = new M_Overview();
        $login = $model->login($request->input());
        if ($login !== null && $login['status'] !== 'error') {
            // Jika belum verifikasi
            if ($login['status'] == 'error-verification') {
                return response()->json(['msg' => 'error-verification']);
            } else {
                    return response()->json(['msg' => 'user', 'userdata' => $login['user']]);
            }
        } else {
            return response()->json(['msg' => 'error']);
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

    public function resetPasswordCheckToken(Request $request)
    {
        $model = new M_Overview();
        if ($request->input('t') !== null) {
            $checkToken = $model->checkToken($request->input('t'));
            if ($checkToken > 0) {
                $data['token'] = $request->input('t');
                $data['status'] = 'success';
            } else {
                $data['token'] = '';
                $data['status'] = 'error';
            }
            return view('user.reset-password', $data);
        } else {
            $data['token'] = '';
            $data['status'] = 'error';
            return view('user.reset-password', $data);
        }
    }

    public function resetPasswordProcess(Request $request){
        $input = $request->input();
        $model = new M_Overview();
        $reset = $model->resetPasswordProcess($input);
        if($reset){
            $model->removeResetPasswordToken($input['t']);
            session(['status' => 'success']);
            session(['msg' => 'Password berhasil diubah!']);
            return redirect('/login');
        }
    }

    public function resendEmailToken(Request $request){
        $email = $request->input('email');
        $token = Str::random('6');
        $model = new M_Overview();
        $name = $model->getName($email);

        // Update database
        $model->updateEmailToken($email, $token);

        // Send email
        Mail::to($email)->send(new resendToken($name, $token));

        session(['status' => 'success']);
        session(['msg' => 'Token berhasil dikirim! Silakan cek email anda']);
        return redirect('/login');
    }

    public function contact()
    {
        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        return view('user.contact', $data);

    }

    public function privacyPolicy(){
        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        return view('user.privacy-policy', $data);
    }

    public function termsConditions(){
        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        return view('user.terms-conditions', $data);
    }

    public function aboutUs(){
        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        return view('user.about-us', $data);
    }
}
