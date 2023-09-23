<!DOCTYPE html>
<html>
<head>
    <title>Halaman Depan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a7dbd8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #336B87;
            color: #ffffff;
            padding: 15px;
            text-align: center;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 50px;
            background-color: #e0e4cc;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 30px;
        }

        p {
            font-size: 24px;
            font-weight: bold
            line-height: 1;
            color: #000000;
            text-align: Center;
        }

        a {
            color: #020202;
            text-decoration: none;
            font-weight: bolder;
            margin-right: 30px;

        }

        a:hover {
            color: #0b48ff;

        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat datang!</h1>
    </header>

    <div class="container">
        <p>Ini adalah halaman depan.</p>
        <p>Silakan gunakan navigasi di atas untuk melihat halaman lain.</p>

        <!-- Tambahkan tombol/link navigasi ke halaman lain -->
        <a href="{{ url('/profile-pembuat') }}">Profile Pembuat</a>

        <a href="{{ url('/informasi-kampus') }}">Informasi Kampus</a>
    </div>
</body>
</html>
