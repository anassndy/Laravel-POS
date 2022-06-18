<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\CustomerModel;
use App\Models\Customers;
use App\Models\ProductModel;
use App\Models\User;
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
    $products = ProductModel::all();
    $users = User::all();
    $customers = CustomerModel::all();
    return view('layouts.dashboard',[
        'products'=>$products,
        'users'=>$users,
        'customers'=>$customers,
    ]);
})->name('admin')->middleware('auth');

Route::get('/products', [ProductController::class, 'index'])->name('products')->middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->name('create.product')->middleware('auth');
Route::post('/products/store', [ProductController::class, 'store']);
Route::get('/products/update/{id}', [ProductController::class, 'update']);
Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
Route::get('/products/show/{id}', [ProductController::class, 'show'])->name('product.details');
Route::get('/customers', [CustomerController::class, 'index'])->name('customers')->middleware('auth');
Route::get('/users', [UserController::class, 'index'])->name('users')->middleware('auth');
Route::get('/users/create', [UserController::class, 'create'])->middleware('auth');
Route::post('/users/store', [UserController::class, 'store'])->name('create.user')->middleware('auth');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('delete.user')->middleware('auth');