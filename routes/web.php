<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\CustomerModel;
use App\Models\Customers;
use App\Models\ProductModel;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

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
Auth::routes();
Route::get('/', function(){
    return view('layouts.dashboard');
})->name('admin')->middleware('auth');

Route::get('/products', [ProductController::class, 'index'])->name('products')->middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->name('create.product')->middleware('auth');
Route::post('/products/store', [ProductController::class, 'store']);
Route::get('/customers', [CustomerController::class, 'index'])->name('customers')->middleware('auth');
Route::get('/users', [UserController::class, 'index'])->middleware('auth');
Route::get('/users/create', [UserController::class, 'create'])->middleware('auth');
Route::post('/users/store', [UserController::class, 'store'])->middleware('auth');


