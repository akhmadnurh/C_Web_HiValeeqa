<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Transaction extends Model
{
    use HasFactory;

    public function getPaymentPending($id)
    {
        $transactions = DB::table('transaction')->select('transaction_id', 'status')->where('user_id', $id)->where('status', 1)->orderBy('transaction_id', 'desc')->get();
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

    public function getShipmentPending($id)
    {
        $transactions = DB::table('transaction')->select('transaction_id', 'status')->where('user_id', $id)->where('status', 2)->orderBy('transaction_id', 'desc')->get();
        $details = [];
        foreach ($transactions as $transaction) {
            $query = DB::table('transaction_detail')->join('product', 'transaction_detail.product_id', '=', 'product.product_id')->join('image', 'product.product_id', '=', 'image.product_id')->select('*')->where('transaction_id', $transaction->transaction_id)->get();
            array_push($details, $query);
        }

        $data['transactions'] = $transactions;
        $data['details'] = $details;

        return $data;
    }

    public function getShipmentProcess($id)
    {
        $transactions = DB::table('transaction')->select('transaction_id', 'receipt_number')->where('user_id', $id)->where('status', 3)->orderBy('transaction_id', 'desc')->get();
        $details = [];
        foreach ($transactions as $transaction) {
            $query = DB::table('transaction_detail')->join('product', 'transaction_detail.product_id', '=', 'product.product_id')->join('image', 'product.product_id', '=', 'image.product_id')->select('*')->where('transaction_id', $transaction->transaction_id)->get();
            array_push($details, $query);
        }

        $data['transactions'] = $transactions;
        $data['details'] = $details;

        return $data;
    }

    public function confirmTransaction($id)
    {
        return DB::table('transaction')->where('transaction_id', $id)->update(['status' => 4]);
    }

    public function getOrderCompleted($id)
    {
        $transactions = DB::table('transaction')->select('transaction_id', 'receipt_number')->where('user_id', $id)->where('status', 4)->orderBy('transaction_id', 'desc')->get();
        $details = [];
        foreach ($transactions as $transaction) {
            $query = DB::table('transaction_detail')->join('product', 'transaction_detail.product_id', '=', 'product.product_id')->join('image', 'product.product_id', '=', 'image.product_id')->select('*')->where('transaction_id', $transaction->transaction_id)->get();
            array_push($details, $query);
        }

        $data['transactions'] = $transactions;
        $data['details'] = $details;

        return $data;
    }
    public function getOrderCanceled($id)
    {
        $transactions = DB::table('transaction')->select('transaction_id', 'receipt_number')->where('user_id', $id)->where('status', 5)->orderBy('transaction_id', 'desc')->get();
        $details = [];
        foreach ($transactions as $transaction) {
            $query = DB::table('transaction_detail')->join('product', 'transaction_detail.product_id', '=', 'product.product_id')->join('image', 'product.product_id', '=', 'image.product_id')->select('*')->where('transaction_id', $transaction->transaction_id)->get();
            array_push($details, $query);
        }

        $data['transactions'] = $transactions;
        $data['details'] = $details;

        return $data;
    }

    public function checkout($input, $id)
    {
        // Total checkout
        $total = 0;
        $query = DB::table('cart')->join('product', 'cart.product_id', '=', 'product.product_id')->select('*')->where('user_id', $id)->get();
        foreach ($query as $q) {
            $total += ($q->price * $q->quantity);
        }
        $total += 20000;


        // Add data to transaction
        DB::table('transaction')->insert(['user_id' => $id, 'payment_method' => 1, 'shipping_method' => 2, 'transaction_date' => date('Y-m-d'), 'saving' => 0, 'total' => $total, 'status' => 1, 'receipt_number' => '', 'shipping_start' => date('Y-m-d'), 'shipping_end' => date('Y-m-d')]);

        // Get transaction id
        $transaction_id = DB::table('transaction')->select('*')->orderBy('transaction_id', 'desc')->first();


        // Add data to detail transaction
        foreach ($query as $q) {
            // Get Product
            $products = DB::table('product')->select('*')->where('product_id', $q->product_id)->first();

            // Add to detail transaction
            DB::table('transaction_detail')->insert(['transaction_id' => $transaction_id->transaction_id, 'product_id' => $q->product_id, 'count' => $q->quantity]);

            // decrease product stock
            $stock = $products->stock - $q->quantity;
            DB::table('product')->where('product_id', $q->product_id)->update(['stock' => $stock]);
        }

        // Remove cart
        DB::table('cart')->where('user_id', $id)->delete();

        // Add back account
        DB::table('bank')->insert(['transaction_id' => $transaction_id->transaction_id, 'name' => $input['name'], 'account' => $input['accountNumber'], 'bank' => $input['bankName']]);
    }

    public function getCartItems($id)
    {
        return DB::table('cart')->join('product', 'cart.product_id', '=', 'product.product_id')->join('image', 'product.product_id', '=', 'image.product_id')->select('cart.*', 'product.*', 'image.image')->where('user_id', $id)->get();
    }

    public function getBankById($id)
    {
        return DB::table('bank')->select('*')->where('transaction_id', $id)->first();
    }

    public function getTransactionItems($id)
    {
        return DB::table('transaction_detail')->join('product', 'transaction_detail.product_id', '=', 'product.product_id')->join('image', 'product.product_id', '=', 'image.product_id')->select('*')->where('transaction_detail.transaction_id', $id)->get();
    }
}

