@extends('Dashboard\dashboard')

@section('logout')
<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
<ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        @auth
            {{ auth()->user()->name }}
        @endauth
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item"><span class="bi bi-bell"></span>Nontification</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <form action="/logoutMhs" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><span class="bi bi-box-arrow-right"></span>Logout</button>
                </form>
            </li>
        </ul>
      </li>
</ul>
  </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('slidebar')
<li class="nav-item">
    <a class="nav-link" href="/Mahasiswa/Home/SuratIzinKP">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file" aria-hidden="true"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
            Surat Izin KP
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/Mahasiswa/Home/SuratTugas">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file" aria-hidden="true"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
            Surat Tugas
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/Mahasiswa/Home/ListSuratTugas">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers" aria-hidden="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
            List Surat Tugas
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/Mahasiswa/Home/ListSuratIzinKp">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers" aria-hidden="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
            List Surat Izin KP
    </a>
</li>
@endsection

@section('layout')
    <h1>Wellcome, @auth {{ auth()->user()->name }} @endauth</h1>
@endsection

@section('dashboard')
<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/Mahasiswa/Home">SM FTI UKDW</a>
@endsection
