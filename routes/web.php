<?php

use App\Http\Middleware\RegisterAccess;
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

Route::middleware([RegisterAccess::class])->prefix('vWVPSbUHIRJ')->group(function (){
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group( function () {

    Route::get('/{pagina}', function ($pagina) {
        return view("admin.$pagina");
    });
});
