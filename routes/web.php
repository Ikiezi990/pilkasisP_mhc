<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Pemilih;


// Halaman utama web
Route::get('/', function () {
    return view('pemilih.index');
});


// Route untuk menuju menu dashboard admin
Route::get('/admin/index', function () {
    $data['title']='Dashboard';
    return view('admin.indexAdmin',$data);
});




// route untuk menuju ke menu calon ketua $ wakil dan Detail kewa
Route::get('/admin/calon-kewa', function () {
    $data['title']='Calon ketua & wakil';
    return view('admin.calonKewa.calonKewa',$data);
});
Route::get('/admin/calon-kewa/detail-kewa', function () {
    $data['title']='Detail Calon ketua & wakil';
    return view('admin.calonKewa.DetailKewa',$data);
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

// route untuk data pemilih
Route::get('admin/pemilih', [App\Http\Controllers\PemilihController::class, 'index']);
Route::get('admin/pemilih/list/{id}', [App\Http\Controllers\PemilihController::class, 'show']);
// route menuju detail pemilih
Route::get('/admin/list/detail-pemilih/{id}', function ($id) {
    $data['title']='detail Pemilih ';
    $data['pemilih'] = Pemilih::where('id', $id)->get();
    return view('admin.data_pemilih.detailPemilih',$data);
});





//user
Route::get('/pemilih/calon-kewa', function () {
    $data['title']='Periode ';
    return view('pemilih.calonkewa.calonkewa',$data);
});

