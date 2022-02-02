<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index']);

Route::get('/gestionEquipe.php', [PostController::class, 'gestEquipe']);

Route::get('/creationEquipe.php',  [PostController::class, 'creationEquipe']);
Route::post('addEkip',  [PostController::class, 'addEkip']);

Route::get('/detailEquipe.php', [PostController::class, 'detailEquipe']);

Route::get('/modificationEquipe.php', [PostController::class, 'modificationEquipe']);

Route::get('/suppressionEquipe.php', [PostController::class, 'suppressionEquipe']);


Route::get('/listeEtablissements.php', [PostController::class, 'listeEtablissements']);


Route::get('/consultationAttributions.php',  [PostController::class, 'consultationAttributions']);

Route::get('/modificationAttributions.php',  [PostController::class, 'modificationAttributions']);

Route::get('/creationEtablissement.php',  [PostController::class, 'creationEtablissement']);

Route::get('/modificationEtablissement.php',  [PostController::class, 'modificationEtablissement']);

Route::get('/detailEtablissement.php',  [PostController::class, 'detailEtablissement']);

Route::get('/suppressionEtablissement.php', [PostController::class, 'suppressionEtablissement']);