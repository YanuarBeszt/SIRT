<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('template/head'); ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view('template/lsidebar'); ?>

        <?php $this->load->view('template/topbar'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <?php $this->load->view($isinya); ?>

        </div>
        <!-- /.container-fluid -->

        <?php $this->load->view('template/copyright'); ?>
    </div>
    <!-- End of Main Content -->

    <?php $this->load->view('template/foot'); ?>

</body>

</html>