@extends('layouts.app')

@section('content')
<div class="row justify-content-center my-4">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header text-white" style="background: linear-gradient(135deg, #354024, #889063);">
                <h5 class="card-title mb-0 fw-semibold" style="color: #F8F5F0;">Buat Mata Kuliah Baru</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('matakuliah.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_mk" class="form-label fw-medium" style="color: #4C3D19;">Nama Mata Kuliah:</label>
                        <input type="text" class="form-control" id="nama_mk" name="nama_mk" placeholder="Contoh: Pemrograman Web Lanjut" required>
                    </div>
                    <div class="mb-4">
                        <label for="sks" class="form-label fw-medium" style="color: #4C3D19;">SKS:</label>
                        <input type="number" class="form-control" id="sks" name="sks" placeholder="Contoh: 3" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="/matakuliah" class="btn fw-semibold" style="background-color: #E5D7C4; color: #4C3D19;">Kembali</a>
                        <button type="submit" class="btn text-white fw-semibold shadow-sm" style="background-color: #354024;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection