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

Route::get('/Mahasiswa/Home/ListMahasiswa', function () {
    $data_item = User::where('status', 'Mahasiswa')->get();
    return view('Mahasiswa\listMhs', compact('data_item'));
})->middleware('auth');

Route::post('/Mahasiswa/Home', 'AuthMahasiswaController@login')->name('login');

Route::post('/logoutMhs', 'AuthMahasiswaController@logout')->name('logout');

Route::get('/Mahasiswa/Home/ListSuratTugas', 'SuratTugasMhsController@showSurat')->name('showSurat')->middleware('auth');
Route::get('/Mahasiswa/Home/ListSuratIzinKp', 'SuratIjinKpMhsController@showSurat')->name('showSurat')->middleware('auth');

Route::post('/Mahasiswa/Home/BuatSurat/SuratTugas', 'SuratTugasMhsController@submitSurat')->name('submitSurat');
Route::post('/Mahasiswa/Home/BuatSurat/SuratIzinKp', 'SuratIjinKpMhsController@submitSurat')->name('submitSurat');

Route::get('/Mahasiswa/Home/SuratTugas', function () {
    $data_nim = 3;
    return view('Mahasiswa\suratTugasMhs', compact('data_nim'));
})->middleware('auth');

Route::get('/Mahasiswa/Home/SuratIzinKP', function () {
    return view('Mahasiswa\suratIjinKpMhs');
})->middleware('auth');

//Dosen
Route::get('/Dosen', function(){
    return view ('Dosen\loginDosen');
})->middleware('guest');

Route::get('/Dosen/Home', function () {
    return view('Dosen\dashboardDosen');
})->middleware('auth');

Route::post('/Dosen/Home', 'AuthDosenController@login')->name('login');

Route::post('/logoutDosen', 'AuthDosenController@logout')->name('logout');

Route::get('/Dosen/Home/ListSuratTugas', 'SuratTugasDosenController@showSurat')->name('showSurat')->middleware('auth');

Route::post('/Dosen/Home/BuatSurat/SuratTugas', 'SuratTugasDosenController@submitSurat')->name('submitSurat');

Route::get('/Dosen/Home/SuratTugas', function () {
    return view('Dosen\suratTugasDosen');
})->middleware('auth');

Route::post('/Dosen/Home/ListSuratTugas/{item:id}', 'SuratTugasDosenController@deleteDosen')->name('deleteDosen');

Route::get('/Dosen/Home/ListSuratTugas/{item:id}/Edit', 'SuratTugasDosenController@formEditDosen')->name('formEditDosen');

Route::post('/Dosen/Home/ListSuratTugas/{item:id}/Edit', 'SuratTugasDosenController@editDosen')->name('editDosen');

//Admin
Route::get('/Admin', function(){
    return view ('Admin\loginAdmin');
})->middleware('guest');

Route::post('/Admin/Home', 'AuthAdminController@login')->name('login');

Route::post('/logoutAdmin', 'AuthAdminController@logout')->name('logout');

Route::get('/Admin/Home', 'AuthAdminController@dashboard')->name('dashboard')->middleware('auth');

Route::get('/Admin/Home/SuratB', 'SuratTugasMhsController@listAdmin')->name('listAdmin')->middleware('auth');
Route::get('/Admin/Home/SuratC', 'SuratIjinKpMhsController@listAdmin')->name('listAdmin')->middleware('auth');
Route::get('/Admin/Home/SuratD', 'SuratTugasDosenController@listAdmin')->name('listAdmin')->middleware('auth');

Route::get('/Admin/Home/SuratD/Detail/{item:id}', 'SuratTugasDosenController@detailAdmin')->name('detailAdmin')->middleware('auth');

Route::get('/Admin/Home/ListSurat', 'AuthAdminController@listSurat')->name('listSurat')->middleware('auth');

Route::get('/Admin/Home/BuatSurat', 'AuthAdminController@formBuatSurat')->name('formBuatSurat')->middleware('auth');

Route::post('/Admin/Home/SuratD/Detail/{item:id}/Setuju', 'SuratTugasDosenController@prosesSurat')->name('prosesSurat');

Route::post('/Admin/Home/SuratD/Detail/{item:id}/Tolak', 'SuratTugasDosenController@prosesSurat')->name('prosesSurat');
