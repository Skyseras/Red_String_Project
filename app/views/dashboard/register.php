<?php
require APPROOT . '/views/includes/dashhead.php';
?>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-center p-5">
              <div class="brand-logo m-1">
                <img src="<?php echo URLROOT; ?>/public/img/Logo_IM_L.png">
              </div>
              <h4>Création de compte Administrateur</h4>
              <?php if(!empty($data)){ ?>
                        <div class="alert alert-danger mt-3 text-center">
                            <?php if(!empty($data['passwordError'])) echo $data['passwordError']; ?>
                            <?php if(!empty($data['nameError'])) echo $data['nameError']; ?>
                            <?php if(!empty($data['emailError'])) echo $data['emailError']; ?>
                        </div>
                    <?php } ?>
              <form action="<?php echo URLROOT; ?>/Admincontroller/register" method="POST" enctype="multipart/form-data" class="pt-3" onsubmit="return validation()" novalidate>
                <div class="row">
                  <div class="form-group col-6">
                    <input type="text" class="form-control form-control-lg" name="name" id="username" placeholder="Nom" >
                    <span id="usererror" style="color:red;"></span>
                  </div>
                  <div class="form-group col-6">
                    <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email" >
                    <span id="emailerror" style="color:red;"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-6">
                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password" >
                    <span id="passerror" style="color:red;"></span>
                  </div>
                  <div class="form-group col-6">
                    <input type="password" class="form-control form-control-lg" name="confirmPassword" id="cpassword" placeholder="Confimer Password" >
                    <span id="cpasserror" style="color:red;"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12">
                    <label class="form-label" for="photoDeprofil">Ajouter votre photo de profil</label>
                    <input name="pdp" type="file" class="form-control" id="pdp" />
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">CREER MON COMPTE</button>
                </div>
                <div class="text-center mt-4 font-weight-light"> Vous avez déja un compte? <a href="<?php echo URLROOT; ?>/dashboard/login" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo URLROOT; ?>/js/validation.js"></script>
  <script src="<?php echo URLROOT; ?>/js/vendor.bundle.base.js"></script>
  <script src="<?php echo URLROOT; ?>/js/off-canvas.js"></script>
  <script src="<?php echo URLROOT; ?>/js/misc.js"></script>
</body>

</html>