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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/soal', 'SoalController@index')->name('soal.index'); //routing pencarian soal

Route::get('/soal/create', 'SoalController@create')->name('soal.create');
Route::post('/soal', 'SoalController@store');
Route::get('/soal/{soal}', 'SoalController@show')->name('soal.show');

Route::delete('soal/{soal}', 'SoalController@destroy');
Route::get('soal/{soal}/edit', 'SoalController@edit')->name('soal.edit'); 
Route::patch('soal/{soal}', 'SoalController@update');

Route::get('/ujian', 'UjianController@index')->name('ujian.index');
Route::get('/ujian/create', 'UjianController@create')->name('ujian.create');
Route::post('/ujian', 'UjianController@store');


Route::resource('hasilujian','HasilUjianController');


//  Route::post('/admin/soal/cari', 'SoalCariController@show')->name('admin.soalcari.show'); //routing pencarian soal
//     Route::get('/admin/soal/cari', 'SoalController@index')->name('admin.soalcari.index'); //routing pencarian soal
//     Route::get('/admin/soal', 'SoalController@index')->name('admin.soal.index');  //routing lihat daftar soal
//     Route::post('/admin/soal', 'SoalController@store')->name('admin.soal.store'); //routing simpan data soal baru
//     Route::get('/admin/soal/create', 'SoalController@create')->name('admin.soal.create'); //routing tampilkan form data soal baru
//     Route::delete('/admin/soal/{soal}', 'SoalController@destroy')->name('admin.soal.destroy'); //routing hapus data soal baru
//     Route::patch('/admin/soal/{soal}', 'SoalController@update')->name('admin.soal.update'); //routing simpan perubahan data soal
//     Route::get('/admin/soal/{soal}', 'SoalController@show')->name('admin.soal.show'); //routing tampilkan detail soal
//     Route::get('/admin/soal/{soal}/edit', 'SoalController@edit')->name('admin.soal.edit');  //routing tampilkan form edit dosen
