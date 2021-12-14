@extends('Mahasiswa\dashboardMhs')

@section('layout')
    <h1>Surat Tugas Kelompok</h1>
    <div class="flex-row-reverse">
        <a class="btn btn-primary" href="/Mahasiswa/Home/BuatSurat">Back</a>
    </div>
@endsection

@section('isi')
    <form action="/Mahasiswa/Home/BuatSurat/TugasKelompok" method="post">
        @csrf
        <div class="control-group input-group mb-3">
                <input type="text" class="form-control" id="nim" name="nim[]" required value="{{ auth()->user()->nim }}">
                <input type="text" class="form-control" id="name" name="name[]" required value="{{ auth()->user()->name }}">
                <button class="add-more btn btn-outline-Success" type="button"><i class="glyphicon glyphicon-plus"></i> Tambah
        </div>
        <div class="mahasiswa"></div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Tugas</label>
            <input type="date" class="form-control" id="tglTugas" name="tglTugas" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tugas</label>
            <input type="text" class="form-control" id="tugas" name="tugas" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Mitra</label>
            <input type="text" class="form-control" id="namaMitra" name="namaMitra" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat Mitra</label>
            <input type="address" class="form-control" id="alamatMitra" name="alamatMitra" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
        </div>
        <input type="hidden" id="status" name="status" required value="Sedang Diproses">
        <input type="hidden" id="jenis" name="jenis" required value="Kelompok">
        <button type="sibmit" class="btn btn-primary">Submit</button>
    </form>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script type="text/javascript">
                $(".add-more").on ('click',function(){
                    addmhs();
                });
                function addmhs(){
                    var mhs =' <div class="control-group input-group mb-3"><input type="text" class="form-control" id="nim" name="nim[]" required><input type="text" class="form-control" id="name" name="name[]" required><button class="remove btn btn-outline-Danger" type="button"><i class="glyphicon glyphicon-plus"></i> Hapus</div>';
                    $('.mahasiswa').append(mhs);
                }
                // saat tombol remove dklik control group akan dihapus
                $("body").on("click",".remove",function(){
                    $(this).parents(".control-group").remove();
                });
            </script>
@endsection
