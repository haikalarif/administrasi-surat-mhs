@extends('main')

@section('title', 'Detail User')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div
                class="d-flex justify-content-center flex-wrap flex-md-nowrapalign-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="text-center h2"> <b> Biodata Mahasiswa/Pengguna</b></h1>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive col-lg-6">
            <a href="/user" class="btn btn-sm btn-danger" style="margin-bottom: 10px;"><i class="fa fa-arrow-left"></i>
                Kembali</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="150px">NIM</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th width="150px">Nama</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th width="150px">Program Studi</th>
                        <td>{{ $user->jurusan }}</td>
                    </tr>
                    <tr>
                        <th width="150px">Semester</th>
                        <td>{{ $user->semester }}</td>
                    </tr>
                    <tr>
                        <th width="150px">No Telpon</th>
                        <td>{{ $user->notelp }}</td>
                    </tr>
                    <tr>
                        <th width="150px">Role</th>
                        <td>{{ $user->role }}</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
