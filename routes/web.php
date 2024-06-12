<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController; // 追加
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// ロールごとのルートを設定
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin-menu', function () {
        return view('admin-menu');
    })->name('admin.menu');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user-menu', function () {
        return view('user-menu');
    })->name('user.menu');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 既存のルートの下に追加
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

Route::middleware(['auth', 'verified'])->get('/dashboard', [HomeController::class, 'index'])->name('dashboard');


// ユーザー登録

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');



require __DIR__.'/auth.php';
