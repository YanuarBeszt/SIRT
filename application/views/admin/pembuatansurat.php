<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Layanan Pembuatan Surat</h1>
</div>
<div class="row">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-12">
        <div class="card-header">
            <h6 class="m-1 font-weight-bold text-primary">List Surat Pengantar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Surat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($surat as $srt) :
                        ?>
                        <tbody>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $srt->nama; ?></td>
                                <td><a href="http://localhost/SIRT/Admin/PembuatanSurat/buatSurat/<?= $srt->url_surat ?>" class="btn btn-success">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-print"></i>
                                        </span>
                                        <span class="text">Print</span>
                                    </a>
                                </td>
                                <?php $no++ ?>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td></td>
                            <td>Surat Lainnya</td>
                            <td><a href="http://localhost/SIRT/Admin/PembuatanSurat/Lainnya/lainnya" class="btn btn-success">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-print"></i>
                                    </span>
                                    <span class="text">Print</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>