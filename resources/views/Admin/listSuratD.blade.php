@extends('Admin\dashboardAdmin')

@section('layout')
        <h1>Daftar Surat Tugas Dosen</h1>
@endsection

@section('isi')
<table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nik Pengaju</th>
                <th scope="col">Tanggal Pelaksanaan</th>
                <th scope="col">Lokasi Kegiatan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data_surat as $item)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['tglPelaksanaan'] }}</td>
                <td>{{ $item['lksKegiatan'] }}</td>
                <td>
                    <a href="/Admin/Home/SuratD/Detail/{{ $item['id'] }}" class="badge bg-info">Detail</span></a>
                    <a href="/Admin/Home/SuratD/Edit/{{ $item['id'] }}" class="badge bg-warning">Edit</span></a>
                    <a href="/Admin/Home/SuratD/Delete/{{ $item['id'] }}" class="badge bg-danger">Delete</a>
                </td>
              </tr>
            @endforeach
            </tbody>
</table>
@endsection
