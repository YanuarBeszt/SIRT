<div class="row">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-12">
        <div class="card-header">
            <h6 class="m-1 font-weight-bold text-primary"><a href="<?= base_url() ?>Admin/Profil">Profil</a> - Edit</h6>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url() . 'Penduduk/Update'; ?>" method="post">
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Nomor KK</label>
                                <input type="text" value="<?= $pend['nokk']; ?>" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">NIK</label>
                                <input type="text" value="<?= $pend['nik']; ?>" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Nama</label>
                                <input type="text" value="<?= $pend['namaPenduduk']; ?>" class="form-control" placeholder="Nama harus sesuai dengan KTP" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label class="radio-inline"><input type="radio" name="gender" id="gender" <?php if ($pend['idkelamin'] == "1") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> value="1"> LAKI - LAKI</label>
                                        <label class="radio-inline"><input type="radio" name="gender" id="gender" <?php if ($pend['idkelamin'] == "2") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> value="2"> PEREMPUAN</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Hubungan dalam keluarga</label>
                                <Select class="form-control show-tick">
                                    <option value="">-- Hubungan Kekeluargaan --</option>
                                    <?php foreach ($hubkk as $hk) { ?>
                                        <option <?php if ($pend['idpendidikan'] == $hk['id']) {
                                                    echo "selected";
                                                } ?> value=" <?= $hk['id'] ?>"><?= $hk['ket'] ?></option>
                                    <?php } ?>
                                </Select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" value="<?= $pend['tanggalLahir'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-line">
                            <label class="form-label">Tempat Lahir</label>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <Select class="form-control show-tick" name="idProvinsi" id="sel_prov">
                                    <option value="">-- Provinsi --</option>
                                    <?php foreach ($provinces as $prov) {
                                        $split = str_split($pend['idkota']);
                                        $datasplit = ($split[0] . $split[1]);
                                        ?>
                                        <option <?php if ($datasplit == $prov['id']) {
                                                    echo "selected";
                                                } ?> value=" <?= $prov['id'] ?>"><?= $prov['name'] ?></option>
                                    <?php } ?>
                                </Select>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control show-tick" name="tempatLahir" id="sel_city">
                                    <option value="">-- Kabupaten / Kota --</option>
                                    <?php foreach ($kota as $kt) { ?>
                                        <option <?php if ($pend['idkota'] == $kt['id']) {
                                                    echo "selected";
                                                } ?> value=" <?= $kt['id'] ?>"><?= $kt['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Agama</label>
                                <Select class="form-control show-tick">
                                    <option value="">-- Agama --</option>
                                    <?php foreach ($agama as $ag) { ?>
                                        <option <?php if ($pend['idagama'] == $ag['id']) {
                                                    echo "selected";
                                                } ?> value=" <?= $ag['id'] ?>"><?= $ag['nama_agama'] ?></option>
                                    <?php } ?>
                                </Select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Kewarganegaraan</label>
                                <Select class="form-control show-tick">
                                    <option value="">-- Kewarganegaraan --</option>
                                    <?php foreach ($negaraan as $ng) { ?>
                                        <option <?php if ($pend['idtemla'] == $ng['id']) {
                                                    echo "selected";
                                                } ?> value=" <?= $ng['id'] ?>"><?= $ng['country_name'] ?></option>
                                    <?php } ?>
                                </Select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Pendidikan</label>
                                <Select class="form-control show-tick">
                                    <option value="">-- Pendidikan --</option>
                                    <?php foreach ($pendidikan as $pdd) { ?>
                                        <option <?php if ($pend['idpendidikan'] == $pdd['id']) {
                                                    echo "selected";
                                                } ?> value=" <?= $pdd['id'] ?>"><?= $pdd['nama_pendidikan'] ?></option>
                                    <?php } ?>
                                </Select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Pekerjaan</label>
                                <Select class="form-control show-tick">
                                    <option value="">-- Pekerjaan --</option>
                                    <?php foreach ($pekerjaan as $pkj) { ?>
                                        <option <?php if ($pend['idpekerjaan'] == $pkj['id']) {
                                                    echo "selected";
                                                } ?> value=" <?= $pkj['id'] ?>"><?= $pkj['nama_pekerjaan'] ?></option>
                                    <?php } ?>
                                </Select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Status Perkawinan</label>
                                <Select class="form-control show-tick">
                                    <option value="">-- Status Perkawinan --</option>
                                    <?php foreach ($perkawinan as $pkw) { ?>
                                        <option <?php if ($pend['idstatusPkw'] == $pkw['id']) {
                                                    echo "selected";
                                                } ?> value=" <?= $pkw['id'] ?>"><?= $pkw['ket'] ?></option>
                                    <?php } ?>
                                </Select>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <label class="form-label">Ganti Password</label>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Masukan Password Lama</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Masukan Password Baru</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Ulangi Password Baru</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <br>
            <div class="row clearfix">
                <div class="text-left col-sm-7">
                    <a href="<?= base_url() ?>Warga/Profil" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-window-close"></i>
                        </span>
                        <span class="text">Batal</span>
                    </a>
                </div>
                <div class="text-right col-sm-5">
                    <a href="#" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Simpan</span>
                    </a>
                </div>
                <?php var_dump($pend);
                ?>
            </div>
        </div>
    </div>
</div>