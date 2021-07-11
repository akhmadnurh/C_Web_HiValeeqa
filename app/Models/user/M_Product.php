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
        $query = DB::table('product')->select('*')->where('product_id', '=', $id)->first();
        return $query;
    }

    public function getRandomProducts()
    {
        return DB::table('product')->select('*')->inRandomOrder()->limit(4)->get();
    }

    public function checkWishlist($id, $product_id)
    {
        return DB::table('wishlist')->select('*')->where('user_id', $id)->where('product_id', $product_id)->count();
    }

    public function showAllProducts()
    {
        return DB::table('product')->select('*')->get();
    }

    public function getProductsWithFilter($input)
    {
        $filter = DB::table('product');
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
}
