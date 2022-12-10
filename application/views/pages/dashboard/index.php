<script type="text/javascript">
    const chartData = [{
            label: "Nonfiksi",
            value: "<?= $nonfiksi ?>"
        },
        {
            label: "Fiksi",
            value: "<?= $fiksi ?>"
        }
    ];
    const chartConfig = {
        type: 'pie2d',
        renderAt: 'chartKategori',
        width: '100%',
        height: '400',
        dataFormat: 'json',
        dataSource: {
            "chart": {
                "plottooltext": "Sebanyak <b>$percentValue</b> pengguna membeli kategori $label ",
                "showlegend": "1",
                "showpercentvalues": "1",
                "usedataplotcolorforlabels": "1",
                "theme": "fusion"
            },
            "data": chartData
        }
    };
    FusionCharts.ready(function() {
        var fusioncharts = new FusionCharts(chartConfig);
        fusioncharts.render();
    });
</script>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Selamat Datang, <span style="color:#CE1212"><?= ucwords($this->session->userdata('name')) ?>!</span></h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"></span>
                This week
            </button>
        </div> -->
    </div>


    <!-- <h4 class="mb-4">Pendapatan</h4> -->
    <div class="row">
        <div class="row mx-auto mt-3 mb-4">
            <div class="card rounded-5 shadow p-2 bg-danger">
                <div class="card-body text-white">

                    <?php $sum = 0;
                    foreach ($pendapatan as $total) {
                        $sum += $total;
                    } ?>

                    <?php $money = '<span data-purecounter-start="0" data-purecounter-end="' . $sum . '" data-purecounter-duration="1" class="purecounter"></span>' ?>
                    <div class="border-bottom mb-2">
                        <h5 style="opacity:75%">Total Pendapatan</h5>
                    </div>
                    <h1><?= 'Rp.' . $money ?>,-</h1>
                </div>
            </div>
        </div>
        <div class="col mx-auto">
            <div class="row-xl-3 mx-auto mb-3">
                <div class="card rounded-5 bg-light h-100 shadow-sm">
                    <div class="card-body">
                        <div class="border-bottom mb-1">
                            <h1 data-purecounter-start="0" data-purecounter-end="<?= $order ?>" data-purecounter-duration="1" class="purecounter text-danger"></h1>
                            <h5 class="text-opacity-25">Transaksi berhasil</h5>
                        </div>
                        <a class="clearfix" style="color:#CE1212" href="<?= base_url('order') ?>">
                            <span class="float-left">Detail</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row-xl-3 mx-auto mb-3">
                <div class="card rounded-5 bg-light h-100 shadow-sm">
                    <div class="card-body">
                        <div class="border-bottom mb-1">
                            <h1 data-purecounter-start="0" data-purecounter-end="<?= $this->db->count_all('user') ?>" data-purecounter-duration="1" class="purecounter text-danger"></h1>
                            <h5 class="text-opacity-25">Akun terdaftar</h5>
                        </div>
                        <a class="clearfix" style="color:#CE1212" href="<?= base_url('user') ?>">
                            <span class="float-left">Detail</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row-xl-3 mx-auto mb-3">
                <div class="card rounded-5 bg-light h-100 shadow-sm">
                    <div class="card-body">
                        <div class="border-bottom mb-1">
                            <h1 data-purecounter-start="0" data-purecounter-end="<?= $product ?>" data-purecounter-duration="1" class="purecounter text-danger"></h1>
                            <h5 class="text-opacity-25">Judul buku</h5>
                        </div>
                        <a class="clearfix" style="color:#CE1212" href="<?= base_url('product') ?>">
                            <span class="float-left">Detail</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mx-auto mb-4">
            <div class="card rounded-5 shadow-sm p-2">
                <h4 class="p-3 ms-2">Kategori Favorit Pengguna</h4>
                <div class="border-bottom mb-1" id="chartKategori"></div>
                <a class="clearfix me-3 ms-3 mb-1" style="color:#CE1212" href="<?= base_url('category') ?>">
                    <span class="float-left">Detail</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>

    </div>
</main>