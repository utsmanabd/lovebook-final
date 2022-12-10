<main role="main" class="container">
	<?php $this->load->view('layouts/_alert'); ?>
	<div class="row">
		<div class="col-md-3">
			<?php $this->load->view('layouts/_menu'); ?>
		</div>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body text-center">
							<img src="<?= $content->image ? base_url("/images/user/$content->image") : base_url("/images/user/avatar.png") ?>" alt="" height="200">
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="card p-2">
						<div class="card-body">
							<h5 class="text-danger">Informasi Akun</h5><hr>
							<a class="small text-muted">Nama </a>
							<p><?= ucwords($content->name) ?></p>
							<a class="small text-muted">Email </a>
							<p><?= $content->email ?></p>
							<a href="<?= base_url("/profile/update/$content->id") ?>" class="btn btn-danger	mt-2">Edit</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
