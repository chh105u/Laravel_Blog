<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\CRUDController;
use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\Auth\RegisterController;

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
Route::get('/', function () {
    return redirect()->route('crud.index');
});

Route::resource('crud', CRUDController::class)->middleware('auth');
// Route::resource('crud', CRUDController::class);

Route::get('/login', [LoginController::class,'show'])->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[RegisterController::class,'show'])->name('register');
Route::post('/register',[RegisterController::class,'register']);

Route::get('/test', function(){
    return 'Login'.var_dump(Auth::check());
});