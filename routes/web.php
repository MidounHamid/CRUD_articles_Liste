<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FamilleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Redirect the root URL to the ArticleController's index method
Route::get('/', [ArticleController::class, 'index']);


Route::resource('articles', ArticleController::class);
Route::resource('familles', FamilleController::class);

