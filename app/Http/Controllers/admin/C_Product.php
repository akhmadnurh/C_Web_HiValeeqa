<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\M_Product;
use Illuminate\Http\Request;

class C_Product extends Controller
{
    public function index(){
        $model = new M_Product();
        $data['products'] = $model->getAllProducts();

        return view('admin.product.index', $data);
    }
}
