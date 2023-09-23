<!DOCTYPE html>
<html>
<head>
    <title>Informasi Kampus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a7dbd8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #336B87;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #e0e4cc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 24px;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
        }

        a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            margin-right: 10px;
        }

        a:hover {
            color: #0b48ff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Informasi Kampus</h1>
    </header>

    <div class="container">
        <p>Nama Kampus: Universitas Pembangunan Nasional Veteran Jawa Timur</p>
        <p>Lokasi: Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, Surabaya, Jawa Timur 60294</p>
        <p>Deskripsi: Universitas Pembangunan Nasional "Veteran" Jawa Timur adalah sebuah perguruan tinggi negeri di Indonesia yang berada di Surabaya, Jawa Timur. UPN "Veteran" Jatim berdiri sejak 5 Juli 1959 dan saat ini dipimpin oleh Rektor Prof. Dr. Ir. Akhmad Fauzi, M.MT., IPU.</p>


        <p><a href="{{ url('/') }}">Halaman Depan</a></p>
        <p><a href="{{ url('/profile-pembuat') }}">Profile Pembuat</a></p>
    </div>
</body>
</html>
