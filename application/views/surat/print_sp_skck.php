<?php $this->load->view('surat/headjs.php'); ?>

<!-- Custom css print out pdf surat -->
<link rel="stylesheet" href="<?= base_url('assets/sbadmin2/') ?>css/surat.css">

<body>
    <div id="content" class="container_12 clearfix">
        <div id="content-main" class="grid_7">
            <link href="<?= base_url() ?>assets/sbadmin2/css/surat.css" rel="stylesheet" type="text/css" />
            <div>
                <table width="100%">
                    <tr> <img src="<?= base_url('assets/sbadmin2/') ?>img/inst.png" alt="" class="logo"></tr>
                    <div class="header">
                        <h4 class="kop">PEMERINTAH KABUPATEN JEMBER</h4>
                        <h4 class="kop">KECAMATAN SUMBERSARI </h4>
                        <h4 class="kop">KELURAHAN SUMBERSARI</h4>
                        <h5 class="kop2">Jalan Karimata V no. 25 Jember</h5>
                        <div style="text-align: center;">
                            <hr />
                        </div>
                    </div>
                    <div align="center"><u>
                            <h4 class="kop">SURAT PENGANTAR</h4>
                        </u></div>
                    <div align="center">
                        <h4 class="kop3">Nomor : <?= $nosurat ?></h4>
                        <?php if ($this->session->userdata('statusPdd') == 2) { ?>
                            <form action="<?php echo base_url() . 'Warga/PembuatanSurat/simpan/'; ?>" method="post">
                                <?php $tgl = date('Y-m-d'); ?>
                                <input type="hidden" class="form-control" name="ket" id="ket" value="-">
                                <input type="hidden" class="form-control" name="idsurat" id="idsurat" value="<?= $id ?>">
                                <input type="hidden" class="form-control" name="status" id="status" value="1">
                                <input type="hidden" class="form-control" name="nosurat" id="nosurat" value="<?= $nosurat ?>">
                                <input type="hidden" class="form-control" name="tanggal" id="tanggal" value="<?= $tgl ?>">
                                <input type="hidden" name="warga" value="<?= $warga['nik']; ?>">
                                <input class="btnn" type="submit" name="btn" value="Kirim Surat KeRT" />
                            </form>
                            <a class="btnn" href="<?= base_url('Viewp') ?>"><button>Batal Ajukan Surat</button></a>
                        <?php } ?>
                    </div>
                </table>
                <div class="clear"></div>
                <div id="isi3">
                    <table width="100%">
                        <td class="indentasi">Yang bertanda tangan dibawah ini Ketua RT 004 RW 007 Kelurahan Sumbersari Kecamatan Sumbersari Kabupaten Jember, Provinsi dengan ini menerangkan dengan sebenarnya bahwa: </td>
                        </tr>
                    </table>
                    <tr>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <table width="100%">
                        <tr>
                            <td width="23%">Nama Lengkap</td>
                            <td width="3%">:</td>
                            <td width="64%">YANUAR RIDWAN</td>
                        </tr>
                        <tr>
                            <td>Tempat dan Tgl. Lahir </td>
                            <td>:</td>
                            <td>JEMBER, 23 JAN 1999</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>LAKI - LAKI</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>JL. KARIMATA V BLOK D12</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>ISLAM</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>BELUM MENIKAH</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td>PELAJAR</td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan </td>
                            <td>:</td>
                            <td>INDONESIA</td>
                        </tr>
                        <table width="100%">
                            <tr>
                                <td class="indentasi">Orang tersebut di atas adalah benar-benar warga RT. 004 RW. 007 Kelurahan Sumbersari Kabupaten Jember Surat pengantar ini dibuat sebagai kelengkapan pengurusan KTP (Kartu Tanda Penduduk).</td>
                            </tr>
                        </table>
                        <div class="clear"></div>
                        <table width="100%">
                            <tr>
                                <td>
                                <td class="indentasi">Demikian surat keterangan ini dibuat dengan sesungguhnya untuk dapat digunakan sebagaimana mestinya.</td>
                        </table>
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
                <table width="100%">
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td width="5%"></td>
                        <td width="43%"></td>
                        <td align="center">Sumbersari, 23 Mei 2019</td>
                    </tr>
                    <tr>
                        <td width="5%"></td>
                        <td width="43%"></td>
                        <td align="center">Ketua RT 004 RW 007 </td>
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
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td width="5%"></td>
                        <td width="43%"></td>
                        <td align="center">AGUNG WAHYONO </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="aside"></div>
    </div>
</body>

</html>