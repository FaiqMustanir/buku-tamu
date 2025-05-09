<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu SMK TI BAZMA</title>
    <!-- Menggunakan Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling untuk halaman secara keseluruhan */
        body {
            background-color: #f8f9fa; /* Warna latar belakang */
            font-family: Arial, sans-serif; /* Font default */
        }

        .container {
            margin-top: 50px;
        }

        h1, h2 {
            font-weight: bold;
            color: #333;
        }

        .btn-hover:hover {
            background-color: #007bff;
            transition: all 0.3s ease;
        }

        table {
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        thead {
            background-color: #007bff;
            color: white;
        }

        .form-control {
            border-radius: 10px;
        }

        .alert {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')  <!-- Isi halaman akan ditampilkan di sini -->
    </div>
</body>
</html>
