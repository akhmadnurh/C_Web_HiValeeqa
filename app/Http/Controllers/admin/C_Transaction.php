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

    public function shipmentPending(){
        $model = new M_Transaction();
        $data['payments'] = $model->getShipmentPending();

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        return view('admin.transaction.shipment-pending', $data);

    }
}
