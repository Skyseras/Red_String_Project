<?php
require APPROOT . '/views/includes/dashhead.php';
?>

<body>
    <div class="container-scroller">
        <?php
        require APPROOT . '/views/includes/dashnav.php';
        ?>

        <div class="main-panel">
            <div class="content-wrapper p-2">
                <!-- Quick Action Toolbar Ends-->
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="row report-inner-cards-wrapper p-0">
                                    <div class="col-md-6 col-xl report-inner-card">
                                        <div class="inner-card-text">
                                            <span class="report-title">CLIENTS</span>
                                            <h4>123</h4>
                                        </div>
                                        <div class="inner-card-icon bg-success">
                                            <i class="icon-people"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl report-inner-card">
                                        <div class="inner-card-text">
                                            <span class="report-title">AGENCES</span>
                                            <h4>25</h4>
                                        </div>
                                        <div class="inner-card-icon bg-primary">
                                            <i class="icon-diamond"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex align-items-baseline report-summary-header mb-3">
                                    <h5 class="font-weight-semibold">Derniers Biens Ajoutés</h5></button>
                                </div>
                                <div class="table-responsive border rounded p-1">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="font-weight-bold">Nom Propriété</th>
                                                <th class="font-weight-bold">Ville</th>
                                                <th class="font-weight-bold">Supérficie</th>
                                                <th class="font-weight-bold">Type</th>
                                                <th class="font-weight-bold">Genre</th>
                                                <th class="font-weight-bold">Prix</th>
                                                <th class="font-weight-bold">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lot Dar Essalam</td>
                                                <td>Marrakech</td>
                                                <td>1230 m²</td>
                                                <td>Vente</td>
                                                <td>Terrain</td>
                                                <td>Dhs 1700000</td>
                                                <td>
                                                    <div class="badge badge-success p-2 icon-pencil">Edit</div>
                                                    <div class="badge badge-success p-2 icon-trash">Delete</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
</body>

</html>