<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin &mdash; Hi-Valeeqa</title>
    
    <link rel="apple-touch-icon" href="<?= base_url('assets/img/apple-icon.png'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.ico'); ?>">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/node_modules/@fortawesome/fontawesome-free/css/all.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <div class="navbar-bg"></div>

            <?= $this->include('admin/layout/navbar'); ?>

            <?= $this->include('admin/layout/sidebar'); ?>

            <?= $this->renderSection('content'); ?>
        
            <?= $this->include('admin/layout/footer'); ?>

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/admin/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/admin/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>/admin/node_modules/bootstrap/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>/admin/node_modules/nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/admin/node_modules/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>/admin/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url() ?>/admin/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url() ?>/admin/node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url() ?>/admin/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/admin/node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="<?= base_url() ?>/admin/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/admin/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/admin/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>/admin/assets/js/page/index.js"></script>
</body>
</html>
