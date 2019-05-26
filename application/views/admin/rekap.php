<!-- alerl success save -->
<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rekap</h1>
</div>
<div class="row">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-12">
        <div class="card-header">
            <h6 class="m-1 font-weight-bold text-primary">Pengajuan Surat Warga</h6>
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
                                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#deleteRekapModal">Hapus</a>
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


<!-- Delete Modal-->
<div class="modal fade" id="deleteRekapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin hapus data rekap surat ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Tekan Hapus jika yakin.</div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                <form action="<?= base_url() ?>Admin/Rekap/hapus" method="post">
                    <input type="hidden" name="nosurat" value="<?= $srt->id; ?>">
                    <input class="btn btn-danger" type="submit" name="btn" value="Hapus" />
                </form>
            </div>
        </div>
    </div>
</div>