@extends('main')

@section('title', 'Profile User')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div
                class="d-flex justify-content-center flex-wrap flex-md-nowrapalign-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="text-center h2"> <b> Profile Mahasiswa/Pengguna</b></h1>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                {{-- Alert --}}
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/user/{{ $user->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="from-group">
                        <label for="email" class="form-label">NIM</label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}" required>
                    </div>
                    <div class="from-group">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                    </div>
                    <div class="from-group">
                        <label for="jurusan" class="form-label">Program Studi</label>
                        <input type="text" class="form-control" name="jurusan" value="{{ $user->jurusan }}" required>
                    </div>
                    <div class="from-group">
                        <label for="semester" class="form-label">Semester</label>
                        <input type="text" class="form-control" name="semester" value="{{ $user->semester }}" required>
                    </div>
                    <div class="from-group">
                        <label for="notelp" class="form-label">No. Telpon</label>
                        <input type="text" class="form-control" name="notelp" value="{{ $user->notelp }}" required>
                    </div>
                    <br>
                    <a href="/profile/{{ $user->id }}/edit" class="btn btn-sm btn-primary">Perbarui Profil</a>
                </form>
            </div>
        </div>
    </div>
@endsection