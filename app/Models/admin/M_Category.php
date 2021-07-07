<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Category extends Model
{
    use HasFactory;

    public function getAllCategory()
    {
        return DB::table('category')->select('*')->get();
    }

    public function addCategory($input)
    {
        return DB::table('category')->insert(['category_name' => $input['categoryName']]);
    }

    public function editCategory($input, $id)
    {
        return DB::table('category')->where('category_id', $id)->update(['category_name' => $input['categoryName']]);
    }

    public function getCategoryById($id)
    {
        return DB::table('category')->select('*')->where('category_id', $id)->first();
    }

    public function deleteCategory($id)
    {
        return DB::table('category')->where('category_id', $id)->delete();
    }
}
