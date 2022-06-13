<div class="py-3 top-wrap">
    <div class="container-xl">
        <div class="row d-flex align-items-start">
            <div class="col-md topper d-flex mb-md-0 align-items-xl-center">
                <div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-map"></span>
                </div>
                <div class="text pl-3 pl-md-3">
                    <p class="con"><span>Appel gratuit</span> <span>+212 708 884 824</span></p>
                    <p class="con">Appelez-nous maintenant Service client 24h/7j</p>
                </div>
            </div>
            <div class="col-md topper d-flex mb-md-0 align-items-xl-center">
                <div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-paper-plane"></span>
                </div>
                <div class="text pl-3 pl-md-3">
                    <p class="hr"><span>Notre emplacement</span></p>
                    <p class="con">Bureau 7 Jozefine Center Majorelle Marrakech</p>
                </div>
            </div>
            <div class="col-md topper d-flex mb-md-0 align-items-xl-center">
                <div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-connectdevelop"></span>
                </div>
                <div class="text pl-3 pl-md-3">
                    <p class="con"><span>Connectez-vous </span> <span>avec nous</span></p>
                    <p class="con"><a href="#">Facebook</a> <a href="#">Twitter</a> <a href="#">Instagram</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg  ftco-navbar-light">
    <div class="container-xl">
        <a class="navbar-brand align-items-center" href="<?php echo URLROOT; ?>" style="width: 20%;">
            <img src="<?php echo URLROOT; ?>/public/img/Logo_IM_L_W.png" alt="logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/properties">PROPRIÉTÉS</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/agents">AGENTS</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/contact">CONTACT</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/profile">PROFIL</a></li>
            </ul>
            <?php if (isset($_SESSION['user_id'])) : ?>
                <p class="mb-0"><a href="<?php echo URLROOT; ?>/usercontroller/logout" class="btn btn-primary rounded">Se déconnecter</a></p>
            <?php else : ?>
                <p class="mb-0"><a href="<?php echo URLROOT; ?>/usercontroller/login" class="btn btn-primary rounded">Se connecter</a></p>
            <?php endif; ?>
            <p><?php if (isset($_SESSION['role'])) echo $_SESSION['role'] ?></p>
        </div>
    </div>
</nav>