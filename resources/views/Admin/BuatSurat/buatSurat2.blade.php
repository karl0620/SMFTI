@extends('Admin\dashboardAdmin')

@section('layout')
    <h1>Buat Surat</h1>
    <div class="flex-row-reverse">
        <a class="btn btn-primary" href="/Admin/Home/BuatSurat">Back</a>
    </div>
@endsection

@section('isi')
<ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Tugas Individu</div>
      <a href="/Admin/Home/BuatSurat/3/TugasIndividu">Buat surat</a>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Tugas Kelompok</div>
      <a href="/Admin/Home/BuatSurat/3/TugasKelompok">Buat surat</a>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Kegiatan</div>
      <a href="/Admin/Home/BuatSurat/3/SuratKegiatan">Buat surat</a>
    </div>
  </li>
</ol>
@endsection
