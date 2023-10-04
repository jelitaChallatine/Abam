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
    return view('content.page.program-page');
});
Route::get('/detail',  function (){
    return view('content.page.detail-program');
});
Route::get('/checkout',  function (){
    return view('content.page.checkout-page');
});
Route::get('/update',  function (){
    return view('content.page.update-page');
});
Route::get('/qurban',  function (){
    return view('content.page.qurban-page');
});
Route::get('/zakat',  function (){
    return view('content.page.zakat.pay-zakat-page');
});
Route::post('/kalkulator',  function (){
    return view('content.page.zakat.kalkulator-zakat');
});
Route::post('/konsultasi',  function (){
    return view('content.page.zakat.konsultasi-zakat');
});
