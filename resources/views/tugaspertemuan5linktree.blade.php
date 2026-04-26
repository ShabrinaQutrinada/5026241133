<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@glc.upnvjt</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <style>
        body {
            background: #111;
            font-family: 'Poppins', sans-serif;
        }

        .wrapper {
            max-width: 50%;
            margin: auto;
            background: #0f1923;
            color: white;
            text-align: center;
            padding: 5%;
            border-radius: 5%;
        }

        img {
            width: 20%;
            border-radius: 50%;
        }

        h2 {
            margin: 1% 0;
            font-family: 'Times New Roman', serif;
        }

        p {
            margin-bottom: 3%;
            font-weight: 600;
        }

        a {
            display: block;
            width: 80%;
            margin: 1% auto;
            padding: 2%;
            border: 1px solid #3a4f6a;
            border-radius: 5%;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            background: #1e2d40;
        }

        .sosial {
            margin-top: 3%;
        }

        .sosial a {
            display: inline;
            margin: 0 1%;
            border: none;
            padding: 0;
        }

        .footer-logo {
            margin-top: 5%;
            font-weight: bold;
        }

        .footer-links {
            margin-top: 2%;
            color: #aaa;
        }

        .footer-links a {
            display: inline;
            margin: 0 1%;
            border: none;
            padding: 0;
            color: #fffcfc;
            font-weight: normal;
        }
    </style>
</head>

<body>

    <div class="wrapper">

        <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
        <h2>@glc.upnvjt</h2>
        <p>Global Language Club UPNVJT</p>

        <a href="https://bit.ly/GLCFeedBack">GLC 911</a>
        <a href="{{ asset('assets/pdf/media-partner-glc.pdf') }}" target="_blank">Media partner</a>
        <a href="https://www.linkedin.com/company/global-language-club-upnvjt/" target="_blank">LinkedIn</a>
        <a href="https://line.me/ti/p/~@782lpncs" target="_blank">Line</a>
        <a href="https://www.youtube.com/@GlobalLanguageClubUPNVJT" target="_blank">YouTube</a>
        <a href="https://www.tiktok.com/@glcupnvjt" target="_blank">Tiktok</a>

        <div class="sosial">
            <a href="https://instagram.com/glc_upnvjt" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/global-language-club-upnvjt/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="mailto:email@gmail.com"><i class="fa-solid fa-envelope"></i></a>
        </div>

        <div class="footer-logo">Linktree</div>

        <div class="footer-links">
            <a href="#">Cookie Preferences</a> &bull;
            <a href="#">Report</a> &bull;
            <a href="#">Privacy</a>
        </div>

    </div>

</body>

</html>
