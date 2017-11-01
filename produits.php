<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Affable Beans - Liste des produits</title>
</head><!--/head-->

<body>
	<?php require_once("header.php") ?>
	
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>%NOM_CATEGORIE%</h2>
						<div class="panel-group category-products" id="accordian">
							%Ceci est la description de la catégories sélectionnée.%
						</div>
						

						
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Les produits de la catégorie %NOM_CATEGORIE%</h2>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/bakery.jpg" alt="" />
										<h2>999 TND</h2>
										<p>%NOM PRODUIT%</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
											Ajouter au panier
										</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<p>%DESCRIPTION PRODUIT ... DESCRIPTION PRODUIT ... DESCRIPTION PRODUIT ... DESCRIPTION PRODUIT ... DESCRIPTION PRODUIT ... DESCRIPTION PRODUIT ... %</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
												Ajouter au panier
											</a>
										</div>

									</div>										
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/bakery.jpg" alt="" />
										<h2>999 TND</h2>
										<p>%NOM PRODUIT%</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
											Ajouter au panier
										</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<p>%DESCRIPTION PRODUIT ... DESCRIPTION PRODUIT ... DESCRIPTION PRODUIT ... DESCRIPTION PRODUIT ... DESCRIPTION PRODUIT ... DESCRIPTION PRODUIT ... %</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
												Ajouter au panier
											</a>
										</div>

									</div>										
								</div>
							</div>
						</div>

						
					</div><!--features_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<?php require_once("footer.php") ?>
</body>
</html>