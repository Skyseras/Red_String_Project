<?php
require APPROOT . '/views/includes/head.php';
?>

<body>
	<?php
	require APPROOT . '/views/includes/header.php';
	?>
	<section class="slider-hero">
		<div class="overlay"></div>
		<div class="hero-slider">
			<div class="item" style="height:80vh;">
				<div class="work">
					<div class="img d-flex align-items-center js-fullheight" style="background-image:url(<?php echo URLROOT; ?>/public/img/xbg_1.jpg.pagespeed.ic.b31fPYrhFV.jpg)">
						<div class="container-xl">
							<div class="row justify-content-center align-items-center">
								<div class="col-md-10 col-xl-9">
									<div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
										<h2>Votre Propriété Est Notre Priorité.</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item" style="height:80vh;">
				<div class="work">
					<div class="img d-flex align-items-center justify-content-center js-fullheight" style="background-image:url(<?php echo URLROOT; ?>/public/img/xbg_2.jpg.pagespeed.ic.4lj8Kq4iRv.jpg)">
						<div class="container-xl">
							<div class="row justify-content-center">
								<div class="col-md-10 col-xl-9">
									<div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
										<h2>Des Professionnels De L'immobilier À Votre Écoute.</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item" style="height:80vh;">
				<div class="work">
					<div class="img d-flex align-items-center justify-content-center js-fullheight" style="background-image:url(<?php echo URLROOT; ?>/public/img/xbg_3.jpg.pagespeed.ic.33WGlYurvU.jpg)">
						<div class="container-xl">
							<div class="row justify-content-center">
								<div class="col-md-10 col-xl-9">
									<div class="text text-center" data-aos="fade-up" data-aos-duration="1000">
										<h2>Trouvez Votre Maison De Rêve.</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ftco-search d-flex justify-content-center">
						<div class="row">
							<div class="col-md-12 nav-link-wrap d-flex justify-content-center">
								<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Buy Properties</a>
									<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Rent Properties</a>
								</div>
							</div>
							<div class="col-md-12 tab-wrap">
								<div class="tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
										<form action="#" class="search-property-1">
											<div class="row g-0">
												<div class="col-md d-flex">
													<div class="form-group p-4 border-0">
														<label for="#">Enter Keyword</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-search"></span></div>
															<input type="text" class="form-control" placeholder="Enter Keyword">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Property Type</label>
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon"><span class="fa fa-chevron-down"></span></div>
																<select name="" id="" class="form-control">
																	<option value="">Residential</option>
																	<option value="">Commercial</option>
																	<option value="">Land</option>
																	<option value="">Industrial</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Location</label>
														<div class="form-field">
															<div class="icon"><span class="ion-ios-pin"></span></div>
															<input type="text" class="form-control" placeholder="Search Location">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Price Limit</label>
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon"><span class="fa fa-chevron-down"></span></div>
																<select name="" id="" class="form-control">
																	<option value="">$100</option>
																	<option value="">$10,000</option>
																	<option value="">$50,000</option>
																	<option value="">$100,000</option>
																	<option value="">$200,000</option>
																	<option value="">$300,000</option>
																	<option value="">$400,000</option>
																	<option value="">$500,000</option>
																	<option value="">$600,000</option>
																	<option value="">$700,000</option>
																	<option value="">$800,000</option>
																	<option value="">$900,000</option>
																	<option value="">$1,000,000</option>
																	<option value="">$2,000,000</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group d-flex w-100 border-0">
														<div class="form-field w-100 align-items-center d-flex">
															<input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
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
														<label for="#">Enter Keyword</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-search"></span></div>
															<input type="text" class="form-control" placeholder="Enter Keyword">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Property Type</label>
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon"><span class="fa fa-chevron-down"></span></div>
																<select name="" id="" class="form-control">
																	<option value="">Residential</option>
																	<option value="">Commercial</option>
																	<option value="">Land</option>
																	<option value="">Industrial</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Location</label>
														<div class="form-field">
															<div class="icon"><span class="ion-ios-pin"></span></div>
															<input type="text" class="form-control" placeholder="Search Location">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">Price Limit</label>
														<div class="form-field">
															<div class="select-wrap">
																<div class="icon"><span class="fa fa-chevron-down"></span></div>
																<select name="" id="" class="form-control">
																	<option value="">$100</option>
																	<option value="">$10,000</option>
																	<option value="">$50,000</option>
																	<option value="">$100,000</option>
																	<option value="">$200,000</option>
																	<option value="">$300,000</option>
																	<option value="">$400,000</option>
																	<option value="">$500,000</option>
																	<option value="">$600,000</option>
																	<option value="">$700,000</option>
																	<option value="">$800,000</option>
																	<option value="">$900,000</option>
																	<option value="">$1,000,000</option>
																	<option value="">$2,000,000</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group d-flex w-100 border-0">
														<div class="form-field w-100 align-items-center d-flex">
															<input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
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
	<section class="ftco-section">
		<div class="container-xl">
			<div class="row justify-content-center">
				<div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
					<span class="subheading">CATÉGORIES ImmoMaroc</span>
					<h2 class="mb-4">Explorez nos catégories &amp; lieux</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="row g-1 mb-1">
						<div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
							<a href="#" class="services">
								<div class="icon"><span class="flaticon-architect"></span></div>
								<div class="text">
									<h2>Terrain</h2>
								</div>
							</a>
						</div>
						<div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
							<a href="#" class="services">
								<div class="icon"><span class="flaticon-house"></span></div>
								<div class="text">
									<h2>Résidentiel</h2>
								</div>
							</a>
						</div>
						<div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
							<a href="#" class="services">
								<div class="icon"><span class="flaticon-apartment"></span></div>
								<div class="text">
									<h2>Commercial</h2>
								</div>
							</a>
						</div>
						<div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
							<a href="#" class="services">
								<div class="icon"><span class="flaticon-factory"></span></div>
								<div class="text">
									<h2>Industriel</h2>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-4" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
							<ul class="places-list">
								<li>
									<a href="#">
										New York
										<span>200 Properties</span>
									</a>
								</li>
								<li>
									<a href="#">
										London
										<span>100 Properties</span>
									</a>
								</li>
								<li>
									<a href="#">
										Chicago
										<span>120 Properties</span>
									</a>
								</li>
								<li>
									<a href="#">
										Illinois
										<span>300 Properties</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
							<ul class="places-list">
								<li>
									<a href="#">
										California
										<span>100 Properties</span>
									</a>
								</li>
								<li>
									<a href="#">
										Tennessee
										<span>200 Properties</span>
									</a>
								</li>
								<li>
									<a href="#">
										Texas
										<span>200 Properties</span>
									</a>
								</li>
								<li>
									<a href="#">
										North Carolina
										<span>200 Properties</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-4" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
							<ul class="places-list">
								<li>
									<a href="#">
										Florida
										<span>422 Properties</span>
									</a>
								</li>
								<li>
									<a href="#">
										Charlotte
										<span>200 Properties</span>
									</a>
								</li>
								<li>
									<a href="#">
										Orlando
										<span>200 Properties</span>
									</a>
								</li>
								<li>
									<a href="#">
										Atlanta
										<span>200 Properties</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section bg-light">
		<div class="container-xl">
			<div class="row justify-content-center">
				<div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
					<span class="subheading">Nos biens immobiliers</span>
					<h2 class="mb-4">Biens immobiliers en vedette</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
					<div class="property-wrap">
						<a href="#" class="img img-property" style="background-image:url(<?php echo URLROOT; ?>/public/img/xwork-1.jpg.pagespeed.ic.kJbcYAoUnI.jpg)">
							<p class="price"><span class="orig-price">$300,000</span></p>
						</a>
						<div class="text">
							<div class="list-team d-flex align-items-center mb-4">
								<div class="d-flex align-items-center">
									<div class="img" style="background-image:url(<?php echo URLROOT; ?>/public/img/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)"></div>
									<h3 class="ml-2">John Dorf</h3>
								</div>
								<span class="text-right">2 weeks ago</span>
							</div>
							<h3><a href="#">Sunny Loft Property</a></h3>
							<span class="location"><i class="ion-ios-pin"></i> New York <span class="sale">Sale</span></span>
							<ul class="property_list mt-3 mb-0">
								<li><span class="flaticon-bed"></span>3</li>
								<li><span class="flaticon-bathtub"></span>2</li>
								<li><span class="flaticon-blueprint"></span>1,878 sqft</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<div class="property-wrap">
						<a href="#" class="img img-property" style="background-image:url(<?php echo URLROOT; ?>/public/img/work-2.jpg)">
							<p class="price"><span class="old-price">800,000</span><span class="orig-price">$3,050<small> / mo</small></span></p>
						</a>
						<div class="text">
							<div class="list-team d-flex align-items-center mb-4">
								<div class="d-flex align-items-center">
									<div class="img" style="background-image:url(<?php echo URLROOT; ?>/public/img/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)"></div>
									<h3 class="ml-2">John Dorf</h3>
								</div>
								<span class="text-right">2 weeks ago</span>
							</div>
							<h3><a href="#">Sunny Loft Property</a></h3>
							<span class="location"><i class="ion-ios-pin"></i> New York <span class="rent">Rent</span></span>
							<ul class="property_list mt-3 mb-0">
								<li><span class="flaticon-bed"></span>3</li>
								<li><span class="flaticon-bathtub"></span>2</li>
								<li><span class="flaticon-blueprint"></span>1,878 sqft</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
					<div class="property-wrap">
						<a href="#" class="img img-property" style="background-image:url(<?php echo URLROOT; ?>/public/img/xwork-3.jpg.pagespeed.ic.JZ2JnPe4EQ.jpg)">
							<p class="price"><span class="orig-price">$300</span></p>
						</a>
						<div class="text">
							<div class="list-team d-flex align-items-center mb-4">
								<div class="d-flex align-items-center">
									<div class="img" style="background-image:url(<?php echo URLROOT; ?>/public/img/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)"></div>
									<h3 class="ml-2">John Dorf</h3>
								</div>
								<span class="text-right">2 weeks ago</span>
							</div>
							<h3><a href="#">Sunny Loft Property</a></h3>
							<span class="location"><i class="ion-ios-pin"></i> New York <span class="sale">Sale</span></span>
							<ul class="property_list mt-3 mb-0">
								<li><span class="flaticon-bed"></span>3</li>
								<li><span class="flaticon-bathtub"></span>2</li>
								<li><span class="flaticon-blueprint"></span>1,878 sqft</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<div class="property-wrap">
						<a href="#" class="img img-property" style="background-image:url(<?php echo URLROOT; ?>/public/img/xwork-4.jpg.pagespeed.ic.jCEdj1zs4E.jpg)">
							<p class="price"><span class="orig-price">$300<small> / mo</small></span></p>
						</a>
						<div class="text">
							<div class="list-team d-flex align-items-center mb-4">
								<div class="d-flex align-items-center">
									<div class="img" style="background-image:url(<?php echo URLROOT; ?>/public/img/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)"></div>
									<h3 class="ml-2">John Dorf</h3>
								</div>
								<span class="text-right">2 weeks ago</span>
							</div>
							<h3><a href="#">Sunny Loft Property</a></h3>
							<span class="location"><i class="ion-ios-pin"></i> New York <span class="rent">Rent</span></span>
							<ul class="property_list mt-3 mb-0">
								<li><span class="flaticon-bed"></span>3</li>
								<li><span class="flaticon-bathtub"></span>2</li>
								<li><span class="flaticon-blueprint"></span>1,878 sqft</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-intro ftco-no-pt ftco-no-pb img" style="background-image:url(<?php echo URLROOT; ?>/public/img/xbg_4.jpg.pagespeed.ic.wYQ9Oeghhn.jpg)">
		<div class="overlay"></div>
		<div class="container-xl py-5">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="row">
						<div class="col-md-8 d-flex align-items-center">
							<div>
								<h1 class="mb-0">Trouver le meilleur endroit pour vivre</h1>
								<p>Les meilleurs endroits chez ImmoMaroc</p>
							</div>
						</div>
						<div class="col-md-4 d-flex align-items-center">
							<p class="mb-0"><a href="#" class="btn btn-black py-3 px-4">Contactez-nous</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section testimony-section bg-light">
		<div class="container-xl">
			<div class="row justify-content-center pb-4">
				<div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
					<span class="subheading">TÉMOIGNAGE</span>
					<h2 class="mb-3">Nos Clients Satisfaits</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
					<div class="carousel-testimony">
						<div class="item">
							<div class="testimony-wrap">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image:url(<?php echo URLROOT; ?>/public/img/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)"></div>
										<div class="pl-3 tx">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image:url(<?php echo URLROOT; ?>/public/img/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg)"></div>
										<div class="pl-3 tx">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image:url(<?php echo URLROOT; ?>/public/img/person_3.jpg)"></div>
										<div class="pl-3 tx">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image:url(<?php echo URLROOT; ?>/public/img/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)"></div>
										<div class="pl-3 tx">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image:url(<?php echo URLROOT; ?>/public/img/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg)"></div>
										<div class="pl-3 tx">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-agent ftco-no-pb">
		<div class="overlay"></div>
		<div class="container-xl">
			<div class="row justify-content-center pb-5">
				<div class="col-md-7 text-center heading-section heading-section-white" data-aos="fade-up" data-aos-duration="1000">
					<span class="subheading">Collecter plus d'informations &amp; gérer vos annonces avec un seul click</span>
					<h2 class="mb-3">Rejoignez- nous</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
					<div class="agent">
						<div class="img">
							<img src="<?php echo URLROOT; ?>/public/img/ximage_2.jpg.pagespeed.ic.mQGyn1P_Li.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="desc">
							<p class="h-info"><span class="position">Vous êtes une agence immobilière et voulez promouvoir vos annonces ?</span></p>
							<h3><a href="properties.html">AGENCE IMMOBILIÈRE</a></h3>
							<div class="col-md-12 d-flex align-items-center">
								<p class="mb-0"><a href="#" class="btn btn-black py-3 px-4">Inscrivez-vous</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<div class="agent">
						<div class="img">
							<img src="<?php echo URLROOT; ?>/public/img/LE7RC3l5EeY.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="desc">
							<p class="h-info"><span class="position">Vous êtes un particulier et voulez vendre ou louer votre bien ?</span></p>
							<h3><a href="properties.html">PARTICULIER</a></h3>
							<div class="col-md-12 d-flex align-items-center">
								<p class="mb-0"><a href="#" class="btn btn-black py-3 px-4">Déposez une annonce</a></p>
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