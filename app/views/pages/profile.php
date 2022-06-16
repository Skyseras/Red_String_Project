<?php
require APPROOT . '/views/includes/head.php';
?>

<body>
	<?php
	require APPROOT . '/views/includes/headerthin.php';
	?>
	<!-- Modal edit -->
	<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="editModaltitle">Modifier Ce Client</h5>
				</div>
				<div class="px-4 py-3" id="form">
					<form action="<?php echo URLROOT; ?>/<?php echo $_SESSION['role'] ?>controller/edit" method="POST" enctype="multipart/form-data" class="forms-sample">
						<div class="row">
							<div class="form-group col-md-6">
								<label for="Nom">Nom</label>
								<input name="lname" type="text" class="form-control" id="lname" value="<?php echo $data['clientinfo']['lname']?>">
							</div>
							<div class="form-group col-md-6">
								<label for="Prénom">Prénom</label>
								<input name="fname" type="text" class="form-control" id="fname" value="<?php echo $data['clientinfo']['fname']?>">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="Email">Email</label>
								<input name="email" type="email" class="form-control" id="email" value="<?php echo $data['clientinfo']['email']?>">
							</div>
							<div class="form-group col-md-6">
								<label for="Password">Nouveau Password</label>
								<input name="password" type="password" class="form-control" id="password" placeholder="Password">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="Ville">Ville</label>
								<input name="city" type="text" class="form-control" id="city" value="<?php echo $data['clientinfo']['city']?>">
							</div>
							<div class="form-group col-md-6">
								<label for="Numéro">Numéro de Téléphone</label>
								<input name="phone" type="text" class="form-control" id="phone" value="<?php echo $data['clientinfo']['phone']?>">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="Adresse">Adresse</label>
								<textarea name="address" class="form-control" id="address" rows="1" value="<?php echo $data['clientinfo']['address']?>"></textarea>
							</div>
							<div class="form-group col-md-6">
								<label class="form-label" for="photoDePprofil">Ajouter la photo de profil</label>
								<input name="pdp" type="file" class="form-control" id="pdp" />
							</div>
							<div class="form-group col-md-6" style="display: none;">
								<label for="pdpold">pdpold</label>
								<textarea name="pdpold" class="form-control" id="pdpold" rows="1" value="<?php echo $data['clientinfo']['pdp']?>"></textarea>
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
	<section class="ftco-section bg-light py-5">
		<div class="container-xl">
			<div class="row">
				<div class="col-md-3">
					<div>
						<h2 style="border-left: 4px solid #5ea51d;">&nbsp Mon profil</h2>
					</div>
					<div class="property-wrap my-0">
						<div class="text">
							<a class="img rounded-circle" style="height:210px; background-image:url(
								<?php echo URLROOT; ?>/public/img/<?php if (!empty($data['clientinfo']['pdp'])) {
																		echo $data['clientinfo']['pdp'];
																	} else {
																		echo 'pdpdefault.jpg';
																	} ?>)"></a>
							<div class="text-center">
								<h3 class="mt-3"><a><?php if ($data['clientinfo']) {
														echo $data['clientinfo']['fname'] . ' ' . $data['clientinfo']['lname'];
													} ?></a></h3>
								<a type="button" data-bs-toggle="modal" data-bs-target="#editModal">Modifier mon profil</a>
							</div>
							<p class="m-0"><span class="icon-magnifier"></span>&nbsp <?php if ($data['clientinfo']) {
																							echo $data['clientinfo']['phone'];
																						} ?></p>
							<p class="m-0"><span class="icon-magnifier"></span>&nbsp <?php if ($data['clientinfo']) {
																							echo $data['clientinfo']['address'];
																						} ?></p>
							<p class="m-0"><span class="icon-magnifier"></span>&nbsp <?php if ($data['clientinfo']) {
																							echo $data['clientinfo']['email'];
																						} ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="d-flex justify-content-between align-items-center">
						<h2 style="border-left: 4px solid #5ea51d;">&nbsp Biens immobiliers</h2>
						<form class="form-inline my-2 my-lg-0">
							<div>
								<p class="mb-0 mr-2"><a href="#" class="btn btn-primary icon-plus"></a></p>
							</div>
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success" style="background-color: #5ea51d;" type="submit"><span class="icon-magnifier text-light"></span></button>
						</form>
					</div>
					<div class="row">
						<div class="col-md-4 mb-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
							<div class="property-wrap my-0">
								<a href="#" class="img img-property" style="background-image:url(<?php echo URLROOT; ?>/public/img/xwork-1.jpg.pagespeed.ic.kJbcYAoUnI.jpg)">
									<p class="price"><span class="orig-price">Dhs 300,000</span></p>
								</a>
								<div class="text">
									<span class="location"><i class="ion-ios-pin"></i> Marrakech <span class="sale">Vente</span></span>
									<ul class="property_list mt-1 mb-0">
										<li><span class="flaticon-bed"></span>3</li>
										<li><span class="flaticon-bathtub"></span>2</li>
										<li><span class="flaticon-blueprint"></span>320 m²</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
							<div class="property-wrap my-0">
								<a href="#" class="img img-property" style="background-image:url(<?php echo URLROOT; ?>/public/img/xwork-1.jpg.pagespeed.ic.kJbcYAoUnI.jpg)">
									<p class="price"><span class="orig-price">Dhs 300,000</span></p>
									<p class="price" style="top:20px; bottom:0; right:0px; left:170px;"><span class="orig-price icon-trash rounded-circle" style=" padding:6px 7px;"></span></p>
									<p class="price" style="top:20px; bottom:0; left:210px; right:0px;"><span class="orig-price icon-pencil rounded-circle" style=" padding:6px 7px;"></span></p>
								</a>
								<div class="text">
									<span class="location"><i class="ion-ios-pin"></i> Marrakech <span class="sale">Vente</span></span>
									<ul class="property_list mt-1 mb-0">
										<li><span class="flaticon-bed"></span>3</li>
										<li><span class="flaticon-bathtub"></span>2</li>
										<li><span class="flaticon-blueprint"></span>320 m²</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
							<div class="property-wrap my-0">
								<a href="#" class="img img-property" style="background-image:url(<?php echo URLROOT; ?>/public/img/xwork-1.jpg.pagespeed.ic.kJbcYAoUnI.jpg)">
									<p class="price"><span class="orig-price">Dhs 300,000</span></p>
									<p class="price" style="top:20px; bottom:0; right:0px; left:170px;"><span class="orig-price icon-trash rounded-circle" style=" padding:6px 7px;"></span></p>
									<p class="price" style="top:20px; bottom:0; left:210px; right:0px;"><span class="orig-price icon-pencil rounded-circle" style=" padding:6px 7px;"></span></p>
								</a>
								<div class="text">
									<span class="location"><i class="ion-ios-pin"></i> Marrakech <span class="sale">Vente</span></span>
									<ul class="property_list mt-1 mb-0">
										<li><span class="flaticon-bed"></span>3</li>
										<li><span class="flaticon-bathtub"></span>2</li>
										<li><span class="flaticon-blueprint"></span>320 m²</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
							<div class="property-wrap my-0">
								<a href="#" class="img img-property" style="background-image:url(<?php echo URLROOT; ?>/public/img/xwork-1.jpg.pagespeed.ic.kJbcYAoUnI.jpg)">
									<p class="price"><span class="orig-price">Dhs 300,000</span></p>
									<p class="price" style="top:20px; bottom:0; right:0px; left:170px;"><span class="orig-price icon-trash rounded-circle" style=" padding:6px 7px;"></span></p>
									<p class="price" style="top:20px; bottom:0; left:210px; right:0px;"><span class="orig-price icon-pencil rounded-circle" style=" padding:6px 7px;"></span></p>
								</a>
								<div class="text">
									<div class="list-team mb-2">
										<span class="text-right">Il y a 2 semaines</span>
									</div>
									<h3><a href="#">Propriété Loft Ensoleillé</a></h3>
									<span class="location"><i class="ion-ios-pin"></i> Marrakech <span class="sale">Vente</span></span>
									<ul class="property_list mt-3 mb-0">
										<li><span class="flaticon-bed"></span>3</li>
										<li><span class="flaticon-bathtub"></span>2</li>
										<li><span class="flaticon-blueprint"></span>320 m²</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
	<?php
	require APPROOT . '/views/includes/footerthin.php';
	?>
</body>

</html>