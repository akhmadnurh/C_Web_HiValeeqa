<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\user\M_Overview;
use App\Models\user\M_Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class C_Product extends Controller
{
    public function detail(Request $request)
    {
        $id = $request->segment(3);
        $user_id = $request->input('user_id');
        $model = new M_Product();
        $data['product'] = $model->getProductById($id);
        $data['etc'] = $model->getRandomProducts();
        $data['wishlist'] = $model->checkWishlist($user_id, $id);

        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotalAPI($user_id);

        return response()->json($data);
    }

    public function shop(Request $request)
    {
        $model = new M_Product();
        $data['products'] = $model->showAllProducts();

        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotalAPI($request->input('user_id'));

        return response()->json($data);
    }

    public function shopFilter(Request $request)
    {
        $model = new M_Product();
        $data['products'] = $model->getProductsWithFilter($request->input());

        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        return view('user.shop', $data);
    }
}
