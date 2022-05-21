<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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

// frontend

Route::get('/',[HomeController::class,'index'])->name('home');


// Admin

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    // categories

    Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
    Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
    Route::post('/categories/store',[CategoryController::class,'store'])->name('categories.store');
    Route::get('/categories/{category}/edit',[CategoryController::class,'edit'])->name('categories.edit');
    Route::post('/categories/{category}/update',[CategoryController::class,'update'])->name('categories.update');
    Route::get('/categories/{category}/delete',[CategoryController::class,'delete'])->name('categories.delete');

});

Auth::routes();



