@extends('main')

@section('title', 'Mahasiswa User')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Mahasiswa/Pengguna</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Mahasiswa/Pengguna</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (session()->has('success'))
                    <div class="alert alert-info alert-dismissible col-lg-12" role='alert'>
                        <button type="button" class="close" data-disniss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-check-square"></i> Berhasil!!!</h5>
                        {{ session('success') }}
                    </div>
                @endif
                <div class="my-2"></div>
                <a href="/user/create" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Pengguna</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">NIM</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Prodi</th>
                            <th class="text-center">Semester</th>
                            <th class="text-center">No. Telpon</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->jurusan }}</td>
                                <td>{{ $user->semester }}</td>
                                <td>{{ $user->notelp }}</td>
                                <td class="text-center">
                                    <a href="/user/{{ $user->id }}" class="btn btn-circle btn-sm btn-primary"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="/user/{{ $user->id }}/edit" class="btn btn-circle btn-sm btn-warning"><i
                                            class="fa fa-edit"></i></a>
                                    <form action="/user/{{ $user->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-circle btn-sm btn-danger"
                                            onclick="return confirm('Yakin Mau Di Hapus?')"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
