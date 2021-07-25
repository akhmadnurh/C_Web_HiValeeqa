<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\user\M_Transaction;
use App\Models\user\M_Overview;
use App\Models\user\M_Product;
use App\Models\user\M_User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class C_Transaction extends Controller
{
    public function paymentPending(Request $request)
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getPaymentPending($request->input('user_id'));


//        $modelCart = new M_Overview();
//        $data['cart'] = $modelCart->getUserCartTotal();

//        var_dump($data['payments']['details'][0][0]->image);


        return response()->json($data);
    }

    public function shipmentPending(Request $request)
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getShipmentPending($request->input('user_id'));

//        $modelCart = new M_Overview();
//        $data['cart'] = $modelCart->getUserCartTotal();

        return response()->json($data);
    }

    public function shipmentProcess(Request $request)
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getShipmentProcess($request->input('user_id'));

//        $modelCart = new M_Overview();
//        $data['cart'] = $modelCart->getUserCartTotal();

        return response()->json($data);

    }

    public function confirmTransaction(Request $request)
    {
        $model = new M_Transaction();
        $id = $request->segment(4);
        $model->confirmTransaction($id);

        return response(['msg' => 'success']);
    }

    public function orderCompleted(Request $request)
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getOrderCompleted($request->input('user_id'));

//        $modelCart = new M_Overview();
//        $data['cart'] = $modelCart->getUserCartTotal();

        return response()->json($data);
    }

    public function orderCanceled(Request $request)
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getOrderCanceled($request->input('user_id'));

//        $modelCart = new M_Overview();
//        $data['cart'] = $modelCart->getUserCartTotal();

        return response()->json($data);

    }

    public function billing(Request $request)
    {
//        $modelCart = new M_Overview();
//        $data['cart'] = $modelCart->getUserCartTotal();
        $model = new M_User();
        $data['user'] = $model->getProfile($request->input('user_id'));

        $modelProduct = new M_Transaction();
        $data['products'] = $modelProduct->getCartItems($request->input('user_id'));

        return response()->json($data);
    }

    public function checkout(Request $request)
    {
        $model = new M_Transaction();
        // Checkout
        $model->checkout($request->input(), $request->input('user_id'));

        return response()->json(['msg' => 'success']);
    }

    public function detailTransaction(Request $request)
    {
        $id = $request->segment(4);

        $modelProduct = new M_Transaction();
        $data['products'] = $modelProduct->getTransactionItems($id);

        $data['bank'] = $modelProduct->getBankById($id);
//
//        $modelCart = new M_Overview();
//        $data['cart'] = $modelCart->getUserCartTotal();

        return response()->json($data);
    }

    public function cancelTransaction(Request $request)
    {
        $id = $request->segment(3);
        $model = new M_Transaction();
        $model->cancelTransaction($id);

        return response()->json(['msg' => 'success']);
    }

}
