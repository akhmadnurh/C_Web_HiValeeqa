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
            $query = DB::table('email_verification')->select("status")->where('email', '=', $result->email)->count();
            if ($query < 1) {
                return 'error-verification';
            } else {
                session(['loggedIn' => true]);
                session(['id' => $result->user_id]);
                session(['username' => $result->username]);
                session(['name' => $result->name]);
                session(['role' => $result->role]);
            }
        }
        return $result;
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
        return DB::table('reset_password')->insert(['email' => $email, 'token' => $token]);
    }
}
