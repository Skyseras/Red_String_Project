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
              <h4>Création de compte Administrateur</h4>
              <form class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Nom">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confimer Password">
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="#">CREER MON COMPTE</a>
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
  <script src="<?php echo URLROOT; ?>/js/vendor.bundle.base.js"></script>
  <script src="<?php echo URLROOT; ?>/js/off-canvas.js"></script>
  <script src="<?php echo URLROOT; ?>/js/misc.js"></script>
</body>

</html>