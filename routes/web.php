<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\AttributionController;
use App\Http\Controllers\EtablissementController;
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


Route::get('/attribution', [AttributionController::class, 'index'])->name('attribution.index');
