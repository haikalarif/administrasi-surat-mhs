@extends('main')

@section('title', 'Tambah User')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div
                class="d-flex justify-content-center flex-wrap flex-md-nowrapalign-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="text-center h2"> <b> Tambah Mahasiswa/Pengguna</b></h1>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/user">
            @csrf
            <div class="from-group">
                <label for="email" class="form-label">NIM</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" placeholder="Isi NIM.." required autofocus>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="from-group">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    placeholder="Isi Nama Lengkap Anda.." required>
            </div>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="from-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="Isi Password.." required>
            </div>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="from-group">
                <label for="jurusan" class="form-label">Program Studi</label>
                <select name="jurusan" class="form-control">
                    <option value="" selected hidden>Pilih Program Studi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
            </div>
            @error('jurusan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="from-group">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" class="form-control @error('semester') is-invalid @enderror" id="semester"
                    name="semester" placeholder="Semester Anda Saat Ini.." required>
            </div>
            @error('semester')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="from-group">
                <label for="notelp" class="form-label">No. Telpon</label>
                <input type="text" class="form-control  @error('notelp') is-invalid @enderror" id="notelp"
                    name="notelp" placeholder="Isi No. Telpon Anda.." required>
            </div>
            @error('notelp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="from-group">
                <label for="role" class="form-label">Role</label>
                <select name="role" class="form-control">
                    <option value="" selected hidden>Pilih Role User</option>
                    <option value="admin">Admin</option>
                    <option value="mahasiswa">Mahasiswa</option>
                </select>
            </div>
            @error('role')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <br>
            <div class="from-group">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/user" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
@endsection
