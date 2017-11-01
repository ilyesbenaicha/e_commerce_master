<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Affable Beans</title>
</head><!--/head-->

<body>
	<?php require_once("header.php") ?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Commander</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Valider ma commande / Paiement</h2>
			</div>


			<div class="review-payment">
				<h2>Modes de paiement</h2>
				<p> &nbsp; </p>
			</div>

			<form id="valider_paiement" name="valider_paiement" methode="get">
				<div class="payment-options">
					<span>
						<label><input type="radio" name="mode_paiement" value="1"> Virement bancaire</label>
					</span>
					<span>
						<label><input type="radio" name="mode_paiement" value="2"> Paiement par chèque</label>
					</span>
					<span>
						<label><input type="radio" name="mode_paiement" value="3"> Paypal</label>
					</span>
					<br/>
					<button type="submit" class="btn btn-default">Valider ma commande</button>
				</div>
			</form>

		</div>
	</section> <!--/#cart_items-->
	
	<?php require_once("footer.php") ?>
</body>
</html>