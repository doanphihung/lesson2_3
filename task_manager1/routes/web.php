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
Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        return view('modules.customer.index');
    });

    Route::get('create', function () {
       // Hiển thị form tạo khách hàng
        echo "hello";
    });

    Route::post('store', function () {
        // Xu ly luu tru du lieu khach hang thong qa pthuc POST tu form
    });

    Route::get('{id}/show', function () {
        // Hien thi thong tin chi tiet khach hang co id
    });

    Route::patch('{id}/update', function () {
       // Xu ly du lieu khach hang dc chinh sua thong qua PATCH tu form
    });

    Route::delete('{id}', function () {
        // Xoa khach hang theo id
    });
});
