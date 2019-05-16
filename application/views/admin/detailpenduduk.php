<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Penduduk</h1>
</div>
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Balita</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah KK</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Penduduk</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Laki - Laki</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-12">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No KK</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Agama</th>
                            <th>Pekerjaan</th>
                            <th>Status Kawin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($penduduk as $pd) :
                        ?>
                        <tbody>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $pd->nokk; ?></td>
                                <td><?= $pd->nik; ?></td>
                                <td><?= $pd->namaPenduduk; ?></td>
                                <td><?= $pd->nama_agama; ?></td>
                                <td><?= $pd->nama_pekerjaan; ?></td>
                                <td><?= $pd->pkw; ?></td>
                                <?php $id = $pd->nik; ?>
                                <td>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle btn btn-danger btn-icon-split" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-down"></i>
                                            </span>
                                            <span class="text">Pilih Aksi</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item btn btn-danger" href="http://localhost/SIRT/Admin/DetailPenduduk/hapus/<?= $id ?>">Hapus ?</a>
                                            <a class="dropdown-item btn btn-warning" href="http://localhost/SIRT/Admin/DetailPenduduk/Edit/<?= $id ?>">Edit ?</a>
                                        </div>
                                    </div>
                                </td>
                                <?php $no++ ?>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>