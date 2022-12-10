<main role="main" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h4>Detail Order <span style="color:#CE1212">#<?= $order->invoice ?></span></h4>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group me-2">
				<a href="<?= base_url('order') ?>" type="button" class="btn btn-sm btn-outline-danger">Kembali</a>
			</div>
		</div>
	</div>
	<?php $this->load->view('layouts/_alert'); 
	?>
	<div class="row">
		<div class="col mx-auto">
			<div class="row mb-3">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<label><b>#<?= $order->invoice ?></b></label>
							<div class="float-right">
								<?php $this->load->view('layouts/_status', ['status' => $order->status]); ?>
							</div>
						</div>
						<div class="card-body table-responsive">

							<div class="row gx-3 mb-2">
								<div class="col-md-3">
									<p class="text-muted">Tanggal</p>
								</div>
								<div class="col-md-6">
									<p><?= str_replace('-', '/', date("d-m-Y", strtotime($order->date))) ?></p>
								</div>
							</div>

							<div class="row gx-3 mb-2">
								<div class="col-md-3">
									<p class="text-muted">Nama</p>
								</div>
								<div class="col-md-6">
									<p><?= $order->name ?></p>
								</div>
							</div>

							<div class="row gx-3 mb-2">
								<div class="col-md-3">
									<p class="text-muted">Telepon</p>
								</div>
								<div class="col-md-6">
									<p><?= $order->phone ?></p>
								</div>
							</div>

							<div class="row gx-3 mb-2">
								<div class="col-md-3">
									<p class="text-muted">Alamat</p>
								</div>
								<div class="col-md-6">
									<p><?= $order->address ?></p>
								</div>
							</div>

							<table class="table">
								<thead>
									<tr>
										<th>Produk</th>
										<th class="text-center">Harga</th>
										<th class="text-center">Jumlah</th>
										<th class="text-center">Subtotal</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($order_detail as $row) : ?>
										<tr>
											<td>
												<p><img src="<?= $row->image ? base_url("/images/product/$row->image") : base_url('/images/product/default.png') ?>" alt="" height="50"> <strong><?= $row->title ?></strong></p>
											</td>
											<td class="text-center">Rp<?= number_format($row->price, 0, ',', '.') ?>,-</td>
											<td class="text-center"><?= $row->qty ?></td>
											<td class="text-center">Rp<?= number_format($row->subtotal, 0, ',', '.') ?>,-</td>
										</tr>
									<?php endforeach ?>
									<tr>
										<td colspan="3"><strong>Total:</strong></td>
										<td class="text-center"><strong>Rp<?= number_format(array_sum(array_column($order_detail, 'subtotal')), 0, ',', '.') ?>,-</strong></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<form action="<?= base_url("order/update/$order->id") ?>" method="POST">
								<input type="hidden" name="id" value="<?= $order->id ?>">
								<label><b>Ubah status order :</b></label>
								<div class="input-group">
									<select name="status" id="" class="form-control">
										<option value="waiting" <?= $order->status == 'waiting' ? 'selected' : '' ?>>Menunggu Pembayaran</option>
										<option value="paid" <?= $order->status == 'paid' ? 'selected' : '' ?>>Dibayar</option>
										<option value="delivered" <?= $order->status == 'delivered' ? 'selected' : '' ?>>Dikirim</option>
										<option value="cancel" <?= $order->status == 'cancel' ? 'selected' : '' ?>>Batal</option>
									</select>
									<div class="input-group-append">
										<button class="btn btn-danger" type="submit">Simpan</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<?php if (isset($order_confirm)) : ?>
				<div class="row mb-3">
					<div class="col-md-8">
						<div class="card">
							<div class="card-header">
								Bukti Transfer
							</div>
							<div class="card-body">

								<div class="row gx-3 mb-2">
									<div class="col-md-3">
										<p class="text-muted">No Rekening</p>
									</div>
									<div class="col-md-6">
										<p><?= $order_confirm->account_number ?></p>
									</div>
								</div>

								<div class="row gx-3 mb-2">
									<div class="col-md-3">
										<p class="text-muted">Atas Nama</p>
									</div>
									<div class="col-md-6">
										<p><?= $order_confirm->account_name ?></p>
									</div>
								</div>

								<div class="row gx-3 mb-2">
									<div class="col-md-3">
										<p class="text-muted">Nominal</p>
									</div>
									<div class="col-md-6">
										<p>Rp<?= number_format($order_confirm->nominal, 0, ',', '.') ?>,-</p>
									</div>
								</div>

								<div class="row gx-3 mb-2">
									<div class="col-md-3">
										<p class="text-muted">Catatan</p>
									</div>
									<div class="col-md-6">
										<p><?= $order_confirm->note ?></p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-4">
						<a href="<?= base_url("/images/confirm/$order_confirm->image") ?>" class="glightbox"><img src="<?= base_url("/images/confirm/$order_confirm->image") ?>" alt="" height="200"></a>
					</div>
				</div>
			<?php endif ?>
		</div>
	</div>
</main>