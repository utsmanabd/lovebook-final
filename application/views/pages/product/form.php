<main role="main" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<?php $this->load->view('layouts/_alert'); ?>
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h4>Formulir <span style="color:#CE1212">Produk</span></h4>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group me-2">
				<a href="<?= base_url('product') ?>" type="button" class="btn btn-sm btn-outline-danger">Batalkan</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<div class="card-body">
				<?= form_open_multipart($form_action, ['method' => 'POST']) ?>
				<?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
				<div class="form-group">
					<label for="">Judul</label>
					<?= form_input('title', $input->title, ['class' => 'form-control', 'id' => 'title', 'onkeyup' => 'createSlug()', 'required' => true, 'autofocus' => true]) ?>
					<?= form_error('title') ?>
				</div>
				<div class="form-group">
					<label for="">Penulis</label>
					<?= form_input('penulis', $input->penulis, ['class' => 'form-control', 'id' => 'penulis', 'required' => true]) ?>
					<?= form_error('penulis') ?>
				</div>
				<div class="form-group">
					<label for="">Penerbit</label>
					<?= form_input('penerbit', $input->penerbit, ['class' => 'form-control', 'id' => 'penerbit', 'required' => true]) ?>
					<?= form_error('penerbit') ?>
				</div>
				<div class="form-group">
					<label for="">Tahun Terbit</label>
					<?= form_input('tahun', $input->tahun, ['class' => 'form-control', 'id' => 'tahun', 'required' => true]) ?>
					<?= form_error('tahun') ?>
				</div>
				<div class="form-group">
					<label for="">Deskripsi</label>
					<?= form_textarea(['name' => 'description', 'value' => $input->description, 'row' => 4, 'class' => 'form-control']) ?>
					<?= form_error('description') ?>
				</div>
				<div class="form-group">
					<label for="">Kondisi (%)</label>
					<?= form_input(['type' => 'number', 'name' => 'kondisi', 'value' => $input->kondisi, 'class' => 'form-control', 'required' => true]) ?>
					<?= form_error('kondisi') ?>
				</div>
			</div>
		</div>

		<div class="col-md-5">
			<div class="card-body">
				<div class="form-group">
					<label for="">Jumlah Halaman</label>
					<?= form_input(['type' => 'number', 'name' => 'halaman', 'value' => $input->halaman, 'class' => 'form-control', 'required' => true]) ?>
					<?= form_error('halaman') ?>
				</div>
				<div class="form-group">
					<label for="">Harga</label>
					<?= form_input(['type' => 'number', 'name' => 'price', 'value' => $input->price, 'class' => 'form-control', 'required' => true]) ?>
					<?= form_error('price') ?>
				</div>
				<div class="form-group">
					<label for="">Kategori</label>
					<?= form_dropdown('id_category', getDropdownList('category', ['id', 'title']), $input->id_category, ['class' => 'form-control']) ?>
					<?= form_error('id_category') ?>
				</div>
				<div class="form-group">
					<label for="">Stok</label>
					<br>
					<div class="form-check form-check-inline">
						<?= form_radio(['name' => 'is_available', 'value' => 1, 'checked' => $input->is_available == 1 ? true : false, 'form-check-input']) ?>
						<label for="" class="form-check-label">Tersedia</label>
					</div>
					<div class="form-check form-check-inline">
						<?= form_radio(['name' => 'is_available', 'value' => 0, 'checked' => $input->is_available == 0 ? true : false, 'form-check-input']) ?>
						<label for="" class="form-check-label">Kosong</label>
					</div>
				</div>
				<div class="form-group">
					<label for="">Cover Depan</label>
					<br>
					<?= form_upload('image') ?>
					<?php if ($this->session->flashdata('image_error')) : ?>
						<small class="form-text text-danger"><?= $this->session->flashdata('image_error') ?></small>
					<?php endif ?>
					<?php if ($input->image) : ?>
						<img src="<?= base_url("/images/product/$input->image") ?>" alt="" height="150">
					<?php endif ?>
					<p><i class="small text-muted">*JPG,JPEG, atau PNG kurang dari 1mb</i></p>
				</div>
				<div class="form-group">
					<label for="">Slug</label>
					<?= form_input('slug', $input->slug, ['class' => 'form-control', 'id' => 'slug', 'required' => true]) ?>
					<?= form_error('slug') ?>
				</div>
				<button type="submit" class="btn btn-danger">Simpan</button>
				<?= form_close() ?>
			</div>
		</div>
	</div>
</main>