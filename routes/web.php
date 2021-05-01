<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $haber = App\Models\Haber::first();
    app()->setLocale('tr');
    return view('oyuncu.index',[
        'haber' => $haber
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
