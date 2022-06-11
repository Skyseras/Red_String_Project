<nav class="navbar navbar-expand-lg  ftco-navbar-light" style="top:0;">
    <div class="container-xl">
        <a class="navbar-brand align-items-center" href="<?php echo URLROOT; ?>" style="width: 20%;">
            <img src="<?php echo URLROOT; ?>/public/img/Logo_IM_L_W.png" alt="logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>">ACCUEIL</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/properties">PROPRIÉTÉS</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/agents">AGENTS</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo URLROOT; ?>/pages/contact">CONTACT</a></li>
            </ul>
            <?php if (isset($_SESSION['user_id'])) : ?>
                <p class="mb-0"><a href="<?php echo URLROOT; ?>/usercontroller/logout" class="btn btn-primary rounded">Se déconnecter</a></p>
            <?php else : ?>
                <p class="mb-0"><a href="<?php echo URLROOT; ?>/usercontroller/login" class="btn btn-primary rounded">Se connecter</a></p>
            <?php endif; ?>
        </div>
    </div>
</nav>