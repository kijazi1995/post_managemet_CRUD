<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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
    return view('welcome');
});
Route::get('/add-post',[postController::class,'addPost'])->name('add.post');
Route::post('/save-post',[postController::class,'savePost'])->name('save.post');
Route::get('/post-list',[postController::class,'postList'])->name('list.post');
Route::get('/edit-post/{id}',[postController::class,'editPost'])->name('edit.post');
Route::get('/delete-post/{id}',[postController::class,'deletePost'])->name('delete.post');
Route::post('/update-post',[postController::class,'updatePost'])->name('update.post');
Route::post('/login',[postController::class,'login'])->name('post.login');
Route::view('login','login');
Route::view('profile','profile');
