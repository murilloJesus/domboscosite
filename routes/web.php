<?php

use App\Http\Middleware\RegisterAccess;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::middleware(['auth:sanctum', 'verified'])->prefix('administrador')->group( function () {

    Route::get('/', function () {
        return view('admin.home')->with('page', 'home');
    });

    Route::get('/{pagina}', function ($pagina) {
        return view("admin.$pagina")->with('page', $pagina);
    });
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/proposta-pedagogica', function () {
    return view('pages.proposta_pedagogica');
});

Route::get('/segmentos', function () {
    return view('pages.segmentos');
});

Route::get('/contato', function () {
    return view('pages.contato');
});

Route::get('/colegio', function () {
    return view('pages.colegio');
});

Route::get('/estrutura', function () {
    return view('pages.estrutura');
});

Route::get('/galerias', function () {
    return view('pages.galerias');
});


