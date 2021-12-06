@extends('Mahasiswa\dashboardMhs')

@section('layout')
        <h1>Daftar Surat Tugas</h1>
@endsection

@section('isi')
<table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tujuan Surat</th>
                <th scope="col">Nama Mitra</th>
                <th scope="col">Alamat Mitra</th>
                <th scope="col">Action</th>
                <th scope="col">Status Surat</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data_surat as $item)
              <tr>
              <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item['nim'] }}</td>
                <td>{{ $item['tujuanSurat'] }}</td>
                <td>{{ $item['namaMitra'] }}</td>
                <td>
                    <!-- <a href="#" class="badge bg-info">Detail</span></a> -->
                    <a href="#" class="badge bg-warning">Edit</span></a>
                    <a href="#" class="badge bg-danger">Delete</a>
                </td>
                <td></td>
              </tr>
            @endforeach
            </tbody>
</table>
@endsection
