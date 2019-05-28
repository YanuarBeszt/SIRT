<!-- alerl success save -->
<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Home</h1>
</div>
<div class="row">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-12">
        <div class="card-header">
            <h6 class="m-1 font-weight-bold text-primary">Pengajuan Surat Warga</h6>
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
                                <td><a href="<?= base_url() ?>Warga/PembuatanSurat/index/<?= $srt->url_surat ?>" class="btn btn-success">
                                        <span class="icon text-white">
                                            <i class="fas fa-print"></i>
                                        </span>
                                        <span class="text">Buat Surat</span>
                                    </a></td>
                                <?php $no++ ?>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>