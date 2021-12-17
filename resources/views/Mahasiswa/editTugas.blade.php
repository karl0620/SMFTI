@extends('Mahasiswa\dashboardMhs')

@section('layout')
    <h1>Edit Tugas</h1>
    <div class="flex-row-reverse">
        <a class="btn btn-primary" href="/Mahasiswa/Home/ListSurat">Back</a>
    </div>
@endsection

@section('isi')
    <form action="/Mahasiswa/Home/ListSurat/{{ $item['id'] }}/Edit" method="post">
        @csrf
        <div class="control-group input-group mb-3">
                <input type="text" class="form-control" id="nim" name="nim" required value="{{ $item['nim'] }}">
                <input type="text" class="form-control" id="name" name="name" required value="{{ $item['name'] }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Tugas</label>
            <input type="date" class="form-control" id="tglTugas" name="tglTugas" required value="{{ $item['tglTugas'] }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tugas</label>
            <input type="text" class="form-control" id="tugas" name="tugas" required value="{{ $item['tugas'] }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Mitra</label>
            <input type="text" class="form-control" id="namaMitra" name="namaMitra" required value="{{ $item['namaMitra'] }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat Mitra</label>
            <input type="address" class="form-control" id="alamatMitra" name="alamatMitra" required value="{{ $item['alamatMitra'] }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required>{{ $item['keterangan'] }}</textarea>
        </div>
        <input type="hidden" id="status" name="status" required value="Sedang Diproses">
        @if($item['jenis'] == 'Individu')
        <input type="hidden" id="jenis" name="jenis" required value="Individu">
        @elseif($item['jenis'] == 'Kelompok')
        <input type="hidden" id="jenis" name="jenis" required value="Kelompok">
        @else
        <input type="hidden" id="jenis" name="jenis" required value="Kegiatan">
        @endif
        <button type="sibmit" class="btn btn-primary">Submit</button>
    </form>
@endsection
