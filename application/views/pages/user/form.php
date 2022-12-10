<main role="main" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h4>Formulir <span style="color:#CE1212">Pengguna</span></h4>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group me-2">
				<a href="<?= base_url('user') ?>" type="button" class="btn btn-sm btn-outline-danger">Batalkan</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<?= form_open_multipart($form_action, ['method' => 'POST']) ?>
			<?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
			<div class="form-group">
				<label for="">Nama</label>
				<?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
				<?= form_error('name') ?>
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukkan alamat email aktif', 'required' => true]) ?>
				<?= form_error('email') ?>
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password minimal 8 karakter']) ?>
				<?= form_error('password') ?>
			</div>
			<div class="form-group">
				<label for="">Role</label>
				<br>
				<div class="form-check form-check-inline">
					<?= form_radio(['name' => 'role', 'value' => 'admin', 'checked' => $input->role == 'admin' ? true : false, 'form-check-input']) ?>
					<label for="" class="form-check-label">Admin</label>
				</div>
				<div class="form-check form-check-inline">
					<?= form_radio(['name' => 'role', 'value' => 'member', 'checked' => $input->role == 'member' ? true : false, 'form-check-input']) ?>
					<label for="" class="form-check-label">Member</label>
				</div>
			</div>
			<div class="form-group">
				<label for="">Status</label>
				<br>
				<div class="form-check form-check-inline">
					<?= form_radio(['name' => 'is_active', 'value' => 1, 'checked' => $input->is_active == 1 ? true : false, 'form-check-input']) ?>
					<label for="" class="form-check-label">Aktif</label>
				</div>
				<div class="form-check form-check-inline">
					<?= form_radio(['name' => 'is_active', 'value' => 0, 'checked' => $input->is_active == 0 ? true : false, 'form-check-input']) ?>
					<label for="" class="form-check-label">Tidak Aktif</label>
				</div>
			</div>
			<div class="form-group">
				<label for="">Foto</label>
				<br>
				<?= form_upload('image') ?>
				<?php if ($this->session->flashdata('image_error')) : ?>
					<small class="form-text text-danger"><?= $this->session->flashdata('image_error') ?></small>
				<?php endif ?>
				<?php if (isset($input->image)) : ?>
					<img src="<?= base_url("/images/user/$input->image") ?>" alt="" height="150">
				<?php endif ?>
			</div>
			<button type="submit" class="btn btn-danger">Simpan</button>
			<?= form_close() ?>
		</div>
	</div>
</main>