<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Saya</title>
    <style>
        body {
            font-family: Arial, 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: #333   ;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #555;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        h1 {
            margin: 0;
        }
        nav {
            background-color: #444;
            color: #333;
            text-align: center;
            padding: 10px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
        }
        /* Warna Font dan Latar Belakang untuk Konten */
        h2 {
            color: #333;
            background-color: #8A2BE2;
            padding: 10px;
        }
        p {
            color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Muhammad Rizal Ahmad</h1>
    </header>

    <div class="container">
        <h2>Tentang Saya</h2>
        <p>Halo, saya adalah Muhammad Rizal Ahmad.</p>
        
        <!-- Menambahkan Gambar -->
        <img src="o.jpg" alt="Foto Saya" width="300">
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> Muhammad Rizal Ahmad
    </footer>
</body>
</html>
