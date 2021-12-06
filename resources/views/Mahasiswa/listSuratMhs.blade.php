@extends('Mahasiswa\dashboardMhs')

@section('layout')
        <h1>Daftar Surat Mahasiswa</h1>
@endsection

@section('isi')
<h3>Surat Izin KP</h3>
<table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tujuan Surat</th>
                <th scope="col">Nama Mitra</th>
                <th scope="col">Alamat Mitra</th>
                <th scope="col">Status Surat</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data_surat_kp as $item)
              <tr>
                <th scope="row">{{ $item['id'] }}</th>
                <td>{{ $item['tujuanSurat'] }}</td>
                <td>{{ $item['namaMitra'] }}</td>
                <td>{{ $item['alamatMitra'] }}</td>
                <td></td>
              </tr>
            @endforeach
            </tbody>
          </table>

          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>

          <h3>Surat Tugas</h3>
<table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tujuan Surat</th>
                <th scope="col">Nama Mitra</th>
                <th scope="col">Alamat Mitra</th>
                <th scope="col">Status Surat</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data_surat_tugas as $item)
              <tr>
                <th scope="row">{{ $item['id'] }}</th>
                <td>{{ $item['tujuanSurat'] }}</td>
                <td>{{ $item['namaMitra'] }}</td>
                <td>{{ $item['alamatMitra'] }}</td>
                <td></td>
              </tr>
            @endforeach
            </tbody>
</table>
@endsection
