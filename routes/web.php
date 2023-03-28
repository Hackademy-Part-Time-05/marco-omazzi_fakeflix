<?php

use App\Http\Controllers\PageController;
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

Route::get('/',[PageController::class,'welcome'] )->name('welcome');;

Route::get('/catalogo-film', [PageController::class,'cataloguefilms'])->name('cataloguefilms');
 

Route::get('/catalogo-film/detailsfilm/{id}', [PageController::class,'detailsfilm'])->name('detailsfilm');

Route::get('/catalogo-serie', [PageController::class,'catalogueseries'])->name('catalogueseries');
 

Route::get('/catalogo-serie/detailsserie/{id}', [PageController::class,'detailsserie'])->name('detailsserie');