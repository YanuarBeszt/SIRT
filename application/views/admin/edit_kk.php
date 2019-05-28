<!-- alerl success save -->
<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<div class="row">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-12">
        <div class="card-header">
            <h6 class="m-1 font-weight-bold text-primary"><a href="<?= base_url() ?>Admin/DetailPenduduk/DaftarKK">Daftar KK </a>- Edit Kartu Keluarga</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url() ?>Admin/DetailPenduduk/UpdateKK" method="post">
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Nomor KK</label>
                                <input type="text" name="nokk" class="form-control" value="<?= $kk['nokk']; ?>" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?= $kk['alamat']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Kode Pos</label>
                                <input type="text" name="kodepos" class="form-control" value="<?= $kk['kodepos']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">RT</label>
                                <input type="text" name="rt" class="form-control" value="<?= $kk['rt']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">RW</label>
                                <input type="text" name="rw" class="form-control" value="<?= $kk['rw']; ?>" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <select class="form-control show-tick" name="idProvinsi" id="sel_prov" required>
                            <option value="">-- Provinsi --</option>
                            <?php foreach ($provinces as $prov) {
                                $split = str_split($kk['idkota']);
                                $datasplit = ($split[0] . $split[1]);
                                echo '<option ' . (($datasplit == $prov['idProvinces']) ? 'selected' : "") . '
                                        value="' . $prov['idProvinces'] . '">' . $prov['name'] . '</option>';
                            } ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control show-tick" name="idKabupaten" id="sel_city" required>
                            <option value="<?= $kk['idkota'] ?>"><?= $kk['kab'] ?></option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control show-tick" name="idKecamatan" id="sel_dist" required>
                            <option value="<?= $kk['idKecamatan'] ?>">KECAMATAN <?= $kk['kec'] ?></option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control show-tick" name="idkelurahan" id="sel_vill" required>
                            <option value="<?= $kk['idkelurahan'] ?>">KELURAHAN <?= $kk['kel'] ?></option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row clearfix">
                    <div class="text-left col-sm-7">
                        <a href="<?= base_url() ?>Admin/DetailPenduduk/DaftarKK" class="btn btn-danger btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-window-close"></i>
                            </span>
                            <span class="text">Batal</span>
                        </a>
                    </div>
                    <div class="text-right col-sm-5">
                        <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>