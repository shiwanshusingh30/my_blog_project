<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BlogController::class,'viewblog'])->name('home');
Route::post('/add',[BlogController::class,'createblog'])->name('blog.store');
Route::get('/single/{slug}',[BlogController::class,'showblog'])->name('blog.single');

Route::get('/update/{slug}',[BlogController::class,'updatepage'])->name('update');
Route::post('/updatepage/{slug}',[BlogController::class,'updateblog'])->name('updateblog');
Route::get('/delete/{slug}',[BlogController::class,'deleteblog'])->name('delete');
Route::get('/bloggrid',[BlogController::class,'bloggrid'])->name('blog.grid');
Route::get('/create',function(){
    return view('blogcreate');
})->name('blog.create');

