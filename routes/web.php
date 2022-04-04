<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PerjalananController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/user-profile', [DashboardController::class, 'profile']);
Route::get('/list-post', [PostController::class, 'index']);
Route::get('/add-post', [PostController::class, 'create']);
Route::get('/edit-post', [PostController::class, 'edit']);

Route::get('/list-article', [ArticleController::class,'index'])->name('article-index');
Route::get('/add-article', [ArticleController::class,'create'])->name('article-create');
Route::post('/store-article', [ArticleController::class, 'store']);
Route::get('/edit-article/{id}', [ArticleController::class, 'edit'])->name('article-edit');
Route::put('/update-article/{id}', [ArticleController::class, 'update'])->name('article-update');
Route::delete('/delete-article/{id}', [ArticleController::class, 'destroy'])->name('article-destroy');

Route::get('/list-user', [UserController::class, 'index'])->name('user-index')->middleware('auth');
Route::get('/add-user', [UserController::class,'create'])->name('user-create')->middleware('auth');
Route::post('/store-user', [UserController::class, 'store'])->middleware('auth');
Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('user-edit')->middleware('auth');
Route::put('/update-user/{id}', [UserController::class, 'update'])->name('user-update')->middleware('auth');
Route::delete('/delete-user/{id}', [UserController::class, 'destroy'])->name('user-destroy')->middleware('auth');

Route::get('/list-masyarakat', [MasyarakatController::class, 'index'])->name('masyarakat-index')->middleware('auth');
Route::get('/add-masyarakat', [MasyarakatController::class,'create'])->name('masyarakat-create')->middleware('auth');
Route::post('/store-masyarakat', [MasyarakatController::class, 'store'])->middleware('auth');
Route::get('/edit-masyarakat/{id}', [MasyarakatController::class, 'edit'])->name('masyarakat-edit')->middleware('auth');
Route::put('/update-masyarakat/{id}', [MasyarakatController::class, 'update'])->name('masyarakat-update')->middleware('auth');
Route::delete('/delete-masyarakat/{id}', [MasyarakatController::class, 'destroy'])->name('masyarakat-destroy')->middleware('auth');

Route::get('/list-perjalanan', [PerjalananController::class, 'index'])->name('perjalanan-index')->middleware('auth');
Route::get('/add-perjalanan', [PerjalananController::class,'create'])->name('perjalanan-create')->middleware('auth');
Route::post('/store-perjalanan', [PerjalananController::class, 'store'])->middleware('auth');
Route::get('/edit-perjalanan/{id}', [PerjalananController::class, 'edit'])->name('perjalanan-edit')->middleware('auth');
Route::put('/update-perjalanan/{id}', [PerjalananController::class, 'update'])->name('perjalanan-update')->middleware('auth');
Route::delete('/delete-perjalanan/{id}', [PerjalananController::class, 'destroy'])->name('perjalanan-destroy')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


