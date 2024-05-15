<?php

use App\Livewire\ListStudents;
use App\Livewire\CreateStudent;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/students', ListStudents::class)->name('students.index');
    Route::get('/students/create', CreateStudent::class)->name('students.create');
});

require __DIR__.'/auth.php';
