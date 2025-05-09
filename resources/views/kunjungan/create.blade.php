@extends('layouts.layout')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Tambah Kunjungan</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kunjungan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama') }}" required>
                </div>

                <div class="mb-3">
                    <label for="instansi" class="form-label">Instansi</label>
                    <input type="text" id="instansi" name="instansi" class="form-control" value="{{ old('instansi') }}" required>
                </div>

                <div class="mb-3">
                    <label for="tujuan" class="form-label">Tujuan</label>
                    <input type="text" id="tujuan" name="tujuan" class="form-control" value="{{ old('tujuan') }}" required>
                </div>

                <div class="mb-3">
                    <label for="catatan" class="form-label">Catatan</label>
                    <textarea id="catatan" name="catatan" class="form-control">{{ old('catatan') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-hover">Simpan</button>
                <a href="{{ route('kunjungan.index') }}" class="btn btn-secondary btn-hover">Kembali</a>
            </form>
        </div>
    </div>
@endsection
