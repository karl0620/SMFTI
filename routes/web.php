<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthMahasiswaLoginController;
use App\Http\Controllers\AuthDosenLoginController;
use App\Http\Controllers\AuthAdminLoginController;
use App\Http\Controllers\SuratTugasMhsController;
use App\Http\Controllers\SuratIjinKpMhsController;
use App\Http\Controllers\SuratTugasDosenController;
use App\Models\SuratTugas;
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
Route::get('/Mahasiswa/Home', 'AuthMahasiswaController@dashboard')->name('dashboard')->middleware('auth');
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
Route::get('/Mahasiswa/Home/ListSurat/{item:id}/Detail', 'SuratTugasController@detailMhs')->name('detailMhs')->middleware('auth');
Route::get('/Mahasiswa/Home/ListSurat/{item:id}/Edit', 'SuratTugasController@editMhs')->name('editInd')->middleware('auth');
Route::post('/Mahasiswa/Home/ListSurat/{item:id}/Edit', 'SuratTugasController@updateMhs')->name('updateMhs')->middleware('auth');
Route::get('/Mahasiswa/Home/BuatSurat/TugasKelompok', function () {
    return view('Mahasiswa\suratTugasKel');
})->middleware('auth');
Route::post('/Mahasiswa/Home/BuatSurat/TugasKelompok', 'SuratTugasController@submitKelMhs')->name('submitKelMhs')->middleware('auth');
Route::get('/Mahasiswa/Home/BuatSurat/SuratKegiatan', function () {
    return view('Mahasiswa\suratKegiatan');
})->middleware('auth');
Route::post('/Mahasiswa/Home/BuatSurat/SuratKegiatan', 'SuratTugasController@submitIndMhs')->name('submitIndMhs')->middleware('auth');
Route::post('/Mahasiswa/Home/ListSurat/{item:id}', 'SuratTugasController@deleteMhs')->name('deleteMhs');

//Dosen
Route::get('/Dosen', function(){
    return view ('Dosen\loginDosen');
})->middleware('guest');
Route::get('/Dosen/Home', 'AuthDosenController@dashboard')->name('dashboard')->middleware('auth');
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
Route::get('/Dosen/Home/ListSurat/{item:id}/Detail', 'SuratTugasController@detailDsn')->name('detailDsn')->middleware('auth');
Route::get('/Dosen/Home/ListSurat/{item:id}/Edit', 'SuratTugasController@editDsn')->name('editDsn')->middleware('auth');
Route::post('/Dosen/Home/ListSurat/{item:id}/Edit', 'SuratTugasController@updateDsn')->name('updateDsn')->middleware('auth');
Route::get('/Dosen/Home/BuatSurat/TugasKelompok', function () {
    return view('Dosen\suratTugasKel');
})->middleware('auth');
Route::post('/Dosen/Home/BuatSurat/TugasKelompok', 'SuratTugasController@submitKelDsn')->name('submitKelDsn')->middleware('auth');
Route::get('/Dosen/Home/BuatSurat/SuratKegiatan', function () {
    return view('Dosen\suratKegiatan');
})->middleware('auth');
Route::post('/Dosen/Home/BuatSurat/SuratKegiatan', 'SuratTugasController@submitIndDsn')->name('submitIndDsn')->middleware('auth');
Route::post('/Dosen/Home/ListSurat/{item:id}', 'SuratTugasController@deleteMhs')->name('deleteMhs');

//Admin
Route::get('/Admin', function(){
    return view ('Admin\loginAdmin');
})->middleware('guest');
Route::get('/Admin/Home', 'AuthAdminController@dashboard')->name('dashboard')->middleware('auth');
Route::post('/Admin/Home', 'AuthAdminController@login')->name('login');
Route::post('/logoutAdmin', 'AuthAdminController@logout')->name('logout');
Route::get('/Admin/Home/BuatSurat', function () {
    return view('Admin\BuatSurat\buatSurat');
})->middleware('auth');
Route::get('/Admin/Home/ListSurat', function () {
    return view('Admin\ListSurat\listSurat');
})->middleware('auth');

//Admin-Surat Tugas
Route::get('/Admin/Home/ListPengajuan', function () {
    $suratTugas = SuratTugas::where('status', 'Sedang Diproses')->get();
    return view('Admin\listPengajuan', compact('suratTugas'));
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
Route::get('/Admin/Home/BuatSurat/3/SuratKegiatan', function () {
    return view('Admin\BuatSurat\suratKegiatan');
})->middleware('auth');
Route::post('/Admin/Home/BuatSurat/3/SuratKegiatan', 'SuratTugasController@submitIndAdm')->name('submitIndAdm')->middleware('auth');
Route::get('/Admin/Home/ListPengajuan/{item:id}/Detail', 'SuratTugasController@detailAdmin')->name('detailAdmin')->middleware('auth');
Route::get('/Admin/Home/ListPengajuan/{item:id}/Edit', 'SuratTugasController@editAdm')->name('editAdm')->middleware('auth');
Route::post('/Admin/Home/ListPengajuan/{item:id}/Edit', 'SuratTugasController@updateAdm')->name('updateAdm')->middleware('auth');
Route::post('/Admin/Home/ListPengajuan/{item:id}', 'SuratTugasController@deleteAdm')->name('deleteAdm')->middleware('auth');
Route::post('/Admin/Home/ListPengajuan/{item:id}/Detail/Setuju', 'SuratTugasController@setuju')->name('setuju')->middleware('auth');
Route::post('/Admin/Home/ListPengajuan/{item:id}/Detail/Tolak', 'SuratTugasController@tolak')->name('tolak')->middleware('auth');
Route::get('/Admin/Home/ListSurat/SuratTugas', 'ListTugasController@showTgsAdm')->name('showTgsAdm')->middleware('auth');
Route::get('/Admin/Home/ListSurat/SuratTugas/{item:id}/Detail', 'SuratTugasController@detailAdm')->name('detailAdm')->middleware('auth');

//Admin-SK Dekan
Route::get('/Admin/Home/BuatSurat/SKDekan', function () {
    return view('Admin\BuatSurat\skDekan');
})->middleware('auth');
Route::post('/Admin/Home/BuatSurat/SKDekan', 'SuratKeputusanDekanController@submit')->name('submit')->middleware('auth');
Route::get('/Admin/Home/ListSurat/SKDekan', 'SuratKeputusanDekanController@show')->name('show')->middleware('auth');
Route::get('/Admin/Home/ListSurat/SKDekan/{item:id}/Detail', 'SuratKeputusanDekanController@detail')->name('detail')->middleware('auth');

//Admin-Daftar Hadir
Route::get('/Admin/Home/BuatSurat/DaftarHadir', function () {
    return view('Admin\BuatSurat\daftarHadir');
})->middleware('auth');
Route::post('/Admin/Home/BuatSurat/DaftarHadir', 'DaftarHadirController@submit')->name('submit')->middleware('auth');
Route::get('/Admin/Home/ListSurat/DaftarHadir', 'DaftarHadirController@show')->name('show')->middleware('auth');
Route::get('/Admin/Home/ListSurat/DaftarHadir/{item:id}/Detail', 'DaftarHadirController@detail')->name('detail')->middleware('auth');

//Admin-Personalian
Route::get('/Admin/Home/BuatSurat/Personalian', function () {
    return view('Admin\BuatSurat\personalian');
})->middleware('auth');
Route::post('/Admin/Home/BuatSurat/Personalian', 'PersonalianController@submit')->name('submit')->middleware('auth');
Route::get('/Admin/Home/ListSurat/Personalian', 'PersonalianController@show')->name('show')->middleware('auth');
Route::get('/Admin/Home/ListSurat/Personalian/{item:id}/Detail', 'PersonalianController@detail')->name('detail')->middleware('auth');

//Admin-BeritaAcara
Route::get('/Admin/Home/BuatSurat/BeritaAcara', function () {
    return view('Admin\BuatSurat\beritaAcara');
})->middleware('auth');
Route::post('/Admin/Home/BuatSurat/BeritaAcara', 'BeritaAcaraController@submit')->name('submit')->middleware('auth');
Route::get('/Admin/Home/ListSurat/BeritaAcara', 'BeritaAcaraController@show')->name('show')->middleware('auth');
Route::get('/Admin/Home/ListSurat/BeritaAcara/{item:id}/Detail', 'BeritaAcaraController@detail')->name('detail')->middleware('auth');