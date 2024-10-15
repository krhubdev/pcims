<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return redirect('/prenatal');
    });

    Route::get('/development/{id}', function ($id) {
        return view('development');
    });
    
    Route::get('/prenatal',[InfoController::class, 'index']);
    Route::get('/prenatal/registration',[InfoController::class, 'registration']);
    Route::get('/prenatal/details',[InfoController::class, 'details']);
    Route::post('/info/added',[InfoController::class, 'store'])->name('info.save');
});
