<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5dc; /* Warna cream */
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: #fff5e1; /* Warna cream muda */
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            max-width: 350px;
            width: 100%;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card img:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .form-container {
            text-align: left;
            width: 100%;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            color: #333;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #094ca1;
        }

        .text-danger {
            color: red;
            font-size: 12px;
            margin-top: -10px;
        }
    </style>
</head>

<body>
    <div class="card">
        <img src="https://i.pinimg.com/564x/11/8c/c8/118cc81c633316f14688da16832f90b3.jpg" alt="Foto Profil">
        <div class="form-container">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama">
                @foreach($errors->get('nama') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach

                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm">
                @foreach($errors->get('npm') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach

                <label for="kelas">Kelas:</label>
                <select name="kelas_id" id="kelas_id">
                    @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
@endsection
</html>
