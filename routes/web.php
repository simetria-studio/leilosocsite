<?php

use App\Http\Controllers\HomeController as SiteController;
use App\Http\Controllers\BackOffice\HomeController;

use App\Http\Controllers\BackOffice\UsuariosController;

use App\Http\Controllers\BackOffice\BannerController;

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

// Para coneção ao banco de dados exterior, podendo faer a mesma coisa
// // $teste = \DB::connection('mysql2')->select('SELECT * FROM modelos');
// $teste = new Modelo;
// $teste = $teste->setConnection('mysql2')->get();
// dd($teste);

// backoffice
Route::middleware('auth')->group(function () {
    Route::middleware('Check')->group(function () {
        Route::get('backoffice', [HomeController::class, 'index'])->name('backoffice');

        Route::get('backoffice/banner', [BannerController::class, 'viewBanner'])->name('banner');
        Route::post('backoffice/banner', [BannerController::class, 'storeBanner'])->name('banner');
        Route::delete('backoffice/banner', [BannerController::class, 'destroyBanner'])->name('banner');

        Route::get('usuarios', [HomeController::class, 'usuarios'])->name('usuarios');

        Route::get('users', [UsuariosController::class, 'usuarios'])->name('users');
        Route::get('admins', [UsuariosController::class, 'admins'])->name('admins');
        Route::get('admin-create', [UsuariosController::class, 'adminCreate'])->name('admin.create');
        Route::post('admin-store', [UsuariosController::class, 'adminStore'])->name('admin.store');
        Route::get('admin-show/{id}', [UsuariosController::class, 'userShow'])->name('admin.show');
        Route::post('admin-update/{id}', [UsuariosController::class, 'userUpdate'])->name('admin.update');
        Route::any('user-delete', [UsuariosController::class, 'destroy'])->name('user.delete');

        Route::get('user-create', [UsuariosController::class, 'userCreate'])->name('user.create');
        Route::post('user-store', [UsuariosController::class, 'userStore'])->name('user.store');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('myleilosoc', function () {
        return view('site.myleilosoc.dados-pessoais');
    })->name('myleilosoc');
    Route::get('myleilosoc/meus-interesses', function () {
        return view('site.myleilosoc.interesse');
    });

});


// site

Route::get('/', [SiteController::class, 'index'])->name('site.home');

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

// MY LEILOSOC



// Route::get('myleilosoc', function () {
//     return view('site.myleilosoc.dados-pessoais');
// });
Route::get('myleilosoc/dados-pessoais', function () {
    return view('site.myleilosoc.dados-pessoais');
});
// Route::get('myleilosoc/interesses', function () {
//     return view('site.myleilosoc.interesse');
// });


Route::get('myleilosoc/perfil-settings', function () {
    return view('site.myleilosoc.perfil-settings');
});

// calendario
Route::get('calendario', function () {
    return view('site.calendario.calendario');
});
