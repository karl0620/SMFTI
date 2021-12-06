@extends('Admin\dashboardAdmin')

@section('layout')
    <h1>Wellcome, @auth {{ auth()->user()->name }} @endauth</h1>
@endsection

@section('isi')
    <h3><a href="/Admin/Home/SuratA" class="badge bg-info">Surat A 0</a></h3>
    <h3><a href="/Admin/Home/SuratB" class="badge bg-info">Surat B {{ $suratB }}</a></h3>
    <h3><a href="/Admin/Home/SuratC" class="badge bg-info">Surat C {{ $suratC }}</a></h3>
    <h3><a href="/Admin/Home/SuratD" class="badge bg-info">Surat D {{ $suratD }}</a></h3>
    <h3><a href="/Admin/Home/SuratE" class="badge bg-info">Surat E 0</a></h3>
@endsection
