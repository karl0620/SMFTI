<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Tugas Dosen</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
<div class="border-bottom">
<div class="row">
        <div class="col-md-2">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header">
              <div class="widget-user-image">
              <img src="img/33.UKDW.png" width="80" height="100">
              </div>
            </div>
          </div>
        </div>
<div>
    <div class="col-md-5" >
          <h4>Universitas Kristen Duta Wacana<h4>
          <h4>FAKULTAS TEKNOLOGI INFORMASI</h4>
          <ul>
              <li>PROGRAM STUDI INFORMATIKA
              <li>PROGRAM STUDI SISTEM INFORMASI
          </ul>
    </div>
</div>
</div>
    <div class="row" align="center">
        <h3><em><u>Surat Tugas Dosen</u></em></h3>
        <h4>No. : 0{{ $item['id'] }}/D.00/FTI/2021 </h4><!--System-->
    </div><br><br>
    <div class="col-sm">
    <h4>Dengan ini Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana memberikan tugas kepada :</h4>
    <div class="col-sm">
    <ul>
      <li>
        <h4> NIK  : {{ $item['nim'] }}</h4><!--Nik-->
      </li>
      <li>
        <h4> Nama : {{ $item['name'] }} </h4><!--Nama-->
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
            <h4>Dekan,</h4><br><br><br><br>
            <h4><b><u>Restyandito, S.Kom., MSIS., Ph.D.</u></b></h4><!--Nama Pengirim-->
            <h4>NIK : 004 E 289</h4><!--NIK Pengirim-->
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>
