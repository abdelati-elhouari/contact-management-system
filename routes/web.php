<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/update/{contact}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/update/{contact}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

