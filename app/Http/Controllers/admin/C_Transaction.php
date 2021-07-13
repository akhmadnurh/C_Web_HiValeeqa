<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\M_Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class C_Transaction extends Controller
{
    public function paymentPending()
    {
        $model = new M_Transaction();

        $data['payments'] = $model->getPaymentPending();

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.transaction.payment-pending', $data);
    }

    public function shipmentPending()
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getShipmentPending();

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.transaction.shipment-pending', $data);

    }

    public function shipmentProcess()
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getShipmentProcess();

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.transaction.shipment-process', $data);
    }

    public function orderCompleted()
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getOrderCompleted();

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.transaction.order-completed', $data);
    }

    public function orderCanceled()
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getOrderCanceled();

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.transaction.order-canceled', $data);
    }

    public function allTransaction()
    {
        $model = new M_Transaction();
        $data['payments'] = $model->getAllTransactions();

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.transaction.all-transaction', $data);
    }

    public function detailTransaction(Request $request)
    {
        $model = new M_Transaction();
        $data['id'] = $request->segment(3);
        $data['products'] = $model->getDetailTransaction($data['id']);
        $data['user'] = $model->getUserTransaction($data['id']);
        $data['badges'] = $model->getPaymentCount();

        return view('admin.transaction.detail-transaction', $data);
    }
}
