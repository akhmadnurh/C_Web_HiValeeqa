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
Route::get('/logout', [\App\Http\Controllers\user\C_Overview::class, 'logout']);

//Admin
Route::get('/adm', [\App\Http\Controllers\admin\C_Overview::class, 'index']);
Route::get('/adm/user-management', [\App\Http\Controllers\admin\C_UserManagement::class, 'manageUser']);
Route::get('/adm/user-management/add', [\App\Http\Controllers\admin\C_UserManagement::class, 'manageUserAdd']);
Route::get('/adm/user-management/edit/{id}', [\App\Http\Controllers\admin\C_UserManagement::class, 'manageUserEdit'])->whereNumber('id');
Route::post('/adduser', [\App\Http\Controllers\admin\C_UserManagement::class, 'addUser']);
Route::post('/edit-user', [\App\Http\Controllers\admin\C_UserManagement::class, 'editUser']);
Route::get('/delete-user/{id}', [\App\Http\Controllers\admin\C_UserManagement::class, 'deleteUser'])->whereNumber('id');

Route::view('adm/admin-management', 'admin.manage_admin');
Route::view('adm/admin_management/add', 'admin.manage_admin_tambah');
Route::view('adm/admin_management/edit', 'admin.manage_admin_edit');