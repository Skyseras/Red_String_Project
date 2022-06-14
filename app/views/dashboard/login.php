<?php
require APPROOT . '/views/includes/dashhead.php';
?>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-5 mx-auto">
            <div class="auth-form-light text-center p-5">
              <div class="brand-logo m-1">
                <img src="<?php echo URLROOT; ?>/public/img/Logo_IM_L.png">
              </div>
              <h4>Authentification</h4>
              <form class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="#">SE CONNECTER</a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> Se souvenir de moi </label>
                  </div>
                  <a href="#" class="auth-link text-black">Mot de passe oublié?</a>
                </div>
                <div class="text-center mt-4 font-weight-light"> Vous n'avez pas de compte? <a href="<?php echo URLROOT; ?>/dashboard/register" class="text-primary">Créer un compte</a>
                </div>
              </form>
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