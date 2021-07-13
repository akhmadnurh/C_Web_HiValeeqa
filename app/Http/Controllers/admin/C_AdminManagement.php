<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\M_AdminManagement;
use App\Models\admin\M_Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class C_AdminManagement extends Controller
{
    public function index()
    {
        $model = new M_AdminManagement();
        $data['data'] = $model->getAll();

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.manage_admin', $data);
    }
    public function manageAdminAdd()
    {
        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.manage_admin_tambah', $data);
    }
    public function manageAdminEdit(Request $request)
    {
        $id = $request->segment(4);
        $model = new M_AdminManagement();
        $data['user'] = $model->getDataById($id);

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.manage_admin_edit', $data);
    }
    public function addUser(Request $request)
    {
        $model = new M_AdminManagement();

//        // Randomize filename
//        $file_ext = $request->file('img')->extension();
//        $file_name = Str::random(10);
//        $file = $file_name.'.'.$file_ext;
//        Storage::move($request->file('img'), $file);
//        dd($request->file('img'));
        $addData = $model->addUser($request->input());
        if ($addData) {
            return redirect('/adm/admin-management');
        } else {
            return redirect('/adm/admin-management/add');
        }
    }

    public function editUser(Request $request)
    {
        $model = new M_AdminManagement();
        $editData = $model->editUser($request->input());
        if ($editData) {
            return redirect('/adm/admin-management');
        } else {
            return redirect('/adm/admin-management/');
        }
    }
    public function deleteAdmin(Request $request)
    {
        $id = $request->segment(2);
        $model = new M_UserManagement();
        $model->deleteUser($id);
        return redirect('/adm/admin-management');
    }
}
