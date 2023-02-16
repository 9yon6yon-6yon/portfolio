<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Photos;
use App\Http\Controllers\RegisterUser;

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
    return view('index');
});
Route::get('/login', [RegisterUser::class,'login_index'])->name('Login');
Route::post('/login', [RegisterUser::class,'logIn']);

Route::get('/register', [RegisterUser::class,'reg_index']);
Route::post('/register',[RegisterUser::class,'signUp']);


Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/update-profile', function () {
    return view('updateProfile');
});

