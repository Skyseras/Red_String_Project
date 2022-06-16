<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="<?php echo URLROOT; ?>/pages/index" style="width: 100%;">
            <img style="width: 80%;height: 80%;" src="<?php echo URLROOT; ?>/public/img/Logo_IM_L_W.png" alt="logo" class="logo-dark" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo URLROOT; ?>/pages/index" style="width: 100%;"><img src="<?php echo URLROOT; ?>/public/img/Logo_IM_W.png" alt="logo" style="width: 100%;height: 100%;" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
        <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
                <i class="icon-magnifier"></i>
                <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle ml-2" src="<?php echo URLROOT; ?>/public/img/<?php if (empty($data['admin']['pdp'])) { echo 'pdpdefault.jpg'; } else { echo $data['admin']['pdp']; }?>" alt="Profile image"> <span class="font-weight-normal"> <?php echo $_SESSION['name']?> </span></a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img style="width: 40px;" class="img-md rounded-circle" src="<?php echo URLROOT; ?>/public/img/<?php if (empty($data['admin']['pdp'])) { echo 'pdpdefault.jpg'; } else { echo $data['admin']['pdp']; }?>" alt="Profile image">
                        <p class="mb-1 mt-3"><?php echo $_SESSION['name']?></p>
                        <p class="font-weight-light text-muted mb-0"><?php echo $_SESSION['email']?></p>
                    </div>
                    <a class="dropdown-item" href="<?php echo URLROOT; ?>/Admincontroller/logout"><i class="dropdown-item-icon icon-power text-primary"></i>Se déconnecter</a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>
<div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

            <li class="nav-item nav-profile">
                <a class="nav-link">
                    <div class="profile-image">
                        <img class="img-xs rounded-circle" src="<?php echo URLROOT; ?>/public/img/<?php if (empty($data['admin']['pdp'])) { echo 'pdpdefault.jpg'; } else { echo $data['admin']['pdp']; }?>" alt="profile image">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name"><?php echo $_SESSION['name']?></p>
                        <p class="designation">Administrator</p>
                    </div>
                </a>
            </li>
            </a>
            </li>
            <li class="nav-item <?php if (BASE2_REQUEST_URL == 'dashboard') echo 'active'; ?>">
                <a class="nav-link" href="<?php echo URLROOT; ?>/pages/dashboard">
                    <span class="menu-title">Dashboard</span>
                    <i class="icon-layers menu-icon"></i>
                </a>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Listes Utilisateurs</span>
            </li>
            <li class="nav-item <?php if (BASE_REQUEST_URL == 'clients') echo 'active'; ?>">
                <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/clients">
                    <span class="menu-title">Clients</span>
                    <i class="icon-people menu-icon"></i>
                </a>
            </li>
            <li class="nav-item <?php if (BASE_REQUEST_URL == 'particuliers') echo 'active'; ?>">
                <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/particuliers">
                    <span class="menu-title">Particuliers</span>
                    <i class="icon-briefcase menu-icon"></i>
                </a>
            </li>
            <li class="nav-item <?php if (BASE_REQUEST_URL == 'agences') echo 'active'; ?>">
                <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/agences">
                    <span class="menu-title">Agences</span>
                    <i class="icon-diamond menu-icon"></i>
                </a>
            </li>
            
            <li class="nav-item nav-category"><span class="nav-link">Listes Biens Immobiliers</span></li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#grande-ville" aria-expanded="false" aria-controls="grande-ville">
                    <span class="menu-title">Grande Ville</span>
                    <i class="icon-doc menu-icon"></i>
                </a>
                <div class="collapse" id="grande-ville">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Casablanca</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Rabat</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Marrakech</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Tanger</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Agadir</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Kenitra</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Fès</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Oujda</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#type" aria-expanded="false" aria-controls="type">
                    <span class="menu-title">Type</span>
                    <i class="icon-doc menu-icon"></i>
                </a>
                <div class="collapse" id="type">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Location</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Vente</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#sup" aria-expanded="false" aria-controls="sup">
                    <span class="menu-title">Supérficies</span>
                    <i class="icon-doc menu-icon"></i>
                </a>
                <div class="collapse" id="sup">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">40 - 100 m²</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">100 - 500 m²</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">500 - 2000 m²</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#genre" aria-expanded="false" aria-controls="genre">
                    <span class="menu-title">Genre</span>
                    <i class="icon-doc menu-icon"></i>
                </a>
                <div class="collapse" id="genre">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Terrain</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Résidentiel</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Commercial</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Industriel</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Statistiques</span></li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="menu-title">Graphs</span>
                    <i class="icon-chart menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="menu-title">Tableau</span>
                    <i class="icon-grid menu-icon"></i>
                </a>
            </li>
        </ul>
    </nav>