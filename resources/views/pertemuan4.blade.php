<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5026241133.html</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,700;1,200&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .top-section {
            background: #fff;
            padding: 100px 0 140px;
            text-align: center;
        }

        .top-section h1 {
            font-weight: 400;
            font-size: 42px;
            color: #333;
            margin-bottom: 20px;
        }

        .top-section p {
            color: #aaa;
            font-size: 14px;
            max-width: 500px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .pricing-wrapper {
            margin-top: -80px;
            padding-bottom: 100px;
        }

        .card-plan {
            background: #fff;
            border: none;
            text-align: center;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            height: 100%;
        }

        .h-pop {
            background: #8bdc7d;
            color: #fff;
            padding: 10px;
            font-size: 9px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 0;
        }

        .h-green {
            background: #52c17d;
            color: #fff;
            padding: 15px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 12px;
            margin-top: 0;
        }

        .h-yellow {
            background: #f2c94c;
            color: #fff;
            padding: 15px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 12px;
        }

        .price-box {
            padding: 50px 0;
            color: #444;
        }

        .price-box sup {
            font-size: 24px;
            font-weight: 200;
            top: -1.2em;
        }

        .price-box i {
            font-style: italic;
            font-weight: 200;
            font-size: 65px;
        }

        .price-box span {
            font-size: 18px;
            color: #ccc;
            text-transform: uppercase;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
        }

        .feature-list li {
            padding: 15px;
            border-top: 1px solid #f8f8f8;
            color: #888;
            font-size: 13px;
        }

        .feature-list b {
            font-weight: 700;
            color: #555;
        }

        .btn-box {
            padding: 30px 40px;
        }

        .btn-main {
            padding: 12px;
            font-weight: 700;
            font-size: 11px;
            text-transform: uppercase;
            border: none;
            width: 100%;
            border-radius: 2px;
        }

        .btn-grey {
            background: #e0e0e0;
            color: #fff;
        }

        .btn-yellow {
            background: #f2c94c;
            color: #fff;
        }

        .side-card {
            margin-top: 33px;
        }
    </style>
</head>

<body>

    <div class="top-section">
        <div class="container">
            <h1>Select a plan.</h1>
            <p>Pilih paket belajar yang paling sesuai untuk membantu masa studi mahasiswa .</p>
        </div>
    </div>

    <div class="container pricing-wrapper">
        <div class="row justify-content-center align-items-end">

            <!-- PERSONAL -->
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card-plan side-card">
                    <div class="h-yellow">Personal</div>
                    <div class="price-box"><sup>$</sup><i>50</i><span>/mo</span></div>
                    <ul class="feature-list">
                        <li><b>Akses</b> 5 modul materi</li>
                        <li><b>Gratis</b> 1x sertifikat</li>
                        <li><b>Terbatas</b> forum diskusi</li>
                        <li><b>Penyimpanan</b> cloud 2GB</li>
                        <li><b>Update</b> materi bulanan</li>
                    </ul>
                    <div class="btn-box"><button class="btn-main btn-grey">YOUR PLAN</button></div>
                </div>
            </div>

            <!-- PROFESSIONAL -->
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card-plan">
                    <div class="h-pop">POPULAR</div>
                    <div class="h-green">Professional</div>
                    <div class="price-box"><sup>$</sup><i>100</i><span>/mo</span></div>
                    <ul class="feature-list">
                        <li><b>Akses</b> semua materi</li>
                        <li><b>Gratis</b> semua sertifikat</li>
                        <li><b>Eksklusif</b> bimbingan tutor</li>
                        <li><b>Bebas</b> cek plagiasi</li>
                        <li><b>Penyimpanan</b> cloud 50GB</li>
                    </ul>
                    <div class="btn-box"><button class="btn-main btn-yellow">UPGRADE</button></div>
                </div>
            </div>

            <!-- BUSINESS -->
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card-plan side-card">
                    <div class="h-yellow">Business</div>
                    <div class="price-box"><sup>$</sup><i>225</i><span>/mo</span></div>
                    <ul class="feature-list">
                        <li><b>Akses</b> tim 5 mahasiswa</li>
                        <li><b>Privat</b> bimbingan skripsi</li>
                        <li><b>Review</b> portofolio kerja</li>
                        <li><b>Prioritas</b> layanan 24/7</li>
                        <li><b>Lisensi</b> software premium</li>
                    </ul>
                    <div class="btn-box"><button class="btn-main btn-yellow">UPGRADE</button></div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
