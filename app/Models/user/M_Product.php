<?php

namespace App\Models\user;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Product extends Model
{
    use HasFactory;

    public function getProductById($id)
    {
        $query = DB::table('product')->join('image', 'product.product_id', '=', 'image.product_id')->select('product.*', 'image.image')->where('product.product_id', '=', $id)->first();
        return $query;
    }

    public function getRandomProducts()
    {
        return DB::table('product')->join('image', 'product.product_id', '=', 'image.product_id')->select('product.*', 'image.image')->inRandomOrder()->limit(4)->get();
    }

    public function checkWishlist($id, $product_id)
    {
        return DB::table('wishlist')->select('*')->where('user_id', $id)->where('product_id', $product_id)->count();
    }

    public function showAllProducts()
    {
        return DB::table('product')->join('image', 'product.product_id', '=', 'image.product_id')->select('*')->get();
    }

    public function getProductsWithFilter($input)
    {
        $filter = DB::table('product')->join('image', 'product.product_id', '=', 'image.product_id');
        if ($input['max'] != '') {
            $filter = $filter->where('price', '<=', intval($input['max']));
        }

        if ($input['min'] != '') {
            $filter = $filter->where('price', '>=', intval($input['min']));
        }

        if ($input['orderBy'] != '') {
            if ($input['orderBy'] == 'max') {
                $filter = $filter->orderBy('product_name', 'desc');
            } elseif ($input['orderBy'] == 'min') {
                $filter = $filter->orderBy('product_name', 'asc');
            }
        }

        return $filter->get();
    }

    public function showWishlistById($id)
    {
        return DB::table('wishlist')->join('product', 'product.product_id', '=', 'wishlist.product_id')->join('image', 'product.product_id', '=', 'image.product_id')->select('wishlist.*', 'product.*', 'image.image')->where('wishlist.user_id', $id)->get();
    }

    public function showCartById($id)
    {
        $data['products'] = DB::table('cart')->join('product', 'cart.product_id', '=', 'product.product_id')->join('image', 'product.product_id', '=', 'image.product_id')->select('cart.*', 'product.*', 'image.image')->where('user_id', $id)->get();
        $data['available'] = [];
        foreach ($data['products'] as $product) {
            array_push($data['available'], $product->stock > 0 ? 1 : 0);
        }

        $data['checkout_status'] = in_array(0, $data['available']) ? 0 : 1;

        return $data;
    }


}
