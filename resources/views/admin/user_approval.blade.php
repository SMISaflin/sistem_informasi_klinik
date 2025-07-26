@extends('layouts.admin') {{-- atau layouts.admin jika punya layout khusus admin --}}

@section('content')
<div class="container">
    <h2 class="mb-4">Persetujuan Akun Pengguna</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($pendingUsers->isEmpty())
        <p>Tidak ada pengguna yang menunggu persetujuan.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pendingUsers as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->role) }}</td>
                    <td>
                        <div class="d-flex gap-2">
    <form method="POST" action="{{ route('admin.user.approve', $user->id) }}">
        @csrf
        <button type="submit" class="btn btn-success btn-sm">
            <i class="bi bi-check-circle"></i>
        </button>
    </form>

    <form action="{{ route('admin.user.reject', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menolak user ini?');">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">
            <i class="bi bi-x-circle"></i>
        </button>
    </form>
</div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
