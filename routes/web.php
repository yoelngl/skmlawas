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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('/content/login');
});
Route::get('/regis', function () {
    return view('/content/regis');
});

Route::get('/login', 'Admin@login');
Route::get('/log_admin', 'Admin@act_login');
Route::get('/adhome', 'Admin@adhome');
Route::get('/data_responden', 'Admin@dt_res');
Route::get('/res:edit={id}', 'Admin@editres');
Route::get('/res:hapus={id}', 'Admin@delres');
Route::get('/data_pertanyaan', 'Admin@dt_pertanyaan');
Route::get('/taman','Admin@taman');
Route::post('/taman/create','Admin@create');
Route::get('/taman/{taman_id}/edit','Admin@edit')->name('create.taman');
Route::post('/taman/{taman_id}/update','Admin@update');
Route::get('/taman/{taman_id}/hapus','Admin@hapus');
Route::get('.nilai_taman', 'Admin@taman');

Route::get('/dashboard','Admin@dashboard');
Route::get('/dt_komentar','Admin@dt_komentar');
Route::get('/grafik_komentar','Admin@grafik_komentar');
Route::post('/hasil/tambah', 'Admin@k')->name('content.hasil');
Route::post('/komentar', 'Admin@komentar');
Route::get('/komentar', 'Admin@komentar');
Route::get('/komentar/{taman_id}/komentar', 'Admin@data_komentar');


Route::get('/pertanyaan:tambah', 'Admin@tmbpertanyaan');
Route::get('/pertanyaan:edit={id}', 'Admin@editpertanyaan');
Route::get('/pertanyaan:hapus={id}', 'Admin@delpertanyaan');
Route::get('/data_nilai', 'Admin@dt_nilai');

Route::get('/ad_taman','Admin@ad_taman');
Route::get('/data_tahun_ini', 'Admin@dt_thi');

Route::get('/data_umur', 'Admin@data_umur');
Route::get('/grafik_umur/{taman_id}/','Admin@grafik_umur');
Route::get('/grafik_pekerjaan','Admin@grafik_pekerjaan');
Route::get('/grafik_pendidikan','Admin@grafik_pendidikan');

Route::get('/addres', 'Admin@tmbres');
Route::get('/kerpertanyaan', 'Admin@kerpertanyaan');
Route::get('/hasil/', 'Admin@hasil')->name('komentar.show');

Route::get('/logout', 'Admin@logout');

?>
