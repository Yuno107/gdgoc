<?php

 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController; 
use App\Http\Controllers\AuthController; 

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
// coba doang ini mah 
Route::get('/form', [FormController::class, 'showForm'])->name('form.show');  
Route::post('/form', [FormController::class, 'submitForm'])->name('form.submit');
//sampe sini coba doang

Route::get('/', [AuthController::class, 'showRegister'])->name('register');  
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');    

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');  
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');  

Route::get('/test/{id}', [AuthController::class, 'showTest'])->name('showTest');
//route for navbar
Route::get('/dashboard', [AuthController::class, 'showdashboard'])->name('showdashboard');
Route::get('/blog', [AuthController::class, 'showblog'])->name('showblog');
Route::get('/contact', [AuthController::class, 'showcontact'])->name('showcontact');