<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<?php $this->load->view('layouts/_alert'); ?>
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">List Data <span style="color:#CE1212">Produk</span></h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<form action="<?= base_url("product/search") ?>" method="POST">
				<div class="input-group me-2 mt-2">
					<input type="text" name="keyword" class="form-control form-control-sm text-center" placeholder="Cari Judul/Penulis" value="<?= $this->session->userdata('keyword') ?>">
					<div class="input-group-append">
						<button class="btn btn-outline-danger btn-sm" type="submit">
							<i class="fas fa-search"></i>
						</button>
						<a href="<?= base_url("product/reset") ?>" class="btn btn-outline-danger btn-sm">
							<i class="fas fa-eraser"></i>
						</a>
					</div>
				</div>
			</form>
			<div class="btn-group me-2 mt-2">
				<a type="button" class="btn btn-sm btn-danger bi bi-plus" href="<?= base_url('product/create') ?>"> Tambah Data</a>
				<button type="button" class="btn btn-sm btn-outline-danger bi bi-file-earmark-excel-fill" data-bs-toggle="modal" data-bs-target="#exampleModalToggle"> Download</button>

				<!-- Modal Call -->
				<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalToggleLabel">Ekspor Data</h1>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								Export data produk dalam format spreadsheet (.xlsx) atau pdf.
							</div>
							<div class="modal-footer d-flex justify-content-end">
								<a href="<?= base_url('Phpspreadsheet/export') ?>" type="button" class="btn btn-danger">Export (.xlsx)</a>
								<a href="<?= base_url('laporanpdf') ?>" type="button" class="btn btn-light">Export (.pdf)</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="col mx-auto">
		<div class="card mb-3">

			<div class="card-body table-responsive">
				<table class="table table-hover">
					<thead class="table-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col"> </th>
							<th scope="col">Judul</th>
							<th scope="col">Penulis</th>
							<th scope="col">Penerbit</th>
							<th scope="col">Tahun</th>
							<th scope="col">Kategori</th>
							<th scope="col">Kondisi</th>
							<th scope="col">Halaman</th>
							<th scope="col">Harga</th>
							<th scope="col">Stock</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0;
						foreach ($content as $row) : $no++; ?>
							<tr>
								<td><?= $no ?></td>
								<td>
									<img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" height="50">
								</td>
								<td>
									<?= '<b>' . ucwords($row->product_title) . '</b>' ?>
								</td>
								<td><?= ucwords($row->penulis) ?></td>
								<td><?= ucwords($row->penerbit) ?></td>
								<td><?= $row->tahun ?></td>
								<td>
									<span class="badge badge-danger"><i class="fas fa-tags"></i> <?= $row->category_title ?></span>
								</td>
								<td><?= $row->kondisi . '%' ?></td>
								<td><?= $row->halaman ?></td>
								<td>Rp<?= number_format($row->price, 0, ',', '.') ?>,-</td>
								<td><?= $row->is_available ? 'Tersedia' : 'Kosong' ?></td>
								<td>
									<?= form_open(base_url("/product/delete/$row->id"), ['method' => 'POST']) ?>
									<?= form_hidden('id', $row->id) ?>
									<a href="<?= base_url("/product/edit/$row->id") ?>" class="btn btn-sm btn-outline-dark rounded-3 mt-1">
										<i class="bi bi-pencil-square"></i>
									</a>
									<button class="btn btn-sm btn-outline-danger rounded-3 mt-1" type="submit">
										<i class="bi bi-trash"></i>
									</button>
									<?= form_close() ?>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>

				<nav aria-label="Page navigation example">
					<?= $pagination ?>
				</nav>
			</div>
		</div>
	</div>
</main>