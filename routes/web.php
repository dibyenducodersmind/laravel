<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\admin;
use App\Http\Controllers\WEB\{LoginController,AdminController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-login', [LoginController::class, 'loginPage'])->name('login.page');
Route::post('/login', [LoginController::class, 'adminLogin']);

Route::middleware([admin::class])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard_page'])->name('admin.dashboard');
    Route::get('/logout', [LoginController::class, 'getLogout'])->name('admin.logout');
});
