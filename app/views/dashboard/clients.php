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
                                <label class="form-label" for="photoDeProfil">Ajouter la photo de profil</label>
                                <input name="pdp" type="file" class="form-control" id="pdp" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Ville">Ville</label>
                                <input name="city" type="text" class="form-control" id="city" placeholder="Ville">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Numéro">Numéro de Téléphone</label>
                                <input name="phone" type="text" class="form-control" id="phone" placeholder="Numéro de Téléphone">
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
                    <input type="text" name="id" class="id" style="display: none;">
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
                            <div class="form-group col-md-6" style="display: none;">
                                <label for="id">id</label>
                                <input name="id" type="text" class="form-control" id="id" placeholder="id">
                            </div>
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
                                <label for="Ville">Ville</label>
                                <input name="city" type="text" class="form-control" id="city" placeholder="Ville">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Numéro">Numéro de Téléphone</label>
                                <input name="phone" type="text" class="form-control" id="phone" placeholder="Numéro de Téléphone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Adresse">Adresse</label>
                                <textarea name="address" class="form-control" id="address" rows="1"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="photoDePprofil">Ajouter la photo de profil</label>
                                <input name="pdp" type="file" class="form-control" id="pdp" />
                            </div>
                            <div class="form-group col-md-6" style="display: none;">
                                <label for="pdpold">pdpold</label>
                                <textarea name="pdpold" class="form-control" id="pdpold" rows="1"></textarea>
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
                                                        <h4>
                                                            <?php
                                                            if (count($data) > 0) {
                                                                $num_rows = count($data);
                                                                echo $num_rows;
                                                            }
                                                            ?>
                                                        </h4>
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
                                    <?php
                                    if (count($data) > 0) {
                                        foreach ($data as $row) {
                                            echo '<tr>
                                            <td style="display: none;">' . $row->id . '</td>
                                            <td class="py-1">
                                                <p style="display: none;">' . $row->pdp . '</p>
                                                <img src="' . URLROOT . '/public/img/' . $row->pdp . '" alt="image" />
                                            </td>
                                            <td> ' . $row->lname . ' </td>
                                            <td> ' . $row->fname . ' </td>
                                            <td style="display: none;"> ' . $row->role . ' </td>
                                            <td> ' . $row->email . ' </td>
                                            <td style="display: none;"> ' . $row->password . ' </td>
                                            <td style="display: none;"> ' . $row->gender . ' </td>
                                            <td> ' . $row->city . ' </td>
                                            <td style="display: none;"> ' . $row->phone . ' </td>
                                            <td style="display: none;"> ' . $row->address . ' </td>
                                            <td>
                                                <a class="btn-edit" type="button" data-bs-toggle="modal" data-bs-target="#editModal">
                                                    <div class="badge badge-success p-2 icon-pencil">Edit</div>
                                                </a>
                                                <a class="btn-delete" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                    <div class="badge badge-success p-2 icon-trash">Delete</div>
                                                </a>
                                            </td>
                                        </tr>';
                                        }
                                    } else {
                                        echo '<td class="text-center" colspan="6">
                                            <h1>Pas de Résultas</h1>
                                                <img style="width:auto; height:auto; border-radius:0;" src="https://thumbs.gfycat.com/CreamyInfatuatedAnkolewatusi-size_restricted.gif" alt="">
                                            <h2>C\'est pas grave, Vous pouvez <a class="text-decoration-none" type="button" data-bs-toggle="modal" data-bs-target="#addModal">ajouter un client</a></h2>
                                        </td>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.querySelectorAll('.btn-edit').forEach(function(btn) {
                btn.addEventListener('click', function(com) {
                    let item = com.target.parentElement.parentElement.parentElement;
                    let children = item.children;

                    let id = children[0].textContent;
                    let pdp = children[1].children[0].textContent;
                    let lname = children[2].textContent;
                    let fname = children[3].textContent;
                    let role = children[4].textContent;
                    let email = children[5].textContent;
                    let password = children[6].textContent;
                    let gender = children[7].textContent;
                    let city = children[8].textContent;
                    let phone = children[9].textContent;
                    let address = children[10].textContent;

                    document.querySelector('#editModal #id').value = id;
                    document.querySelector('#editModal #pdpold').value = pdp;
                    document.querySelector('#editModal #lname').value = lname;
                    document.querySelector('#editModal #fname').value = fname;
                    document.querySelector('#editModal #email').value = email;
                    document.querySelector('#editModal #password').value = password;
                    document.querySelector('#editModal #city').value = city;
                    document.querySelector('#editModal #phone').value = phone;
                    document.querySelector('#editModal #address').value = address;


                })
            })
            document.querySelectorAll('.btn-delete').forEach(function(btn) {

                btn.addEventListener('click', function(com) {
                    let item = com.target.parentElement.parentElement.parentElement;
                    let children = item.children;

                    let id = children[0].textContent;

                    document.querySelector('#deleteModal .id').value = id;
                })
            })
        </script>
        <script src="<?php echo URLROOT; ?>/js/vendor.bundle.base.js"></script>
        <script src="<?php echo URLROOT; ?>/js/off-canvas.js"></script>
        <script src="<?php echo URLROOT; ?>/js/misc.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>