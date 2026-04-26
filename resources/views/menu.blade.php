<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            text-align: center;
        }

        h1 {
            margin-top: 2.5rem;
            color: #333;
        }

        h2 {
            margin-top: 2rem;
            color: #555;
        }

        .container {
            width: 80%;
            margin: auto;
        }

        .menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .card {
            width: 12rem;
            padding: 1.2rem;
            border-radius: 0.8rem;
            background-color: white;
            text-decoration: none;
            color: #333;
            box-shadow: 0 0.3rem 0.8rem rgba(0,0,0,0.1);
            transition: 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .latihan {
            border-top: 0.3rem solid #60a5fa;
        }

        .tugas {
            border-top: 0.3rem solid #f472b6;
        }
    </style>
</head>

<body>

    <h1>Pemrograman Web</h1>

    <div class="container">

        <h2>Latihan</h2>
        <div class="menu">
            <a href="/pert1" class="card latihan">Pertemuan 1</a>
            <a href="/pert2" class="card latihan">Pertemuan 2</a>
            <a href="/pert3" class="card latihan">Pertemuan 3</a>
            <a href="/pert4" class="card latihan">Pertemuan 4</a>
            <a href="/pert5" class="card latihan">Pertemuan 5</a>
        </div>

        <h2>Tugas</h2>
        <div class="menu">
            <a href="/tugaspert3" class="card tugas">Tugas 3</a>
            <a href="/tugaspert5linktree" class="card tugas">Tugas 5(Linktree)</a>
            <a href="/tugaspert5makeoverig" class="card tugas">Tugas 5(Makeover IG)</a>
        </div>

    </div>

</body>
</html>
