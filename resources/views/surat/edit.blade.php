@extends('main')

@section('title', 'Edit Surat')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div
                class="d-flex justify-content-center flex-wrap flex-md-nowrapalign-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="text-center h2"> <b> Edit Surat</b></h1>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <form action="/surat/update/{{ $item->id }}" method="POST">
            @csrf
            <div class="from-group">
                <label for="noSurat" class="form-label">No Surat</label>
                <input type="text" class="form-control @error('noSurat') is-invalid @enderror"
                    value="{{ old('noSurat', $item->noSurat) }}" id="noSurat" name="noSurat"
                    placeholder="Isi Nomor Surat..." required>
                @error('noSurat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="from-group">
                <label for="tglSurat" class="form-label">Tanggal Surat</label>
                <input type="date" class="form-control  @error('tglSurat') is-invalid @enderror"
                    value="{{ old('tglSurat', $item->tglSurat) }}" id="tglSurat" name="tglSurat" required>
                @error('tglSurat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="from-group">
                <label for="tglTerima" class="form-label">Tanggal Terima</label>
                <input type="date" class="form-control  @error('tglTerima') is-invalid @enderror"
                    value="{{ old('tglTerima', $item->tglTerima) }}" id="tglTerima" name="tglTerima" required>
                @error('tglTerima')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="from-group">
                <label for="perihal" class="form-label">Perihal</label>
                <input type="text" class="form-control @error('perihal') is-invalid @enderror"
                    value="{{ old('perihal', $item->perihal) }}" id="perihal" name="perihal" placeholder="Isi Perihal..."
                    required>
                @error('perihal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="from-group">
                <label for="status" class="form-label">Status Pengajuan</label>
                <select name="status" class="form-control" required>
                    <option value="Di Proses" {{ old('status', $item->status) == 'Di Proses' ? 'selected' : '' }}>Di
                        Proses
                    </option>
                    <option value="Di Terima" {{ old('status', $item->status) == 'Di Terima' ? 'selected' : '' }}>Di
                        Terima
                    </option>
                    <option value="Di Tolak" {{ old('status', $item->status) == 'Di Tolak' ? 'selected' : '' }}>Di Tolak
                    </option>
                    <option value="Selesai" {{ old('status', $item->status) == 'Selesai' ? 'selected' : '' }}>Selesai
                    </option>
                </select>
            </div>
            <div class="from-group">
                <label for="jns_surat" class="form-label">Kategori Surat</label>
                <select name="jns_surat" class="form-control" required>
                    <option value="">Pilih Kategori Surat..</option>
                    <option value="Permohonan"
                        {{ old('jns_surat', $item->jns_surat) == 'Permohonan' ? 'selected' : '' }}>Permohonan
                    </option>
                    <option value="Pengantar" {{ old('jns_surat', $item->jns_surat) == 'Pengantar' ? 'selected' : '' }}>
                        Pengantar
                    </option>
                    <option value="Keterangan"
                        {{ old('jns_surat', $item->jns_surat) == 'Keterangan' ? 'selected' : '' }}>Keterangan
                    </option>
                </select>
            </div>
            <br>
            <div class="from-group">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="/surat" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
@endsection
