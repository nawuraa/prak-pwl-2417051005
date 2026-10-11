@extends('layouts.app')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h4 class="mb-0 fw-bold" style="color: #354024;">Daftar Mata Kuliah</h4>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-sm px-3 fw-semibold shadow-sm" style="background-color: #CFBB99; color: #4C3D19;">+ Tambah Mata Kuliah</a>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color: #E5D7C4; color: #354024; border-color: #CFBB99;">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead style="background-color: #354024; color: #F8F5F0;">
                    <tr>
                        <th class="py-2">ID (UUID)</th>
                        <th class="py-2">Nama Mata Kuliah</th>
                        <th class="py-2 text-center">SKS</th>
                        <th class="py-2 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mks as $mk)
                        <tr>
                            <td class="font-monospace small text-muted">{{ $mk->id }}</td>
                            <td class="fw-medium" style="color: #4C3D19;">{{ $mk->nama_mk }}</td>
                            <td class="text-center">
                                <span class="badge fw-medium px-3 py-2" style="background-color: #E5D7C4; color: #354024; border: 1px solid #CFBB99;">
                                    {{ $mk->sks }} SKS
                                </span>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-sm px-3 me-1 fw-semibold text-white shadow-sm" style="background-color: #889063;">Edit</a>
                                <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm px-3 fw-semibold text-white shadow-sm" style="background-color: #4C3D19;" onclick="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-3">Belum ada data mata kuliah.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection