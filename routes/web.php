<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/myplants', [HomeController::class, 'plantsOverview'])->name('myplants');
Route::get('/myplants/{id}', [HomeController::class, 'plantDetails'])->name('plantdetails');

Route::get('addplant', [HomeController::class, 'create'])->name('addplant');
Route::post('create_form', [HomeController::class, 'store'])->name('create_form');

Route::get('myplants/updateplant/{id}', [HomeController::class, 'updateView'])->name('updateplant');
Route::post('update_form', [HomeController::class, 'update'])->name('update_form');

Route::get('/myplants/deleteplant/{id}', [HomeController::class, 'delete'])->name('deleteplant');

Route::get('/repotting', [HomeController::class, 'repotting'])->name('repotting');
