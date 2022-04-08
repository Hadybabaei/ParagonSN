<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/login', [AccountsController::class,'login'])->name('login');
// Route::post('/register', [AccountsController::class,'register'])->name('register');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');
    Route::Post('/newpost',[ArticlesController::class,'store'])->name('new-post');
    Route::get('/newpost/like/{id}',[ArticlesController::class,'like'])->name('like');
    Route::Post('/comment/{id}',[CommentsController::class,'store'])->name('comment-store');
    });




