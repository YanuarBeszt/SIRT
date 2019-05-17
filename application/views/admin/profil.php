<!-- alerl success save -->
<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<!-- Page Heading -->
<div class="row">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4 col-12">
        <div class="card-header row">
            <div class="col-xl-5 col-md-3">
                <h6 class="center font-weight-bold text-primary">Profil</h6>
            </div>
            <div class="text-right col-xl-7 col-md-3">
                <a href="<?= base_url() ?>Admin/Profil/edit/<?= $pend['nik']; ?>" class="btn btn-success">
                    <span class="icon text-white-50">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Edit</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row clearfix">
                <div class="col-xl-3 col-md-3 mb-2">
                    <strong>NO KK </strong>
                </div>
                <div class="col-xl-7 col-md-7 mb-4">
                    <span><?= $pend['nokk']; ?></span>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xl-3 col-md-3 mb-2">
                    <strong>NIK </strong>
                </div>
                <div class="col-xl-7 col-md-7 mb-4">
                    <span><?= $pend['nik']; ?></span>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xl-3 col-md-3 mb-2">
                    <strong>NAMA </strong>
                </div>
                <div class="col-xl-7 col-md-7 mb-4">
                    <span><?= $pend['namaPenduduk']; ?></span>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xl-3 col-md-3 mb-2">
                    <strong>KELAMIN </strong>
                </div>
                <div class="col-xl-7 col-md-7 mb-4">
                    <span><?= $pend['kelamin']; ?></span>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xl-3 col-md-3 mb-2">
                    <strong>TEMPAT LAHIR </strong>
                </div>
                <div class="col-xl-7 col-md-7 mb-4">
                    <span><?= $pend['name']; ?></span>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xl-3 col-md-3 mb-2">
                    <strong>TANGGAL LAHIR </strong>
                </div>
                <div class="col-xl-7 col-md-7 mb-4">
                    <?php $date = $pend['tanggalLahir']; ?>
                    <span><?= date("d M Y", strtotime($date)); ?></span>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xl-3 col-md-3 mb-2">
                    <strong>AGAMA </strong>
                </div>
                <div class="col-xl-7 col-md-7 mb-4">
                    <span><?= $pend['nama_agama']; ?></span>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xl-3 col-md-3 mb-2">
                    <strong>PENDIDIKAN </strong>
                </div>
                <div class="col-xl-7 col-md-7 mb-4">
                    <span><?= $pend['nama_pendidikan'] ?></span>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xl-3 col-md-3 mb-2">
                    <strong>PEKERJAAN </strong>
                </div>
                <div class="col-xl-7 col-md-7 mb-4">
                    <span><?= $pend['nama_pekerjaan']; ?></span>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xl-3 col-md-3 mb-2">
                    <strong>KEWARGANEGARAAN </strong>
                </div>
                <div class="col-xl-7 col-md-7 mb-4">
                    <span><?= strtoupper($pend['country_name']); ?></span>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xl-3 col-md-3 mb-2">
                    <strong>HUBUNGAN DALAM KELUARGA </strong>
                </div>
                <div class="col-xl-7 col-md-7 mb-4">
                    <span><?= $pend['klg']; ?></span>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xl-3 col-md-3 mb-2">
                    <strong>STATUS PERKAWINAN </strong>
                </div>
                <div class="col-xl-7 col-md-7 mb-4">
                    <span><?= $pend['pkw']; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>