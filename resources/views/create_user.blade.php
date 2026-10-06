@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header text-white" style="background: linear-gradient(135deg, #354024, #889063);">
                <h5 class="card-title mb-0 fw-semibold" style="color: #F8F5F0;">Buat Pengguna Baru</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-medium" style="color: #4C3D19;">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="npm" class="form-label fw-medium" style="color: #4C3D19;">NPM:</label>
                        <input type="text" class="form-control" id="npm" name="npm" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas_id" class="form-label fw-medium" style="color: #4C3D19;">Kelas:</label>
                        <select class="form-select" name="kelas_id" id="kelas_id" required>
                            <option value="">-- Pilih Kelas --</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="/user" class="btn fw-semibold" style="background-color: #E5D7C4; color: #4C3D19;">Kembali</a>
                        <button type="submit" class="btn text-white fw-semibold" style="background-color: #354024;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection