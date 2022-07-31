<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [UserController::class, 'index']);

//admin router section 
Route::get('/admin' , [DashboardController::class,'index'] );
Route::get('admin/urun-ekle',[ProductController::class,'add_product']);

//frontend router  section 
Route::get('/',[HomeController::class,'home']);





