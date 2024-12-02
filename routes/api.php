<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvamediaPostController;
use App\Http\Controllers\EvamediaUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->get('/user', 'UserController@show');


//* evamedia user
//? belum ada middleware
Route::get('/users', [EvamediaUserController::class, 'user'])->name('user.index');
Route::post('/tambahUser', [EvamediaUserController::class, 'store'])->name('user.tambah');

//* evamedia post
Route::get('/posts', [EvamediaPostController::class, 'index'])->name('post.index');
Route::post('/tambah', [EvamediaPostController::class, 'store'])->name('post.tambah');
Route::get('/trending',[EvamediaPostController::class, 'trendingPost'])->name('post.trending');
Route::get('/latest',[EvamediaPostController::class, 'latestPost'])->name('post.latest');
Route::post('/category/{category_id}',[EvamediaPostController::class, 'getPostByCategory'])->name('post.category');

//* detail post
Route::get('/read/{slug}', [EvamediaPostController::class, 'detailPost'])->name('post.detailPost');
Route::get('read/{slug}/recomendation', [EvamediaPostController::class,'recomendationPost'])->name('post.recomendation');

// Route::post('/update/{slug}', [EvamediaPostController::class, 'update'])->name('post.update');
// Route::get('/delete/{slug}', [EvamediaPostController::class, 'destroy'])->name('post.delete');