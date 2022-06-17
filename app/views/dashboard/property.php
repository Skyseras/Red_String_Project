<?php
require APPROOT . '/views/includes/dashhead.php';
?>

<body class="scrollbar-hidden">
  <div class="container-scroller">
    <?php
    require APPROOT . '/views/includes/dashnav.php';
    ?>

    <div class="main-panel">
      <div class="content-wrapper p-2">
        <!-- Quick Action Toolbar Starts-->
        <div class="row quick-action-toolbar">
          <div class="col-md-12 grid-margin">
            <div class="card">
              <div class="card-header d-block d-md-flex">
                <h5 class="mb-0">Actions Rapides</h5>
                <p class="ml-auto mb-0">Lister les propriétés par votre choix<i class="icon-bulb"></i></p>
              </div>
              <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                <div class="col-sm-12 col-md-4 p-3 text-center btn-wrapper">
                  <button type="button" data-toggle="collapse" href="#grande-ville" aria-expanded="false" aria-controls="grande-ville" class="btn px-0"> <i class="icon-directions mr-2"></i>Grande Ville</button>
                  <div class="collapse" id="grande-ville">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/property/Casablanca">Casablanca</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/property/Rabat">Rabat</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/property/Marrakech">Marrakech</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/property/Tanger">Tanger</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 text-center btn-wrapper">
                  <button type="button" data-toggle="collapse" href="#type" aria-expanded="false" aria-controls="type" class="btn px-0"><i class="icon-key mr-2"></i>Type</button>
                  <div class="collapse" id="type">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/property/Location">Location</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/property/Vente">Vente</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 text-center btn-wrapper">
                  <button type="button" data-toggle="collapse" href="#genre" aria-expanded="false" aria-controls="genre" class="btn px-0"><i class="icon-tag mr-2"></i>Genre</button>
                  <div class="collapse" id="genre">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/property/Terrain">Terrain</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/property/sidentiel">Résidentiel</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/property/commercial">Commercial</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/dashboard/property/industriel">Industriel</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal add-->
        <div class="modal fade scrollbar-hidden" id="addModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addModaltitle">Ajouter Nouveau Bien</h5>
              </div>
              <div class="px-4 py-3" id="form">
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
                      <select name="type" class="small-size form-control" id="type" placeholder="Choisir le type du bien">
                        <option selected value="">Choisir le type du bien</option>
                        <option value="Vente">Vente</option>
                        <option value="Location">Location</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Chambre">Nombre de Chambre</label>
                      <input type="number" id="chamber" class="form-control" name="chamber" min="1" max="20">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="Ville">Nombre de salle de bains</label>
                      <input type="number" id="bath" class="form-control" name="bath" min="1" max="10">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Supérficie">Supérficie en m²</label>
                      <input name="Superficie" type="number" class="form-control" id="Superficie" min="10" max="1000000">
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
                      <label for="Prix">Prix en Dhs</label>
                      <input name="price" type="number" class="form-control" id="price" min="500" max="100000000000">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="Adresse">Adresse</label>
                      <input name="address" type="text" class="form-control" id="address" placeholder="Adresse du bien">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="photoDuBien">Ajouter la photo du bien</label>
                      <input name="pdb" type="file" class="form-control" id="pdb" />
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
                <h5 class="modal-title text-danger" id="deleteModaltitle">Alerte! Suppression de la propriété</h5>
              </div>
              <div class="px-4 py-3">
                Êtes-vous sûr de vouloir supprimer?<br>
              </div>
              <form action="<?php echo URLROOT; ?>/Bienscontroller/delete" method="POST">
                <input type="text" name="id" class="id" style="display: none;">
                <div class="px-4 py-3">
                  <button type="submit" name="save" class="btn btn-danger mr-2">Oui, supprimer cette propriété.</button>
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
                <form action="<?php echo URLROOT; ?>/Bienscontroller/edit" method="POST" enctype="multipart/form-data" class="forms-sample">
                  <div class="row">
                    <div class="form-group col-md-6" style="display: none;">>
                      <label for="id">id</label>
                      <input name="id" type="text" class="form-control" id="id" placeholder="id">
                    </div>
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
                      <div class="mx-1 row">
                        <input name="typeold" type="text" class="form-control col-md-5" id="typeold" readonly>
                        <select name="type" class="small-size form-control col-md-7" id="type" placeholder="Choisir le type du bien">
                          <option selected value="">Choisir le type du bien</option>
                          <option value="Vente">Vente</option>
                          <option value="Location">Location</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Chambre">Nombre de Chambre</label>
                      <div class="mx-1 row">
                        <input name="chamberold" type="text" class="form-control col-md-5" id="chamberold" readonly>
                        <input type="number" id="chamber" class="form-control col-md-7" name="chamber" min="1" max="20">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="Ville">Nombre de salle de bains</label>
                      <div class="mx-1 row">
                        <input name="batheold" type="text" class="form-control col-md-5" id="bathold" readonly>
                        <input type="number" id="bath" class="form-control col-md-7" name="bath" min="1" max="10">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Supérficie">Supérficie en m²</label>
                      <div class="mx-1 row">
                        <input name="Superficieold" type="text" class="form-control col-md-5" id="Superficieold" readonly>
                        <input name="Superficie" type="number" class="form-control  col-md-7" id="Superficie" min="10" max="1000000">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="Genre" class="form-label">Genre du bien</label>
                      <div class="mx-1 row">
                        <input name="genderold" type="text" class="form-control col-md-5" id="genderold" readonly>
                        <select name="gender" class="small-size form-control col-md-7" id="gender" placeholder="Select Gender">
                          <option selected value="">Choisir le genre du bien</option>
                          <option value="Terrain">Terrain</option>
                          <option value="Résidentiel">Résidentiel</option>
                          <option value="Commercial">Commercial</option>
                          <option value="Industriel">Industriel</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Prix">Prix en Dhs</label>
                      <div class="mx-1 row">
                        <input name="priceold" type="text" class="form-control col-md-5" id="priceold" readonly>
                        <input name="price" type="number" class="form-control col-md-7" id="price" min="500" max="100000000000">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="Adresse">Adresse</label>
                      <input name="address" type="text" class="form-control" id="address" placeholder="Adresse du bien">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="photoDuBien">Ajouter la photo du bien</label>
                      <input name="pdb" type="file" class="form-control" id="pdb" />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="pdbold">pdbold</label>
                      <textarea name="pdbold" class="form-control" id="pdbold" rows="1"></textarea>
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
        <!-- dashboard starts -->
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body p-3">
                <div class="d-sm-flex align-items-baseline justify-content-between mb-3">
                  <h5 class="font-weight-semibold">Dernieres Propriété Ajoutées</h5></button>
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
                        <th class="font-weight-bold">Ville</th>
                        <th class="font-weight-bold">Type</th>
                        <th class="font-weight-bold">Supérficie</th>
                        <th class="font-weight-bold">Genre</th>
                        <th class="font-weight-bold">Prix</th>
                        <th class="font-weight-bold">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (count($data['biens']) > 0) {
                        foreach ($data['biens'] as $row) {
                          echo '<tr>
                                  <td style="display: none;">' . $row->id . '</td>
                                  <td> ' . $row->city . ' </td>
                                  <td style="display: none;"> ' . $row->description . ' </td>
                                  <td> ' . $row->type . ' </td>
                                  <td style="display: none;"> ' . $row->chamber . ' </td>
                                  <td style="display: none;"> ' . $row->bath . ' </td>
                                  <td> ' . $row->Superficie . ' </td>
                                  <td> ' . $row->gender . ' </td>
                                  <td> ' . $row->price . ' </td>
                                  <td style="display: none;"> ' . $row->address . ' </td>
                                  <td class="py-1" style="display: none;">
                                      <p>' . $row->pdb . '</p>
                                  </td>
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
                                  <h2>C\'est pas grave, Vous pouvez <a class="text-decoration-none" type="button" data-bs-toggle="modal" data-bs-target="#addModal">ajouter une propriété</a></h2>
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
      </div>
    </div>
  </div>
  <script>
    document.querySelectorAll('.btn-edit').forEach(function(btn) {
      btn.addEventListener('click', function(com) {
        let item = com.target.parentElement.parentElement.parentElement;
        let children = item.children;

        let id = children[0].textContent;
        let city = children[1].textContent;
        let description = children[2].textContent;
        let type = children[3].textContent;
        let chamber = children[4].textContent;
        let bath = children[5].textContent;
        let Superficie = children[6].textContent;
        let gender = children[7].textContent;
        let price = children[8].textContent;
        let address = children[9].textContent;
        let pdb = children[10].textContent;

        document.querySelector('#editModal #id').value = id;
        document.querySelector('#editModal #city').value = city;
        document.querySelector('#editModal #description').value = description;
        document.querySelector('#editModal #typeold').value = type;
        document.querySelector('#editModal #chamberold').value = chamber;
        document.querySelector('#editModal #bathold').value = bath;
        document.querySelector('#editModal #Superficieold').value = Superficie;
        document.querySelector('#editModal #genderold').value = gender;
        document.querySelector('#editModal #priceold').value = price;
        document.querySelector('#editModal #address').value = address;
        document.querySelector('#editModal #pdbold').value = pdb;
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