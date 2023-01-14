@extends('main')

@section('title', 'Detail Surat')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div
                class="d-flex justify-content-center flex-wrap flex-md-nowrapalign-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="text-center h2"> <b> Detail Surat</b></h1>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive col-lg-6">
            <a href="/surat" class="btn btn-sm btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="150px">No Surat</th>
                        <td>{{ $surat->noSurat }}</td>
                    </tr>
                    <tr>
                        <th width="150px">Perihal</th>
                        <td>{{ $surat->perihal }}</td>
                    </tr>
                    <tr>
                        <th width="150px">Tanggal Surat</th>
                        <td>{{ $surat->tglSurat }}</td>
                    </tr>
                    <tr>
                        <th width="150px">Tanggal Terima</th>
                        <td>{{ $surat->tglTerima }}</td>
                    </tr>
                    <tr>
                        <th width="150px">Pengirim</th>
                        <td>{{ $surat->user->name }}</td>
                    </tr>
                    <tr>
                        <th width="150px">Kategori Surat</th>
                        <td>{{ $surat->jns_surat }}</td>
                    </tr>
                    <tr>
                        <th width="150px">Status Pengajuan</th>
                        <td>{{ $surat->status }}</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection