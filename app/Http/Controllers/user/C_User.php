<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Mail\HiValeeqaMail;
use App\Models\user\M_Product;
use App\Models\user\M_User;
use App\Models\user\M_Overview;
use Illuminate\Database\Eloquent\Model;
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

    public function profile()
    {
        $model = new M_User();
        $data['user'] = $model->getProfile(session()->get('id'));

        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        return view('user.account.profile', $data);
    }

    public function updateProfile(Request $request)
    {
        $model = new M_User();
        $update = $model->updateProfile($request->input(), session()->get('id'));
        if ($update) {
            session(['msg' => 'Data berhasil diperbarui.']);
            session(['status' => 'success']);
        } else {
            session(['msg' => 'Data gagal diperbarui.']);
            session(['status' => 'error']);
        }

        return redirect('/profile');
    }

    public function changePassword(Request $request)
    {
        $model = new M_User();

        //Check password
        $checkPassword = $model->checkPassword($request->input('passwordNow'));
        if ($checkPassword > 0) {
            $model->changePassword($request->input('newPassword'));

            session(['msg' => 'Data berhasil diperbarui.']);
            session(['status' => 'success']);
        } else {
            session(['msg' => 'Password lama tidak sesuai.']);
            session(['status' => 'error']);
        }

        return redirect('/change-password');
    }

    public function address()
    {
        $model = new M_User();
        $data['address'] = $model->getAddress(session()->get('id'));

        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        return view('user.account.address', $data);
    }

    public function saveAddress(Request $request)
    {
        $model = new M_User();
        $save = $model->saveAddress($request->input(), session()->get('id'));

        if ($save) {
            session(['msg' => 'Data berhasil diperbarui.']);
            session(['status' => 'success']);
        } else {
            session(['msg' => 'Data gagal diperbarui, mohon periksa kembali data anda.']);
            session(['status' => 'error']);
        }

        return redirect('address');
    }

    public function wishlist(Request $request)
    {
        $model = new M_User();
        $model->wishlist(session()->get('id'), $request->segment(2));
        return redirect('/detail' . '/' . $request->segment(2));
    }

    public function removeWishlist(Request $request)
    {
        $model = new M_User();
        $model->removeWishlist(session()->get('id'), $request->segment(2));
        return redirect('/detail' . '/' . $request->segment(2));
    }

    public function changePasswordV()
    {
        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        return view('user.forgot-password', $data);
    }

    public function showWishlist()
    {
        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        $model = new M_Product();
        $data['products'] = $model->showWishlistById(session()->get('id'));

        return view('user.wishlist', $data);
    }
}
