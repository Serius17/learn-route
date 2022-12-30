<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    echo "Persib Nu Aing";
});
Route::get('/salam/{nama}', function ($nama) {
    echo "<h2>Good day, $nama!</h2>";
});
Route::get('/produk/{nama?}/{qty?}', function ($nama = "N/A", $qty = 0) {
    echo "<p>Jual <strong>$nama</strong>. Stok saat ini: $qty</p>";
});
Route::get('users/{id?}', function ($id = -1) {
    return "Displaying user with ID: $id";
})->where('id', '[0-9]+');
Route::get('/hubungi-kami', function () {
    return '<h3>Hubungi kami</h3>';
});
Route::redirect('/contact-us', '/hubungi-kami', 301);
// Membantu meredirect laman yang lama ke yang baru kalau di akses user//


// Rouute group
Route::prefix('/admin')->group(function () {
Route::get('/mahasiswa', function () {
    echo "<h1>Administrasi Mahasiswa</h1>";
});
Route::get('/dosen', function () {
    echo "<h1>Administrasi Dosen</h1>";
});
Route::get('/staf', function () {
    echo "<h1>Administrasi Staf Kampus</h1>";
});
});
// Route group

// error
Route::fallback(function () {
    return "<h1>Wah kamu nyasar, segera hubungi Fauzi!</h1>";
});

//error
