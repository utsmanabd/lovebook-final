<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<?php $this->load->view('layouts/_alert'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Data <span style="color:#CE1212">Order</span></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <form action="<?= base_url("order/search") ?>" method="POST">
                <div class="input-group me-2">
                    <input type="text" name="keyword" class="form-control form-control-sm text-center" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
                    <div class="input-group-append">
                        <button class="btn btn-outline-danger btn-sm" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <a href="<?= base_url("order/reset") ?>" class="btn btn-outline-danger btn-sm">
                            <i class="fas fa-eraser"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
	<div class="row">
		<div class="mx-auto">
			<div class="card mb-3">
				<div class="card-body table-responsive">
					<table class="table table-hover">
						<thead class="table-dark">
							<tr>
								<th>Nomor</th>
								<th>Tanggal</th>
								<th>Total</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($content as $row) : ?>
							<tr>
								<td>
									<a style="color:#CE1212" href="<?= base_url("/order/detail/$row->id") ?>"><strong>#<?= $row->invoice ?></strong></a>
								</td>
								<td><?= str_replace('-', '/', date("d-m-Y", strtotime($row->date))) ?></td>
								<td>Rp<?= number_format($row->total, 0, ',', '.') ?>,-</td>
								<td>
									<?php $this->load->view('layouts/_status', ['status' => $row->status ]);  ?>
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