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

Route::get('/', [\App\Http\Controllers\LoginController::class, 'IndexAction']);

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [App\Http\Controllers\CategoriesController::class, 'IndexAction']);
    Route::post('/', [App\Http\Controllers\CategoriesController::class, 'StoreAction']);
    Route::delete('/{id}', [App\Http\Controllers\CategoriesController::class, 'DeleteActions']);
});

//ищу, ищу таргетолога FB, ищу таргетолога facebook, ищу таргетолога instagram, ищу таргетолога instagram, нужен, нужен таргетолог FB, нужен таргетолог facebook, нужен таргетолога instagram, нужен таргетолога instagram
