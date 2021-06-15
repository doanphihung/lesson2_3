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
    echo "<h2>This is  Home</h2>";
});

Route::get('/about', function () {
    echo "<h2>This is  about page</h2>";
});
Route::get('/contact', function () {
    echo "<h2>This is  Contact page</h2>";
});

Route::get('/user/{name}', function ($name) {
//    return view('user', ['name' => 'Doan Phi Hung']);
    echo "<h2>User name is $name</h2>"  ;
});

Route::get('/', 'App\Http\Controllers\HomeController@index');




