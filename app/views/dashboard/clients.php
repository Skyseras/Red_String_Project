<?php
require APPROOT . '/views/includes/dashhead.php';
?>

<body>
    <!-- Modal add-->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModaltitle">Ajouter Nouveau Client</h5>
                </div>
                <div class="px-4 py-3" id="form">
                    <form action="<?php echo URLROOT; ?>/Clientscontroller/add" method="POST" enctype="multipart/form-data" class="forms-sample">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Nom">Nom</label>
                                <input name="lname" type="text" class="form-control" id="lname" placeholder="Nom">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Prénom">Prénom</label>
                                <input name="fname" type="text" class="form-control" id="fname" placeholder="Prénom">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Email">Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Sexe" class="form-label">Sexe</label>
                                <select name="gender" class="small-size form-control" id="gender" placeholder="Select Gender">
                                    <option selected value="">Choisir le Sexe</option>
                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="photoDePprofil">Ajouter la photo de profil</label>
                                <input name="pdp" type="file" class="form-control" id="pdp" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Ville">Ville</label>
                                <input name="ville" type="text" class="form-control" id="ville" placeholder="Ville">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Numéro">Numéro de Téléphone</label>
                                <input name="number" type="text" class="form-control" id="number" placeholder="Numéro de Téléphone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Adresse">Adresse</label>
                                <textarea name="address" class="form-control" id="address" rows="1"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <button type="submit" name="save" class="btn btn-primary mr-2">Submit</button>
                                <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-light">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal delete-->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title text-danger" id="deleteModaltitle">Alerte! Suppression du Client</h5>
                </div>
                <div class="px-4 py-3">
                    Êtes-vous sûr de vouloir supprimer?<br>
                </div>
                <form action="<?php echo URLROOT; ?>/Clientscontroller/delete" method="POST">
                    <input type="text" style="display: none;" name="id" class="id">
                    <div class="px-4 py-3">
                        <button type="submit" name="save" class="btn btn-danger mr-2">Oui, supprimer ce client.</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal edit -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModaltitle">Modifier Ce Client</h5>
                </div>
                <div class="px-4 py-3" id="form">
                    <form action="<?php echo URLROOT; ?>/Clientscontroller/edit" method="POST" enctype="multipart/form-data" class="forms-sample">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Nom">Nom</label>
                                <input name="lname" type="text" class="form-control" id="lname" placeholder="Nom">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Prénom">Prénom</label>
                                <input name="fname" type="text" class="form-control" id="fname" placeholder="Prénom">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Email">Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Password">Password</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Sexe" class="form-label">Sexe</label>
                                <select name="gender" class="small-size form-control" id="gender" placeholder="Select Gender">
                                    <option selected value="">Choisir le Sexe</option>
                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="photoDePprofil">Ajouter la photo de profil</label>
                                <input name="pdp" type="file" class="form-control" id="pdp" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Ville">Ville</label>
                                <input name="ville" type="text" class="form-control" id="ville" placeholder="Ville">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Numéro">Numéro de Téléphone</label>
                                <input name="number" type="text" class="form-control" id="number" placeholder="Numéro de Téléphone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Adresse">Adresse</label>
                                <textarea name="address" class="form-control" id="address" rows="1"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <button type="submit" name="save" class="btn btn-primary mr-2">Submit</button>
                                <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-light">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-scroller">
        <?php
        require APPROOT . '/views/includes/dashnav.php';
        ?>
        <div class="main-panel">
            <div class="content-wrapper p-2">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body py-1 px-0">
                                            <div class="row report-inner-cards-wrapper p-0">
                                                <div class="col-md-4 col-xl-4 report-inner-card">
                                                    <div class="inner-card-icon bg-success ml-0 mr-4">
                                                        <i class="icon-people"></i>
                                                    </div>
                                                    <div class="inner-card-text">
                                                        <span class="report-title">TOTAL CLIENTS</span>
                                                        <h4>123</h4>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-6 report-inner-card align-items-center">
                                                    <h2>Listes des clients</h2>
                                                </div>
                                                <div class="col-md-2 col-xl-2 report-inner-card">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="inner-card-icon btn btn-inverse-success btn-icon">
                                                        <i class="icon-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> Client </th>
                                        <th> Nom </th>
                                        <th> Prénom </th>
                                        <th> Email </th>
                                        <th> ville </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces-clipart/pic-1.png" alt="image" />
                                        </td>
                                        <td> Herman </td>
                                        <td> Beck </td>
                                        <td> beck@gmail.com </td>
                                        <td> Marrakech </td>
                                        <td>
                                            <a class="btn-edit" type="button" data-bs-toggle="modal" data-bs-target="#editModal">
                                                <div class="badge badge-success p-2 icon-pencil">Edit</div>
                                            </a>
                                            <a class="btn-delete" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                <div class="badge badge-success p-2 icon-trash">Delete</div>
                                            </a>
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
    <script src="<?php echo URLROOT; ?>/js/vendor.bundle.base.js"></script>
    <script src="<?php echo URLROOT; ?>/js/off-canvas.js"></script>
    <script src="<?php echo URLROOT; ?>/js/misc.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>