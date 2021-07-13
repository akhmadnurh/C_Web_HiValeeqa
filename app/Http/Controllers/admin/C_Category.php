<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\M_Transaction;

use App\Models\admin\M_Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class C_Category extends Controller
{
    public function index()
    {
        $model = new M_Category();
        $data['category'] = $model->getAllCategory();

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.category.index', $data);
    }

    public function addProcess(Request $request)
    {
        $model = new M_Category();
        $add = $model->addCategory($request->input());
        if ($add) {
            return redirect('adm/category');
        }
    }

    public function add(){
        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.category.add', $data);
    }

    public function edit(Request $request)
    {
        $model = new M_Category();
        $data['category'] = $model->getCategoryById(intval($request->segment(4)));

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.category.edit', $data);
    }

    public function editProcess(Request $request)
    {
        $model = new M_Category();
        $edit = $model->editCategory($request->input(), intval($request->segment(4)));
        if ($edit) {
            return redirect('adm/category');
        }
    }

    public function delete(Request $request)
    {
        $model = new M_Category();
        $delete = $model->deleteCategory(intval($request->segment(4)));
        if ($delete) {
            return redirect('adm/category');
        }
    }
}
