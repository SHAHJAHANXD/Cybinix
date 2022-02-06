<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [UserController::class, 'index'])->name('index');
Route::post('/getintouch', [UserController::class, 'getintouch'])->name('getintouch');
Route::post('/newsletter', [UserController::class, 'newsletter'])->name('newsletter');








Route::group(['middleware' => 'auth:admin'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/all-users', [AdminController::class, 'users'])->name('admin.users');
        Route::get('/individual-users', [AdminController::class, 'individualusers'])->name('admin.individual.users');
        Route::get('/company-users', [AdminController::class, 'companyusers'])->name('admin.company.users');

        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    });
});

Route::post('/admin/authenticate', [AdminController::class, 'authenticate']);
Route::get('/admin/login', [AdminController::class, 'signin'])->name('admin.login');
