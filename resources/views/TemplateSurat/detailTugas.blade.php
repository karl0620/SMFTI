@extends('Admin\dashboardAdmin')

@section('layout')
        <h1>Review Surat</h1>
        <div class="flex-row-reverse">
            <a class="btn btn-primary" href="/Admin/Home/ListPengajuan">Back</a>
        </div>
@endsection

@section('isi')
@if($item['jenis'] == 'Individu')
<div class="container">
<div class="border-bottom">
<div class="row">
    <div class="col-md-10">
          <h4>Universitas Kristen Duta Wacana<h4>
          <h4>FAKULTAS TEKNOLOGI INFORMASI</h4>
          <ul>
              <li>PROGRAM STUDI INFORMATIKA</li>
              <li>PROGRAM STUDI SISTEM INFORMASI</li>
          </ul>
        </div>
</div>
    <div class="row" align="center">
        <h3><em><u>Surat Tugas</u></em></h3>
        <h4>No. : 0{{ $item['id'] }}/D.{{ date('m') }}/FTI/2021 </h4><!--System-->
    </div><br><br>
    <div class="col-sm">
    <h4>Dengan ini Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana memberikan tugas kepada :</h4>
    <div class="col-sm">
    <ul>
      <li>
        <h4> NIK  : {{ $nim[0] }}</h4><!--Nik-->
      </li>
      <li>
        <h4> Nama : {{ $name[0] }} </h4><!--Nama-->
      </li>
    </ul>
    </div>
    <div class="col-sm">
    <h4>Untuk tugas sebagai peserta {{ $item['keterangan'] }},
        yang diselenggarakan oleh {{ $item['namaMitra'] }}, pada tanggal {{ $item['tglPelaksanaan'] }}.</h4>
        <!--Tema Kegiatan,Penyelenggara Kegiatan, Tempat Kegiatan, Hari, Tanggal Pelaksanaan Kegiatan-->
    <br>
    <h4>Demikian surat tugas ini dibuat untuk dapat dipergunakan sebagaimana perlunya.
        Kepada penerima tugas setelah menyelesaikan tugas dimohon menyampaikan laporan kepada pemberi tugas.</h4>
    <br>
    </div>
    <div align="right">
            <br><br><br><br><br>
            <h4>Yogyakarta, {{ date('d F Y') }}<h4>
            <h4>_________,</h4><br><br><br><br>
            <h4><b><u>_________________________</u></b></h4>
            <h4>____________________</h4>
    </div>
  </div>
</div>
</div>
@elseif($item['jenis'] == 'Kelompok')
<div class="container">
<div class="border-bottom">
<div class="row">
    <div class="col-md-10">
          <h4>Universitas Kristen Duta Wacana<h4>
          <h4>FAKULTAS TEKNOLOGI INFORMASI</h4>
          <ul>
              <li>PROGRAM STUDI INFORMATIKA</li>
              <li>PROGRAM STUDI SISTEM INFORMASI</li>
          </ul>
        </div>
</div>
    <div class="row" align="center">
        <h3><em><u>Surat Tugas</u></em></h3>
        <h4>No. : 0{{ $item['id'] }}/B.{{ date('m') }}/FTI/2021 </h4><!--System-->
    </div><br><br>
    <div class="col-sm">
    <h4>Dengan ini Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana memberikan tugas kepada :</h4>
    <div align="center">
        <table style="width:100%">
            <tr>
                <td style="width:5%"><h4>No</h4></td>
                <td style="width:65%"><h4>Nama</h4></td>
                <td style="width:30%"><h4>NIM</h4></td>
            </tr>
            @foreach($nim as $n)
              <tr>
                <td><h4>{{ $loop->iteration }}</h4></td>
                <td><h4>{{ $name[$loop->index] }}</h4></td>
                <td><h4>{{ $nim[$loop->index] }}</h4></td>
              </tr>
              @endforeach
        </table>
    </div>
    <div class="col-sm">
    <h4>Untuk tugas sebagai peserta {{ $item['keterangan'] }},
        yang diselenggarakan oleh {{ $item['namaMitra'] }}, pada tanggal {{ $item['tglPelaksanaan'] }}.</h4>
        <!--Tema Kegiatan,Penyelenggara Kegiatan, Tempat Kegiatan, Hari, Tanggal Pelaksanaan Kegiatan-->
    <br>
    <h4>Demikian surat tugas ini dibuat untuk dapat dipergunakan sebagaimana perlunya.
        Kepada penerima tugas setelah menyelesaikan tugas dimohon menyampaikan laporan kepada pemberi tugas.</h4>
    <br>
    </div>
    <div align="right">
            <br><br><br><br><br>
            <h4>Yogyakarta, {{ date('d F Y') }}<h4>
            <h4>_________,</h4><br><br><br><br>
            <h4><b><u>_________________________</u></b></h4>
            <h4>____________________</h4>
    </div>
  </div>
</div>
</div>
@else
<div class="container">
<div class="border-bottom">
<div class="row">
    <div class="col-md-10">
          <h4>Universitas Kristen Duta Wacana<h4>
          <h4>FAKULTAS TEKNOLOGI INFORMASI</h4>
          <ul>
              <li>PROGRAM STUDI INFORMATIKA</li>
              <li>PROGRAM STUDI SISTEM INFORMASI</li>
          </ul>
        </div>
</div>
    <div class="row" align="center">
        <h3><em><u>Surat Kegiatan</u></em></h3>
        <h4>No. : 0{{ $item['id'] }}/D.{{ date('m') }}/FTI/2021 </h4><!--System-->
    </div><br><br>
    <div class="col-sm">
    <h4>Dengan ini Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana memberikan tugas kepada :</h4>
    <div class="col-sm">
    <ul>
        <li>
            <h4> NIK  : {{ $nim[0] }}</h4><!--Nik-->
        </li>
        <li>
            <h4> Nama : {{ $name[0] }} </h4><!--Nama-->
        </li>
        <li>
            <h4> Kegiatan  : {{ $item['tugas'] }}</h4><!--Nik-->
        </li>
        <li>
            <h4> Mitra  : {{ $item['namaMitra'] }}</h4><!--Nik-->
        </li>
    </ul>
    </div>
    <div class="col-sm">
    <h4>Untuk tugas sebagai peserta {{ $item['keterangan'] }},
        yang diselenggarakan oleh {{ $item['namaMitra'] }}, pada tanggal {{ $item['tglPelaksanaan'] }}.</h4>
        <!--Tema Kegiatan,Penyelenggara Kegiatan, Tempat Kegiatan, Hari, Tanggal Pelaksanaan Kegiatan-->
    <br>
    <h4>Demikian surat tugas ini dibuat untuk dapat dipergunakan sebagaimana perlunya.
        Kepada penerima tugas setelah menyelesaikan tugas dimohon menyampaikan laporan kepada pemberi tugas.</h4>
    <br>
    </div>
    <div align="right">
            <br><br><br><br><br>
            <h4>Yogyakarta, {{ date('d F Y') }}<h4>
            <h4>_________,</h4><br><br><br><br>
            <h4><b><u>_________________________</u></b></h4>
            <h4>____________________</h4>
    </div>
  </div>
</div>
</div>
@endif
<br>
<form action="/Admin/Home/ListPengajuan/{{ $item['id'] }}/Detail/Setuju" method="post">
@csrf
<div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanda Tangan</label>
            <div class="form-check mx-auto">
                <div class="col">
                <input class="form-check-input" type="radio" name="ttd" id="ttd1" value="dito.png" required>
                <label for="ttd1" class="form-check-label">
                    Dekan FTI
                </label>
                </div>
                <div class="col">
                <input class="form-check-input" type="radio" name="ttd" id="ttd2" value="glo.png" required>
                <label for="ttd2" class="form-check-label">
                    Kaprodi Informatika
                </label>
                </div>
            </div>
            <div class="form-check mx-auto">
                <div class="col">
                <input class="form-check-input" type="radio" name="ttd" id="ttd3" value="siang.png" required>
                <label for="ttd3" class="form-check-label">
                    Kaprodi Sistem Informasi
                </label>
                </div>
                <div class="col">
                <input class="form-check-input" type="radio" name="ttd" id="ttd4" value="willy.png" required>
                <label for="ttd4" class="form-check-label">
                    Wakil Dekan III
                </label>
                </div>
            </div>
        </div>
<h1>Proses Surat</h1>
        <div class="flex-row-reverse">
        <table>
            <tr>
                <td valign="top">
                        <input type="hidden" id="status" name="status" required value="Surat Disetujui">
                        <button type="submit" class="btn btn-success">Setujui</button>
                    </form>
                </td>
                <td>
                    <form action="/Admin/Home/ListPengajuan/{{ $item['id'] }}/Detail/Tolak" method="post">
                        @csrf
                        <input type="hidden" id="status" name="status" required value="Surat Ditolak">
                        <button type="sibmit" class="btn btn-danger">Tolak</button>
                    </form>
                </td>
            </tr>
            </table>
        </div>
</div>
@endsection
