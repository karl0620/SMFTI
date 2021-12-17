<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Hadir</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
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
        <h3><em><u>Daftar Hadir</u></em></h3>
        <h4>No. : 0{{ $item['id'] }}/B.{{ date('m') }}/FTI/2021 </h4><!--System-->
    </div><br><br>
    <table style="width:100%">
      <tr>
        <td style="width:20%"><h4>Nama Kegiatan </h4></td>
        <td style="width:5%"><h4> :</h4></td>
        <td style="width:75%"><h4>{{ $item['kegiatan'] }}</h4></td>
      </tr>
      <tr>
        <td style="width:20%"><h4>Hari, Tanggal </h4></td>
        <td style="width:5%"><h4> :</h4></td>
        <td style="width:75%"><h4>{{ $item['tglKegiatan'] }}</h4></td>
      </tr>
      <tr>
        <td style="width:20%"><h4>Waktu </h4></td>
        <td style="width:5%"><h4> :</h4></td>
        <td style="width:75%"><h4>{{ $item['time'] }}</h4></td>
      </tr>
      <tr>
        <td style="width:20%"><h4>Tempat </h4></td>
        <td style="width:5%"><h4> :</h4></td>
        <td style="width:75%"><h4>{{ $item['tempat'] }}</h4></td>
      </tr>
      <tr>
        <td style="width:20%"><h4>Pembicara </h4></td>
        <td style="width:5%"><h4> :</h4></td>
        <td style="width:75%"><h4>{{ $item['pembicara'] }}</h4></td>
      </tr>
    </table>
    <br>
    <table style="width:100%;padding:5px" border="1" padding="3">
      <tr>
        <th style="width:2%" align="center">NO. </th>
        <th style="width:10%" align="center">NIM</th>
        <th style="width:68%" align="center">Nama Lengkap</th>
        <th style="width:20%" colspan="2" align="center">Tanda Tangan</th>
      </tr>
      @foreach($nim as $n)
      @if($loop->iteration % 2)
      <tr>
        <td><h4>{{ $loop->iteration }}</h4></td>
        <td><h4>{{ $nim[$loop->index] }}</h4></td>
        <td><h4>{{ $name[$loop->index] }}</h4></td>
        <td valign="top" style="width:10%"><h6>{{ $loop->iteration }}</h6></td>
        <td style="width:10%"><h4></h4></td>
      </tr>
      @else
      <tr>
        <td><h4>{{ $loop->iteration }}</h4></td>
        <td><h4>{{ $nim[$loop->index] }}</h4></td>
        <td><h4>{{ $name[$loop->index] }}</h4></td>
        <td style="width:10%"><h4></h4></td>
        <td valign="top" style="width:10%"><h6>{{ $loop->iteration }}</h6></td>
      </tr>
      @endif
      @endforeach
    </table>
    <div class="col-sm">
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
</body>
</html>
