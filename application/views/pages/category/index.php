<main role="main" class="container">
	<?php $this->load->view('layouts/_alert'); 
	?>
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="card mb-3">
				<div class="card-header">
					<span>Kategori</span>
					<a href="<?= base_url('category/create') ?>" class="btn btn-sm btn-danger bi bi-plus ms-2">Tambah</a>

					<div class="float-right">
						<?= form_open(base_url('category/search'), ['method' => 'POST']) ?>
						<div class="input-group">
							<input type="text" name="keyword" class="form-control form-control-sm text-center" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
							<div class="input-group-append">
								<button class="btn btn-danger btn-sm" type="submit">
									<i class="fas fa-search"></i>
								</button>
								<a href="<?= base_url('category/reset') ?>" class="btn btn-outline-danger btn-sm">
									<i class="fas fa-eraser"></i>
								</a>
							</div>
						</div>
						<?= form_close() ?>
					</div>
				</div>
				<div class="card-body table-responsive">
					<table class="table">
						<thead class="table-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Title</th>
								<th scope="col">Slug</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0;
							foreach ($content as $row) :  $no++; ?>
								<tr>
									<td><?= $no ?></td>
									<td><?= '<b>' . $row->title . '</b>' ?></td>
									<td><?= $row->slug ?></td>
									<td>
										<?= form_open("category/delete/$row->id", ['method' => 'POST']) ?>
										<?= form_hidden('id', $row->id) ?>
										
										<button class="btn btn-sm btn-outline-danger rounded-3" type="submit">
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
	</div>
</main>