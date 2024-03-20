<?php

use App\Http\Controllers\Admin\Dashboard\CategoryController;
use App\Http\Controllers\Admin\Dashboard\OrganizationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/category',[CategoryController::class,'index'])->name('category.index');
// Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
// Route::get('/category/store',[CategoryController::class,'store'])->name('category.store');
// // Route::get('/create',[CategoryController::class,'index'])->name('category.index');
// Route::get('/organization',[OrganizationController::class,'index'])->name('organization.index');
// Route::get('/organization/create',[OrganizationController::class,'create'])->name('organization.create');
// Route::get('/organization/store',[OrganizationController::class,'store'])->name('organization.store');

Route::get('/',function(){
    return response('<h1>Hello world</h1>');
});

Route::group(['prefix' => 'admin'], function () {

    Route::resource('organization', OrganizationController::class);
    Route::resource('category', CategoryController::class);
});
