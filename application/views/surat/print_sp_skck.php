<?php $this->load->view('surat/headjs.php'); ?>

<!-- Custom css print out pdf surat -->
<link rel="stylesheet" href="<?= base_url('assets/sbadmin2/') ?>css/surat.css">

<body <?php if ($this->session->userdata('statusPdd') == 1) {
            echo 'onload="window.print()"';
        } ?>>
    <div id="content" class="container_12 clearfix page">
        <div id="content-main" class="grid_7">
            <link href="<?= base_url() ?>assets/sbadmin2/css/surat.css" rel="stylesheet" type="text/css" />
            <div>
                <table width="100%">
                    <tr> <img src="<?= base_url('assets/sbadmin2/') ?>img/inst.png" alt="" class="logoo"></tr>
                    <div class="header">
                        <h4 class="kop">PEMERINTAH KABUPATEN JEMBER</h4>
                        <h4 class="kop">KECAMATAN SUMBERSARI </h4>
                        <h4 class="kop">KELURAHAN SUMBERSARI</h4>
                        <h4 class="kop3">RUKUN TETANGGA 004 - RUKUN WARGA 007</h4>
                        <h4 class="kop2">Sekretariat : Jl. Karimata V Blok D-12 Telp: 0331-338872 JEMBER 68121</h4>
                    </div>
                    <div style="text-align: center;">
                        <hr />
                    </div>
                    <div align="center"><u>
                            <h4 class="kop">SURAT PENGANTAR</h4>
                        </u></div>
                    <div align="center">
                        <h4 class="kop2">Nomor : <?= $nosurat ?></h4>
                        <?php if ($this->session->userdata('statusPdd') == 2) { ?>
                            <form action="<?php echo base_url() . 'Warga/PembuatanSurat/simpan/'; ?>" method="post">
                                <?php $tgl = date('Y-m-d'); ?>
                                <input type="hidden" class="form-control" name="ket" id="ket" value="-">
                                <input type="hidden" class="form-control" name="idsurat" id="idsurat" value="<?= $id ?>">
                                <input type="hidden" class="form-control" name="status" id="status" value="1">
                                <input type="hidden" class="form-control" name="nosurat" id="nosurat" value="<?= $nosurat ?>">
                                <input type="hidden" class="form-control" name="tanggal" id="tanggal" value="<?= $tgl ?>">
                                <input type="hidden" name="warga" value="<?= $warga['nik']; ?>">
                                <input class="btnn" type="submit" name="btn" value="Kirim Surat Ke RT" />
                            </form>
                            <a class="btnn" href="<?= base_url('Viewp') ?>">Batal Ajukan Surat</a>
                        <?php } ?>
                    </div>
                </table>
                <div class="clear"></div>
                <div id="isi3">
                    <table width="100%">
                        <td class="indentasi">Yang bertanda tangan dibawah ini pengurus RT 004 RW 007 Kelurahan Sumbersari Kecamatan Sumbersari, dengan ini menerangkan bahwa : </td>
                        </tr>
                    </table>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <table width="100%">
                        <tr>
                            <td class="isian" width="23%">Nama</td>
                            <td width="3%">:</td>
                            <td width="64%"><?= $warga['namaPenduduk']; ?></td>
                        </tr>
                        <tr>
                            <td class="isian">Tempat/Tanggal Lahir</td>
                            <td>:</td>
                            <td><?= $warga['name'] . "," . $warga['tanggalLahir']; ?></td>
                        </tr>
                        <tr>
                            <td class="isian">Jenis Kelamin</td>
                            <td>:</td>
                            <td><?= $warga['kelamin']; ?></td>
                        </tr>
                        <tr>
                            <td class="isian">Agama</td>
                            <td>:</td>
                            <td><?= $warga['nama_agama']; ?></td>
                        </tr>
                        <tr>
                            <td class="isian">Kewarganegaraan</td>
                            <td>:</td>
                            <td><?= $warga['namaPenduduk']; ?></td>
                        </tr>
                        <tr>
                            <td class="isian">No KTP</td>
                            <td>:</td>
                            <td><?= $warga['nik']; ?></td>
                        </tr>
                        <tr>
                            <td class="isian">Nomor Kartu Keluarga</td>
                            <td>:</td>
                            <td><?= $warga['nokk']; ?></td>
                        </tr>
                        <tr>
                            <td class="isian">Alamat</td>
                            <td>:</td>
                            <td><?= $warga['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td class="isian">RT/RW</td>
                            <td>:</td>
                            <td><?= $warga['rt'] . "/" . $warga['rw']; ?></td>
                        </tr>
                        <tr>
                            <td class="isian">Pekerjaan</td>
                            <td>:</td>
                            <td><?= $warga['nama_pekerjaan']; ?></td>
                        </tr>
                        <tr>
                            <td class="isian">Maksud/Keperluan</td>
                            <td>:</td>
                            <td>Surat Pengantar Pembuatan SKCK</td>
                        </tr>
                        <div class="clear"></div>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </table>
                </div>
                <table style="width:100%">
                    <tr>
                        <td style="width: 24%"></td>
                        <td></td>
                        <td style="width: 45%"></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td>Nomor : </td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td>Tanggal : </td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td align="center">Mengetahui,</td>
                        <td></td>
                        <td align="center">Sumbersari, 23 Mei 2019</td>
                    </tr>
                    <tr>
                        <td align="center">Pengurus RW 007</td>
                        <td></td>
                        <td align="center">Pengurus RT 004 - RW 007</td>
                    </tr>
                    <tr>
                        <td align="center">Ketua</td>
                        <td></td>
                        <td align="center">Ketua</td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td align="center">( H. A. Soekarto )</td>
                        <td></td>
                        <td align="center">( Agung Wahyono )</td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="aside"></div>
    </div>
</body>

</html>