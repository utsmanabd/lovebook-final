<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.5">
	<title><?= isset($title) ? $title : 'Lovebook' ?> - Lovebook</title>

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
	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
	<link href="<?= base_url() ?>assets/css/app.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet">
</head>

<body>
	
	<!-- Navbar -->
	<?php $this->load->view('layouts/_navbar'); ?>
	<div class="mb-4"></div>
	<!-- Endnavbar -->

	<!-- Content -->
	<?php $this->load->view($page); ?>
	<!-- End Content -->

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
							<a href="<?=base_url('landing/about')?>" style="color:white">
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
	<!-- End Footer -->
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

</body>

</html>