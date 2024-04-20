<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ManufacturerController;
use Illuminate\Support\Facades\Route;

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