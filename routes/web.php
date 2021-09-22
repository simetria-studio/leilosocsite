<?php

use App\Http\Controllers\BackOffice\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\RegisterController;

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
Route::middleware('auth')->group(function () {
    Route::middleware('Check')->group(function () {
    Route::get('backoffice', [HomeController::class, 'index'])->name('backoffice');
    });
});

Route::get('backoffice/banner', function () {
    return view('backoffice.banner');
});

// site


Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('login-site', [RegisterController::class, 'index'])->name('site.login');
Route::get('registo-step', [RegisterController::class, 'create'])->name('site.registo.step');
Route::post('registo', [RegisterController::class, 'store'])->name('site.registo.store');
Route::post('registo-step', [RegisterController::class, 'infoStore'])->name('site.registo.step');

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


//login

// Route::get('/registo', function () {
//     return view('site.login.registo');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

