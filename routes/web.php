<?php

use App\Http\Controllers\CreateNoteController;
use App\Http\Controllers\EditNoteController;
use App\Http\Controllers\StoreNoteController;
use App\Http\Controllers\DeleteNoteController;
use App\Http\Livewire\ShowNote;
use App\Http\Livewire\ShowNotes;
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
    return view('welcome');
});

Route::middleware(
        [
            'auth:sanctum', config('jetstream.auth_session'),
            'verified',
        ]
    )->name('notes.')->prefix('notes')->group( function () {
        Route::get('/', ShowNotes::class)->name('index');
        Route::get('/note/{id}', ShowNote::class)->name('show');

        Route::get('/create', CreateNoteController::class)->name('create');
        Route::get('/edit', EditNoteController::class)->name('edit');
        Route::post('/store', StoreNoteController::class)->name('store');
        Route::post('/delete/{id}', DeleteNoteController::class)->name('delete');
    });
