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
                    <img class="img-xs rounded-circle ml-2" src="<?php echo URLROOT; ?>/public/img/xteam-1.jpg.pagespeed.ic.XdGG32VxIm.jpg" alt="Profile image"> <span class="font-weight-normal"> Henry Klein </span></a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img style="width: 40px;" class="img-md rounded-circle" src="<?php echo URLROOT; ?>/public/img/xteam-1.jpg.pagespeed.ic.XdGG32VxIm.jpg" alt="Profile image">
                        <p class="mb-1 mt-3">Allen Moreno</p>
                        <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                    </div>
                    <a class="dropdown-item" href="<?php echo URLROOT; ?>/pages/profile"><i class="dropdown-item-icon icon-user text-primary"></i>Mon profil</a>
                    <a class="dropdown-item" href="<?php echo URLROOT; ?>/usercontroller/logout"><i class="dropdown-item-icon icon-power text-primary"></i>Se déconnecter</a>
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
                        <img class="img-xs rounded-circle" src="<?php echo URLROOT; ?>/public/img/xteam-1.jpg.pagespeed.ic.XdGG32VxIm.jpg" alt="profile image">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">Allen Moreno</p>
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
                    <i class="icon-screen-desktop menu-icon"></i>
                </a>
            </li>
            <li class="nav-item <?php if (BASE_REQUEST_URL == 'particuliers') echo 'active'; ?>">
                <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/particuliers">
                    <span class="menu-title">Particuliers</span>
                    <i class="icon-screen-desktop menu-icon"></i>
                </a>
            </li>
            <li class="nav-item <?php if (BASE_REQUEST_URL == 'promoteurs') echo 'active'; ?>">
                <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/promoteurs">
                    <span class="menu-title">Promoteurs</span>
                    <i class="icon-screen-desktop menu-icon"></i>
                </a>
            </li>
            <li class="nav-item <?php if (BASE_REQUEST_URL == 'agences') echo 'active'; ?>">
                <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/agences">
                    <span class="menu-title">Agences</span>
                    <i class="icon-screen-desktop menu-icon"></i>
                </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Listes Biens Immobiliers</span></li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <span class="menu-title">Par Grande Ville</span>
                    <i class="icon-doc menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
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
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <span class="menu-title">Par Type</span>
                    <i class="icon-doc menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Location</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Vente</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <span class="menu-title">Par Supérficies</span>
                    <i class="icon-doc menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">40 - 100 m²</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">100 - 500 m²</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">500 - 2000 m²</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <span class="menu-title">Par Genre</span>
                    <i class="icon-doc menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
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
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-title">Basic UI Elements</span>
                    <i class="icon-layers menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                        <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../pages/icons/simple-line-icons.html">
                    <span class="menu-title">Icons</span>
                    <i class="icon-globe menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../pages/forms/basic_elements.html">
                    <span class="menu-title">Form Elements</span>
                    <i class="icon-book-open menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../pages/charts/chartist.html">
                    <span class="menu-title">Charts</span>
                    <i class="icon-chart menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../pages/tables/basic-table.html">
                    <span class="menu-title">Tables</span>
                    <i class="icon-grid menu-icon"></i>
                </a>
            </li>
        </ul>
    </nav>