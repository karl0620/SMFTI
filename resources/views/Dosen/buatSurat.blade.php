@extends('Dosen\dashboardDosen')

@section('layout')
    <h1>Buat Surat</h1>
    <div class="flex-row-reverse">
        <a class="btn btn-primary" href="/Dosen/Home">Back</a>
    </div>
@endsection

@section('isi')
<ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Tugas Individu</div>
      <a href="/Dosen/Home/BuatSurat/TugasIndividu">Buat surat</a>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Tugas Kelompok</div>
      <a href="/Dosen/Home/BuatSurat/TugasKelompok">Buat surat</a>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Kegiatan</div>
      <a href="/Dosen/Home/BuatSurat/SuratKegiatan">Buat surat</a>
    </div>
  </li>
</ol>
@endsection
