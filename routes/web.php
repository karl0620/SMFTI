<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthMahasiswaLoginController;
use App\Http\Controllers\AuthDosenLoginController;
use App\Http\Controllers\AuthAdminLoginController;
use App\Http\Controllers\SuratTugasMhsController;
use App\Http\Controllers\SuratIjinKpMhsController;
use App\Http\Controllers\SuratTugasDosenController;
use App\Models\SuratKegiatanMhs;
use App\Models\SuratIjinKp;
use App\Models\SuratTugasDosen;
use App\Models\User;

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
    return view('Navbar\navbar');
})->middleware('guest');

//Mahasiswa
Route::get('/Mahasiswa', function(){
    return view ('Mahasiswa\loginMhs');
})->middleware('guest');

Route::get('/Mahasiswa/Home', function () {
    return view('Mahasiswa\dashboardMhs');
})->middleware('auth');

Route::post('/Mahasiswa/Home', 'AuthMahasiswaController@login')->name('login');

Route::post('/logoutMhs', 'AuthMahasiswaController@logout')->name('logout');

Route::get('/Mahasiswa/Home/BuatSurat', function () {
    return view('Mahasiswa\buatSurat');
})->middleware('auth');

Route::get('/Mahasiswa/Home/ListSurat', 'ListTugasController@showTgsMhs')->name('showTgsMhs')->middleware('auth');

Route::get('/Mahasiswa/Home/BuatSurat/TugasIndividu', function () {
    return view('Mahasiswa\suratTugasInd');
})->middleware('auth');

Route::post('/Mahasiswa/Home/BuatSurat/TugasIndividu', 'SuratTugasController@submitIndMhs')->name('submitIndMhs')->middleware('auth');

Route::get('/Mahasiswa/Home/BuatSurat/TugasKelompok', function () {
    return view('Mahasiswa\suratTugasKel');
})->middleware('auth');

Route::post('/Mahasiswa/Home/BuatSurat/TugasKelompok', 'SuratTugasController@submitKelMhs')->name('submitKelMhs')->middleware('auth');

Route::get('/Mahasiswa/Home/BuatSurat/SuratKegiatan', function () {
    return view('Mahasiswa\suratKegiatan');
})->middleware('auth');

Route::post('/Mahasiswa/Home/ListSurat/{item:id}', 'SuratTugasController@deleteMhs')->name('deleteMhs');

//Dosen
Route::get('/Dosen', function(){
    return view ('Dosen\loginDosen');
})->middleware('guest');

Route::get('/Dosen/Home', function () {
    return view('Dosen\dashboardDosen');
})->middleware('auth');

Route::post('/Dosen/Home', 'AuthDosenController@login')->name('login');

Route::post('/logoutDosen', 'AuthDosenController@logout')->name('logout');

Route::get('/Dosen/Home/BuatSurat', function () {
    return view('Dosen\buatSurat');
})->middleware('auth');

Route::get('/Dosen/Home/ListSurat', 'ListTugasController@showTgsDsn')->name('showTgsDsn')->middleware('auth');

Route::get('/Dosen/Home/BuatSurat/TugasIndividu', function () {
    return view('Dosen\suratTugasInd');
})->middleware('auth');

Route::post('/Dosen/Home/BuatSurat/TugasIndividu', 'SuratTugasController@submitIndDsn')->name('submitIndDsn')->middleware('auth');

Route::get('/Dosen/Home/BuatSurat/TugasKelompok', function () {
    return view('Dosen\suratTugasKel');
})->middleware('auth');

Route::post('/Dosen/Home/BuatSurat/TugasKelompok', 'SuratTugasController@submitKelDsn')->name('submitKelDsn')->middleware('auth');

Route::get('/Dosen/Home/BuatSurat/SuratKegiatan', function () {
    return view('Dosen\suratKegiatan');
})->middleware('auth');

Route::post('/Dosen/Home/ListSurat/{item:id}', 'SuratTugasController@deleteMhs')->name('deleteMhs');

//Admin
Route::get('/Admin', function(){
    return view ('Admin\loginAdmin');
})->middleware('guest');

Route::get('/Admin/Home', function () {
    return view('Admin\dashboardAdmin');
})->middleware('auth');

Route::post('/Admin/Home', 'AuthAdminController@login')->name('login');

Route::post('/logoutAdmin', 'AuthAdminController@logout')->name('logout');

Route::get('/Admin/Home/BuatSurat', function () {
    return view('Admin\BuatSurat\buatSurat');
})->middleware('auth');

Route::get('/Admin/Home/ListSurat', function () {
    return view('Admin\ListSurat\listSurat');
})->middleware('auth');

Route::get('/Admin/Home/BuatSurat/3', function () {
    return view('Admin\BuatSurat\buatSurat2');
})->middleware('auth');

Route::get('/Admin/Home/BuatSurat/3/TugasIndividu', function () {
    return view('Admin\BuatSurat\suratTugasInd');
})->middleware('auth');

Route::post('/Admin/Home/BuatSurat/3/TugasIndividu', 'SuratTugasController@submitIndAdm')->name('submitIndAdm')->middleware('auth');

Route::get('/Admin/Home/BuatSurat/3/TugasKelompok', function () {
    return view('Admin\BuatSurat\suratTugasKel');
})->middleware('auth');

Route::post('/Admin/Home/BuatSurat/3/TugasKelompok', 'SuratTugasController@submitKelAdm')->name('submitKelAdm')->middleware('auth');

Route::get('/Admin/Home/BuatSurat/SuratKegiatan', function () {
    return view('Admin\BuatSurat\suratKegiatan');
})->middleware('auth');
