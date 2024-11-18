<?php
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Logincontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| routes are loaded by the RouteServiceProvider within a group which
| Here is where you can register web routes for your application. These
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Homecontroller::class, 'home'])->name('app_home');

Route::get('/about', [Homecontroller::class, 'about'])->name('app_about');

Route::get('/info', [Homecontroller::class, 'info'])->name('app_info');

Route::match(['get', 'post'], '/dashbroad', [Homecontroller::class, 'dashbroad'])->name('app_dashbroad');

Route::match(['get', 'post'], '/login', [Logincontroller::class, 'login'])->name('app_login');

Route::match(['get', 'post'], '/register', [Logincontroller::class, 'register'])->name('app_register');

Route::match(['get', 'post'], '/reset', [Logincontroller::class, 'reset'])->name('app_reset');

