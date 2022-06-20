<?php
require APPROOT . '/views/includes/head.php';
?>

<body>
  <?php
  require APPROOT . '/views/includes/header.php';
  ?>
  <section class="hero-wrap hero-wrap-2" style="background-image:url(<?php echo URLROOT; ?>/public/img/xbg_4.jpg.pagespeed.ic.wYQ9Oeghhn.jpg)">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" style="height:80vh;">
        <div class="col-md-9 pt-5 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Contact us</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section bg-light">
    <div class="container" id="reserver">
      <div class="row no-gutters justify-content-center">
        <div class="col-md-12">
          <div class="wrapper">
            <div class="row g-0">
              <div class="col-lg-7">
                <div class="contact-wrap w-100 p-md-5 p-4">
                  <h3>Contactez-nous</h3>
                  <p class="mb-4">Nous sommes ouverts à toute suggestion ou simplement pour discuter</p>
                  <div class="row mb-4">
                    <div class="col-md-4">
                      <div class="dbox w-100 d-flex align-items-start">
                        <div class="text">
                          <p><span>ADRESSE:</span>Bureau 7 Jozefine Center Majorelle Marrakech</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="dbox w-100 d-flex align-items-start">
                        <div class="text">
                          <p><span>Email:</span> <a href="#"><span>Contact@immomaroc.ma</span></a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="dbox w-100 d-flex align-items-start">
                        <div class="text">
                          <p><span>Téléphone:</span> <a href="tel://1234567920">+212 708 884 824</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <form action="<?php echo URLROOT; ?>/Reservationcontroller/add" method="POST" id="contactForm" name="contactForm" class="contactForm">
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group" style="display: none;">
                          <input type="text" class="form-control" name="prop_id" value="<?php if (!empty($data)) echo $data[0]['id']?>">
                        </div>
                        <div class="form-group" style="display: none;">
                          <input type="text" class="form-control" name="user_id" value="<?php if (!empty($data)) echo $data[0]['user_id']?>">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="name" id="name" value="<?php if(isset($_SESSION['fname'])){echo $_SESSION['fname'].' ';}?><?php if(isset($_SESSION['lname'])){echo $_SESSION['lname'];}?>" placeholder="Nom et Prénom">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" id="email" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="phone" id="phone" placeholder="Téléphone">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="subject" id="subject" value="Demande de réservation" placeholder="Subjet">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Créer votre message ici">
                            <?php if (!empty($data)) {
                            echo 'Je souhaiterais réserver cette propriété en '.$data[0]['type'].' de '.$data[0]['chamber'].' pièce et '.$data[0]['bath'].' salle de bain située à '.$data[0]['city'].' . Merci de fixer un rendez vous.'
                          ;} 
                          ?>
                          </textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="submit" value="Envoyer Message" class="btn btn-primary">
                          <div class="submitting"></div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="w-100 social-media mt-5">
                    <h3>Suivez-nous sur les réseaux sociaux</h3>
                    <p>
                      <a href="#">Facebook</a>
                      <a href="#">Twitter</a>
                      <a href="#">Instagram</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 d-flex align-items-stretch">
                <div id="map" class="bg-white"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  require APPROOT . '/views/includes/footer.php';
  ?>
</body>

</html>