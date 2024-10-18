<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5dc; /* Warna cream */
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
            font-family: 'Arial', sans-serif; /* Mengatur font menjadi Arial */
        }
        .profile-container {
            background-color: #fff5e1; /* Background cream muda untuk kotak profil */
            padding: 40px; 
            border-radius: 20px; /* Membuat sudut kotak lebih melengkung */
            max-width: 500px; /* Atur lebar maksimal */
            width: 100%; 
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Meningkatkan shadow */
            text-align: center; /* Membuat konten di dalam kontainer berpusat */
            transition: transform 0.3s ease-in-out; /* Animasi pada kotak profil */
        }
        .profile-container:hover {
            transform: scale(1.05); /* Efek zoom in ketika hover */
        }
        .profile-img {
            width: 150px; /* Ukuran gambar */
            height: 150px; /* Ukuran gambar */
            border-radius: 50%; /* Membuat gambar menjadi lingkaran */
            object-fit: cover; /* Gambar tetap proporsional */
            margin-bottom: 20px; /* Jarak antara gambar dan teks */
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Animasi saat hover */
        }
        .profile-img:hover {
            transform: scale(1.1); /* Efek zoom in pada gambar saat hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Menambahkan shadow pada gambar saat hover */
        }
        .info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px; /* Jarak antar form input */
        }
        .label {
            font-weight: bold; /* Mencetak tebal label */
            margin-right: 10px; /* Memberikan jarak antara label dan value */
            width: 100px; /* Lebar tetap untuk label agar sejajar */
            text-align: left; /* Rata kiri untuk label */
        }
        .value {
            flex: 1; /* Membuat value mengambil sisa ruang */
            text-align: left; /* Rata kiri untuk value */
            background-color: #f0f0f0; /* Warna latar belakang untuk value */
            padding: 5px 10px; /* Padding dalam value */
            border-radius: 5px; /* Membuat sudut value melengkung */
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img class="profile-img" src="../{{ $user->foto }}" alt="Foto Profil">
        <h1>Profil User</h1>

        <div class="info">
            <p class="label">Nama:</p>
            <p class="value">{{ $user->nama }}</p>
        </div>
        <div class="info">
            <p class="label">NPM:</p>
            <p class="value">{{ $user->npm }}</p>
        </div>
        <div class="info">
            <p class="label">Kelas:</p>
            <p class="value">{{ $user->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</p>
        </div>
    </div>
</body>
</html>
