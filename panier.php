<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Affable Beans</title>
</head><!--/head-->

<body>
	<?php require_once("header.php") ?>
	
	
	<form id="form" name="form" methode="get">	
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Panier</li>
				</ol>
			</div>

		

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Produit</td>
							<td class="description">Détails</td>
							<td class="price">Prix</td>
							<td class="quantity">Quantité</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" onclick="panier_plus('#qte_1')"> + </a>
									<input id="qte_1" class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" onclick="panier_moins('#qte_1')"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

					</tbody>
				</table>
			</div>

			
		</div>
	</section> <!--/#cart_items-->

<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Sous total <span>$59</span></li>
							<li>TVA (10%) <span>$2</span></li>
							<li>Frais de transport <span>Gratuit</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="#" onclick="form.submit()">Mettre à jour le panier</a>
							<a class="btn btn-default check_out" href="commander.php">Valider ma commande</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

		</form>	
<?php require_once("footer.php") ?>
<script>
	function panier_plus(id_champ_qte)
	{
		$(id_champ_qte).val(parseInt($(id_champ_qte).val()) + 1);
	}
	function panier_moins(id_champ_qte)
	{
		$(id_champ_qte).val(parseInt($(id_champ_qte).val()) - 1);
	}

</script>
</body>
</html>