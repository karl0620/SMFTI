@extends('Admin\dashboardAdmin')

@section('layout')
    <h1>Buat Surat</h1>
    <div class="flex-row-reverse">
        <a class="btn btn-primary" href="/Admin/Home">Back</a>
    </div>
@endsection

@section('isi')
<ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Personalian</div>
      <a href="#">Buat surat</a>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Keterangan Dekan</div>
      <a href="#">Buat surat</a>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Tugas & Kegiatan</div>
      <a href="/Admin/Home/BuatSurat/3">Buat surat</a>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Undangan</div>
      <a href="#">Buat surat</a>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Daftar Hadir</div>
      <a href="#">Buat surat</a>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">DP3</div>
      <a href="#">Buat surat</a>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Berita Acara Kegiatan</div>
      <a href="#">Buat surat</a>
    </div>
  </li>
</ol>
@endsection
