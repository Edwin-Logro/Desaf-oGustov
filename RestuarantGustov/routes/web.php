<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
Route::resource('menu',MenuController::class);
Auth::routes();
Route::group(['middelware'== 'auth'], function()
{
    Route::resource('home',MenuController::class);
});

