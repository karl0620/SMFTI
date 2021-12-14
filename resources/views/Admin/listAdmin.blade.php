@extends('Admin\dashboardAdmin')

@section('layout')
    <h1>Welcome, @auth {{ auth()->user()->name }} @endauth</h1>
@endsection

@section('isi')
<ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Personalian dan Surat Keterangan</div>
      <a href="/Admin/Home/SuratA">Detail list</a>
    </div>
    <span class="badge bg-primary rounded-pill">0</span>
</li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Keterangan Kegiatan Mahasiswa</div>
      <a href="/Admin/Home/SuratB">Detail list</a>
    </div>
    <span class="badge bg-primary rounded-pill">{{ $suratKM }}</span>
</li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Undangan dan Daftar Hadir</div>
      <a href="/Admin/Home/SuratC">Detail list</a>
    </div>
    <span class="badge bg-primary rounded-pill">{{ $suratIKP }}</span>
</li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Surat Tugas dan DP3</div>
      <a href="/Admin/Home/SuratD">Detail list</a>
    </div>
    <span class="badge bg-primary rounded-pill">{{ $suratTD }}</span>
</li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Berita Acara Kegiatan</div>
      <a href="/Admin/Home/SuratE">Detail list</a>
    </div>
    <span class="badge bg-primary rounded-pill">0</span>
</li>
</ol>
@endsection
