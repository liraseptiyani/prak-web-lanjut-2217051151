<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
