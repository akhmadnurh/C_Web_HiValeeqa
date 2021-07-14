<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\M_Transaction;
use App\Models\user\M_Overview;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class C_Transaction extends Controller
{
    public function paymentPending(){
        $model = new M_Transaction();
        $data['payments'] = $model->getPaymentPending();


        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

//        var_dump($data['payments']['details'][0][0]->image);


        return view('user.transaction.payment-pending', $data);
    }

}
