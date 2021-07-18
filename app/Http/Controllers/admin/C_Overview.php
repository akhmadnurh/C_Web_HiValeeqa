<?php

namespace App\Http\Controllers\admin;
use App\Models\admin\M_Transaction;

use App\Http\Controllers\Controller;
use App\Models\user\M_Overview;
use Illuminate\Http\Request;

class C_Overview extends Controller
{
    public function index(){

        $badgeModel = new M_Transaction();
        $data['badges'] = $badgeModel->getPaymentCount();

        $data['dashboard'] = $badgeModel->getAllDashboardData();


        return view('admin.home', $data);
    }
}
