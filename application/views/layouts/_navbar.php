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
							<li><a href="<?= base_url('product') ?>">Data Produk</a></li>
							<li><a href="<?= base_url('order') ?>">Data Order</a></li>
							<li><a href="<?= base_url('user') ?>">Data Pengguna</a></li>
							<li><a href="<?= base_url('category') ?>">Data Kategori</a></li>
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