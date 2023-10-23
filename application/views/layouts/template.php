<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Portfolio</title>

    <!-- Library CSS -->
    <?= $css_library ?? null; ?>
    <!-- Vectormap -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css ">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/unicons.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.default.min.css">
    <!-- scss preloader -->

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
    <?php

    if (isset($library_custom)) {
        foreach ($library_custom as $library_custom_key => $library_custom_value) {
            foreach ($library_custom_value as $library_custom_css_key => $library_custom_css_value) {
                if ($library_custom_css_key == 'css') {
                    echo $library_custom_css_value;
                }
            }
        }
    }
    ?>
</head>

<body>
    <div id="preloader">
        <div id="status">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>

    <?php include 'partials/header.php' ?>

    <!-- row -->
    <?= $contents; ?>

    <?php include 'partials/footer.php' ?>

    </div>
    <script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/Headroom.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jQuery.headroom.js"></script>
    <script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/smoothscroll.js"></script>
    <script src="<?= base_url('assets/'); ?>js/custom.js"></script>

    <?= $js_library ?? null; ?>

    <?php
    if (isset($library_custom)) {
        foreach ($library_custom as $library_custom_key => $library_custom_value) {
            foreach ($library_custom_value as $library_custom_js_key => $library_custom_js_value) {
                if ($library_custom_js_key == 'js') {
                    echo $library_custom_js_value;
                }
            }
        }
    }
    ?>

    <?= $js_custom ?? null; ?>
</body>


</html>