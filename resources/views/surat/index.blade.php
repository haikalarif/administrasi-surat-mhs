@extends('main')

@section('title', 'List Surat')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">List Surat Pengajuan Mahasiswa</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Surat</h6>
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
                @can('admin')
                    <div class="my-2">
                        <a href="/surat/tambah" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Surat</span>
                        </a>
                    </div>
                @endcan
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No Surat</th>
                            <th>Tanggal Surat</th>
                            <th>Perihal</th>
                            <th>Pengirim</th>
                            <th>Status</th>
                            <th>Aksi</th>
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
                        @foreach ($surat as $srt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $srt->noSurat }}</td>
                                <td>{{ $srt->tglSurat }}</td>
                                <td>{{ $srt->perihal }}</td>
                                <td>{{ $srt->user->name }}</td>
                                <td> <strong> {{ $srt->status }}</strong></td>
                                <td class="text-center">
                                    <a href="/surat/detail/{{ $srt->id }}" class="btn btn-circle btn-sm btn-primary"><i
                                            class="fa fa-eye"></i></a>
                                    @can('admin')
                                        <a href="/surat/{{ $srt->id }}/edit" class="btn btn-circle btn-sm btn-warning"><i
                                                class="fa fa-edit"></i></a>
                                        <form action="/surat/delete/{{ $srt->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-circle btn-sm btn-danger"
                                                onclick="return confirm('Yakin Mau Di Hapus?')"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
