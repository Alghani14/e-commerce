<?php

use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/route-belajar', function() {
    echo 'Belajar Laravel. Tulisan ini ditampilkan dari routes';
});

Route::get('/route-belajar-kirim-data-2', function(){
    $nama = 'Muhammad Alghani';
    $jk = 'Laki Laki';
    return view('view-data', compact('nama', 'jk'));
});

Route::get('/route-belajar-kirim-data', function(){
    $data['nama'] = 'Muhammad Alghani';
    $data['jk'] = 'Laki Laki';
    return view('view-data', $data);
});

Route::get('/route-biodata', function(){
    $nim = '10922008';
    $nama = 'Muhammad Alghani';
    $jurusan= 'MI';
    $alamat= 'Bandung';
    return view('view-biodata', compact('nim', 'nama', 'alamat','jurusan'));
});


Route::get('/route-dosen', function(){
    $data['nip'] = '10922004';
    $data['nidn'] = '12345678';
    $data['nama']= 'Arya';
    $data['tempatlahir']= 'Bandung';
    $data['tl']= '12 Januari';
    return view('view-dosen', $data);
});

Route::get('/route-produk', function(){
    $data['namaproduk'] = 'NB';
    $data['warna'] = 'White';
    $data['ukuran']= '40';
    $data['jumlahstok']= '99';
    return view('view-produk', $data);
});


Route::get('/belajar', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/create', [ProdukController::class, 'store']);
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');
