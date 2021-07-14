<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Transaction extends Model
{
    use HasFactory;

    public function getPaymentPending()
    {
        $transactions = DB::table('transaction')->select('transaction_id', 'status')->where('user_id', session()->get('id'))->where('status', 1)->get();
        $details = [];
        foreach ($transactions as $transaction) {
            $query = DB::table('transaction_detail')->join('product', 'transaction_detail.product_id', '=', 'product.product_id')->join('image', 'product.product_id', '=', 'image.product_id')->select('*')->where('transaction_id', $transaction->transaction_id)->get();
            array_push($details, $query);
        }

        $data['transactions'] = $transactions;
        $data['details'] = $details;

        return $data;

//        return DB::table('transaction')->join('transaction_detail', 'transaction.transaction_id', '=', 'transaction_detail.transaction_id')->join('product', 'transaction_detail.product_id', '=', 'product.product_id')->join('image', 'product.product_id', '=', 'image.product_id')->select('*')->where('transaction.status', 1)->where('transaction.user_id', session()->get('id'))->get();
//        var_dump(DB::table('transaction')->join('transaction_detail', 'transaction.transaction_id', '=', 'transaction_detail.transaction_id')->join('product', 'transaction_detail.product_id', '=', 'product.product_id')->join('image', 'product.product_id', '=', 'image.product_id')->select('*')->where('transaction.status', 1)->where('transaction.user_id', session()->get('id'))->first());
    }

}

