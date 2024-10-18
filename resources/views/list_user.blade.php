@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f5f5dc; /* Warna cream */
        height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Poppins', sans-serif; /* Menggunakan font Poppins */
    }

    .container {
        margin-top: 20px;
    }

    .card {
        background-color: #fff5e1; /* Warna cream muda */
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        max-width: 350px; /* Ukuran card lebih kecil */
        width: 100%;
        text-align: center;
        transition: transform 0.3s ease-in-out;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .table {
        background-color: #fffaf0; /* Warna latar belakang tabel (cream lebih terang) */
        border: 1px solid #f5deb3; /* Warna border tabel */
    }

    thead th {
        background-color: #faebd7; /* Warna background header */
        color: #333; /* Warna teks pada header */
        border-bottom: 2px solid #f5deb3; /* Border bawah header */
    }

    tbody tr {
        transition: background-color 0.3s ease; /* Animasi saat hover */
    }

    tbody tr:hover {
        background-color: #fdf5e6; /* Warna latar belakang saat baris di-hover */
    }

    .text-danger {
        color: red;
        font-size: 12px;
        margin-top: -10px;
    }

    .btn-success {
        background-color: #8fbc8f; /* Warna hijau lembut */
        border: none;
    }

    .btn-success:hover {
        background-color: #6b8e23; /* Warna hijau lebih gelap saat hover */
    }

</style>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-start mb-3 mt-2">
            <a href="{{ route('user.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Tambah User
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->npm }}</td>
                        <td>{{ $user->nama_kelas }}</td>

                        <td>
                             <div class="action-buttons">
                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-warning btn-sm">View</a>
                            <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                            </form>
                         </div>
                        </td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
