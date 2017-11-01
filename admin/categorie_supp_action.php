<?php
require_once('verifier_access.php'); 
require_once("../classes/Categorie.php");
$cat = new Categorie($bdd);

$cat->supprimer((int)$_REQUEST['id']);
header("Location: categorie_liste.php");
?>