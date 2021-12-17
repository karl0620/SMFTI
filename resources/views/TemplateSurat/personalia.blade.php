<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalian</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
<div class="row">
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
<br><br>
<div class="container">
<div class="row">
    <table style="width:100%">
        <tr>
            <td style="width:75%">
                <tr style="width:75%"><h4>No.     : 0{{ $item['id'] }}/A.{{ date('m') }}/FTI/2021</h4></tr>
                <tr style="width:75%"><h4>Hal     : <u>{{ $item['hal'] }}</u></h4></tr>
                <tr style="width:75%"><h4>Lamp.   : 1 Lembar</h4></tr>
            </td>
            <td style="width:25%" align="right"><h4>Yogyakarta, {{ date('d F Y')}}</h4></td>
        </tr>
    </table>
    </div><br>
    <h4>Kepada Yth.:</h4>
    <h4>Rektor</h4><!--Kepada-->
    <h4>Universitas Kristen Duta Wacana </h4>
    <h4>di Tempat</h4><br><br>
    <div class="col-sm">
    <h4>Salam Sejahtera,</h4>
    <h4>Menyusuli surat kami No. {{ $item['ambilSurat'] }}, perihal {{ $item['keterangan'] }}
    </h4> <!-- Keterangan-->
    <br>
    <h4>Demikian surat ini kami sampaikan. Atas perhatian dan kerjasama yang diberikan kami
        mengucapkan terima kasih.</h4>
    </div><br><br>

    <div class="col">
            <h4>Dekan, </h4><br><br><img src="dito.png"><br><br><br>
            <h4><b><u>Restyandito, S.Kom., MSIS., ph.D.</u></b></h4>
            <h4>NIK : 004E289</h4><!--nim pengirim-->
    </div>
    <br><br>
    <div class="col">
        <h4>Tembusan kepada : </h4>
        <h4> 1. Wakil Rektor I </h4>
        <h4> 2. Wakil Rektor IV </h4>
        <h4> 3. Kepala PSDM </h4>
        <h4> 4. Kaprodi Informatika, FTI UKDW </h4>
        <h4> 5. Arsip </h4>
    </div>
  </div>
</body>
</html>
