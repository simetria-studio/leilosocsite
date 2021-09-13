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
// backoffice 
Route::get('backoffice', function () {
    return view('backoffice.home');
});
Route::get('backoffice/banner', function () {
    return view('backoffice.banner');
});

// site 
Route::get('/', function () {
    return view('site.home');
});
Route::get('/sobre', function () {
    return view('site.sobres.sobre');
});
Route::get('vendas', function () {
    return view('site.termos.vendas');
});
Route::get('dicas-fotografia', function () {
    return view('site.dicas.fotografia');
});
Route::get('dicas-como-comprar', function () {
    return view('site.dicas.comprar');
});
Route::get('dicas-como-vender', function () {
    return view('site.dicas.vender');
});
Route::get('imprensa', function () {
    return view('site.imprensa');
});



//LEILAO
Route::get('leilao', function () {
    return view('site.leilao.leilao');
});
Route::get('leilao/descricao', function () {
    return view('site.leilao.single');
});
