<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.home');
});

Route::view('admin/index', 'admin.home');
Route::view('admin/management-user', 'admin.manage_user');
Route::view('admin/management-user/tambah', 'admin.manage_user_tambah');
