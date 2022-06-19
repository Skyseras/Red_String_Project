<?php
require APPROOT . '/views/includes/head.php';
?>

<body>
    <?php
    require APPROOT . '/views/includes/header.php';
    ?>
    <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
    <section class="hero-wrap hero-wrap-2" style="background-image:url(<?php echo URLROOT; ?>/public/img/xbg_4.jpg.pagespeed.ic.wYQ9Oeghhn.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" style="height:50vh;">
                <div class="col-md-9 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo URLROOT; ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>DÉTAILS <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Ma Future Propriété</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light img py-5">

        <div class="container">
            <div class="container-fluid mt-2 mb-3">
                <div class="row justify-content-center no-gutters">
                    <div class="col-md-12 col-lg-10">
                        <div class="wrap d-md-flex">
                            <div class="login-wrap py-5 px-4 px-lg-2 py-lg-5">
                                <div class="card">
                                    <div class="demo">
                                        <ul id="lightSlider">
                                            <li data-thumb="https://i.imgur.com/KZpuufK.jpg"> <img src="https://i.imgur.com/KZpuufK.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/GwiUmQA.jpg"> <img src="https://i.imgur.com/GwiUmQA.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/DhKkTrG.jpg"> <img src="https://i.imgur.com/DhKkTrG.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/kYWqL7k.jpg"> <img src="https://i.imgur.com/kYWqL7k.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/c9uUysL.jpg"> <img src="https://i.imgur.com/c9uUysL.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/KZpuufK.jpg"> <img src="https://i.imgur.com/KZpuufK.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/GwiUmQA.jpg"> <img src="https://i.imgur.com/GwiUmQA.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/DhKkTrG.jpg"> <img src="https://i.imgur.com/DhKkTrG.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/kYWqL7k.jpg"> <img src="https://i.imgur.com/kYWqL7k.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/c9uUysL.jpg"> <img src="https://i.imgur.com/c9uUysL.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/KZpuufK.jpg"> <img src="https://i.imgur.com/KZpuufK.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/GwiUmQA.jpg"> <img src="https://i.imgur.com/GwiUmQA.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/DhKkTrG.jpg"> <img src="https://i.imgur.com/DhKkTrG.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/kYWqL7k.jpg"> <img src="https://i.imgur.com/kYWqL7k.jpg" /> </li>
                                            <li data-thumb="https://i.imgur.com/c9uUysL.jpg"> <img src="https://i.imgur.com/c9uUysL.jpg" /> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="login-wrap py-5 px-4 px-lg-2 py-lg-5">
                                <div>
                                    <h5 style="font-size:medium; font-weight:700; color:black;">Description</h5>
                                    <p class="lh-sm">Nous sommes ouverts à toute suggestion ou simplement pour discuter.</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5 style="font-size:medium; font-weight:700; color:black;">Ville</h5>
                                    <h5>Marrakech</h5>
                                </div>
                                <div>
                                    <h5 style="font-size:medium; font-weight:700; color:black;">Adresse</h5>
                                    <p>Nous sommes ouverts à toute suggestion ou simplement pour discuter.</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5 style="font-size:medium; font-weight:700; color:black;">Supérficie (m²)</h5>
                                    <h5>169</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5 style="font-size:medium; font-weight:700; color:black;">Nombre de Pièces</h5>
                                    <h5>4</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5 style="font-size:medium; font-weight:700; color:black;">Prix (Dhs)</h5>
                                    <h5>6700000</h5>
                                </div>
                                <div class="form-group">
                                    <a href="<?php echo URLROOT; ?>/pages/contact/#reserver"><button type="submit" class="form-control btn btn-primary submit px-3">Réserver un rendez-vous</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>





    <!-- <section class="ftco-section "> -->

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
    <script>
        $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            loop: true,
            slideMargin: 0,
            thumbItem: 9
        });
    </script>
    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>