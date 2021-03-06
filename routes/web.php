<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseManagement;
use App\Http\Middleware\AuthCheck;

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
        return view('backend.auth.login');
    });

  

Route::post('register-user',[BaseManagement::class,'registeruser'])->name('register-user');
Route::post('login-user',[BaseManagement::class,'loginuser'])->name('login-user');

Route::get('logout',[BaseManagement::class,'logout'])->name('logout');

Route:: group(['middleware'=>['AuthCheck']],function(){
    Route::get('login',[BaseManagement::class,'login']);
Route::get('registration',[BaseManagement::class,'registration']);
    Route::get('/home',[BaseManagement::class,'index']);
});

