<?php
require APPROOT . '/views/includes/head.php';
?>

<body>
  <?php
  require APPROOT . '/views/includes/header.php';
  $agent = $data['agentlisting'];
  ?>
  <section class="hero-wrap hero-wrap-2" style="background-image:url(<?php echo URLROOT; ?>/public/img/xbg_4.jpg.pagespeed.ic.wYQ9Oeghhn.jpg)">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" style="height:80vh;">
        <div class="col-md-9 pt-5 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index-2.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Our Agents <i class="fa fa-chevron-right"></i></span></p>
          <h1 class="mb-0 bread">Our Agents</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-agent" style="margin-top: -14em;">
    <div class="container-xl">
      <div class="row justify-content-center">
        <?php
        if (count($data['agentlist']) > 0) {
          foreach ($data['agentlist'] as $row) {
            if (empty($row->pdp)) {
              $pdpdefault = 'team-6.jpg';
            } else {
              $pdpdefault = $row->pdp;
            }
            // $agentnumberlist;
            // for ($i = 0; $i < 10; $i++) {
            //   if ($row->user_id == $agent[$i]['agent_name']) {
            //     $agentnumberlist = $agent[$i]['property_count'];
            //     $i = 101;
            //   } else {
            //     $i++;
            //   }
            // }
            //' . $agentnumberlist . '
            echo '
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
            <div class="agent">
              <div class="img">
                <img src="' . URLROOT . '/public/img/' . $pdpdefault . '" class="img-fluid" alt="Colorlib Template">
              </div>
              <div class="desc">
                <p class="h-info"><span class="position">Listing</span> <span class="details">13 Propriétés</span></p>
                <h3><a href="">' . $row->lname . ' ' . $row->fname . '</a></h3>
                <ul class="ftco-social">
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>';
          }
        }
        ?>
      </div>
    </div>
  </section>
  <?php
  require APPROOT . '/views/includes/footer.php';
  ?>
</body>

</html>