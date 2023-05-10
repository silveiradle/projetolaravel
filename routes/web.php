<?php

use App\Enums\SupportStatus;
use App\Http\Controllers\Admin\{SupportController};

use Illuminate\Support\Facades\Route;

// COMO CRIAR NOVA ROTA:
// IMPORTAR CONTROLLER
// ROTA -> CONTROLLER -> MÉTODO DENTRO DE CONTROLLER


Route::get('/', function () {
    return view('welcome');
});

// URL PRINCIPAL
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

// CREATE
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

// ADD TO DB
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');

// SHOW
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');

// EDIT
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');

// UPDATE
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');

// DELETE
Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');

Route::get('/test', function(){
     dd(SupportStatus::cases());
});