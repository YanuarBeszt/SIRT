<!-- alerl success save -->
<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('Gagal')) : ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $this->session->flashdata('Gagal'); ?>
    </div>
<?php endif; ?>

<div class="row">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-12">
        <div class="card-header">
            <h6 class="m-1 font-weight-bold text-primary">Ganti Password</h6>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url() . 'Admin/Profil/UpdatePassword'; ?>" method="post">
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Masukan Password Lama</label>
                                <input type="text" name="pass_lama" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Masukan Password Baru</label>
                                <input type="text" name="pass_baru" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Ulangi Password Baru</label>
                                <input type="text" name="pass_ulang" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row clearfix">
                    <div class="text-left col-5">
                        <a href="<?= $this->session->userdata('previous_url') ?>" class="btn btn-danger btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-window-close"></i>
                            </span>
                            <span class="text">Batal</span>
                        </a>
                    </div>
                    <div class="text-right col-7">
                        <input class="btn btn-success" type="submit" name="simpan" value="Simpan" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>