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
}
