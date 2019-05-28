<?php
// penomoran surat yang akan reset setiap tahun
$no = $trans['idTransaksi'];
if ($no == null) {
    $tahun = date('Y');
    $bulan = date('m');
    $nosurat = "001/RT004-RW007/SP/" . $bulan . "/" . $tahun;
} else {
    $nmr = (explode("/", $no));
    $tahun = $nmr[4];
    $tahun2 = date('Y');
    $bulan = date('m');
    $nourut = $nmr[0];
    $prefix = (($tahun2 - $tahun) == 0) ? str_pad(++$nourut, 3, '0', STR_PAD_LEFT) : str_pad(1, 3, '0', STR_PAD_LEFT);
    $nosurat = $prefix . "/RT004-RW007/SP/" . $bulan . "/" . $tahun;
}
?>
<div class="row">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-12">
        <div class="card-header">
            <h6 class="m-1 font-weight-bold text-primary">Form <?= $url['nama']; ?></h6>
        </div>
        <div class="card-body">
            <?php $uri = $this->uri->segment(4); ?>
            <form action="<?php echo base_url() . 'Warga/PembuatanSurat/print/' . $uri; ?>" method="post">
                <div class="row clear-fix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">No Surat</label>
                                <input type="text" class="form-control" name="nosurat" id="nosurat" value="<?= $nosurat ?>" readonly>
                                <input type="hidden" class="form-control" name="idsurat" id="idsurat" value="<?= $url['idSurat']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Tanggal</label>
                                <?php $tgl = date('Y-m-d'); ?>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $tgl ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clear-fix">
                    <div class="col-sm-5">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Peminta Surat</label>
                                <select class="form-control show-tick" name="warga" id="warga" readonly>
                                    <option value="<?= $pend['nik']; ?>"><?= $pend['namaPenduduk']; ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clear-fix">
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="ket" id="ket" value="-">
                                <input type="hidden" class="form-control" name="status" id="status" value="2">
                                <input type="hidden" class="form-control" name="idsurat" id="idsurat" value="<?= $url['idSurat'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right col-12">
                    <input class="btn btn-success" type="submit" name="btn" value="Cek Surat" />
                </div>
            </form>
        </div>
    </div>
</div>