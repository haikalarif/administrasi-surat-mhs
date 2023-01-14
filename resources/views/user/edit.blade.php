@extends('main')

@section('title', 'Edit User')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div
                class="d-flex justify-content-center flex-wrap flex-md-nowrapalign-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="text-center h2"> <b> Edit Biodata Mahasiswa/User</b></h1>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <form action="/user/{{ $user->id }}" method="POST">
            @csrf
            @method('put')
            <div class="from-group">
                <label for="email" class="form-label">NIM</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" value="{{ old('email', $user->email) }}" placeholder="Isi NIM.." required autofocus>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="from-group">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $user->name) }}" placeholder="Isi Nama Lengkap Anda.." required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="from-group">
                <label for="jurusan" class="form-label">Program Studi</label>
                <select name="jurusan" class="form-control">
                    <option value="">Pilih Program Studi</option>
                    <option value="Teknik Informatika {{ old('jurusan', $user->jurusan) }}">Teknik Informatika</option>
                    <option value="Sistem Informasi {{ old('jurusan', $user->jurusan) }}">Sistem Informasi</option>
                </select>
            </div>
            <div class="from-group">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" class="form-control @error('semester') is-invalid @enderror" id="semester"
                    name="semester" value="{{ old('semester', $user->semester) }}" placeholder="Semester Anda Saat Ini.."
                    required>
                @error('semester')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="from-group">
                <label for="notelp" class="form-label">No. Telpon</label>
                <input type="text" class="form-control  @error('notelp') is-invalid @enderror" id="notelp"
                    name="notelp" value="{{ old('notelp', $user->notelp) }}" placeholder="Isi No. Telpon Anda.." required>
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
                    <option value="admin {{ old('role', $user->role) }}">Admin</option>
                    <option value="mahasiswa {{ old('role', $user->role) }}">Mahasiswa</option>
                </select>
            </div>
            <br>
            <div class="from-group">
                <button type="submit" class="btn btn-primary">Update Data</button>
                <a href="/user" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
@endsection
