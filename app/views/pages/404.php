<?php
require APPROOT . '/views/includes/head.php';
?>

<body>
    <?php
    require APPROOT . '/views/includes/headerthin.php';
    ?>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper p-0">
            <div class="content-wrapper d-flex justify-content-center align-items-center text-center error-page" style="background-color:#0d1832; height: 81vh;">
                <div class="row flex-grow">
                    <div class="col-lg-12 mx-auto text-white">
                        <div class="row align-items-center d-flex flex-row">
                            <div class="col-lg-6 error-page-divider text-lg-right pl-lg-4">
                                <img style="width: 30%;" src="<?php echo URLROOT; ?>/public/img/404.png" alt="">
                            </div>
                            <div class="col-lg-6 text-lg-left pr-lg-4">
                                <h1 class="display-1 mb-0 text-light">404</h1>
                                <h3 class="font-weight-light text-light">Page introuvable.</h3>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 text-center mt-xl-2">
                                <a class="text-light font-weight-medium" href="<?php echo URLROOT; ?>/pages/index">Revenez à la page d'acceuil.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo URLROOT; ?>/js/vendor.bundle.base.js"></script>
    <script src="<?php echo URLROOT; ?>/js/off-canvas.js"></script>
    <script src="<?php echo URLROOT; ?>/js/misc.js"></script>
    <?php
    require APPROOT . '/views/includes/footerthin.php';
    ?>
</body>

</html>