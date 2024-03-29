<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\CommentController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/posts/comment', [CommentController::class, 'store']);//投稿に対するコメント保存
Route::get('/posts/create', [PostController::class, 'create']);  //投稿フォームの表示
Route::post('/posts', [PostController::class, 'store']);  //画像を含めた投稿の保存処理
Route::get('/surprise/show', [RedirectController::class, 'show']); //特定ページへの遷移
Route::get('/posts/kyapi', [PostController::class, 'kyapi']);
Route::get('/posts/jimmy', [PostController::class, 'jimmy']);
Route::get('/posts/{post}', [RedirectController::class, 'checkAndRedirect']);  //投稿の詳細表示
Route::get('/', [PostController::class, 'index']); //メイン画面表示
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::get('/posts/{post}/comment', [CommentController::class, 'comment']);
Route::get('/posts/{post}/comment_show', [CommentController::class, 'show']); //特定ページへの遷移





Route::get('/post/like/{id}', [PostController::class, 'like'])->name('post.like');
Route::get('/post/unlike/{id}', [PostController::class, 'unlike'])->name('post.unlike');

require __DIR__.'/auth.php';
