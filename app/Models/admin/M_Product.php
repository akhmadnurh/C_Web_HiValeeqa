<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Product extends Model
{
    use HasFactory;

    public function getAllProducts()
    {
        return DB::table('product')->select('*')->get();
    }

    public function getAllCategories()
    {
        return DB::table('category')->select('*')->get();
    }

    public function addProduct($input, $image)
    {
        $addProduct = DB::table('product')->insert(['category_id' => $input['productCategory'], 'product_name' => $input['productName'], 'color' => $input['productColor'], 'material' => $input['productMaterial'], 'price' => $input['productPrice'], 'description' => $input['productDesc'], 'stock' => $input['productStock'], 'best_seller' => 0]);

        $productId = $this->getProductId();

        $addImage = DB::table('image')->insert(['product_id' => $productId->product_id, 'image' => $image]);

        if ($addProduct && $addImage) {
            return true;
        } else {
            return false;
        }
    }

    private function getProductId()
    {
        return DB::table('product')->select('product_id')->orderBy('product_id', 'desc')->first();
    }
}
