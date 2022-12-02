<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('pemilih.index');
});
Route::get('/admin/index', function () {
    return view('admin.indexAdmin');
});







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pemilih', [App\Http\Controllers\PemilihController::class, 'index']);