<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Affable Beans</title>
</head><!--/head-->

<body>
	<?php require_once("header.php") ?>


	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Présentation</h2>
						<div class="panel-group category-products" id="accordian">
							Bienvenue au site Affable Beans. Nous vous proposons des produits frais et bios sans aromes ni conservateurs. A droite vous avez la liste de nos catégories de produits. Cliquer sur une catégorie pour avoir la liste des produits de cette catégorie. Ensuite ajouter le produit de votre choix au panier et validez votre commande.
						</div>
					

						
					
					</div>
				</div>
				



						 <?php 
						 require_once("classes/Categorie.php");
          $cat = new Categorie();	
          $liste = $cat->liste();
          foreach($liste as $data )
          {

           ?>
           <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/<?php echo $data->_image; ?>""  alt="" />
											<a href="produits.php" class="btn btn-default add-to-cart"><?php echo $data->_libelle; ?></a>
										</div>
								</div>
							</div>
						</div>
         <?php  } ?>
						

					
					</div><!--features_items-->
					
				</div>
			</div>
		</div>
	</section>
	
<?php require_once("footer.php") ?>
</body>
</html>