<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_User extends Model
{
    use HasFactory;

    public function register($data)
    {
        $query = DB::table('user')->insert(['name' => $data['fullname'], 'email' => $data['email'], 'username' => $data['username'], 'password' => md5($data['password']), 'gender' => '', 'address' => '', 'whatsapp' => '', 'role' => 0, 'province' => '', 'city' => '', 'district' => '', 'village' => '', 'postal_code' => '']);
        return $query;
    }

    public function uniqueDataCheck($data)
    {
        // Email
        $query = DB::table('user')->select('*')->where('email', '=', $data['email'])->count();
        if ($query > 0) {
            return 'email-exist';
        }

        // Pasword
        $query = DB::table('user')->select('*')->where('username', '=', $data['username'])->count();
        if ($query > 0) {
            return 'username-exist';
        } else {
            return 0;
        }
    }

    public function saveEmailToken($data, $token)
    {
        DB::table('email_verification')->insert(['email' => $data['email'], 'token' => $token, 'status' => 0]);
    }

    public function verifyEmail($token)
    {
        return DB::table('email_verification')->where('token', '=', $token)->update(['status' => 1]);
    }

    public function getProfile($id)
    {
        return DB::table('user')->select('*')->where('user_id', $id)->first();
    }

    public function updateProfile($input, $id)
    {
        return DB::table('user')->where('user_id', $id)->update(['name' => $input['name'], 'email' => $input['email'], 'whatsapp' => $input['nohp'], 'gender' => $input['gender']]);
    }

    public function checkPassword($pwd)
    {
        return DB::table('user')->select('*')->where('user_id', session()->get('id'))->where('password', md5($pwd))->count();
    }

    public function changePassword($pwd)
    {
        return DB::table('user')->where('user_id', session()->get('id'))->update(['password' => md5($pwd)]);
    }

    public function getAddress($id)
    {
        return DB::table('user')->select(['province', 'city', 'district', 'village', 'address', 'postal_code'])->where('user_id', $id)->first();
    }

    public function saveAddress($input, $id)
    {
        return DB::table('user')->where('user_id', $id)->update(['province' => $input['province'], 'city' => $input['city'], 'district' => $input['district'], 'village' => $input['village'], 'address' => $input['address'], 'postal_code' => $input['postal-code']]);
    }

    public function wishlist($id, $product_id)
    {
        return DB::table('wishlist')->insert(['user_id' => $id, 'product_id' => $product_id]);
    }

    public function removeWishlist($id, $product_id)
    {
        return DB::table('wishlist')->where('user_id', $id)->where('product_id', $product_id)->delete();
    }

    public function addToCart($user_id, $product_id)
    {
        // Check if product already added to cart
        $query = DB::table('cart')->select('*')->where('user_id', $user_id)->where('product_id', $product_id);
        $check = $query->count();
        $data = $query->first();
        $quantity = 1;
        if ($check > 0) {
            $quantity += $data->quantity;

            return DB::table('cart')->where('user_id', $user_id)->where('product_id', $product_id)->update(['quantity' => $quantity]);
        } else {
            return DB::table('cart')->insert(['user_id' => $user_id, 'product_id' => $product_id, 'quantity' => $quantity]);
        }
    }

    public function plusItemCart($user_id, $product_id)
    {
        // check product stock
        $query = DB::table('product')->select('*')->where('product_id', $product_id)->first();

        $quantity = DB::table('cart')->select('quantity')->where('user_id', $user_id)->where('product_id', $product_id)->first();

        if ($query->stock <= $quantity->quantity) {
            return false;
        } else {
            // Get quantity from cart
            $quantity->quantity += 1;
            DB::table('cart')->where('user_id', $user_id)->where('product_id', $product_id)->update(['quantity' => $quantity->quantity]);
            return true;
        }

    }

    public function minusItemCart($user_id, $product_id)
    {
        // check product stock
        $query = DB::table('product')->select('*')->where('product_id', $product_id)->first();

        // check cart quantity
        $quantity = DB::table('cart')->select('quantity')->where('user_id', $user_id)->where('product_id', $product_id)->first();


        if ($quantity->quantity == 1) {
            return false;
        } else {
            // Get quantity from cart
            $quantity->quantity -= 1;
            DB::table('cart')->where('user_id', $user_id)->where('product_id', $product_id)->update(['quantity' => $quantity->quantity]);
            return true;
        }

    }

    public function removeCart($user_id, $product_id)
    {
        return DB::table('cart')->where('user_id', $user_id)->where('product_id', $product_id)->delete();
    }
}
