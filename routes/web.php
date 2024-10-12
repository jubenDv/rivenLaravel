<?php

use App\Http\Controllers\TshirtController;

Route::get('/tshirts/create', [TshirtController::class, 'create'])->name('tshirts.create');
Route::post('/tshirts', [TshirtController::class, 'store'])->name('tshirts.store');
