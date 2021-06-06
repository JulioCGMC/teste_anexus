<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\AdminController;

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

Route::redirect('/', '/common');
Route::redirect('/home', '/common');

Route::post('/common/login', [CommonController::class, 'login'])->name('common.login');
Route::post('/common/logout', [CommonController::class, 'logout'])->name('common.logout');
Route::resource('/common', CommonController::class)->only([
    'index', 'show', 'store'
]);
Route::resource('/admin', AdminController::class)->only('index');
Route::get('/admin/{id}', [AdminController::class, 'show'])->name('admin.show');