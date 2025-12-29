<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'viewblog'])->name('home');
Route::get('/bloggrid', [BlogController::class, 'bloggrid'])->name('blog.grid');
Route::get('/single/{slug}', [BlogController::class, 'showblog'])->name('blog.single');

Route::get('/dashboard', [BlogController::class, 'blogcount'])->name('dashboard')->middleware(['ok-user']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/add', [BlogController::class, 'createblog'])->name('blog.store');
Route::get('/update/{slug}', [BlogController::class, 'updatepage'])->name('update');
Route::post('/updatepage/{slug}', [BlogController::class, 'updateblog'])->name('updateblog');
Route::get('/delete/{slug}', [BlogController::class, 'deleteblog'])->name('delete');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');

Route::get('register', [AuthController::class, 'register_view'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');

