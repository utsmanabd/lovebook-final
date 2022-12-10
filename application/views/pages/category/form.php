<main role="main" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h4>Formulir <span style="color:#CE1212">Kategori</span></h4>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group me-2">
				<a href="<?= base_url('category') ?>" type="button" class="btn btn-sm btn-outline-danger">Batalkan</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<?= form_open($form_action, ['method' => 'POST']) ?>
			<?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
			<div class="form-group">
				<label for="">Kategori</label>
				<?= form_input('title', $input->title, ['class' => 'form-control', 'id' => 'title', 'onkeyup' => 'createSlug()', 'required' => true, 'autofocus' => true]) ?>
				<?= form_error('title') ?>
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
</main>