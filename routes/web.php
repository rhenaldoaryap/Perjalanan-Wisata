<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryAdminController;
use App\Http\Controllers\Admin\PictureController;
use App\Http\Controllers\Admin\StaffAdminController;
use App\Http\Controllers\Admin\StaffAdminPictureController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SuccessController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/details/{slug}', [DetailController::class, 'index'])
    ->name('details');

Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil');

Route::get('/kurikulum', [KurikulumController::class, 'index'])
    ->name('kurikulum');

Route::get('/staff', [StaffController::class, 'index'])
    ->name('staff');

Route::get('/gallery', [GalleryController::class, 'index'])
    ->name('gallery');

Route::get('/success', [SuccessController::class, 'index'])
    ->name('success');

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('gallery', GalleryAdminController::class);
        Route::resource('picture', PictureController::class);
        Route::resource('staff', StaffAdminController::class);
        Route::resource('staffpicture', StaffAdminPictureController::class);
        Route::resource('transaction', TransactionController::class);
    });
Auth::routes(['verify' => true]);