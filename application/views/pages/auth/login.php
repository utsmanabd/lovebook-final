<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.5">
	<title><?= isset($title) ? $title : 'CIShop' ?> - Lovebook</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/">

	<link href="<?= base_url() ?>assets/img/LogoLovebook.png" rel="icon">
	<link href="<?= base_url() ?>assets/img/LogoLovebook.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

	<link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/fusioncharts.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/themes/fusioncharts.theme.fusion.js"></script>
	<!-- Bootstrap core CSS -->
	<link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/libs/fontawesome/css/all.min.css">
	<!-- Custom styles for this template -->
	<link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet">
</head>

<body>
	<div class="mt-5 mb-3 invisible">as</div>
	<div class="bg-image" style="background-image: url('<?= base_url() ?>images/background.jpg');
            height: 100vh">
		<!-- ======= Header ======= -->
		<header id="header" class="header fixed-top d-flex align-items-center">
			<div class="container d-flex align-items-center justify-content-between">

				<a href="<?= base_url() ?>" class="logo d-flex align-items-center me-auto me-lg-0">
					<!-- Uncomment the line below if you also wish to use an image logo -->
					<img src="<?= base_url() ?>assets/img/logolovebookFIX.png" alt="">
					<h1 class="navbar">Lovebook<span>.</span></h1>
				</a>

				<nav id="navbar" class="navbar">
					<ul>
						<li><a href="<?= base_url() ?>">Beranda</a></li>
						<li><a href="<?= base_url('home') ?>">Produk</a></li>
						<li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
							<ul>
								<li><a href="<?= base_url('shop/category/fiksi') ?>">Fiksi</a></li>
								<li><a href="<?= base_url('shop/category/nonfiksi') ?>">Non-Fiksi</a></li>
							</ul>
						</li>
						<?php if ($this->session->userdata('role') == 'admin') : ?>
							<li class="dropdown"><a href="<?= base_url('dashboard') ?>"><span>Admin</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
								<ul>
									<li><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
									<li><a href="<?= base_url('category') ?>">Data Kategori</a></li>
									<li><a href="<?= base_url('product') ?>">Data Produk</a></li>
									<li><a href="<?= base_url('order') ?>">Data Order</a></li>
									<li><a href="<?= base_url('user') ?>">Data Pengguna</a></li>
								</ul>
							</li>
						<?php endif ?>
					</ul>
				</nav><!-- .navbar -->
				<nav>
					<?php if (!$this->session->userdata('is_login')) : ?>
						<a href="#"><i class="bi bi-cart4 position-relative fs-5"></i></a>
					<?php else : ?>
						<a href="<?= base_url('cart') ?>"><i class="bi bi-cart4 position-relative fs-5"><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?= getCart(); ?><span class="visually-hidden">Cart</span></span></i></a>
					<?php endif ?>
					<?php if (!$this->session->userdata('is_login')) : ?>
						<a href="#" class="dropdown-toggle btn-book-a-table bi bi-person-circle fs-5" id="dropdown-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </a>
						<div class="dropdown-menu" aria-labelledby="dropdown-1">
							<a href="<?= base_url('/login') ?>" class="dropdown-item">Login</a>
							<a href="<?= base_url('/register') ?>" class="dropdown-item">Register</a>
						<?php else : ?>
							<a href="#" class="dropdown-toggle btn-book-a-table bi bi-person-circle fs-5" id="dropdown-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-2">
								<a href="" class="dropdown-item disabled text-muted"><i>Halo, <?= ucwords($this->session->userdata('name')) ?>!</i></a>
								<a href="<?= base_url('/profile') ?>" class="dropdown-item">Profile</a>
								<a href="<?= base_url("/myorder") ?>" class="dropdown-item">Orders</a>
								<a href="<?= base_url('/logout') ?>" class="dropdown-item">Logout</a>
							</div>

						<?php endif ?>
						<!-- <a class="btn-book-a-table bi bi-person-circle fs-5" href="#"></a> -->
						<!-- <a href="#" class="bi bi-box-arrow-right ms-2 fs-5"></a> -->
				</nav>
				<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
				<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
			</div>

		</header><!-- End Header -->
		<main role="main" class="container">

			<?php $this->load->view('layouts/_alert') ?>
			<div class="row d-flex align-items-center justify-content-center" data-aos="zoom-out">
				<div class="col-sm-5 mt-5">
					<div class="card p-4 shadow-sm rounded-5 shadow">
						<div class="card-body">
							<img data-aos="zoom-in" src="<?= base_url() ?>/assets/img/logolovebookFIX.png" style="width:150px; height:150px;" class="rounded mx-auto d-block">
							<div class="section-header">
								<p>Login ke<span> Lovebook</span></p>
								<h2>Masuk untuk melanjutkan</h2>
							</div>
							<?= form_open('login', ['method' => 'POST']) ?>
							<div class="form-group">
								<label for="">Email</label>
								<?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukkan alamat email', 'required' => true]) ?>
								<?= form_error('email') ?>
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password', 'required' => true]) ?>
								<?= form_error('password') ?>
							</div>
							<div class="d-flex justify-content-center">
								<button type="submit" class="btn btn-danger d-flex align-content mt-2" style="font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block;
                        padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:#CE1212; color:white">Login</button>
							</div>
							<?= form_close() ?>
							<div style="text-align:center" class="mt-3">
								<p class="login-register-text">Belum punya akun? <a href="<?= base_url('register') ?>">Daftar sekarang</a></p>
								<button data-bs-target="#loginfirst" class="btn btn-sm btn-outline-danger bi bi-person rounded-pill" data-bs-toggle="modal" type="button"> Beta Account</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- ======= Footer ======= -->
		<footer id="footer" class="footer mt-5" style="position: sticky; top: 100vh">
			<div class="container">
				<div class="row gy-3">
					<div class="col-lg-3 col-md-6 d-flex">
						<i class="bi bi-geo-alt icon"></i>
						<div>
							<h4>Alamat</h4>
							<p>
								KAMPUS BOGOR - Jl. Raya Pajajaran, Kota Bogor,<br>
								Jawa Barat 16128 <br>
							</p>
						</div>

					</div>

					<div class="col-lg-3 col-md-6 footer-links d-flex">
						<i class="bi bi-telephone icon"></i>
						<div>
							<h4>Hubungi kami</h4>
							<p>
								<strong>Phone:</strong> +6287771525501<br>
								<strong>Email:</strong> lovebook@lovebook.my.id<br>
							</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 footer-links d-flex">
						<i class="bi bi-info-circle icon"></i>
						<div>
							<h4>Tentang kami</h4>
							<a href="<?= base_url('landing/about') ?>" style="color:white">
								Pelajari selengkapnya <br>
							</a>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Temukan kami</h4>
						<div class="social-links d-flex">
							<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
							<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
							<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
							<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
						</div>
					</div>

				</div>
			</div>

			<div class="container">
				<div class="copyright">
					&copy; Copyright <strong><span>Lovebook</span></strong>. All Rights Reserved
				</div>
			</div>

		</footer><!-- End Footer -->
		<script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
		<script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
		<script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

		<div id="preloader"></div>
		<!-- Template Main JS File -->
		<script src="<?= base_url() ?>assets/js/main.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
		<script src="<?= base_url() ?>assets/dashboard/dashboard.js"></script>

		<script src="<?= base_url() ?>assets/libs/jquery/jquery-3.4.1.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?= base_url() ?>assets/js/app.js"></script>
		<script src="<?= base_url() ?>assets/js/quantity.js"></script>
	</div>

	<!-- Modal Call -->
	<div class="modal fade" id="loginfirst" tabindex="-1" aria-labelledby="loginfirst" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="loginfirst">Beta Account</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="d-flex justify-content-center">
						<h6><i class="bi bi-shield-lock"></i> Akun Admin</h6>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" placeholder="admin@test.com" readonly value="admin@test.com">
					</div>
					<div class="form-group mb-5">
						<label>Password</label>
						<input type="text" class="form-control" placeholder="12345678" readonly value="12345678">
					</div>
					<hr>
					<div class="d-flex justify-content-center">
						<h6 class="mt-2"><i class="bi bi-person"></i> Akun User</h6>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" placeholder="user@test.com" readonly value="user@test.com">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" class="form-control" placeholder="12345678" readonly value="12345678">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal Call -->

</body>

</html>