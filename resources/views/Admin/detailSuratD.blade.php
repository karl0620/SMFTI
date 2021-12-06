@extends('Admin\dashboardAdmin')

@section('isi')
<div class="container">
<div class="row">
        <div class="col-md-2">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header">
              <div class="widget-user-image">
                <img src="img/33.UKDW.png" alt="User Avatar">
              </div>
            </div>
          </div>
        </div>
<div>
    <div class="col-md-5" >
          <h3>Universitas Kristen Duta Wacana<h3>
          <h3>FAKULTAS TEKNOLOGI INFORMASI</h3>
          <ul>
              <li>PROGRAM STUDI INFORMATIKA
              <li>PROGRAM STUDI SISTEM INFORMASI
          </ul>
    </div>
</div>
</div>
    <div class="row" align="center">
        <h2><em><u>Surat Tugas Dosen</u></em></h2>
        <h3>No. : 0{{ $item['id'] }}/D.00/FTI/2021 </h3><!--System-->
    </div><br>
    <div class="col-sm">
    <h3>Dengan ini Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana memberikan tugas kepada :</h3>
    <div class="col-sm">
    <ul>
      <li>
        <h3> NIK  : {{ $item['nama'] }}</h3><!--Nik-->
      </li>
      <li>
        <h3> Nama : {{ $item['name'] }} </h3><!--Nama-->
      </li>
    </ul>
    </div>
    <div class="col-sm">
    <h3>Untuk tugas sebagai peserta {{ $item['keterangan'] }},
        yang diselenggarakan oleh {{ $item['namaMitra'] }}, pada tanggal {{ $item['tglPelaksanaan'] }}.</h3>
        <!--Tema Kegiatan,Penyelenggara Kegiatan, Tempat Kegiatan, Hari, Tanggal Pelaksanaan Kegiatan-->
    <br>
    <h3>Demikian surat tugas ini dibuat untuk dapat dipergunakan sebagaimana perlunya.
        Kepada penerima tugas setelah menyelesaikan tugas dimohon menyampaikan laporan kepada pemberi tugas.</h3>
    <br>
    </div>
    <div align="right">
            <h2>24 Januari 2020<h2>
            <h2>Dekan,</h2><br><br><br><br><br><br>
            <h3><b><u>Restyandito, S.Kom., MSIS., Ph.D.</u></b></h3><!--Nama Pengirim-->
            <h3>NIK : 004 E 289</h3><!--NIK Pengirim-->
    </div>
  </div>
</div>
</div>
@endsection
