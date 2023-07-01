<?php

use Illuminate\Support\Facades\Auth;
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
    if (!Auth::check()) {
        return view('home');
    }
    return redirect('/admin/dashboard');    
})->name('home');

Route::get('/evento', function () {
    if (!Auth::check()) {
        return view('event');
    }
    return redirect('/admin/dashboard'); 
})->name('event');

Route::get('/inscricao', function () {
    if (!Auth::check()) {
        return view('auth/register');
    }
    return redirect('/admin/dashboard'); 
})->name('inscription');



// Menus autenticados
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    //Route::get('/admin/submission/edit', Edit::class);


});




