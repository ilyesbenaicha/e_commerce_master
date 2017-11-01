<?php
require_once('verifier_access.php'); 
require_once("../classes/Produit.php");
$cat = new Categorie($bdd);

$cat->supprimer((int)$_REQUEST['id']);
header("Location: produit_liste.php");
?>