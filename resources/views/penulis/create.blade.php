@extends('layouts.app')

@section('title', 'Tambah Penulis — BookStore')

@section('content')
<h1 class="mb-4">Tambah Penulis</h1>

<form action="{{ route('penulis.store') }}" method="POST" style="max-width: 480px;">
    @csrf

    <div class="mb-3">
        <label for="nama" class="form-label">Nama Penulis</label>
        <input type="text" id="nama" name="nama"
            class="form-control @error('nama') is-invalid @enderror"
            value="{{ old('nama') }}">
        @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="negara" class="form-label">Negara</label>
        <input type="text" id="negara" name="negara"
            class="form-control @error('negara') is-invalid @enderror"
            value="{{ old('negara') }}">
        @error('negara')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('penulis.index') }}" class="btn btn-outline-secondary">Batal</a>
</form>
@endsection