<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;

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

Route::get('/',[PublicController::class,'welcome'])->name('welcome');

// Rotta che mi mostra il form per creare un film di blog
Route::get('/movie/create',[MovieController::class,'create'])->name('movie.create');

// rotta che mi farà salvare i dati nel db
Route::post('/movie/store',[MovieController::class,'store'])->name('movie.store');

// rotta che mi recupera i film creati e me li mostra
Route::get('/movie/index',[MovieController::class,'index'])->name('movie.index');

// rotta che mi mostra i dettagli di un film
Route::get('/movie/show{movie}',[MovieController::class,'show'])->name('movie.show');


// ROTTA PER LE MIE CATEGORIE

// Rotta per mostrare il form di creazione della mie categorie

Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');