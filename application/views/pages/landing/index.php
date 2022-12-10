<main id="main">
    <div id="carouselExampleFade" class="carousel slide carousel-fade d-none d-md-block" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('') ?>assets/img/bn3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption" data-aos="fade-up">
                    <!-- <h3>LOVEBOOK</h3> -->
                    <div class="d-none d-md-block section-header">
                        <p>Cari Buku Bekas Berkualitas Disini!</p>
                    </div>
                    <p class="small">Gak usah ragu, semua produk Lovebook dijamin original!</p>
                    <a href="<?= base_url('home') ?>" class="btn mt-3 shadow" style="font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block; 
                    padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:#CE1212; color:white">Lihat Produk</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('') ?>assets/img/bn2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption" data-aos="fade-up">
                    <!-- <h1>Example headline.</h1> -->
                    <div class="d-none d-md-block section-header">
                        <p>Transaksi Cepat, Mudah, dan Aman!</p>
                    </div>
                    <p class="small">Saking gampangnya jadi gak puas kalo cuma beli satu!</p>
                    <a href="<?= base_url('home') ?>" class="btn mt-3 shadow" style="font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block; 
                    padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:#CE1212; color:white">Belanja Sekarang</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('') ?>assets/img/bn1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption" data-aos="fade-up">
                    <!-- <h1>Example headline.</h1> -->
                    <div class="d-none d-md-block section-header">
                        <p>Katalog Buku lengkap!</p>
                    </div>
                    <p class="small">Lengkap dari A-Z! Ayo bergabung bersama kami!</p>
                    <?php if (!$this->session->userdata('is_login')) : ?>
                        <a href="<?= base_url('register') ?>" class="btn mt-3 shadow" style="font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block; 
                        padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:#CE1212; color:white">Daftar</a>
                    <?php else : ?>
                        <a href="<?= base_url('home') ?>" class="btn mt-3 shadow" style="font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block; 
                        padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:#CE1212; color:white">Semua Buku</a>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section id="hero" class="hero d-flex align-items-center section-bg d-block d-xs-none d-sm-none">
        <div class="container" data-aos="fade-up">
            <img data-aos="zoom-in" src="<?= base_url('') ?>assets/img/logolovebookFIX.png" style="width:200px; height:200px;" class="rounded mx-auto d-block">
            <div class="section-header" data-aos="fade-up">
                <p>Cari buku bekas <span>Berkualitas!</span></p>
                <?php if (!$this->session->userdata('is_login')) : ?>
                    <a href="<?= base_url('home') ?>" class="btn btn-book-a-table mb-2">Lihat semua buku</a>
                    <a href="<?= base_url('login') ?>" class="shadow-sm btn mb-2" style="
                    font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block; 
                    padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:white; color:#CE1212">Login/Register</a>
                <?php else : ?>
                    <a href="<?= base_url('home') ?>" class="btn btn-book-a-table mb-2">Lihat semua buku</a>
                <?php endif ?>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Terlaris</h2>
                <p>Paling Banyak <span>Dicari</span></p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-fiction">
                        <h4>Fiksi</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-nonfiction">
                        <h4>Non Fiksi</h4>
                    </a>
                </li><!-- End tab nav item -->

            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                <div class="tab-pane fade active show" id="menu-fiction">

                    <div class="tab-header text-center">
                        <h3>Fiksi</h3>
                    </div>

                    <div class="row gy-5">
                        <?php $limit = 6;
                        $counter = 0; ?>
                        <?php foreach ($fiksi as $row) : ?>
                            <?php $counter++; ?>
                            <div class="col-lg-4 menu-item">
                                <!-- <a href="assets/img/menu/enola1.png" class="glightbox"><img src="assets/img/menu/enola1.png" class="menu-img img-fluid" alt=""></a> -->
                                <a href="<?= base_url('home/detail/'.$row->id) ?>"><img src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="" height="" class="menu-img img-fluid"></a>
                                <h4 style="text-align:center"><?= ucwords($row->title) ?></h4>
                                <p class="description" style="text-align:center">
                                    <i><?= substr($row->description, 0, 80) ?> ...</i><br><small><a href="<?= base_url('home/detail/'.$row->id) ?>" class="text-muted opacity-50">Lihat Selengkapnya</a></small>
                                </p>
                                <p class="price">Rp<?= number_format($row->price, 0, ',', '.') ?>,-</p>
                            </div><!-- Menu Item -->
                            <?php if ($counter >= $limit) break; ?>
                        <?php endforeach ?>

                    </div>
                </div><!-- End Starter Menu Content -->

                <div class="tab-pane fade" id="menu-nonfiction">

                    <div class="tab-header text-center">
                        <h3>Non Fiksi</h3>
                    </div>

                    <div class="row gy-5">
                        <?php $limit = 6;
                        $counter = 0; ?>
                        <?php foreach ($nonfiksi as $row) : ?>
                            <?php $counter++; ?>
                            <div class="col-lg-4 menu-item">
                                <!-- <a href="assets/img/menu/enola1.png" class="glightbox"><img src="assets/img/menu/enola1.png" class="menu-img img-fluid" alt=""></a> -->
                                <a href="<?= base_url('home/detail/'.$row->id) ?>"><img src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="" height="" class="menu-img img-fluid"></a>
                                <h4 style="text-align:center"><?= ucwords($row->title) ?></h4>
                                <p class="description" style="text-align:center">
                                    <i><?= substr($row->description, 0, 80) ?> ...</i><br><small><a href="<?= base_url('home/detail/'.$row->id) ?>" class="text-muted opacity-50">Lihat Selengkapnya</a></small>
                                </p>
                                <p class="price">Rp<?= number_format($row->price, 0, ',', '.') ?>,-</p>
                            </div><!-- Menu Item -->
                            <?php if ($counter >= $limit) break; ?>
                        <?php endforeach ?>

                    </div>
                </div><!-- End Breakfast Menu Content -->

            </div>

        </div>
    </section><!-- End Menu Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <p>Rekomendasi <span>Buku</span></p>
                <h2>Hanya untuk kamu</h2>
            </div>
            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <?php $limit = 8;
                    $counter = 0; ?>
                    <?php foreach ($content as $row) : ?>
                        <?php $counter++ ?>
                        <div class="swiper-slide"><img src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" class="img-fluid" alt=""></div>
                        <?php if ($counter >= $limit) break ?>
                    <?php endforeach ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>


        </div>
    </section><!-- End Gallery Section -->


    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <?php if (!$this->session->userdata('is_login')) : ?>
                    <h2>Tunggu apa lagi?</h2>
                    <p>Gabung <span>Bersama Kami</span> Sekarang!</p>
                    <a href="<?= base_url('register') ?>" class="btn mt-3 shadow" style="font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block; 
          padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:#CE1212; color:white">Klik disini</a>
                <?php else : ?>
                    <h2>Tunggu apa lagi?</h2>
                    <p>Cari <span>Buku Impian Anda</span> Sekarang!</p>
                    <a href="<?= base_url('home') ?>" class="btn mt-3 shadow" style="font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block; 
          padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:#CE1212; color:white">Klik disini</a>
                <?php endif ?>
            </div>

        </div>
    </section>

</main><!-- End #main -->
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>