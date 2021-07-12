<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\M_Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class C_Product extends Controller
{
    public function index()
    {
        $model = new M_Product();
        $data['products'] = $model->getAllProducts();
        $data['image'] = $model->getAllProductImages();

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
        } else {
            return redirect('adm/product/')->with(['msg' => 'Data gagal ditambahkan']);
        }
    }

    public function delete(Request $request)
    {
        $model = new M_Product();
        $id = $request->segment(4);

        $delete = $model->deleteProduct($id);

        // Delete image from disk
        if (File::exists(public_path('img/produk') . '/' . $delete->image)) {
            File::delete(public_path('img/produk') . '/' . $delete->image);
        }

        return redirect('adm/product/')->with(['msg' => 'Data berhasil dihapus']);

    }

    public function edit(Request $request)
    {
        $model = new M_Product();
        $id = $request->segment(4);
        $data['product'] = $model->getProductById($id);
        $data['categories'] = $model->getAllCategories();

        return view('admin.product.edit', $data);

    }

    public function editProcess(Request $request)
    {
        $model = new M_Product();
        $id = $request->segment(4);

        if ($request->has('productImg1')) {
            // get image filename
            $fileName = Str::random(8) . '.' . $request->file('productImg1')->getClientOriginalExtension();
            $image = $model->getImageById($id);

            // Delete image from disk
            File::delete(public_path('img/produk') . '/' . $image);

            // Add new image to disk
            $request->productImg1->move(public_path('img/produk'), $fileName);
        } else {
            $fileName = '';
        }

        $model->editProduct($id, $request->input(), $fileName);

        return redirect('adm/product/')->with(['msg' => 'Data berhasil diubah']);
    }
}
