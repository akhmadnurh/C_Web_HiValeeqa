<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\M_UserManagement;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\M_Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class C_UserManagement extends Controller
{
    public function manageUser()
    {
        $model = new M_UserManagement();
        $data['data'] = $model->getAll();

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.manage_user', $data);
    }

    public function manageUserAdd()
    {

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.manage_user_tambah', $data);
    }

    public function manageUserEdit(Request $request)
    {
        $id = $request->segment(4);
        $model = new M_UserManagement();
        $data['user'] = $model->getDataById($id);

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.manage_user_edit', $data);
    }

    public function addUser(Request $request)
    {
        $model = new M_UserManagement();

//        // Randomize filename
//        $file_ext = $request->file('img')->extension();
//        $file_name = Str::random(10);
//        $file = $file_name.'.'.$file_ext;
//        Storage::move($request->file('img'), $file);
//        dd($request->file('img'));
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
            return redirect('/adm/user-management/');
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
