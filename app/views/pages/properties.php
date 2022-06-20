<?php
require APPROOT . '/views/includes/head.php';
?>

<body>
    <?php
    require APPROOT . '/views/includes/header.php';
    $agent = $data['allagent'];
    ?>
    <section class="hero-wrap hero-wrap-2" style="background-image:url(<?php echo URLROOT; ?>/public/img/xbg_4.jpg.pagespeed.ic.wYQ9Oeghhn.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" style="height:80vh;">
                <div class="col-md-9 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo URLROOT; ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>PROPRIÉTÉS <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Propriétés</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ftco-search d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap d-flex justify-content-center">
                                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Acheter des propriétés</a>
                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Louer des propriétés</a>
                                </div>
                            </div>
                            <div class="col-md-12 tab-wrap">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                        <form action="<?php echo URLROOT; ?>/pages/properties" class="search-property-1">
                                            <div class="row g-0">
                                                <div class="form-group p-4 border-0" style="display: none;">
                                                    <label for="type">type</label>
                                                    <input name="typesearch" type="text" class="form-control" value="Vente">
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">ENTREZ UN MOT-CLEF</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span></div>
                                                            <input name="motsearch" type="text" class="form-control" placeholder="Enter Keyword">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">GENRE DE PROPRIÉTÉ</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name="genresearch" id="" class="form-control">
                                                                    <option selected value="">Genre de la propriété</option>
                                                                    <option value="sidentiel">Résidentiel</option>
                                                                    <option value="commercial">Commercial</option>
                                                                    <option value="Terrain">Terrain</option>
                                                                    <option value="industriel">Industriel</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">VILLE</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="icon-directions"></span></div>
                                                            <input name="villesearch" type="text" class="form-control" placeholder="Search Location">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">LIMITE DE PRIX</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name="prixsearch" id="" class="form-control">
                                                                    <option selected value="">Budget Limit</option>

                                                                    <option value="100000">Dhs 100,000</option>
                                                                    <option value="200000">Dhs 200,000</option>
                                                                    <option value="300000">Dhs 300,000</option>
                                                                    <option value="400000">Dhs 400,000</option>
                                                                    <option value="500000">Dhs 500,000</option>
                                                                    <option value="600000">Dhs 600,000</option>
                                                                    <option value="700000">Dhs 700,000</option>
                                                                    <option value="800000">Dhs 800,000</option>
                                                                    <option value="900000">Dhs 900,000</option>
                                                                    <option value="1000000">Dhs 1,000,000</option>
                                                                    <option value="1500000">Dhs 1,500,000</option>
                                                                    <option value="2000000">Dhs 2,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Rechercher" class="align-self-stretch form-control btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                                        <form action="<?php echo URLROOT; ?>/pages/properties" class="search-property-1">
                                            <div class="row g-0">
                                                <div class="form-group p-4 border-0" style="display: none;">
                                                    <label for="type">type</label>
                                                    <input name="typesearch" type="text" class="form-control" value="Location">
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">ENTREZ UN MOT-CLEF</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span></div>
                                                            <input name="motsearch" type="text" class="form-control" placeholder="Enter Keyword">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">GENRE DE PROPRIÉTÉ</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name="genresearch" id="" class="form-control">
                                                                    <option selected value="">Genre de la propriété</option>
                                                                    <option value="">Résidentiel</option>
                                                                    <option value="">Commercial</option>
                                                                    <option value="">Terrain</option>
                                                                    <option value="">Industriel</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">VILLE</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="icon-directions"></span></div>
                                                            <input name="villesearch" type="text" class="form-control" placeholder="Search Location">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">LIMITE DE PRIX</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name="prixsearch" id="" class="form-control">
                                                                    <option selected value="">Budget Limit</option>

                                                                    <option value="2000">Dhs 2,000</option>
                                                                    <option value="5000">Dhs 5,000</option>
                                                                    <option value="10000">Dhs 10,000</option>
                                                                    <option value="20000">Dhs 20,000</option>
                                                                    <option value="30000">Dhs 30,000</option>
                                                                    <option value="40000">Dhs 40,000</option>
                                                                    <option value="50000">Dhs 50,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Rechercher" class="align-self-stretch form-control btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row">
                <?php
                if (count($data['allbiens']) > 0) {
                    $i = 0;
                    foreach ($data['allbiens'] as $row) {
                        if (empty($row->pdb)) {
                            $pdbdefault = 'login.jpg';
                        } else {
                            $pdbdefault = $row->pdb;
                        }
                        if ($row->type == 'Vente') {
                            $typeClass = 'sale';
                        } else {
                            $typeClass = 'rent';
                        }
                        echo '
					<div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
						<div class="property-wrap">
							<a href="' . URLROOT . '/pages/propertydetails?prop=' . $row->id . '" class="img img-property" style="background-image:url(' . URLROOT . '/public/img/' . $pdbdefault . ')">
								<p class="price"><span class="orig-price">Dhs ' . $row->price . '</span></p>
							</a>
							<div class="text">
								<div class="list-team d-flex align-items-center mb-4">
									<div class="d-flex align-items-center">
										<div class="img" style="background-image:url(' . URLROOT . '/public/img/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)"></div>
										<h3 class="ml-2">' . $agent[$i]['lname'] . ' ' . $agent[$i]['fname'] . '</h3>
									</div>
									<span class="text-right">Il y a 2 semaines</span>
								</div>
								<h3><a>' . $row->description . '</a></h3>
								<span class="location"><i class="ion-ios-pin"></i> ' . $row->city . ' <span class="' . $typeClass . '">' . $row->type . '</span></span>
								<ul class="property_list mt-3 mb-0">
									<li><span class="flaticon-bed"></span>' . $row->chamber . '</li>
									<li><span class="flaticon-bathtub"></span>' . $row->bath . '</li>
									<li><span class="flaticon-blueprint"></span>' . $row->Superficie . ' m²</li>
								</ul>
							</div>
						</div>
					</div>';
                        $i++;
                    }
                } else {
                    echo '<div class="text-center" colspan="6">
                              <h1>Pas de Résultas</h1>
                                  <img style="width:auto; height:auto; border-radius:0;" src="https://thumbs.gfycat.com/CreamyInfatuatedAnkolewatusi-size_restricted.gif" alt="">
                              <h2>C\'est pas grave, Vous pouvez changer le mot clef</h2>
                          </div>';
                } ?>
            </div>
        </div>
    </section>
    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>