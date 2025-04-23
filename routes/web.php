<?php

use App\Http\Controllers\HalmanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Requests\PostRequest;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HalmanController::class, 'home'] )->name('home');
Route::get('/about',[HalmanController::class, 'about'] )->name('about');
// Route::get('/hoby', [HalmanController::class, 'hoby'] )->name('hooby');
Route::get('/contact', [HalmanController::class, 'contact'])->name('contact.submit');

Route::post('/contact', function (PostRequest $request) {
    return back()->with('success', 'Data Terkirim-!');
});

// laravel_crud
Route::resource('posts', PostController::class);

// authentification login
Route::get("/login", [UserController::class, 'login'])->name('login');
Route::post("/do-login", [UserController::class, 'doLogin'])->name('doLogin');
Route::post("/do-logout", [UserController::class, 'doLogout'])->name('doLogout');

Route::get("/sample", [UserController::class, 'createSample'])->name('createSample');
