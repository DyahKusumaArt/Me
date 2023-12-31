<?php

use App\Http\Controllers\forgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'home']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/portfolio',[HomeController::class,'portfolio']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/login',[LoginController::class,'Login']);
Route::post('/login',[LoginController::class,'loginUser'])->name('llogin');
Route::get('/register', [LoginController::class, 'showRegister'])->name('register');
Route::post('/register', [LoginController::class, 'register']);
// Show the forgot password form
Route::get('/forgotPassword', [forgotPasswordController::class, 'showLinkRequestForm']);

// Handle the forgot password form submission
Route::post('/forgotPassword', [forgotPasswordController::class, 'sendResetLinkEmail']);

// Show the password reset form
Route::get('/resetPassword/{token}', [forgotPasswordController::class, 'showResetForm'])->name('password.reset');

// Handle the password reset form submission
Route::post('/resettPassword', [forgotPasswordController::class, 'reset']);
