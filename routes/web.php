<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'middleware' => 'auth',
    'prefix' => 'todos',
    'as' => 'todos.'
], function () {
    Route::get('/', [App\Http\Controllers\todoController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\todoController::class, 'create'])->name('create');
    Route::post('/create', [App\Http\Controllers\todoController::class, 'store'])->name('store');
    Route::get('/{todo}', [App\Http\Controllers\todoController::class, 'show'])->name('show');
    Route::get('/{todo}/edit', [App\Http\Controllers\todoController::class, 'edit'])->name('edit');
    Route::post('/{todo}/edit', [App\Http\Controllers\todoController::class, 'update'])->name('update');
    Route::get('/{todo}/delete', [App\Http\Controllers\todoController::class, 'delete'])->name('delete');
});
