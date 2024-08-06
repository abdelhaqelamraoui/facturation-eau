<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ReleveController;
use App\Http\Controllers\StatistiquesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.index');
});
// Resource route for clients, factures, and releves
Route::resource('clients', ClientController::class);
Route::resource('factures', FactureController::class);
Route::resource('releves', ReleveController::class)->parameter('releves', 'releve');

Route::prefix('statistiques')
    ->name('statistiques.')
    ->controller(StatistiquesController::class)
    ->group(function () {

        Route::get('/', 'index')->name('index');
        Route::get('/{client}', 'show')->name('show');
    });
