<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\userinfocontroller;

// Route::get('/formuser' , function (){

//     return view('userInformation.userForm');

// });

// // ثبت اطلاعات فرم

// Route::post('/formuser', [UserInfoController::class, 'register']);


Route::get('/formuser', [userinfocontroller::class, 'showform']); 
Route::post('/formuser2', [userinfocontroller::class, 'register2']); 









Route::get('/products', [ProductsController::class, 'index'])->name('products.index'); 
Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create'); 
Route::post('/products', [ProductsController::class, 'store']); 
Route::get('/products/search', [ProductsController::class, 'search']); 
 



