<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
// Route::resource('/profil/sambutan', 'ProfilController');
// Route::resource('/profil/ringkasan', 'ProfilController');
// Route::resource('/profil/vmts', 'ProfilController');
// Route::resource('/staff', 'StaffController');
// Route::resource('/persyaratan', 'PersyaratanController');
// Auth::routes();

Route::get('/', 'PageController@index')->name('index');
Route::get('/profil/sambutan', 'PageController@sambutan')->name('sambutan');
Route::get('/profil/ringkasan', 'PageController@ringkasan')->name('ringkasan');
Route::get('/profil/visimisi', 'PageController@vmts')->name('visimisi');
Route::get('/staff', 'PageController@staff')->name('staff');
Route::get('/syaratkepengurusan/sekretaris', 'PageController@sekretaris')->name('sekretaris');
Route::get('/syaratkepengurusan/kebersihan', 'PageController@sKebersihan')->name('kebersihan');
Route::get('/syaratkepengurusan/pemerintahan', 'PageController@sPemerintahan')->name('pemerintahan');
Route::get('/syaratkepengurusan/perekonomian', 'PageController@sPerekonomian')->name('perekonomian');
Route::get('/kontak', 'PageController@kontak')->name('kontak');
Route::get('/pkk', 'PageController@pkk')->name('pkk');
Route::get('/lurah', 'PageController@lurah')->name('lurah');
Route::get('/kepengurusanberkas', 'PageController@kepengurusanberkas')->name('berkas');