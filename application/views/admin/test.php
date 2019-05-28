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
            <h6 class="m-1 font-weight-bold text-primary">Surat Pengajuan</h6>
        </div>
        <div class="card-body">
            <div class="row clearfix">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Surat</th>
                                <th>Peminta</th>
                                <th>Jenis Surat</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($surat as $srt) : ?>
                                <tr>
                                    <td><?= $srt->idTransaksi; ?></td>
                                    <td><?= $srt->namaPenduduk; ?></td>
                                    <td><?= $srt->nama; ?></td>
                                    <td><?= $srt->tanggal; ?></td>
                                    <td>
                                        <form action="<?= base_url() ?>View/print/<?= $srt->url_surat ?>/<?= $srt->nik ?>" method="post" target="_blank">
                                            <input type="hidden" name="nosurat" value="<?= $srt->idTransaksi; ?>">
                                            <input type="hidden" name="status" value="2">
                                            <input class="btn btn-success" type="submit" name="btn" value="Print" />
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>