<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bread Talk</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
body{font-family:Arial;background:#fffaf3}

.navbar{background:#3b2414!important}
.navbar a{color:#fff!important;margin-left:15px}

.hero{
min-height:80vh;
background:linear-gradient(135deg,#ffd36e,#ffb347);
display:flex;align-items:center
}

.hero h1{font-size:45px;font-weight:bold;color:#5a3110}
.hero p{color:#6f4218;margin:15px 0}

.hero img{
max-width:420px;border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.2)
}

.btn-dark-custom{background:#4a2c17;color:#fff;border-radius:25px}
.btn-light-custom{background:#fff;color:#4a2c17;border-radius:25px}

.section{padding:70px 0}

.menu-card{
background:#fff;border-radius:12px;
box-shadow:0 3px 10px rgba(0,0,0,.1);
overflow:hidden
}

.menu-card img{width:100%;height:220px;object-fit:cover}
.menu-card .card-body{padding:18px}

.price{font-weight:bold;color:#d97721}

.promo{background:#4a2c17;color:#fff;text-align:center;padding:50px}

footer{background:#2b1a10;color:#fff;padding:15px}
</style>
</head>

<body>

<nav class="navbar navbar-dark">
<div class="container d-flex justify-content-between">
<span class="navbar-brand font-weight-bold">Bread Talk</span>
<div>
<a>Home</a>
<a>Menu</a>
<a>Promo</a>
<a>Kontak</a>
</div>
</div>
</nav>

<section class="hero">
<div class="container">
<div class="row align-items-center">

<div class="col-md-6">
<h1>Roti Lezat Setiap Hari</h1>
<p>Nikmati berbagai roti, pastry, dan cake dengan rasa premium.</p>
<button class="btn btn-dark-custom">Lihat Menu</button>
<button class="btn btn-light-custom">Pesan</button>
</div>

<div class="col-md-6 text-center">
<img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=800&q=80">
</div>

</div>
</div>
</section>

<section class="section">
<div class="container">

<div class="text-center mb-4">
<h2>Menu Favorit</h2>
<p>Pilihan roti yang paling sering dibeli.</p>
</div>

<div class="row">

<div class="col-md-4 mb-4">
<div class="menu-card">
<img src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec">
<div class="card-body">
<h5>Roti Keju</h5>
<p>Roti lembut dengan topping keju.</p>
<div class="price">Rp12.000</div>
</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="menu-card">
<img src="https://images.unsplash.com/photo-1519869325930-281384150729">
<div class="card-body">
<h5>Cupcake Vanilla</h5>
<p>Cupcake lembut dengan frosting vanilla.</p>
<div class="price">Rp10.000</div>
</div>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="menu-card">
<img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587">
<div class="card-body">
<h5>Chocolate Cake</h5>
<p>Cake cokelat dengan krim manis.</p>
<div class="price">Rp25.000</div>
</div>
</div>
</div>

</div>
</div>
</section>

<section class="promo">
<h2>Promo Minggu Ini</h2>
<p>Buy 1 Get 1</p>
<button class="btn btn-light-custom">Lihat Promo</button>
</section>

<footer>
<div class="container d-flex justify-content-between">
<span>© 2026 BreadTalk</span>
<span>Instagram | Whatsapp</span>
</div>
</footer>

</body>
</html>
