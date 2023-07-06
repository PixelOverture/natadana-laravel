<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.landing');
})->name('landing');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/email-verify/{email}', [AuthController::class, 'emailVerify'])->name('email.verify');
Route::post('/register', [AuthController::class, 'postRegister'])->name('post.register');
Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');

Route::post('/logout', function () {
    auth()->logout();
    return redirect()->route('landing');
})->name('logout');

// dahsboard in middleware auth
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
