<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_User extends Model
{
    use HasFactory;

    public function register($data)
    {
        $query = DB::table('user')->insert(['name' => $data['fullname'], 'email' => $data['email'], 'username' => $data['username'], 'password' => md5($data['password']), 'gender' => '', 'address' => '', 'whatsapp' => '', 'role' => 0]);
        return $query;
    }

    public function uniqueDataCheck($data)
    {
        // Email
        $query = DB::table('user')->select('*')->where('email', '=', $data['email'])->count();
        if ($query > 0) {
            return 'email-exist';
        }

        // Pasword
        $query = DB::table('user')->select('*')->where('username', '=', $data['username'])->count();
        if ($query > 0) {
            return 'username-exist';
        } else {
            return 0;
        }
    }

    public function saveEmailToken($data, $token)
    {
        DB::table('email_verification')->insert(['email' => $data['email'], 'token' => $token, 'status' => 0]);
    }

    public function verifyEmail($token)
    {
        return DB::table('email_verification')->where('token', '=', $token)->update(['status' => 1]);
    }

    public function getProfile($id)
    {
        return DB::table('user')->select('*')->where('user_id', $id)->first();
    }

    public function updateProfile($input, $id)
    {
        return DB::table('user')->where('user_id', $id)->update(['name' => $input['name'], 'email' => $input['email'], 'whatsapp' => $input['nohp'], 'gender' => $input['gender']]);
    }

    public function checkPassword($pwd)
    {
        return DB::table('user')->select('*')->where('user_id', session()->get('id'))->where('password', md5($pwd))->count();
    }

    public function changePassword($pwd)
    {
        return DB::table('user')->where('user_id', session()->get('id'))->update(['password' => md5($pwd)]);
    }
}
