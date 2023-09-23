<!DOCTYPE html>
<html>
<head>
    <title>Profile Pembuat</title>
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
        <h1>Profile Pembuat</h1>
    </header>

    <div class="container">
        <p>Nama   : Rinaldi Fransius Simbolon</p>
        <p>Email  : rinaldisimbolon9@gmail.com</p>
        <p>Mentor : Rizky Bagus Pangestu</p>


        <p><a href="{{ url('/') }}">Halaman Depan</a></p>
        <p><a href="{{ url('/informasi-kampus') }}">Informasi Kampus</a></p>
    </div>
</body>
</html>
