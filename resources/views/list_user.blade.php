@extends('layouts.app')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h4 class="mb-0 fw-bold" style="color: #354024;">Daftar Pengguna</h4>
        <a href="/user/create" class="btn btn-sm px-3 fw-semibold" style="background-color: #CFBB99; color: #4C3D19;">+ Tambah Pengguna</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead style="background-color: #354024; color: #F8F5F0;">
                    <tr>
                        <th class="py-2">ID</th>
                        <th class="py-2">Nama</th>
                        <th class="py-2">NPM</th>
                        <th class="py-2">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td class="fw-medium" style="color: #4C3D19;">{{ $user->nama }}</td>
                            <td>{{ $user->nim }}</td>
                            <td>
                                <span class="badge fw-medium px-3 py-2" style="background-color: #E5D7C4; color: #354024; border: 1px solid #CFBB99;">
                                    {{ $user->nama_kelas }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-3">Belum ada data pengguna.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection