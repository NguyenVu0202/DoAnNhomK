<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ManufacturerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('dashboard', [CategoryController::class, 'dashboard']);
Route::get('category', [CategoryController::class, 'indexCategory'])->name('category.index');
Route::get('categorycreate', [CategoryController::class, 'indexcreateCategory'])->name('category.createindex');
Route::post('categorycreate', [CategoryController::class, 'createCategory'])->name('category.createCategory');
Route::get('categoryupdate', [CategoryController::class, 'indexupdateCategory'])->name('category.updateindex');
Route::post('categoryupdate', [CategoryController::class, 'updateCategory'])->name('category.updateCategory');
Route::get('categorydelete', [CategoryController::class, 'deleteCategory'])->name('category.deleteCategory');
Route::get('listmanufacturer', [ManufacturerController::class, 'indexManufacturer'])->name('manufacturer.listmanufacturer');
Route::get('addmanufacturer', [ManufacturerController::class, 'indexAddManufacturer'])->name('manufacturer.addmanufacturer');
Route::post('addmanufacturer', [ManufacturerController::class, 'addManufacturer']);
Route::get('deletemanufacturer', [ManufacturerController::class, 'deleteManufacturer'])->name('manufacturer.deletemanufacturer');
Route::get('updatemanufacturer', [ManufacturerController::class, 'indexUpdateManufacturer'])->name('manufacturer.updateindex');
Route::post('updatemanufacturer', [ManufacturerController::class, 'updateManufacturer'])->name('manufacturer.updateManufacturer');
Route::get('listproduct', [ProductController::class, 'indexProduct'])->name('product.listproduct');
Route::get('addproduct', [ProductController::class, 'indexAddProduct'])->name('product.indexaddproduct');
Route::post('addproduct', [ProductController::class, 'addProduct'])->name('product.addproduct');
Route::get('deleteproduct', [ProductController::class, 'deleteProduct'])->name('product.deleteproduct');
Route::get('updateproduct', [ProductController::class, 'indexUpdateProduct'])->name('product.indexUpdateproduct');
Route::post('updateproduct', [ProductController::class, 'updateProduct'])->name('product.updateproduct');
Route::get('Home', [HomeController::class, 'indexHome']);
Route::get('detailproduct', [HomeController::class, 'indexDetailProduct'])->name('product.indexDetailproduct');


// Register Client
Route::get('/register',[CustomerController::class,'indexRegister']);
Route::post('/register',[CustomerController::class,'authRegister'])->name('user.cus_register');

// Login client
Route::get('/login',[CustomerController::class,'indexLogin']);
Route::post('/login',[CustomerController::class,'authLogin'])->name('user.cus_login');

// Logout
Route::get('/signout', [CrudUserController::class, 'signOut'])->name('signout');
