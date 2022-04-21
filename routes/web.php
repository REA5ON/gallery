<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
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

Route::controller(ImageController::class)->group(function (){
    Route::get('/', 'home');
    Route::view('/create', 'create');
    Route::post('/create', 'store');
    Route::get('/update/{id}', 'edit');
    Route::post('/update/{id}', 'update');
    Route::get('/show/{id}', 'show');
    Route::get('/delete/{id}', 'delete');
});

