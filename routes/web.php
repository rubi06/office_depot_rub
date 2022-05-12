<?php

use App\Http\Controllers\OfficeDepotController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\PriceController;
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

Route::get('generate', [OfficeDepotController::class, 'generator']);

Route::resource('price', PriceController::class);

Route::resource('section', SectionController::class);

Route::resource('store', StoreController::class);
