<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
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
    return view('land');
});


Route::get('/admin', [BaseController::class, 'adminPage'])->name('admin');
Route::get('/visitor', [VisitorController::class, 'visitorPage'])->name('visitor');
Route::get('/admin/new-product', [AdminController::class, 'new_product_page'])->name('add');
Route::get('/admin/edit-product/{id}', [AdminController::class, 'edit_product_page'])->name('edit');
Route::post('/add-product', [AdminController::class, 'add_product'])->name('add-product');
Route::post('/update-product', [AdminController::class, 'update_product'])->name('admin');
Route::get('/data/{id}/{name}/{unit_price}', [VisitorController::class, 'get_cart_data'])->name('cart');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
