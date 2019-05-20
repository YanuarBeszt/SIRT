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
            <h6 class="m-1 font-weight-bold text-primary">Penduduk Baru</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url() ?>Admin/Tambah_data/Penduduk/Simpan" method="post">
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Nomor KK</label>
                                <Select class="form-control show-tick" name="nokk" id="nokk" required>
                                    <option value="">-- Nomor KK --</option>
                                    <?php
                                    foreach ($kk as $karkel) {
                                        echo "<option value='" . $karkel['nokk'] . "'>" . $karkel['nokk'] . "</option>";
                                    }
                                    ?>
                                </Select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">NIK</label>
                                <input type="text" class="form-control" name="nik" required />
                                <input type="hidden" class="form-control" name="idstatusPdd" value="2" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="namaPenduduk" required />
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
                                        <label class="radio-inline"><input type="radio" name="idkelamin" id="gender" value="1"> LAKI - LAKI</label>
                                        <label class="radio-inline"><input type="radio" name="idkelamin" id="gender" value="2"> PEREMPUAN</label>
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
                                <Select class="form-control show-tick" name="idstatusKlg" required>
                                    <option value="">-- Hubungan Kekeluargaan --</option>
                                    <?php foreach ($hubkk as $hk) { ?>
                                        <option value=" <?= $hk['id'] ?>"><?= $hk['ket'] ?></option>
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
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggalLahir" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-line">
                            <label class="form-label">Tempat Lahir</label>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <Select class="form-control show-tick" name="idProvinsi" id="sel_prov">
                                            <option value="">-- Provinsi --</option>
                                            <?php
                                            foreach ($provinces as $prov) {
                                                echo "<option value='" . $prov['id'] . "'>" . $prov['name'] . "</option>";
                                            }
                                            ?>
                                        </Select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control show-tick" name="tempatLahir" id="sel_city" required>
                                    <option value="">-- Kabupaten / Kota --</option>
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
                                <Select class="form-control show-tick" name="idAgama" required>
                                    <option value="">-- Agama --</option>
                                    <?php
                                    foreach ($agama as $ag) {
                                        echo "<option value='" . $ag['id'] . "'>" . $ag['nama_agama'] . "</option>";
                                    }
                                    ?>
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
                                <Select class="form-control show-tick" name="idkwn" required>
                                    <option value="">-- Kewarganegaraan --</option>
                                    <?php
                                    foreach ($negaraan as $kwn) {
                                        echo "<option value='" . $kwn['id'] . "'>" . $kwn['country_name'] . "</option>";
                                    }
                                    ?>
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
                                <Select class="form-control show-tick" name="idPendidikan" required>
                                    <option value="">-- Pendidikan --</option>
                                    <?php
                                    foreach ($pendidikan as $pdd) {
                                        echo "<option value='" . $pdd['id'] . "'>" . $pdd['nama_pendidikan'] . "</option>";
                                    }
                                    ?>
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
                                <Select class="form-control show-tick" name="idPekerjaan" required>
                                    <option value="">-- Pekerjaan --</option>
                                    <?php
                                    foreach ($pekerjaan as $pkj) {
                                        echo "<option value='" . $pkj['id'] . "'>" . $pkj['nama_pekerjaan'] . "</option>";
                                    }
                                    ?>
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
                                <Select class="form-control show-tick" name="idstatusPkw" required>
                                    <option value="">-- Status Perkawinan --</option>
                                    <?php
                                    foreach ($perkawinan as $pkw) {
                                        echo "<option value='" . $pkw['id'] . "'>" . $pkw['ket'] . "</option>";
                                    }
                                    ?>
                                </Select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row clearfix">
                    <div class="text-left col-sm-7">
                        <a href="<?= base_url() ?>Admin/Tambah_data/Penduduk" class="btn btn-danger btn-icon-split">
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