@extends('Admin\dashboardAdmin')

@section('layout')
    <h1>Surat Keputusan Dekan</h1>
    <div class="flex-row-reverse">
        <a class="btn btn-primary" href="/Admin/Home/BuatSurat">Back</a>
    </div>
@endsection

@section('isi')
    <form action="/Admin/Home/BuatSurat/SKDekan" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Menimbang</label>
            <textarea type="date" class="form-control" id="menimbang" name="menimbang[]" required></textarea>
            <div class="menimbang"></div>
            <button class="add-menimbang btn btn-outline-Success" type="button"><i class="glyphicon glyphicon-plus"></i> Tambah
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Mengingat</label>
            <textarea type="date" class="form-control" id="mengingat" name="mengingat[]" required></textarea>
            <div class="mengingat"></div>
            <button class="add-mengingat btn btn-outline-Success" type="button"><i class="glyphicon glyphicon-plus"></i> Tambah
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Menetapkan</label>
            <textarea type="date" class="form-control" id="menetapkan" name="menetapkan[]" required></textarea>
            <div class="menetapkan"></div>
            <button class="add-menetapkan btn btn-outline-Success" type="button"><i class="glyphicon glyphicon-plus"></i> Tambah
        </div>
        <button type="sibmit" class="btn btn-primary">Submit</button>
    </form>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script type="text/javascript">
                $(".add-menimbang").on ('click',function(){
                    addMenimbang();
                });
                function addMenimbang(){
                    var menimbang = '<textarea type="date" class="form-control" id="menimbang" name="menimbang[]" required></textarea>';
                    $('.menimbang').append(menimbang);
                }
                $(".add-mengingat").on ('click',function(){
                    addMengingat();
                });
                function addMengingat(){
                    var mengingat = '<textarea type="date" class="form-control" id="mengingat" name="mengingat[]" required></textarea>';
                    $('.mengingat').append(mengingat);
                }
                $(".add-menimbang").on ('click',function(){
                    addMenimbang();
                });
                function addMenimbang(){
                    var menimbang = '<textarea type="date" class="form-control" id="menimbang" name="menimbang[]" required></textarea>';
                    $('.menimbang').append(menimbang);
                }
                function addMengingat(){
                    var mengingat = '<textarea type="date" class="form-control" id="mengingat" name="mengingat[]" required></textarea>';
                    $('.mengingat').append(mengingat);
                }
                $(".add-menetapkan").on ('click',function(){
                    addMenetapkan();
                });
                function addMenetapkan(){
                    var menetapkan = '<textarea type="date" class="form-control" id="menetapkan" name="menetapkan[]" required></textarea>';
                    $('.menetapkan').append(menetapkan);
                }
                // saat tombol remove dklik control group akan dihapus
                // $("body").on("click",".remove-menimbang",function(){
                //     $(this).parents(".control-group-menimbang").remove();
                // });
            </script>
@endsection
