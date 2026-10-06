@extends('layouts.app')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h4 class="mb-0 fw-bold" style="color: #354024;">Daftar Mata Kuliah</h4>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-sm px-3 fw-semibold" style="background-color: #CFBB99; color: #4C3D19;">+ Tambah Mata Kuliah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead style="background-color: #354024; color: #F8F5F0;">
                    <tr>
                        <th class="py-2">ID (UUID)</th>
                        <th class="py-2">Nama Mata Kuliah</th>
                        <th class="py-2 text-center">SKS</th>
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
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted py-3">Belum ada data mata kuliah.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection