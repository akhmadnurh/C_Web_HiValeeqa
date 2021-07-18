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

    public function cancelTransaction($id)
    {
        return DB::table('transaction')->where('transaction_id', $id)->update(['status' => 5]);
    }

    public function confirmPayment($id)
    {
        return DB::table('transaction')->where('transaction_id', $id)->update(['status' => 2]);
    }

    public function confirmShipment($id, $data)
    {
        return DB::table('transaction')->where('transaction_id', $id)->update(['status' => 3, 'shipping_start' => $data['deliverDate'], 'receipt_number' => $data['receiptNumber']]);
    }

    public function transactionFinish($id)
    {
        return DB::table('transaction')->where('transaction_id', $id)->update(['status' => 4]);
    }

    public function getAllDashboardData()
    {
        $data['orders'][0] = DB::table('transaction')->select('*')->where('status', 2)->count();
        $data['orders'][1] = DB::table('transaction')->select('*')->where('status', 3)->count();
        $data['orders'][2] = DB::table('transaction')->select('*')->where('status', 4)->count();
        $data['orders'][3] = array_sum($data['orders']);

        // All transaction counts
        $data['orders'][4] = DB::table('transaction')->select('*')->count();

        // Income
        $data['income'] = DB::table('transaction')->where('status', 4)->sum('total');

        // All last transaction
        $data['transactions'] = DB::table('transaction')->join('user', 'user.user_id', '=', 'transaction.user_id')->select('*')->orderBy('transaction_id', 'desc')->limit(3)->get();
        return $data;

    }
}
