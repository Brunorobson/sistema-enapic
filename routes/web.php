<?php

use App\Http\Controllers\{PagesController, UserController};
use App\Livewire\Avaliation\{AvaliationIndex, AvaliationMake, AvaliationModal};
use App\Livewire\Event\EventIndex;
use App\Livewire\Inscription\InscriptionIndex;
use App\Livewire\Role\{RoleCreate, RoleEdit, RoleIndex, RoleShow};
use App\Livewire\Submission\{SubmissionIndex, SubmissionMake, SubmissionShow};
use App\Livewire\User\{UserCreate, UserEdit, UserIndex};
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;

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
Route::post('register-user', [UserController::class, 'store'])->name('register-user');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/', function () {
        return redirect('home/index');
    })->name('index');

    Route::get('/home/index', [PagesController::class, 'index'])->name('home/index');

    Route::get('dashboard/events', EventIndex::class)->name('dashboard/events');

    Route::get('dashboard/submissions', SubmissionIndex::class)->name('dashboard/submissions');
    Route::get('/dashboard/submission/create', SubmissionMake::class)->name('dashboard/submission/create');
    Route::get('/dashboard/submission/{id}/edit', SubmissionMake::class)->name('dashboard/submission/edit');
    Route::get('/dashboard/submission/{id}/show', SubmissionShow::class)->name('dashboard/submission/show');

    Route::get('dashboard/inscriptions', InscriptionIndex::class)->name('dashboard/inscriptions');

    Route::get('dashboard/avaliations', AvaliationIndex::class)->name('dashboard/avaliations');
    Route::get('/dashboard/avaliations/{id}/edit', AvaliationMake::class)->name('dashboard/avaliation/edit');

    Route::get('/settings/users', UserIndex::class)->name('settings/users');
    Route::get('/settings/users/create', UserCreate::class)->name('settings/users/create');
    Route::get('/settings/users/{id}/edit', UserEdit::class)->name('settings/users/edit');

    Route::get('/settings/roles', RoleIndex::class)->name('settings/roles');
    Route::get('/settings/roles/create', RoleCreate::class)->name('settings/roles/create');
    Route::get('/settings/roles/{uuid}', RoleShow::class)->name('settings/roles/show');
    Route::get('/settings/roles/{uuid}/edit', RoleEdit::class)->name('settings/roles/edit');

    Route::get('/settings/profile', [UserProfileController::class, 'show'])->name('settings/profile');

});
