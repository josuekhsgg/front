<?php

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

Route::get('/', function () {
    return view('welcome')->with(['menu' => 'admin']);
})->name('welcome-admin');

Route::get('/gerente', function () {
    return view('welcome')->with('menu', "gerente");
})->name('welcome-gerente');

Route::get('/vendedor', function () {
    return view('welcome')->with('menu', "vendedor");
})->name('welcome-vendedor');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/recover/{motivo}', function ($motivo) {
    return view('recover')->with(['motivo' => $motivo]);
})->name('recover');


Route::get('/register', function () {
    return view('register');
})->name('register');
