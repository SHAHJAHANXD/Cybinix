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
        Route::get('/all-team', [AdminController::class, 'users'])->name('admin.team');
        Route::get('/all-active-team', [AdminController::class, 'activeteam'])->name('admin.active.team');
        Route::get('/delete-team-member/{id}', [AdminController::class, 'delete'])->name('admin.delete.team');
        Route::get('/all-blocked-team', [AdminController::class, 'blockedteam'])->name('admin.blocked.team');
        Route::get('/add-new-team-member', [AdminController::class, 'teammember'])->name('admin.add.team');
        Route::post('/save-new-team-member', [AdminController::class, 'savemember'])->name('admin.save.team');
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::get('/get-in-touch-messages', [AdminController::class, 'messages'])->name('admin.messages');
        Route::get('/news-letter-emails', [AdminController::class, 'NewsLetter'])->name('admin.NewsLetter');


    });
});

Route::get('/team-status-active/{id}', [AdminController::class, 'status1'])->name('active');
Route::get('/team-status-block/{id}', [AdminController::class, 'status0'])->name('block');

Route::post('/admin/authenticate', [AdminController::class, 'authenticate']);
Route::get('/admin/login', [AdminController::class, 'signin'])->name('admin.login');

