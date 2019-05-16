<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Home</h1>
</div>
<div class="row">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-12">
        <div class="card-header">
            <h6 class="m-1 font-weight-bold text-primary">Surat Pengajuan</h6>
        </div>
        <div class="card-body">
            <div class="row clearfix">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Peminta</th>
                                <th>Jenis Surat</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($surat as $srt) :
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $srt->id; ?></td>
                                    <td><?= $srt->namaPenduduk; ?></td>
                                    <td><?= $srt->nama; ?></td>
                                    <td><?= $srt->tanggal; ?></td>
                                    <?php $id = $srt->id; ?>
                                    <td>
                                        <a href="#" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-print"></i>
                                            </span>
                                            <span class="text">Print</span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>