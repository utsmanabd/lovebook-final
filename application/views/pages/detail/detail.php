<main id="main">
  <section class="sample-page">
    <div class="container">
      <div class="container-xl px-4">
        <div class="row">
          <div class="col-xl-4" data-aos="fade-up">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0 rounded-4 shadow-sm">
              <img class="img-account-profile" src="<?= $detail->image ? base_url("/images/product/$detail->image") : base_url("/images/product/default.png") ?>" alt="">
            </div>
          </div>
          <div class="col-xl-8" data-aos="fade-up">
            <!-- Account details card-->
            <div class="card mb-4 border-0">
              <div class="card-body">

                <label class="text-muted">
                  <?= $detail->penulis ?>
                </label>
                <div class="mb-1">
                  <h2><?= ucwords($detail->product_title) ?></h2>
                </div>

                <div class="mb-2">
                  <form action="<?= base_url("/cart/add") ?>" method="POST">
                    <input type="hidden" name="id_product" value="<?= $detail->id_product ?>">
                    <div class="input-group" style="width:50px">
                      <small class="mb-2">
                        <a>Tersedia</a>
                      </small>
                      <input type="number" name="qty" value="1" class="form-control rounded">
                      <div class="mt-2 mb-2">
                        <h2 style="color:#CE1212">Rp<?= number_format($detail->price, 0, ',', '.') ?>,-</h2>
                      </div>
                      <div class="input-group section-header mt-2">
                        <?php if (!$this->session->userdata('is_login')) : ?>
                          <a href="#loginfirst" class="btn shadow bi bi-cart" data-bs-toggle="modal" style="font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block;
                          padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:#CE1212; color:white" role="button"> Keranjang</a>

                        <?php else : ?>
                          <button class="btn shadow bi bi-cart" style="font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block;
                        padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:#CE1212; color:white"> Keranjang</button>
                        <?php endif ?>
                      </div>
                    </div>
                  </form>
                </div>

                <br>

                <!-- Form Row-->
                <div class="mt-3">
                  <h5>Deskripsi Buku</h5>
                  <p style="text-align: justify;">
                    <?= $detail->description ?>
                  </p>
                </div>

                <br>

                <!-- Form Group (username)-->
                <div class="mb-4 mt-4">
                  <h5>Spesifikasi</h5>
                </div>


                <!-- Form Row-->
                <div class="row gx-3 mb-2">
                  <div class="col-md-3">
                    <p class="text-muted">Kondisi</p>
                  </div>
                  <div class="col-md-6">
                    <p><?= $detail->kondisi ?>%</p>
                  </div>
                </div>

                <!-- Form Row-->
                <div class="row gx-3 mb-2">
                  <div class="col-md-3">
                    <p class="text-muted">Halaman</p>
                  </div>
                  <div class="col-md-6">
                    <p><?= $detail->halaman ?></p>
                  </div>
                </div>

                <!-- Form Row-->
                <div class="row gx-3 mb-2">
                  <div class="col-md-3">
                    <p class="text-muted">Kategori</p>
                  </div>
                  <div class="col-md-6">
                    <p><?= $detail->category_title ?></p>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Modal Call -->
    <div class="modal fade" id="loginfirst" tabindex="-1" aria-labelledby="loginfirst" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="loginfirst">Maaf, belum bisa beli!</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Login atau Register sebelum membeli produk!
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <a href="<?= base_url('login') ?>" class="btn btn-sm bi bi-box-arrow-in-right" style="font-weight: 500; font-size: 14px; letter-spacing: 1px; display: inline-block;
                        padding: 12px 36px; border-radius: 50px; transition: 0.5s; background-color:#CE1212; color:white"> Login</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal Call -->

  </section>

</main><!-- End #main -->