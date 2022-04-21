<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\ShowController;
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

/* Index */
Route::get('/', [HomeController::class, 'index']);


/* Show */
Route::get('/show/{id}', [ShowController::class, 'index']);


/* Create */
Route::controller(CreateController::class)->group(function (){
    Route::get('/create', 'index');
    Route::post('/create', 'create');
});


/* Update */
Route::controller(UpdateController::class)->group(function (){
    Route::get('/update/{id}', 'index');
    Route::post('/update/{id}', 'update');
});


/* Delete */
Route::get('/delete/{id}', [DeleteController::class, 'delete']);
