<?php

use App\Http\Controllers\PostController;
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

Route::get('/',[PostController::class,'index'])->name('posts');
Route::get('/post/create',[PostController::class,'create'])->name('post.create');
Route::get('/post/show/{id}',[PostController::class,'show'])->name('post.show');
Route::post('/post/create',[PostController::class,'store'])->name('post.store');
Route::delete('/post/delete/{id}',[PostController::class,'delete'])->name('post.delete');

