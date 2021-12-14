@extends('Mahasiswa\dashboardMhs')

@section('layout')
    <h1>Surat Kegiatan</h1>
    <div class="flex-row-reverse">
        <a class="btn btn-primary" href="/Mahasiswa/Home/BuatSurat">Back</a>
    </div>
@endsection

@section('isi')
    <form action="/Mahasiswa/Home/BuatSurat/SuratKegiatan" method="post">
        @csrf
        <div class="control-group input-group mb-3">
                <input type="text" class="form-control" id="nim" name="nim" required value="{{ auth()->user()->nim }}">
                <input type="text" class="form-control" id="name" name="name" required value="{{ auth()->user()->name }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Kegiatan</label>
            <input type="date" class="form-control" id="tglTugas" name="tglTugas" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kegiatan</label>
            <input type="text" class="form-control" id="tugas" name="tugas" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Mitra</label>
            <input type="text" class="form-control" id="namaMitra" name="namaMitra" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat Mitra</label>
            <input type="address" class="form-control" id="alamatMitra" name="alamatMitra" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
        </div>
        <input type="hidden" id="status" name="status" required value="Sedang Diproses">
        <input type="hidden" id="jenis" name="jenis" required value="Kegiatan">
        <button type="sibmit" class="btn btn-primary">Submit</button>
    </form>
@endsection
