<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .card:hover {
            transform: scale(1.05); /* Zoom in saat hover */
        }

        .card img {
            width: 120px; /* Ukuran gambar lebih kecil */
            height: 120px;
            border-radius: 50%; /* Membuat gambar menjadi lingkaran */
            object-fit: cover;
            margin-bottom: 20px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card img:hover {
            transform: scale(1.1); /* Efek zoom in pada gambar saat hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Menambahkan shadow pada gambar saat hover */
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

    <title>Form User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5dc; /* Cream color */
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
            font-family: 'Arial', sans-serif; /* Font style */
        }
        .form-container {
            background-color: #fff5e1; /* Light cream background for the form */
            padding: 40px; 
            border-radius: 20px; /* Rounded corners */
            max-width: 400px; /* Max width */
            width: 100%; 
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Shadow effect */
        }
        .form-group {
            margin-bottom: 20px; /* Space between form elements */
        }
        .form-control {
            border-radius: 10px; /* Rounded corners for input fields */
        }
        .btn {
            background-color: #e0b88e; /* Button color */
            color: white; /* Button text color */
            border-radius: 20px; /* Rounded button */
            transition: background-color 0.3s ease; /* Transition effect */
        }
        .btn:hover {
            background-color: #d4a373; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="{{ route('user.store') }}" method="POST"> 
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Masukkan Kelas">
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</body>
</html>
