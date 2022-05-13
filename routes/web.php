<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OfficeDepotController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;

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
Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('generate', [OfficeDepotController::class, 'generator']);

Route::resource('product', ProductController::class);

Route::resource('section', SectionController::class);

Route::resource('store', StoreController::class);
