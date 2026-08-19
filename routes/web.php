<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

// ランキング（仮）
Route::get('/ranking', function () {
    return 'ranking placeholder';
})->name('ranking.index');

// お気に入り（仮）
Route::get('/favorites', function () {
    return 'favorites placeholder';
})->name('favorites.index');

// ジャンル管理（仮）
Route::get('/genres', function () {
    return 'genres placeholder';
})->name('genres.index');
// ログイン（仮）
Route::get('/login', fn() => 'login placeholder')->name('login');

// 新規登録（仮）
Route::get('/register', fn() => 'register placeholder')->name('register');

// ログアウト（仮）
Route::post('/logout', fn() => 'logout placeholder')->name('logout');
