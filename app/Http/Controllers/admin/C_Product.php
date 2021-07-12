<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\M_Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class C_Product extends Controller
{
    public function index()
    {
        $model = new M_Product();
        $data['products'] = $model->getAllProducts();

        return view('admin.product.index', $data);
    }

    public function add()
    {
        $model = new M_Product();
        $data['categories'] = $model->getAllCategories();
        return view('admin.product.add', $data);
    }

    public function addProcess(Request $request)
    {
        $model = new M_Product();
        $request->validate(['productImg1' => 'required|mimes:jpg,jpeg,png']);

        // Upload file
        $fileName = Str::random(8) . '.' . $request->file('productImg1')->getClientOriginalExtension();
        $request->productImg1->move(public_path('img/produk'), $fileName);

        $addProduct = $model->addProduct($request->input(), $fileName);
        if ($addProduct) {
            return redirect('adm/product/')->with(['msg' => 'Data berhasil ditambahkan']);
        }else{
            return redirect('adm/product/')->with(['msg' => 'Data gagal ditambahkan']);
        }
    }
}
