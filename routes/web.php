<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;

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
    return view('welcome');
});

// Route::resource('logins',MainController::class);

Route::get('/homepage', function(){
    return view('homepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/authenticate',[LoginController::class,'authenticate']);

Route::get('/registration',[LoginController::class,'registration'],[
    
]);

Route::get('/logout',[LoginController::class,'logout']);
