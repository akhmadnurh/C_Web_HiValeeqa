<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_UserManagement extends Model
{
    use HasFactory;

    public function getAll()
    {
        $query = DB::table('user')->select('*')->where('role', '!=', 1);
        $data = $query->get();
        return $data;
    }

    public function addUser($data)
    {
        $query = DB::table('user')->insert(['nama' => $data['nama'],'email'=>$data['email'], 'username'=>$data['username'], 'password' => md5($data['password']), 'gender'=>$data['gender'], 'alamat' =>$data['alamat'], 'nomor_wa' =>$data['wa'], 'role' => 0, 'lupa_password' => 0]);
        return $query;
    }
    public function editUser($data)
    {
        $query = DB::table('user')->where('id_user', '=', $data['id'])->update(['nama' => $data['nama'],'email'=>$data['email'], 'username'=>$data['username'], 'password' => md5($data['password']), 'gender'=>$data['gender'], 'alamat' =>$data['alamat'], 'nomor_wa' =>$data['wa'], 'role' => 0, 'lupa_password' => 0]);
        return $query;
    }
    public function deleteUser($id)
    {
        $query = DB::table('user')->where('id_user', '=', $id)->delete();
        return $query;
    }
    public function getDataById($id){
        $query = DB::table('user')->select('*')->where('id_user', '=', $id);
        $data = $query->first();
        return $data;
    }
}
