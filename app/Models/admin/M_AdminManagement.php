<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_AdminManagement extends Model
{
    use HasFactory;
    public function getAll()
    {
        $query = DB::table('user')->select('*')->where('role', '=', 1);
        $data = $query->get();
        return $data;
    }

    public function addUser($data)
    {
        $query = DB::table('user')->insert(['name' => $data['nama'],'email'=>$data['email'], 'username'=>$data['username'], 'password' => md5($data['password']), 'gender'=>$data['gender'], 'address' =>$data['alamat'], 'whatsapp' =>$data['wa'], 'role' => 1]);
        return $query;
    }
    public function editUser($data)
    {
        $query = DB::table('user')->where('user_id', '=', $data['id'])->update(['name' => $data['nama'],'email'=>$data['email'], 'username'=>$data['username'], 'password' => md5($data['password']), 'gender'=>$data['gender'], 'address' =>$data['alamat'], 'whatsapp' =>$data['wa'], 'role' => 1]);
        return $query;
    }
    public function deleteUser($id)
    {
        $query = DB::table('user')->where('user_id', '=', $id)->delete();
        return $query;
    }
    public function getDataById($id){
        $query = DB::table('user')->select('*')->where('user_id', '=', $id);
        $data = $query->first();
        return $data;
    }
}
