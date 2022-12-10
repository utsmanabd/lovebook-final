<main role="main" class="container">
	<?php $this->load->view('layouts/_alert') ?>
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="card mb-3">
				<div class="card-header">
					<span>Pengguna</span>
					<a href="<?= base_url('user/create') ?>" class="btn btn-sm btn-danger bi bi-plus ms-2"> Tambah user</a>

					<div class="float-right">
						<form action="<?= base_url("user/search") ?>" method="POST">
							<div class="input-group">
								<input type="text" name="keyword" class="form-control form-control-sm text-center" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
								<div class="input-group-append">
									<button class="btn btn-danger btn-sm" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<a href="<?= base_url("user/reset") ?>" class="btn btn-outline-danger btn-sm">
										<i class="fas fa-eraser"></i>
									</a>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="card-body table-responsive">
					<table class="table">
						<thead class="table-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Pengguna</th>
								<th scope="col">Email</th>
								<th scope="col">Role</th>
								<th scope="col">Status</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0; foreach($content as $row) : $no++; ?>
							<tr>
								<td><?= $no ?></td>
								<td>
									<p>
										<img src="<?= $row->image ? base_url("images/user/$row->image") : base_url("images/user/avatar.png") ?>" alt="" height="50">
										<?= $row->name ?>
									</p>
								</td>
								<td><?= $row->email ?></td>
								<td><?= $row->role ?></td>
								<td><?= $row->is_active ? 'Aktif' : 'Tidak Aktif' ?></td>
								<td>
									<?= form_open(base_url("user/delete/$row->id"), ['method' => 'POST']) ?>
									<?= form_hidden('id', $row->id) ?>
									<a href="<?= base_url("user/edit/$row->id") ?>" class="btn btn-sm btn-outline-dark rounded-3">
										<i class="bi bi-pencil-square"></i>
									</a>
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
