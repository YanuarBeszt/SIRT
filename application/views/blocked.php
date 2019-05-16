<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('template/head'); ?>
</head>

<body class="four-zero-four">
    <div class="four-zero-four-container">
        <div class="error-code">404</div>
        <div class="error-message">This page doesn't exist</div>
        <div class="button-place">
            <a href="<?= base_url() ?>" class="btn btn-default btn-lg waves-effect">GO TO HOMEPAGE</a>
        </div>
    </div>

    <?php $this->load->view('template/foot'); ?>
</body>

</html>