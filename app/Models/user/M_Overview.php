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
        $data = $query->first();
        if ($count > 0) {
            session(['loggedIn' => true]);
            session(['id' => $data->id_user]);
            session(['username' => $data->username]);
            session(['nama' => $data->nama]);
        }
        return $count;
    }
}
