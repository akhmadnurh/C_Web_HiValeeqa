<?php

namespace App\Models\user;

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
        $query = DB::table('product')->select('*')->inRandomOrder()->limit(4)->get();
        return $query;
    }
}
