<?php

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


//pembayarn
Route::get('/', 'homepageController@index');
Route::get('/tablezakat', 'PembayaranController@tablezakat');
//berita
Route::get('/beritasatu', 'BeritaController@tampilberita');
Route::get('/berita', 'BeritaController@berita');
route::get('/editBerita/{id}', 'BeritaController@edit');
route::post('/update/{id}', 'BeritaController@update');
Route::get('/destroy/{id}', 'BeritaController@destroy');
Route::get('storage/{filename}', function ($filename) {
    $path = storage_path('app/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
Route::get('/tambahberita', function () {
    return view('admin.formtambahberita');
});
Route::post('/simpanberita', 'BeritaController@tambahberita')->name('tambahberita');
Route::get('detailBerita/{id}', 'BeritaController@detailBerita');
Route::get('previewBerita/{id}', 'BeritaController@previewBerita');
Route::get('/kalkulator', function () {
    return view('tampilanpengguna.kalkulator');
});
Route::get('/tampilanadmin', function () {
    return view('admin.tampilanadmin');
});
Route::get('/unggahbukti/{id}', function () {
    return view('tampilanpengguna.unggahbukti');
});
Route::get('/tbpembayaran', 'PembayaranController@tablezakatuser');
// Route::post('/uploadbukti/{id}','pembayaranController@unggahbukti')->name('unggahbukti');
route::get('/unggahbukti/{id}', 'PembayaranController@unggah');
route::post('/unggah/{id}', 'PembayaranController@updateunggah');
//login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pembayaran', 'PembayaranController@pembayaran');
Route::post('/pembayaran/store', 'PembayaranController@store');
Route::get('edit/{id}', 'PembayaranController@edit');
Route::post('updatee/{id}', 'PembayaranController@update');
Route::GET('/hapus/{id}', 'PembayaranController@delete');
Route::get('/pembayaran/cari', 'PembayaranController@cari');
Route::get('/tbbelumbayar', 'PembayaranController@verifikasibelumbayar');
Route::get('/terkonfirmasi', 'PembayaranController@terkonfirmasi');
Route::get('/konfirmasi/{id}','PembayaranController@tangkapverifikasi');
Route::get('/profil','usersController@tampilkanprofil');
Route::get('/ditolak', 'PembayaranController@ditolak');
Route::get('/tolak/{id}','PembayaranController@verifikasiditolak');
Route::get('/profil',function(){
    return view('tampilanpengguna.profil');
});
Route::get('/belumbayar','PembayaranController@belumbayar');
