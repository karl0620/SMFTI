@extends('Dosen\dashboardDosen')

@section('layout')
    <h1>Surat Tugas Dosen</h1>
@endsection

@section('isi')
    <form action="/Dosen/Home/BuatSurat/SuratTugas" method="post">
        @csrf
        <input type="hidden" id="nim" name="nim" required value="{{ auth()->user()->nim }}">
        <input type="hidden" id="name" name="name" required value="{{ auth()->user()->name }}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal pelaksanaan </label>
            <input type="date" class="form-control" id="tglPelaksanaan" name="tglPelaksanaan" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Lokasi Kegiatan</label>
            <input type="address" class="form-control" id="lksKegiatan" name="lksKegiatan" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Mitra</label>
            <input type="text" class="form-control" id="namaMitra" name="namaMitra" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
        </div>
        <input type="hidden" id="status" name="status" required value="Sedang Diproses">
        <button type="sibmit" class="btn btn-primary">Submit</button>
    </form>
@endsection
