<!-- alerl success save -->
<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
</div>
<div class="row">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-12">
        <div class="card-header">
            <h6 class="m-1 font-weight-bold text-primary">Kartu Keluarga Baru</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url() ?>Admin/Tambah_data/KK/Simpan" method="post">
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Nomor KK</label>
                                <input type="text" name="nokk" class="form-control <?php echo form_error('nokk') ? 'is-invalid' : '' ?>" required />
                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('nokk') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" required />
                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('alamat') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Kode Pos</label>
                                <input type="text" name="kodepos" class="form-control <?php echo form_error('kodePos') ? 'is-invalid' : '' ?>" required />
                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('kodePos') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">RT</label>
                                <input type="text" name="rt" class="form-control <?php echo form_error('rt') ? 'is-invalid' : '' ?>" required />
                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('rt') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">RW</label>
                                <input type="text" name="rw" class="form-control <?php echo form_error('rw') ? 'is-invalid' : '' ?>" required />
                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('rw') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <select class="form-control show-tick" name="idProvinsi" id="sel_prov" required>
                            <option value="">-- Provinsi --</option>
                            <?php
                            foreach ($provinces as $prov) {
                                echo "<option value='" . $prov['id'] . "'>" . $prov['name'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control show-tick" name="idKabupaten" id="sel_city" required>
                            <option value="">-- Kabupaten / Kota --</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control show-tick" name="idKecamatan" id="sel_dist" required>
                            <option value="">-- Kecamatan --</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control show-tick" name="idkelurahan" id="sel_vill" required>
                            <option value="">-- Kelurahan / Desa --</option>
                        </select>
                    </div>
                </div>
                <br>
                <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
            </form>
        </div>
    </div>
</div>