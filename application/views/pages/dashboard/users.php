<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <?php $this->load->view('layouts/_alert'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Data <span style="color:#CE1212">Pengguna</span></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <form action="<?= base_url("user/search") ?>" method="POST">
                <div class="input-group me-2 mt-2">
                    <input type="text" name="keyword" class="form-control form-control-sm text-center" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
                    <div class="input-group-append">
                        <button class="btn btn-outline-danger btn-sm" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <a href="<?= base_url("user/reset") ?>" class="btn btn-outline-danger btn-sm">
                            <i class="fas fa-eraser"></i>
                        </a>
                    </div>
                </div>
            </form>
            <div class="btn-group me-2 mt-2">
                <a type="button" class="btn btn-sm btn-danger bi bi-plus" href="<?= base_url('user/create') ?>"> Tambah Data</a>
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
                            <th scope="col">Pengguna</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($content as $row) : $no++; ?>
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
</main>