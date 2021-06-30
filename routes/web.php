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

//Route::view('admin/index', 'admin.home');
//Route::view('admin/management-user', 'admin.manage_user');
//Route::view('admin/management-user/tambah', 'admin.manage_user_tambah');
//Route::view('admin/management-user/edit', 'admin.manage_user_edit');

Route::get('/', [\App\Http\Controllers\user\C_Overview::class, 'index']);
Route::post('/login', [\App\Http\Controllers\user\C_Overview::class, 'login']);
Route::get('/register', [\App\Http\Controllers\user\C_Overview::class, 'register']);
Route::post('/register', [\App\Http\Controllers\user\C_User::class, 'registerProcess']);
Route::get('/logout', [\App\Http\Controllers\user\C_Overview::class, 'logout']);

Route::get('/detail/{id}', [\App\Http\Controllers\user\C_Product::class, 'detail'])->whereNumber('id');
Route::post('/verify-email', [\App\Http\Controllers\user\C_User::class, 'verifyEmail']);


Route::view('login', 'user.login');
Route::view('shop', 'user.shop');
Route::view('contact', 'user.contact');
Route::view('cart', 'user.cart');
Route::view('verify-email', 'user.verify-email');
Route::view('complete-data', 'user.complete-data');
Route::view('forgot-password', 'user.forgot-password');
Route::view('billing', 'user.billing');

//Admin
Route::get('/adm', [\App\Http\Controllers\admin\C_Overview::class, 'index']);
Route::get('/adm/user-management', [\App\Http\Controllers\admin\C_UserManagement::class, 'manageUser']);
Route::get('/adm/user-management/add', [\App\Http\Controllers\admin\C_UserManagement::class, 'manageUserAdd']);
Route::get('/adm/user-management/edit/{id}', [\App\Http\Controllers\admin\C_UserManagement::class, 'manageUserEdit'])->whereNumber('id');
Route::post('/adduser', [\App\Http\Controllers\admin\C_UserManagement::class, 'addUser']);
Route::post('/edit-user', [\App\Http\Controllers\admin\C_UserManagement::class, 'editUser']);
Route::get('/delete-user/{id}', [\App\Http\Controllers\admin\C_UserManagement::class, 'deleteUser'])->whereNumber('id');

Route::get('adm/admin-management', [\App\Http\Controllers\admin\C_AdminManagement::class, 'index']);
Route::get('adm/admin-management/add', [\App\Http\Controllers\admin\C_AdminManagement::class, 'manageAdminAdd']);
Route::get('adm/admin-management/edit/{id}', [\App\Http\Controllers\admin\C_AdminManagement::class, 'manageAdminEdit'])->whereNumber('id');
Route::post('/addadmin', [\App\Http\Controllers\admin\C_AdminManagement::class, 'addUser']);
Route::post('/edit-admin', [\App\Http\Controllers\admin\C_AdminManagement::class, 'editUser']);
Route::get('/delete-admin/{id}', [\App\Http\Controllers\admin\C_AdminManagement::class, 'deleteAdmin'])->whereNumber('id');
