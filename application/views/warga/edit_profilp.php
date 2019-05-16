<div class="row">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-12">
        <div class="card-header">
            <h6 class="m-1 font-weight-bold text-primary"><a href="<?= base_url() ?>Warga/Profil">Profil</a> - Edit</h6>
        </div>
        <div class="card-body">
            <div class="row clearfix">
                <div class="col-sm-4">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Nomor KK</label>
                            <input type="text" class="form-control" disabled />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-sm-4">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">NIK</label>
                            <input type="text" class="form-control" disabled />
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama harus sesuai dengan KTP" />
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
                                    <label class="radio-inline"><input type="radio" name="gender" id="gender" value="LAKI - LAKI">LAKI - LAKI</label>
                                    <label class="radio-inline"><input type="radio" name="gender" id="gender" value="PERMENPUAN"> PEREMPUAN</label>
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
                            <input type="date" class="form-control" />
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
                                    <Select class="form-control show-tick">
                                        <option value="">-- Provinsi --</option>
                                    </Select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control show-tick">
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
                            <Select class="form-control show-tick">
                                <option value="">-- Agama --</option>
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
                            </Select>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row clearfix">
                <div class="col-sm-4">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Ganti Password</label>
                            <input type="password" class="form-control" placeholder="***************" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="form-label">Ulangi Password</label>
                            <input type="Password" class="form-control" placeholder="***************" />
                        </div>
                    </div>
                </div>
            </div>
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
            </div>
        </div>
    </div>
</div>