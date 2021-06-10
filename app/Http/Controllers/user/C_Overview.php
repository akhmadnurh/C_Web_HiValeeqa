<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\M_Overview;
use Illuminate\Http\Request;

class C_Overview extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function login(Request $request){
        $model = new M_Overview();
        $login = $model->login($request->input());
        if($login->role == '1'){
            return redirect('/adm');
        }else{
            return redirect('/');
        }
    }
    public function logout(Request $request){
        $request->session()->flush();

        return redirect('/');
    }
}
