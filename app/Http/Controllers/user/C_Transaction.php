<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\M_Transaction;
use App\Models\user\M_Overview;
use App\Models\user\M_Product;
use App\Models\user\M_User;
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

    public function shipmentPending()
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getShipmentPending();

        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        return view('user.transaction.shipment-pending', $data);
    }

    public function shipmentProcess()
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getShipmentProcess();

        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        return view('user.transaction.shipment-process', $data);
    }

    public function confirmTransaction(Request $request)
    {
        $model = new M_Transaction();
        $id = $request->segment(3);
        $model->confirmTransaction($id);

        return redirect('transaction/order-completed');
    }

    public function orderCompleted()
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getOrderCompleted();

        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        return view('user.transaction.order-completed', $data);
    }

    public function orderCanceled()
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getOrderCanceled();

        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        return view('user.transaction.order-canceled', $data);
    }

    public function billing()
    {
        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        $modelProduct = new M_Transaction();
        $data['products'] = $modelProduct->getCartItems(session()->get('id'));

        return view('user.billing', $data);
    }

    public function checkout(Request $request)
    {
        $model = new M_Transaction();
        // Checkout
        $model->checkout($request->input());

        return redirect('transaction/payment-pending');
    }

    public function detailTransaction(Request $request)
    {
        $id = $request->segment(3);

        $modelProduct = new M_Transaction();
        $data['products'] = $modelProduct->getTransactionItems($id);

        $data['bank'] = $modelProduct->getBankById($id);

        $modelCart = new M_Overview();
        $data['cart'] = $modelCart->getUserCartTotal();

        return view('user.transaction.detail-transaction', $data);
    }
}
