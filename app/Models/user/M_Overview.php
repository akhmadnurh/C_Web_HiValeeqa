<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Overview extends Model
{
    public function login($data)
    {
        $query = DB::table('user')->select('*')->where(function ($query) use ($data) { $query->where('username', '=', $data['userEmail'])->orWhere('email', '=', $data['userEmail']);})->where('password', '=', md5($data['password']));
        $count = $query->count();
        $result = $query->first();
        if ($count > 0) {
            // Cek apakah email sudah terverifikasi atau belum
            $query = DB::table('email_verification')->select("status")->where('email', '=', $result->email)->first();
            if ($query->status < 1) {
                $data['email'] = $result->email;
                $data['status'] = 'error-verification';
                return $data;
            } else {
                session(['loggedIn' => true]);
                session(['id' => $result->user_id]);
                session(['username' => $result->username]);
                session(['name' => $result->name]);
                session(['role' => $result->role]);
            }
            $data['status'] = 'success';
        }else{
            $data['status'] = 'error';
        }

        return $data;
    }

    public function getRandomProducts()
    {
        $query = DB::table('product')->select('*')->inRandomOrder()->limit(4)->get();
        return $query;
    }

    public function forgotPassword($input)
    {
        $query = DB::table('user')->select(['user_id', 'name'])->where('email', '=', $input);
        $data['count'] = $query->count();
        $data['data'] = $query->first();
        return $data;
    }

    public function saveResetPasswordToken($email, $token)
    {
        // Check email if exist on reset_password table
        $query = DB::table('reset_password')->select('*')->where('email', $email)->count();
        if ($query > 0) {
            return DB::table('reset_password')->where('email', $email)->update(['token' => $token]);
        } else {
            return DB::table('reset_password')->insert(['email' => $email, 'token' => $token]);
        }

    }

    public function checkToken($token)
    {
        return DB::table('reset_password')->select('*')->where('token', '=', $token)->count();
    }

    public function resetPasswordProcess($input)
    {
        $email = DB::table('reset_password')->select('email')->where('token', $input['t'])->first();
        $email = $email->email;
        return DB::table('user')->where('email', '=', $email)->update(['password' => md5($input['newPassword'])]);
    }

    public function removeResetPasswordToken($token)
    {
        DB::table('reset_password')->where('token', '=', $token)->delete();
    }

    public function updateEmailToken($email, $token)
    {
        DB::table('email_verification')->where('email', $email)->update(['token' => $token]);
    }

    public function getName($email)
    {
        $query = DB::table('user')->select('name')->where('email', $email)->first();
        return $query->name;
    }
}
