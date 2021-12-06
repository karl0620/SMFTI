@extends('Dashboard\dashboard')

@section('layout')
    <h1>Surat Keputusan Dekan FTI</h1>
@endsection

@section('isi')
    <form action="/Mahasiswa/Home/BuatSurat/SuratTugas" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tujuan Surat</label>
            <input type="date" class="form-control" id="tujuanSurat" name="tujuanSurat" required>
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
        <button type="submit" class="btn btn-secondary">Preview Surat</button>
        <button type="sibmit" class="btn btn-primary">Submit</button>
    </form>
@endsection
