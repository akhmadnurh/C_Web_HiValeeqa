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
Route::post('/forgot-password', [\App\Http\Controllers\user\C_Overview::class, 'forgotPassword']);
Route::get('/reset-password', [\App\Http\Controllers\user\C_Overview::class, 'resetPasswordCheckToken']);
Route::post('/reset-password', [\App\Http\Controllers\user\C_Overview::class, 'resetPasswordProcess']);
Route::get('/resend-email-token', [\App\Http\Controllers\user\C_Overview::class, 'resendEmailToken']);

Route::get('/profile', [\App\Http\Controllers\user\C_User::class, 'profile']);
Route::post('/profile', [\App\Http\Controllers\user\C_User::class, 'updateProfile']);
Route::view('/change-password', 'user/account.change-password');
Route::post('/change-password', [\App\Http\Controllers\user\C_User::class, 'changePassword']);
Route::get('/address', [\App\Http\Controllers\user\C_User::class, 'address']);
Route::post('/address', [\App\Http\Controllers\user\C_User::class, 'saveAddress']);
Route::get('/wishlist/{id}', [\App\Http\Controllers\user\C_User::class, 'wishlist'])->whereNumber('id');
Route::get('/r-wishlist/{id}', [\App\Http\Controllers\user\C_User::class, 'removeWishlist'])->whereNumber('id');
Route::get('/shop', [\App\Http\Controllers\user\C_Product::class, 'shop']);
Route::post('/shop', [\App\Http\Controllers\user\C_Product::class, 'shopFilter']);

Route::view('login', 'user.login');
Route::view('contact', 'user.contact');
Route::view('cart', 'user.cart');
Route::view('verify-email', 'user.verify-email');
Route::view('complete-data', 'user.complete-data');
Route::view('forgot-password', 'user.forgot-password');
Route::view('billing', 'user.billing');
Route::view('transaction', 'user.transaction');
Route::view('wishlist', 'user.wishlist');

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

Route::get('adm/product', [\App\Http\Controllers\admin\C_Product::class, 'index']);
Route::post('adm/product/add', [\App\Http\Controllers\admin\C_Product::class, 'addProcess']);
Route::get('adm/product/add', [\App\Http\Controllers\admin\C_Product::class, 'add']);
Route::get('adm/product/delete/{id}', [\App\Http\Controllers\admin\C_Product::class, 'delete']);
Route::get('adm/product/edit/{id}', [\App\Http\Controllers\admin\C_Product::class, 'edit']);
Route::post('adm/product/edit/{id}', [\App\Http\Controllers\admin\C_Product::class, 'editProcess']);

Route::get('adm/category', [\App\Http\Controllers\admin\C_Category::class, 'index']);
Route::get('adm/category/delete/{id}', [\App\Http\Controllers\admin\C_Category::class, 'delete'])->whereNumber('id');
Route::get('adm/category/edit/{id}', [\App\Http\Controllers\admin\C_Category::class, 'edit'])->whereNumber('id');
Route::post('adm/category/edit/{id}', [\App\Http\Controllers\admin\C_Category::class, 'editProcess'])->whereNumber('id');
Route::post('adm/category/add', [\App\Http\Controllers\admin\C_Category::class, 'addProcess']);
Route::get('adm/category/add', [\App\Http\Controllers\admin\C_Category::class, 'add']);

Route::get('adm/payment-pending', [\App\Http\Controllers\admin\C_Transaction::class, 'paymentPending']);
Route::view('adm/payment-approval', 'admin/transaction.payment-approval');
Route::get('adm/shipment-pending', [\App\Http\Controllers\admin\C_Transaction::class, 'shipmentPending']);
Route::get('adm/shipment-process', [\App\Http\Controllers\admin\C_Transaction::class, 'shipmentProcess']);
Route::get('adm/order-completed', [\App\Http\Controllers\admin\C_Transaction::class, 'orderCompleted']);
Route::get('adm/order-canceled', [\App\Http\Controllers\admin\C_Transaction::class, 'orderCanceled']);
Route::get('adm/all-transaction', [\App\Http\Controllers\admin\C_Transaction::class, 'allTransaction']);

Route::view('adm/detail-transaction', 'admin/transaction.detail-transaction');
