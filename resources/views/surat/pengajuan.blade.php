@extends('main')

@section('title', 'Pengajuan Surat')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div
                class="d-flex justify-content-center flex-wrap flex-md-nowrapalign-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="text-center h2"> <b> Pengajuan Surat Mahasiswa</b></h1>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        @if (session()->has('success'))
            <div class="alert alert-info alert-dismissible col-lg-12" role='alert'>
                <button type="button" class="close" data-disniss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fa fa-check-square"></i> Berhasil!!!</h5>
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ url('/pengajuan-surat') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="from-group">
                <label for="noSurat" class="form-label">No Surat</label>
                <input type="text" class="form-control @error('noSurat') is-invalid @enderror"
                    value="{{ old('noSurat') }}" id="noSurat" name="noSurat" placeholder="Isi Nomor Surat..." required>
                @error('noSurat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="from-group">
                <label for="tglSurat" class="form-label">Tanggal Surat</label>
                <input type="date" class="form-control  @error('tglSurat') is-invalid @enderror"
                    value="{{ old('tglSurat') }}" id="tglSurat" name="tglSurat" required>
                @error('tglSurat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="from-group">
                <label for="tglTerima" class="form-label">Tanggal Terima</label>
                <input type="date" class="form-control  @error('tglTerima') is-invalid @enderror"
                    value="{{ old('tglTerima') }}" id="tglTerima" name="tglTerima" required>
                @error('tglTerima')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="from-group">
                <label for="perihal" class="form-label">Perihal</label>
                <input type="text" class="form-control @error('perihal') is-invalid @enderror"
                    value="{{ old('perihal') }}" id="perihal" name="perihal" placeholder="Isi Perihal..." required>
                @error('perihal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="from-group">
                <label for="user_id" class="form-label">Pengirim</label>
                <select name="user_id" class="form-control" required>
                    <option value="">Pilih Pengirim..</option>
                    @foreach ($user as $users)
                        <option value="{{ $users->id }}" {{ old('user_id') == $users->id ? 'selected' : '' }}>
                            {{ $users->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="from-group">
                <label for="jns_surat" class="form-label">Kategori Surat</label>
                <select name="jns_surat" class="form-control" required>
                    <option value="">Pilih Kategori Surat..</option>
                    <option value="Permohonan" {{ old('jns_surat') == 'Permohonan' ? 'selected' : '' }}>Permohonan
                    </option>
                    <option value="Pengantar" {{ old('jns_surat') == 'Pengantar' ? 'selected' : '' }}>Pengantar
                    </option>
                    <option value="Keterangan" {{ old('jns_surat') == 'Keterangan' ? 'selected' : '' }}>Keterangan
                    </option>
                </select>
            </div>
            <div class="from-group">
                <label for="file_surat" class="form-label">File Surat</label>
                <input type="file" class="form-control  @error('file_surat') is-invalid @enderror" id="file_surat"
                    name="file_surat" value="{{ old('file_surat') }}" name="file_surat" required>
                @error('file_surat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <div class="from-group">
                <button type="submit" class="btn btn-success">Ajukan</button>
            </div>
        </form>
    </div>
@endsection
