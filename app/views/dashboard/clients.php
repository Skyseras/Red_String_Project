<?php
require APPROOT . '/views/includes/dashhead.php';
?>

<body>
    <!-- Modal add-->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Client Form</h5>
                </div>
                <div class="px-4 py-3" id="form">
                    <form action="<?php echo URLROOT; ?>/Studentcontroller/add" method="POST" enctype="multipart/form-data" class="forms-sample">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Nom</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputName1">Prénom</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail3">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword4">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="gender" class="form-label">Sexe</label>
                                <select class="small-size form-control" id="gender" name="gender" placeholder="Select Gender">
                                    <option selected value="">Choisir le Sexe</option>
                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Ajouter la photo de profil</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class=" input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Choisir Image">
                                    <div class="file-upload-browse">
                                        <button class=" btn btn-primary" type="button">Ajouter</button>
                                    </div>
                                </div>
<!--                                 
                                <div class="file-field">
                                    <div class="file-upload-browse btn btn-primary">
                                        <span>Choose file</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload your file">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputCity1">City</label>
                                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleTextarea1">Adresse</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                            </div>
                        </div>
                        <button type="submit" name="save" class="btn btn-primary mr-2">Submit</button>
                        <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-light">Cancel</button>
                    </form>
                    <!-- <form  class="text-muted row g-3 needs-validation">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="small-size form-control" name="name" id="name" placeholder="Enter name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="small-size form-control" id="gender" name="gender" placeholder="Select Gender">
                                <option selected value="">Select Your Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="class" class="form-label">Class</label>
                            <select class="small-size form-control" id="class" name="class" placeholder="Select your Class">
                                <option selected value="">Select Your Class</option>
                                <option value="Class 1">Class 1</option>
                                <option value="Class 2">Class 2</option>
                                <option value="Class 3">Class 3</option>
                                <option value="Class 4">Class 4</option>
                                <option value="Class 5">Class 5</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="parent" class="form-label">Parent</label>
                            <input type="text" class="small-size form-control" name="parent" id="parent" placeholder="Enter parent" required>
                        </div>
                        <div class="col-md-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="small-size form-control" name="address" id="address" placeholder="Enter address">
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="small-size form-control" name="email" id="email" placeholder="Enter email" required>
                        </div>
                        <div class="col-md-12">
                            <label for="birthday" class="form-label">Birthday</label>
                            <input type="date" class="small-size form-control" name="birthday" id="birthday" placeholder="Enter birthday" required>
                        </div>
                        <div class="col-12 mt-3 modal-footer text-center">
                            <button class="btn btn-primary" name="save" type="submit">Save</button>
                        </div>
                    </form> -->
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
                                        <th> User </th>
                                        <th> First name </th>
                                        <th> Progress </th>
                                        <th> Amount </th>
                                        <th> Deadline </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces-clipart/pic-1.png" alt="image" />
                                        </td>
                                        <td> Herman Beck </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 77.99 </td>
                                        <td> May 15, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces-clipart/pic-2.png" alt="image" />
                                        </td>
                                        <td> Messsy Adam </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $245.30 </td>
                                        <td> July 1, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces-clipart/pic-3.png" alt="image" />
                                        </td>
                                        <td> John Richards </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $138.00 </td>
                                        <td> Apr 12, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces-clipart/pic-4.png" alt="image" />
                                        </td>
                                        <td> Peter Meggik </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 77.99 </td>
                                        <td> May 15, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces-clipart/pic-1.png" alt="image" />
                                        </td>
                                        <td> Edward </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 160.25 </td>
                                        <td> May 03, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces-clipart/pic-2.png" alt="image" />
                                        </td>
                                        <td> John Doe </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 123.21 </td>
                                        <td> April 05, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces-clipart/pic-3.png" alt="image" />
                                        </td>
                                        <td> Henry Tom </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 150.00 </td>
                                        <td> June 16, 2015 </td>
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