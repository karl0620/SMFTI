@extends('Mahasiswa\dashboardMhs')

@section('layout')
        <h1>List Mahasiswa Terdaftar</h1>
@endsection

@section('isi')
<table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nim</th>
                <th scope="col">Nama Lengkap</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data_item as $item)
              <tr>
              <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item['nim'] }}</td>
                <td>{{ $item['name'] }}</td>
              </tr>
            @endforeach
            </tbody>
</table>
@endsection
