<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web Sederhana</title>
    <style>
        /* CSS untuk mendesain halaman */
        body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        nav {
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr;
            padding: 10px;
        }

        nav a {
            float: left;
            display: block;
            color: blue;
            text-align: center;
            padding: 10px 12px;
            text-decoration: none;
            margin: 0;
        }

    </style>
</head>
<body>
    <nav>
        <a href="home.php"target="kanan">Home</a>
        <a href="produk/data-produk.php" target="kanan">Produk</a>
        <a href="profil.php" target="kanan">Profil</a>
        <a href="logout.php"target="_top">Logout</a>
    </nav>

</body>
</html>
