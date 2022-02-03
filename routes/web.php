<?php

use App\Http\Controllers\EquipeController;
use App\Http\Controllers\EtablissementController;
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

Route::get('/', function() {
    return view('festival.index');
})->name('index');

Route::resources([
    'equipe' => EquipeController::class,
    'etablissement' => EtablissementController::class
]);
