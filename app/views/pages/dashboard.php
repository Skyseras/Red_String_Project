<?php
require APPROOT . '/views/includes/dashhead.php';
?>

<body>
  <div class="container-scroller">
    <?php
    require APPROOT . '/views/includes/dashnav.php';
    ?>
    <!-- Modal add-->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addModaltitle">Ajouter Nouveau Bien</h5>
          </div>
          <div class="px-4 py-3" id="form">

          
          'city' => '',
            'description' => '',
            'type' => '',
            'chamber' => '',
            'bath' => '',
            'Superficie' => '',
            'gender' => '',
            'price' => '',
            'address' => '',

            <form action="<?php echo URLROOT; ?>/Bienscontroller/add" method="POST" enctype="multipart/form-data" class="forms-sample">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="Ville">Ville</label>
                  <input name="city" type="text" class="form-control" id="city" placeholder="Ville">
                </div>
                <div class="form-group col-md-6">
                  <label for="Description">Description</label>
                  <input name="description" type="text" class="form-control" id="description" placeholder="Description">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="Type">Type</label>
                  <input name="type" type="email" class="form-control" id="type" placeholder="Type">
                  <select name="type" class="small-size form-control" id="type" placeholder="Choisir le type du bien">
                    <option selected value="">Choisir le type du bien</option>
                    <option value="Vente">Vente</option>
                    <option value="Location">Location</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="Chambre">Nombre de Chambre</label>
                  <input type="number" id="chamber" name="chamber" min="1" max="20">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="Genre" class="form-label">Genre du bien</label>
                  <select name="gender" class="small-size form-control" id="gender" placeholder="Select Gender">
                    <option selected value="">Choisir le genre du bien</option>
                    <option value="Terrain">Terrain</option>
                    <option value="Résidentiel">Résidentiel</option>
                    <option value="Commercial">Commercial</option>
                    <option value="Industriel">Industriel</option>
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
    <div class="main-panel">
      <div class="content-wrapper p-2">
        <!-- Quick Action Toolbar Ends-->
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="d-sm-flex align-items-baseline report-summary-header">
                      <h5 class="font-weight-semibold">Stats Utilisateurs</h5></button>
                    </div>
                  </div>
                </div>
                <div class="row report-inner-cards-wrapper">
                  <div class=" col-md -6 col-xl report-inner-card">
                    <div class="inner-card-text">
                      <span class="report-title">CLIENTS</span>
                      <h4>
                        <?php
                        if (count($data['clients']) > 0) {
                          $num_rows = count($data['clients']);
                          echo $num_rows;
                        }
                        ?>
                      </h4>
                    </div>
                    <div class="inner-card-icon bg-success">
                      <i class="icon-people"></i>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl report-inner-card">
                    <div class="inner-card-text">
                      <span class="report-title">PARTICULIERS</span>
                      <h4>58</h4>
                    </div>
                    <div class="inner-card-icon bg-danger">
                      <i class="icon-briefcase"></i>
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
                <div class="d-sm-flex align-items-baseline justify-content-between report-summary-header mb-3">
                  <h5 class="font-weight-semibold">Derniers Biens Ajoutés</h5></button>
                  <div class="report-inner-card">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="inner-card-icon btn btn-inverse-success btn-icon">
                      <i class="icon-plus"></i>
                    </button>
                  </div>
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