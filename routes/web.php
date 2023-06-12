<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AvaluatorController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\SubmissionsController;
use App\Models\Submission;
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
    return view('home');
})->name('home');

Route::get('/evento', function () {
    return view('event');
})->name('event');

Route::get('/inscricao', function () {
    return view('auth/register');
})->name('inscription');

//Eventos
Route::get('eventos', [EventController::class, 'index'])->name('eventos');
Route::post('cadastro-evento', [EventController::class, 'store'])->name('evento.store');

// Submissoes
Route::get('/dashboard/minhas-submissoes', [SubmissionsController::class, 'index'])->name('minha-submissao');

// Avaliadores
Route::post('cadastro-avaliador', [AvaluatorController::class, 'create'])->name('avaliador.create');
Route::get('/avaliadores', [AvaluatorController::class, 'index'])->name('avaliadores');

// Salvar submissão
Route::post('/save-file', [FileController::class, 'salvar'])->name('save-file');

// Menus autenticados
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard/dashboard');
    })->name('dashboard');

    Route::get('/dashboard/minha-inscricao', function () {
        return view('dashboard/minha-inscricao');
    })->name('minha-inscricao');

    Route::get('/dashboard/submissoes', function () {
        return view('dashboard/submissoes');
    })->name('submissoes');

    Route::get('/cadastro-avaliador', function () {
        return view('admin/cadastro-avaliador');
    })->name('cadastro-avaliador');

    Route::get('cadastro-evento', function () {
        return view('admin/cadastro-evento');
    })->name('evento');
});




