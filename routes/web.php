<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthAdmin;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'logoutUser'])->name('user.logout');

Route::get('admin', [AdminController::class, 'index'])->name('admin.home');
Route::get('admin/login', [AuthAdmin\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AuthAdmin\LoginController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AuthAdmin\LoginController::class, 'logout'])->name('admin.logout');


