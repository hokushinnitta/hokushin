<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ColorSettingsController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// ユーザーがログインした後のリダイレクト先
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// special-menu と main-menu のルート
Route::get('/special-menu', function () {
    return view('special-menu');
})->name('special-menu')->middleware('auth');

Route::get('/main-menu', function () {
    return view('main-menu');
})->name('main-menu')->middleware('auth');

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/color-settings', [ColorSettingsController::class, 'index'])->name('color-settings');
Route::post('/color-settings', [ColorSettingsController::class, 'save'])->name('color-settings.save');
Route::put('/color-settings', [ColorSettingsController::class, 'update'])->name('color-settings.update');
Route::post('/color-settings/reset', [ColorSettingsController::class, 'reset'])->name('color-settings.reset');
Route::post('/color-settings/toggle-theme', [ColorSettingsController::class, 'toggleTheme'])->name('color-settings.toggle-theme');


// web.php

Route::get('/api/get-color-settings', [ColorSettingsController::class, 'getColorSettings']);


