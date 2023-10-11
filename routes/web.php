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
    return view('content.page.homepage', [
        'navbar' => 'light',
        'login' => 'light'
    ]);
});

Route::get('/program',  function (){
    return view('content.page.program.program-page');
});
Route::get('/detail',  function (){
    return view('content.page.program.detail-program');
});
Route::get('/checkout',  function (){
    return view('content.page.program.checkout-page');
});
Route::get('/update',  function (){
    return view('content.page.update.update-page');
});
Route::get('/qurban',  function (){
    return view('content.page.qurban-page');
});
Route::get('/zakat',  function (){
    return view('content.page.zakat.pay-zakat-page');
});
Route::get('/kalkulator',  function (){
    return view('content.page.zakat.kalkulator-zakat');
});
Route::get('/konsultasi',  function (){
    return view('content.page.zakat.konsultasi-zakat');
});
Route::get('/login',  function (){
    return view('content.page.login.login-page');
});
Route::get('/detail-update',  function (){
    return view('content.page.update.detail-update');
});
Route::get('/dashboard',  function (){
    return view('content.page.dashbord.donor-page');
});

Route::get('/register',  function (){
    return view('content.page.login.register-page');
});
Route::get('/donor',  function (){
    return view('content.page.dashbord.donor-page');
});
Route::get('/ganti-password',  function (){
    return view('content.page.dashbord.ganti-password');
});
Route::get('/histori-donasi',  function (){
    return view('content.page.dashbord.histori-donasi');
});
Route::get('/histori-qurban',  function (){
    return view('content.page.dashbord.histori-qurban');
});
Route::get('/histori-zakat',  function (){
    return view('content.page.dashbord.histori-zakat');
});
