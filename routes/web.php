<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\admin;
use App\Http\Controllers\WEB\{LoginController,AdminController,PujaController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-login', [LoginController::class, 'loginPage'])->name('login.page');
Route::post('/login', [LoginController::class, 'adminLogin']);

Route::middleware([admin::class])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard_page'])->name('admin.dashboard');
    Route::get('/logout', [LoginController::class, 'getLogout'])->name('admin.logout');

    Route::get('/astrologer-list', [AdminController::class, 'astrologerListPage']);

    Route::get('/puja-list'               , [PujaController::class, 'pujaListPage'])->name('puja.list');
    Route::get('/add-puja-page'           , [PujaController::class, 'addPujaPage']);
    Route::post('/add-puja'               , [PujaController::class, 'addPuja']);
    Route::get('/puja-edit/{puja_id}'     , [PujaController::class, 'pujaEdit']);
    Route::post('/puja-update/{puja_id}'  , [PujaController::class, 'pujaUpdate']);
    Route::get('/puja-delete/{puja_id}'   , [PujaController::class, 'pujaDelete']);

    Route::get('/add-puja-benefits/{puja_id}'   , [PujaController::class, 'addPujaBenefitPage']);
    Route::post('/add-benefits/{puja_id}'       , [PujaController::class, 'addPujaBenefits']);
    Route::get('/edit-benefits/{puja_id}'       , [PujaController::class, 'editPujaBenefits']);
    Route::post('/update-benefits/{benefit_id}'  , [PujaController::class, 'updatePujaBenefits']);
});
