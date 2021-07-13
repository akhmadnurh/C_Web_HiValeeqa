<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Transaction extends Model
{
    use HasFactory;

    public function getPaymentPending()
    {
        return DB::table('transaction')->join('user', 'user.user_id', '=', 'transaction.user_id')->select('transaction.*', 'user.*')->where('transaction.status', 1)->get();
    }

    public function getShipmentPending()
    {
        return DB::table('transaction')->join('user', 'user.user_id', '=', 'transaction.user_id')->select('transaction.*', 'user.*')->where('transaction.status', 2)->get();
    }

    public function getPaymentCount()
    {
        $count = [];
        for ($i = 1; $i <= 3; $i++) {
            $query = DB::table('transaction')->select('*')->where('status', $i)->count();
            array_push($count, $query);
        }
        return $count;
    }

    public function getShipmentProcess()
    {
        return DB::table('transaction')->join('user', 'user.user_id', '=', 'transaction.user_id')->select('transaction.*', 'user.*')->where('transaction.status', 3)->get();
    }

    public function getOrderCompleted()
    {
        return DB::table('transaction')->join('user', 'user.user_id', '=', 'transaction.user_id')->select('transaction.*', 'user.*')->where('transaction.status', 4)->get();
    }

    public function getOrderCanceled()
    {
        return DB::table('transaction')->join('user', 'user.user_id', '=', 'transaction.user_id')->select('transaction.*', 'user.*')->where('transaction.status', 5)->get();
    }

    public function getAllTransactions()
    {
        return DB::table('transaction')->join('user', 'user.user_id', '=', 'transaction.user_id')->select('transaction.*', 'user.*')->get();
    }

    public function getDetailTransaction($id)
    {
        return DB::table('transaction_detail')->join('product', 'product.product_id', '=', 'transaction_detail.product_id')->select('*')->where('transaction_id', $id)->get();
    }

    public function getUserTransaction($id)
    {
        return DB::table('transaction')->join('user', 'user.user_id', '=', 'transaction.user_id')->select('user.*')->where('transaction_id', $id)->first();
    }
}
