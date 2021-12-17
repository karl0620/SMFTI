<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Tugas</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
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
            <h4>{{ $ttd[0]->jabatan }}</h4><br><img src="{{ $ttd[0]->ttd }}"><br>
            <h4><b><u>{{ $ttd[0]->nama }}</u></b></h4>
            <h4>{{ $ttd[0]->nik }}</h4>
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
            <h4>{{ $ttd[0]->jabatan }}</h4><br><img src="{{ $ttd[0]->ttd }}"><br>
            <h4><b><u>{{ $ttd[0]->nama }}</u></b></h4>
            <h4>{{ $ttd[0]->nik }}</h4>
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
            <h4>{{ $ttd[0]->jabatan }}</h4><br><img src="{{ $ttd[0]->ttd }}"><br>
            <h4><b><u>{{ $ttd[0]->nama }}</u></b></h4>
            <h4>{{ $ttd[0]->nik }}</h4>
    </div>
  </div>
</div>
</div>
@endif
</body>
</html>
