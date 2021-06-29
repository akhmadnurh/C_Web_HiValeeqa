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
}
