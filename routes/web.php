<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');

Route::group(['prefix'=> 'admin','middleware' => ['auth'], 'as' => 'admin.'], function () {

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
    
    Route::get('/user', [HomeController::class, 'index'])->name('index');
    Route::get('/create', [HomeController::class, 'create'])->name('user.create');
    Route::post('/store', [HomeController::class, 'store'])->name('user.store');
    
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
    Route::put('/update/{id}', [HomeController::class, 'update'])->name('user.update');
    
    Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');

    Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
    Route::post('/posts/store', [PostsController::class, 'store'])->name('posts.store');

    Route::get('/post/edit/{id}', [PostsController::class, 'edit'])->name('post.edit');
    Route::put('/post/update/{id}', [PostsController::class, 'update'])->name('post.update');

    Route::delete('/post/delete/{id}', [PostsController::class, 'delete'])->name('post.delete');
    
});
