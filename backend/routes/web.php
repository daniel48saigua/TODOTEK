<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PersonController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth:: routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[ PersonController::class, 'getAll']);
Route::post('/',[ PersonController::class, 'create']);
Route::delete('/{id}',[ PersonController::class, 'delete']);
Route::get('/{id}',[ PersonController::class, 'get']);
Route::put('/{id}',[ PersonController::class, 'update']);*/

//Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::resource('products-ajax-crud', PersonController::class);