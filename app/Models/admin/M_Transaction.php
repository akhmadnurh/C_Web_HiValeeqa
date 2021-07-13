<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class M_Transaction extends Model
{
    use HasFactory;

    public function getPaymentPending(){
        return DB::table('transaction')->join('user',  'user.user_id', '=', 'transaction.user_id')->select('transaction.*', 'user.*')->where('transaction.status', 1)->get();
    }

    public function getShipmentPending(){
        return DB::table('transaction')->join('user',  'user.user_id', '=', 'transaction.user_id')->select('transaction.*', 'user.*')->where('transaction.status', 2)->get();
    }

    public function getPaymentCount(){
        $count  = [];
        for ($i = 1; $i <=3; $i++){
            $query  = DB::table('transaction')->select('*')->where('status', $i)->count();
            array_push($count, $query);
        }
        return $count;
    }
}
