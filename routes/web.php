<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home.index');
});

use App\Http\Controllers\RegistroController;

Route::get('/registro', [RegistroController::class, 'index'])
    ->name('registro');

Route::get('/index', [RegistroController::class, 'registro'])
    ->name('index');

Route::post('/registro', [RegistroController::class, 'store'])
    ->name('registro.guardar');




use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;

/*
INDEX
*/

Route::get('/a', function () {
    return view('home.index');
})->name('inicio.web');


/*
LOGIN
*/

Route::get('/login', [LoginController::class, 'index'])
        ->name('login');

Route::post('/login', [LoginController::class, 'login'])
        ->name('login.validar');

/*
SESSION
*/

Route::get('/session', [SessionController::class, 'index'])
        ->name('session');

/*
LOGOUT
*/

Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');

use App\Http\Controllers\ChatBotController;

Route::post('/chatbot',
    [ChatBotController::class,'respuesta'])
    ->name('chatbot');


Route::get('/reset-password', function () {
    return view('home.reset');
})->name('password.reset');

Route::get('/error', function () {
    return view('home.error');
})->name('error');