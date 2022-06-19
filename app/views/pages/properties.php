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
                                        <form action="#" class="search-property-1">
                                            <div class="row g-0">
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">ENTREZ UN MOT-CLEF</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span></div>
                                                            <input type="text" class="form-control" placeholder="Enter Keyword">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">TYPE DE PROPRIÉTÉ</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name="" id="" class="form-control">
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
                                                        <label for="#">EMPLACEMENT</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="ion-ios-pin"></span></div>
                                                            <input type="text" class="form-control" placeholder="Search Location">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">LIMITE DE PRIX</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">Dhs 10,000</option>
                                                                    <option value="">Dhs 100,000</option>
                                                                    <option value="">Dhs 500,000</option>
                                                                    <option value="">Dhs 1,000,000</option>
                                                                    <option value="">Dhs 2,000,000</option>
                                                                    <option value="">Dhs 3,000,000</option>
                                                                    <option value="">Dhs 4,000,000</option>
                                                                    <option value="">Dhs 5,000,000</option>
                                                                    <option value="">Dhs 6,000,000</option>
                                                                    <option value="">Dhs 7,000,000</option>
                                                                    <option value="">Dhs 8,000,000</option>
                                                                    <option value="">Dhs 9,000,000</option>
                                                                    <option value="">Dhs 10,000,000</option>
                                                                    <option value="">Dhs 20,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Chercher" class="align-self-stretch form-control btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row g-0">
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">ENTREZ UN MOT-CLEF</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span></div>
                                                            <input type="text" class="form-control" placeholder="Enter Keyword">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">TYPE DE PROPRIÉTÉ</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name="" id="" class="form-control">
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
                                                        <label for="#">EMPLACEMENT</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="ion-ios-pin"></span></div>
                                                            <input type="text" class="form-control" placeholder="Search Location">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">LIMITE DE PRIX</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">Dhs 10,000</option>
                                                                    <option value="">Dhs 100,000</option>
                                                                    <option value="">Dhs 500,000</option>
                                                                    <option value="">Dhs 1,000,000</option>
                                                                    <option value="">Dhs 2,000,000</option>
                                                                    <option value="">Dhs 3,000,000</option>
                                                                    <option value="">Dhs 4,000,000</option>
                                                                    <option value="">Dhs 5,000,000</option>
                                                                    <option value="">Dhs 6,000,000</option>
                                                                    <option value="">Dhs 7,000,000</option>
                                                                    <option value="">Dhs 8,000,000</option>
                                                                    <option value="">Dhs 9,000,000</option>
                                                                    <option value="">Dhs 10,000,000</option>
                                                                    <option value="">Dhs 20,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Chercher" class="align-self-stretch form-control btn btn-primary">
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
                            $pdbdefault = 'pdpdefault.jpg';
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
							<a href="#" class="img img-property" style="background-image:url(' . URLROOT . '/public/img/' . $pdbdefault . ')">
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
								<h3><a href="#">' . $row->description . '</a></h3>
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
                } ?>
            </div>
        </div>
    </section>
    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>