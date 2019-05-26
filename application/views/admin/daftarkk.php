<!-- alerl success save -->
<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar KK</h1>

    <!-- Pending Requests Card Example -->
    <div class="col-md-3 mb-0">
        <a href="<?= base_url() ?>Admin/DetailPenduduk">
            <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <i class="fas fa-arrow-left fa-2x text-info"></i>
                </div>
                <div class="col mr-1">
                    <div class="text-m font-weight-bold text-info text-right text-uppercase">Daftar Penduduk</div>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-12">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No KK</th>
                            <th>Kepala Keluarga</th>
                            <th>Alamat</th>
                            <th>Kode Pos</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Provinsi</th>
                            <th>Kabupaten</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan/Desa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($isi as $pd) :
                        ?>
                        <tbody>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $pd->nokk; ?></td>
                                <td><?= $pd->namaPenduduk; ?></td>
                                <td><?= $pd->alamat; ?></td>
                                <td><?= $pd->kodepos; ?></td>
                                <td><?= $pd->rt; ?></td>
                                <td><?= $pd->rw; ?></td>
                                <td><?= $pd->prov; ?></td>
                                <td><?= $pd->kab; ?></td>
                                <td><?= $pd->kec; ?></td>
                                <td><?= $pd->kel; ?></td>
                                <?php $id = $pd->nokk; ?>
                                <td>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle btn btn-danger btn-icon-split" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-down"></i>
                                            </span>
                                            <span class="text">Pilih Aksi</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteModal">Hapus ?</a>
                                            <a class="dropdown-item " href="http://localhost/SIRT/Admin/DetailPenduduk/EditKK/<?= $id ?>">Edit ?</a>
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


<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin hapus data penduduk ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Tekan Hapus jika yakin.</div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-warning" href="http://localhost/SIRT/Admin/DetailPenduduk/hapus/<?= $id ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>