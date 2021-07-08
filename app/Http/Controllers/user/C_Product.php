<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\M_Product;
use Illuminate\Http\Request;

class C_Product extends Controller
{
    public function detail(Request $request)
    {
        $id = $request->segment(2);
        $model = new M_Product();
        $data['product'] = $model->getProductById($id);
        $data['etc'] = $model->getRandomProducts();
        $data['wishlist'] = $model->checkWishlist(session()->get('id'), $id);

        return view('user.detail', $data);
    }
}
