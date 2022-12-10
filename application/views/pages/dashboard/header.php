<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.104.2">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?> - Lovebook</title>

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/LogoLovebook.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/LogoLovebook.png" rel="apple-touch-icon">

    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/fusioncharts.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/themes/fusioncharts.theme.fusion.js"></script>


    <!-- Custom styles for this template -->
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/fontawesome/css/all.min.css">

    <link href="<?= base_url() ?>assets/dashboard/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 bg-danger shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="<?= base_url() ?>">
            <h5>Lovebook</h5><span></span>
        </a>

        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> -->
        <div class="navbar">
            <a class="bi bi-house nav-link" style="color:white" href="<?= base_url('home') ?>"> Home</a>
            <div class="nav-item text-nowrap">
                <a class="bi bi-box-arrow-right nav-link px-3 me-3 ms-3" style="color:white" href="<?= base_url('/logout') ?>"> Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->uri_string() == 'dashboard') { echo 'active'; } ?>" href="<?= base_url('dashboard') ?>">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->uri_string() == 'product') { echo 'active'; } ?>" href="<?= base_url('product') ?>">
                                <span data-feather="book-open" class="align-text-bottom"></span>
                                Data Produk
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->uri_string() == 'order') { echo 'active'; } ?>" href="<?= base_url('order') ?>">
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                Data Order
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->uri_string() == 'user') { echo 'active'; } ?>" href="<?= base_url('user') ?>">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Data Pengguna
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($this->uri->uri_string() == 'category') { echo 'active'; } ?>" href="<?= base_url('category') ?>">
                                <span data-feather="tag" class="align-text-bottom"></span>
                                Data Kategori
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>