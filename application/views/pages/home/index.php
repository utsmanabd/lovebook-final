<main role="main" class="container">
	<?php $this->load->view('layouts/_alert') 
	?>
	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-body">
							Kategori: <strong><?= isset($category) ? $category : 'Semua Kategori' ?></strong>
							<span class="float-right">
								Urutkan Harga: <a href="<?= base_url("/shop/sortby/asc") ?>" class="badge badge-danger">Termurah</a> | <a href="<?= base_url("/shop/sortby/desc") ?>" class="badge badge-danger">Termahal</a>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<?php foreach ($content as $row) : ?>
					<div class="col-md-4">
						<div class="card mb-3">
							<a href="<?= base_url('home/detail/' . $row->id) ?>"><img src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt="" height="" class="card-img-top"></a>
							<div class="card-body">
								<h5 class="card-title"><b><?= ucwords($row->product_title) ?></b></h5>
								<i class="card-text text-muted"><?= $row->penulis ?></i>
								<h5 class="card-text"><strong>Rp<?= number_format($row->price, 0, ',', '.') ?>,-</strong></h5>

								<a href="<?= base_url("/shop/category/$row->category_slug") ?>" class="badge badge-danger"><i class="fas fa-tags"></i> <?= $row->category_title ?></a>
							</div>
							<div class="card-footer">
								<div class="input-group d-flex justify-content-end ms-3">
									<?php if (!$this->session->userdata('is_login')) : ?>
										<input type="hidden" name="qty" value="1" class="form-control rounded">
										<div class="input-group-append me-1">
											<a href="<?= base_url('home/detail/' . $row->id) ?>" class="rounded btn btn-outline-danger me-1"> Detail</a>
											<button type="button" class="rounded btn btn-danger bi bi-cart" data-bs-toggle="modal" data-bs-target="#loginfirst"> Beli</button>

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

										</div>

									<?php else : ?>
										<form action="<?= base_url("/cart/add") ?>" method="POST">
											<input type="hidden" name="id_product" value="<?= $row->id ?>">
											<div class="input-group me-1">
												<input type="hidden" name="qty" value="1" class="form-control">
												<div class="input-group-append">
													<a href="<?= base_url('home/detail/' . $row->id) ?>" class="rounded btn btn-outline-danger me-1"> Detail</a>
													<button class="btn btn-danger rounded"><i class="bi bi-cart mr-2"></i>Beli</button>
												</div>
											</div>
										</form>
									<?php endif ?>
								</div>

							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>

			<nav aria-label="Page navigation example">
				<?= $pagination ?>
			</nav>
		</div>

		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">
							Pencarian
						</div>
						<div class="card-body">
							<form action="<?= base_url("/shop/search") ?>" method="POST">
								<div class="input-group">
									<input type="text" name="keyword" placeholder="Judul/Penulis" value="<?= $this->session->userdata('keyword') ?>" class="form-control">
									<div class="input-group-append">
										<button class="btn btn-danger" type="submit">
											<i class="fas fa-search"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">
							Kategori
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><a href="<?= base_url('home') ?>">Semua Kategori</a></li>
							<?php foreach (getCategories() as $category) : ?>
								<li class="list-group-item"><a href="<?= base_url("/shop/category/$category->slug") ?>"><?= $category->title ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>