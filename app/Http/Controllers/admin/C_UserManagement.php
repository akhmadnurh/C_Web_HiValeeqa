<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\M_UserManagement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class C_UserManagement extends Controller
{
    public function manageUser()
    {
        $model = new M_UserManagement();
        $data['data'] = $model->getAll();
        return view('admin.manage_user', $data);
    }

    public function manageUserAdd()
    {
        return view('admin.manage_user_tambah');
    }

    public function manageUserEdit(Request $request)
    {
        $id = $request->segment(4);
        $model = new M_UserManagement();
        $data['user'] = $model->getDataById($id);
        return view('admin.manage_user_edit', $data);
    }

    public function addUser(Request $request)
    {
        $model = new M_UserManagement();
        $addData = $model->addUser($request->input());
        if ($addData) {
            return redirect('/adm/user-management');
        } else {
            return redirect('/adm/user-management/add');
        }
    }
    public function editUser(Request $request)
    {
        $model = new M_UserManagement();
        $editData = $model->editUser($request->input());
        if ($editData) {
            return redirect('/adm/user-management');
        } else {
            return redirect('/adm/user-management/edit');
        }
    }
    public function deleteUser(Request $request)
    {
        $id = $request->segment(2);
        $model = new M_UserManagement();
        $model->deleteUser($id);
        return redirect('/adm/user-management');
    }
}
