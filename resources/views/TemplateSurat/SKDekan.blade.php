<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keputusan Dekan</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
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
        <h4><b>SURAT KEPUTUSAN DEKAN</b></h4>
        <h4><b>FAKULTAS TEKNOLOGI INFORMASI</b></h4>
        <h4>UNIVERSITAS KRISTEN DUTA WACANA</h4>
        <h4>No. : 0{{ $item['id'] }}/A.{{ date('m') }}/FTI/2021 </h4>
    </div><br>
    <div class="row" align="center">
        <h5>Tentang:</h5>
    </div><br>
    <div align="center">
        <table style="width:100%">
            <tr>
                <th style="width:10%"><h4></h4></th>
                <th style="width:80%"><center><h4><b>{{ $item['judul'] }}</b></h4></center></th>
                <th style="width:10%"><h4></h4></th>
            </tr>
        </table>
    </div><br>
    <div class="col-sm">
        <h4>Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana</h4>
        <table style="width:100%">
            <tr>
                <td style="width:15%" valign="top"><h4>Menimbang</h4></td>
                <td style="width:1%" valign="top"><h4>:</h4></td>
                @php

                $char=1;
                $albha = 'a'; $char < 'z';
                $urut = array("Pertama", "Kedua", "Ketiga", "Keempat", "Kelima", "Keenam", "Ketuju", "Kedelapan", "Kesembilan");

                @endphp
                @foreach($menimbang as $menim)
                <td style="width:4%" valign="top"><h4>{{ $albha++ }}.</h4></td>
                <td style="width:85%" valign="top"><h4>{{ $menimbang[$loop->index] }}</h4></td>
            </tr>
            <tr>
                <td style="width:15%" valign="top"></td>
                <td style="width:1%" valign="top"><h4></h4></td>
                @endforeach
                <td style="width:4%" valign="top"><h4></h4></td>
                <td style="width:85%" valign="top"><h4></h4></td>
            </tr>
        </table>
        <br>
        <table style="width:100%">
            <tr>
                <td style="width:15%" valign="top"><h4>Mengingat</h4></td>
                <td style="width:1%" valign="top"><h4>:</h4></td>
                @foreach($mengingat as $menging)
                <td style="width:4%" valign="top"><h4>{{ $loop->iteration }}.</h4></td>
                <td style="width:85%" valign="top"><h4>{{ $mengingat[$loop->index] }}</h4></td>
            </tr>
            <tr>
                <td style="width:15%" valign="top"></td>
                <td style="width:1%" valign="top"><h4></h4></td>
                @endforeach
                <td style="width:4%" valign="top"><h4></h4></td>
                <td style="width:85%" valign="top"><h4></h4></td>
            </tr>
        </table>
        <br>
        <div class="row" align="center">
            <h4><b>MEMUTUSKAN:</b></h4>
        </div><br>
        <table style="width:100%">
            <tr>
                <td style="width:15%" valign="top"><h4>Menerapkan</h4></td>

                <td style="width:5%" valign="top"><h4>:</h4></td>
                <td style="width:80%"valign="top"><h4></h4></td>
            </tr>
            @foreach($menetapkan as $tetap)
            <tr>
                <td style="width:15%"valign="top"><h4>{{ $urut[$loop->index] }}</h4></td>
                <td style="width:5%"valign="top"><h4>:</h4></td>
                <td style="width:80%"valign="top"><h4>{{ $menetapkan[$loop->index] }}</h4></td>
            </tr>
            @endforeach
        </table>
    </div>
    <br><br><br>
    <div align="right">
        <h4>Ditetapkan di: Yogyakarta</h4>
        <h4>Pada tanggal: {{ date('d F Y') }}<h4>
        <h4>Dekan Fakultas Teknologi Informasi,</h4><br><img src="dito.png"><br><br>
        <h4><b><u>Restyandito, S.Kom., MSIS., Ph.D.</u></b></h4>
        <h4>NIK : 34817248395</h4>
    </div>
</div>
</div>
</div>
</body>
</html>
