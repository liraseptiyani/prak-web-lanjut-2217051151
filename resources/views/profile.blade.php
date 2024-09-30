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
            max-width: 400px; /* Atur lebar maksimal */
            width: 100%; 
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Meningkatkan shadow */
            text-align: center;
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
        .info-box {
            background-color: #e0b88e; /* Warna cream tua untuk kotak info */
            color: white; /* Warna teks putih */
            border-radius: 50px; /* Membuat sudut menjadi lonjong */
            padding: 15px 0; /* Jarak vertikal dalam kotak */
            margin-bottom: 15px; /* Jarak antar kotak */
            font-size: 1.2rem; /* Mengatur ukuran teks agar lebih besar */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan shadow pada kotak info */
            transition: background-color 0.3s ease-in-out; /* Animasi pada warna kotak */
        }
        .info-box:hover {
            background-color: #d4a373; /* Mengubah warna saat kotak info di-hover */
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img class="profile-img" src="https://i.pinimg.com/564x/11/8c/c8/118cc81c633316f14688da16832f90b3.jpg" alt="Foto Profil">
        <div class="info-box">
            Lira Septiyani
        </div>
        <div class="info-box">
            A
        </div>
        <div class="info-box">
            2217051151
        </div>
    </div>
</body>
</html>
