<?php
require APPROOT . '/views/includes/head.php';
?>

<body>
    <?php
    require APPROOT . '/views/includes/headerthin.php';
    ?>
    <section class="ftco-section img pb-3" style="background-color:#0d1832;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="login-wrap py-5 px-4 px-lg-2 py-lg-5 rounded-right">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Création de compte</h3>
                                </div>
                                <div class="w-50">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form action="#" class="signin-form">
                                <div class="d-flex">
                                    <div class="form-group mb-3 mx-1 w-100">
                                        <label class="label" for="name">Pseudo Nom</label>
                                        <input type="text" class="form-control" placeholder="Username" required>
                                    </div>
                                    <div class="form-group mb-3 mx-1 w-100">
                                        <label class="label" for="name">Adresse Email</label>
                                        <input type="email" class="form-control" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group mb-3 mx-1 w-100">
                                        <label class="label" for="password">Mot de passe</label>
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group mb-3 mx-1 w-100">
                                        <label class="label" for="password">Confirmer mot de passe</label>
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Créer un compte</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Se souvenir de moi
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Mot de passe oublié ?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="text-wrap img p-4 p-lg-5 text-center d-flex align-items-center order-md-first rounded-left" style="background-image:url(<?php echo URLROOT; ?>/public/img/login.jpg), linear-gradient(rgba(0, 80, 0,0.4),rgba(0, 80, 0,0.4));  background-blend-mode: overlay;">
                            <div class="text w-100">
                                <h2>Connectez-vous directement</h2>
                                <p>Consulter vos favoris, gérer vos alertes et bien d’autre !</p>
                                <a href="<?php echo URLROOT; ?>/pages/login" class="btn btn-white btn-outline-white px-5">Se connecter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo URLROOT; ?>/public/js/Signinup/jquery.min.js">
        < /> <
        script src = "<?php echo URLROOT; ?>/public/js/Signinup/popper.js%2bbootstrap.min.js%2bmain.js.pagespeed.jc.iqDpUqoRp9.js" >
    </script>
    <script>
        eval(mod_pagespeed_qBnQ96WPW1);
    </script>
    <script>
        eval(mod_pagespeed__CEwjG2SSu);
    </script>
    <script>
        eval(mod_pagespeed_oaROQS6dN_);
    </script>
    <?php
    require APPROOT . '/views/includes/footerthin.php';
    ?>
</body>

</html>