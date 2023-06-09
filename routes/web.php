<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [FrontendController::class,'Accueil'])->name('Accueil');
Route::get('/produits/{id<\d+>}', [FrontendController::class,'Accueil'])->name('Accueil');
Route::get('/category/{id<\d+>}', [FrontendController::class,'Accueil'])->name('Accueil');
Route::get('/admin', [AdminController::class,'index'])->name('Accueil');
Route::post('/avis', [AvisController::class,'store'])->name('avis.store');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
