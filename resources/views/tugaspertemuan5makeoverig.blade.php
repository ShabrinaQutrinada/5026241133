<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iBox Indonesia</title>

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&family=Jost&display=swap"
        rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        .portfolio .portfolio-item img {
            width: 100%;
            height: 22rem;
            object-fit: contain;
            object-position: center;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">iBox</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#why-us">Promo</a></li>
                    <li><a href="#services">Produk</a></li>
                    <li><a href="#portfolio">Highlight</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="#services">Lihat Produk</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero -->
        <section id="hero" class="hero section dark-background">
            <div class="container">
                <div class="row gy-4">

                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1>iBox Indonesia</h1>
                        <p>Temukan produk Apple terbaru dengan performa terbaik dan desain premium. </p>

                        <div class="d-flex">
    <a href="#about" class="btn-get-started">About Us</a>

    <a href="https://www.instagram.com/iboxindonesia/"
       class="btn-watch-video d-flex align-items-center"
       target="_blank">
        <i class="bi bi-instagram" style="font-size: 1.5rem; margin-right: 0.5rem;"></i>
        <span>Instagram</span>
    </a>
</div>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2 hero-img text-center">
                        <img src="{{ asset('assets/img/logoibox.png') }}" class="img-fluid animated" alt="iBox Logo">
                    </div>

                </div>
            </div>
        </section>

        <!-- About -->
        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>About iBox</h2>
            </div>

            <div class="container">
                <div class="row gy-4 align-items-center">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            iBox adalah Apple Premium Reseller di Indonesia yang menyediakan berbagai produk Apple
                            original,
                            mulai dari iPhone, Mac, iPad, Apple Watch, hingga aksesoris resmi.
                        </p>

                        <ul>
                            <li><i class="bi bi-check2-circle"></i> <span>Produk Apple original dan bergaransi
                                    resmi.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Pengalaman belanja yang nyaman dan
                                    terpercaya.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Informasi produk dan promo terbaru dari
                                    iBox.</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <p>
                            Melalui Instagram, iBox membagikan informasi produk terbaru, campaign, promo, dan inspirasi
                            penggunaan
                            perangkat Apple untuk mendukung aktivitas sehari-hari.
                        </p>
                        <a href="#portfolio" class="read-more">
                            <span>Lihat Highlight</span><i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Promo -->
        <section id="why-us" class="section why-us light-background" data-builder="section">
            <div class="container-fluid">
                <div class="row gy-4">

                    <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
                        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                            <h3><span>Upgrade ke iPhone terbaru </span><strong>bersama iBox</strong></h3>
                            <p>
                                Lebih cepat, lebih canggih, dan lebih powerful. Rasakan pengalaman baru dengan performa
                                maksimal,
                                kamera yang lebih tajam, dan desain premium khas Apple. 🔥
                            </p>
                        </div>

                        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                            <div class="faq-item faq-active">
                                <h3><span>01</span> Produk terbaru</h3>
                                <div class="faq-content">
                                    <p>Temukan pilihan iPhone, Mac, iPad, dan Apple Watch terbaru sesuai kebutuhan kamu.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3><span>02</span> Promo pilihan</h3>
                                <div class="faq-content">
                                    <p>iBox menghadirkan berbagai penawaran menarik untuk pengalaman belanja yang lebih
                                        nyaman.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                        <img src="{{ asset('assets/img/hp.png') }}" class="img-fluid" style="max-width: 80%;" alt="iPhone">
                    </div>

                </div>
            </div>
        </section>

        <!-- Produk -->
        <section id="services" class="services section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Produk Apple</h2>
                <p>Temukan berbagai produk Apple favorit kamu di iBox Indonesia.</p>
            </div>

            <div class="container">
                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-phone icon"></i></div>
                            <h4><a href="#" class="stretched-link">iPhone</a></h4>
                            <p>Performa tinggi dengan kamera canggih dan desain elegan.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-laptop icon"></i></div>
                            <h4><a href="#" class="stretched-link">MacBook</a></h4>
                            <p>Ringan, cepat, dan siap mendukung produktivitas harian.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-tablet icon"></i></div>
                            <h4><a href="#" class="stretched-link">iPad</a></h4>
                            <p>Fleksibel untuk belajar, bekerja, desain, dan hiburan.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-smartwatch icon"></i></div>
                            <h4><a href="#" class="stretched-link">Apple Watch</a></h4>
                            <p>Temani aktivitas harian dengan fitur kesehatan dan gaya modern.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Highlight -->
        <section id="portfolio" class="portfolio section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Highlight</h2>
                <p>Beberapa produk dan campaign terbaru dari iBox Indonesia.</p>
            </div>

            <div class="container">
                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="{{ asset('assets/img/pict1.png') }}" class="img-fluid" alt="iPhone">
                        <div class="portfolio-info">
                            <h4>iPhone Series</h4>
                            <p>iPhone terbaru dengan performa cepat dan premium.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="{{ asset('assets/img/pict2.png') }}" class="img-fluid" alt="iPhone">
                        <div class="portfolio-info">
                            <h4>iPad</h4>
                            <p>Tablet serbaguna untuk belajar, kerja, hiburan.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="{{ asset('assets/img/pict3.png') }}" class="img-fluid" alt="iPhone">
                        <div class="portfolio-info">
                            <h4>Apple Watch</h4>
                            <p>Smartwatch dengan fitur kesehatan dan aktivitas.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="{{ asset('assets/img/pict4.png') }}" class="img-fluid" alt="iPhone">
                        <div class="portfolio-info">
                            <h4>iPhone Air</h4>
                            <p>Desain tipis, ringan, dengan performa cepat.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="{{ asset('assets/img/pict5.png') }}" class="img-fluid" alt="iPhone">
                        <div class="portfolio-info">
                            <h4>iPad Pro</h4>
                            <p>Performa tinggi untuk desain dan multitasking.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <img src="{{ asset('assets/img/pict6.png') }}" class="img-fluid" alt="iPhone">
                        <div class="portfolio-info">
                            <h4>Apple Watch Series</h4>
                            <p>Desain elegan untuk gaya hidup aktif modern.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="contact section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Hubungi iBox untuk informasi produk dan pembelian.</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                    <div class="col-lg-5">
                        <div class="info-wrap">

                            <div class="info-item d-flex">
                                <i class="bi bi-instagram flex-shrink-0"></i>
                                <div>
                                    <h3>Instagram</h3>
                                    <p>@iboxindonesia</p>
                                </div>
                            </div>

                            <div class="info-item d-flex">
                                <i class="bi bi-globe flex-shrink-0"></i>
                                <div>
                                    <h3>Website</h3>
                                    <p>www.ibox.co.id</p>
                                </div>
                            </div>

                            <div class="info-item d-flex">
                                <i class="bi bi-bag flex-shrink-0"></i>
                                <div>
                                    <h3>Store</h3>
                                    <p>Temukan iBox Store terdekat di kota kamu.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-7">
                        <form action="#" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <label class="pb-2">Nama</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label class="pb-2">Email</label>
                                    <input type="email" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <label class="pb-2">Pesan</label>
                                    <textarea class="form-control" rows="6"></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit">Kirim Pesan</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <footer id="footer" class="footer">
        <div class="container copyright text-center mt-4">
            <p>© <strong class="px-1 sitename">iBox Indonesia</strong></p>
        </div>
    </footer>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div id="preloader"></div>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
