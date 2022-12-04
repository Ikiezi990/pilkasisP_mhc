<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



// Halaman utama web
Route::get('/', function () {
    return view('pemilih.index');
});



// Route untuk menuju menu dashboard admin
Route::get('/admin/index', function () {
    $data['title']='Dashboard';
    return view('admin.indexAdmin',$data);
});


// route untuk menuju ke menu calon ketua $ wakil
Route::get('/admin/calon-kewa', function () {
    $data['title']='Calon ketua & wakil';
    return view('admin.calonKewa.calonKewa',$data);
});


// route untuk menu menu laporan
Route::get('/admin/laporan', function () {
    $data['title']='Laporan ';
    return view('admin.laporan.laporan',$data);
});


// route untuk menu menu Periode
Route::get('/admin/periode', function () {
    $data['title']='Periode ';
    return view('admin.periode.periode',$data);
});









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pemilih', [App\Http\Controllers\PemilihController::class, 'index']);
Route::get('/pemilih/list/{id}', [App\Http\Controllers\PemilihController::class, 'show']);


