@extends('Admin\dashboardAdmin')

@section('layout')
    <h1>Surat Personalian</h1>
    <div class="flex-row-reverse">
        <a class="btn btn-primary" href="/Admin/Home/BuatSurat">Back</a>
    </div>
@endsection

@section('isi')
    <form action="/Admin/Home/BuatSurat/Personalian" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Perihal</label>
            <input type="text" class="form-control" id="hal" name="hal" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Perihal Surat</label>
            <input type="text" class="form-control" id="ambilSurat" name="ambilSurat" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Keterangan Perihal</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" required>
        </div>
        <button type="sibmit" class="btn btn-primary">Submit</button>
    </form>
@endsection
