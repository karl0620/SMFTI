@extends('Admin\dashboardAdmin')

@section('layout')
    <h1>Daftar Hadir</h1>
    <div class="flex-row-reverse">
        <a class="btn btn-primary" href="/Admin/Home/BuatSurat">Back</a>
    </div>
@endsection

@section('isi')
    <form action="/Admin/Home/BuatSurat/DaftarHadir" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Kegiatan</label>
            <input type="text" class="form-control" id="kegiatan" name="kegiatan" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Kegiatan</label>
            <input type="date" class="form-control" id="tglKegiatan" name="tglKegiatan" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pukul</label>
            <input type="time" class="form-control" id="time" name="time" min="00:00" max="24:00" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tempat</label>
            <input type="text" class="form-control" id="tempat" name="tempat" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pembicara</label>
            <input type="address" class="form-control" id="pembicara" name="pembicara" required>
        </div>
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
        <div class="control-group input-group mb-3">
        <input type="text" class="form-control" id="nim" name="nim[]" placeholder="NIM/NIK" required>
                <input type="text" class="form-control" id="name" name="name[]" placeholder="Nama" required>
                <button class="add-more btn btn-outline-Success" type="button"><i class="glyphicon glyphicon-plus"></i> Tambah
        </div>
        <div class="mahasiswa"></div>
        <button type="sibmit" class="btn btn-primary">Submit</button>
    </form>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script type="text/javascript">
                $(".add-more").on ('click',function(){
                    addmhs();
                });
                function addmhs(){
                    var mhs =' <div class="control-group input-group mb-3"><input type="text" class="form-control" id="nim" name="nim[]" placeholder="NIM/NIK" required><input type="text" class="form-control" id="name" name="name[]" required placeholder="Nama"><button class="remove btn btn-outline-Danger" type="button"><i class="glyphicon glyphicon-plus"></i> Hapus</div>';
                    $('.mahasiswa').append(mhs);
                }
                // saat tombol remove dklik control group akan dihapus
                $("body").on("click",".remove",function(){
                    $(this).parents(".control-group").remove();
                });
            </script>
@endsection
