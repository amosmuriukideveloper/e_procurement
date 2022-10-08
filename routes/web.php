<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ProductsController;
use App\Http\Controllers\Auth\MessagesController;
use App\Http\Controllers\Auth\TendorController;
use App\Http\Controllers\Auth\SupplierController;
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
//     return view('welco');
// });

Route::get('/', [AuthenticatedSessionController::class, 'create']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/messages', [MessagesController::class, 'index']);
Route::get('/tendor', [TendorController::class, 'index']);
Route::get('/supplier', [SupplierController::class, 'index']);
Route::get('/dashboard', function () { 
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
