<?php
require_once("../classes/Categorie.php");
require_once("../classes/Util.php");

@$libelle = $_POST['libelle'];
@$description = $_POST['description'];
@$id = $_POST['id'];

if( !empty($libelle) && !empty($description) ) 
{
	$cat = new Categorie();
	$util = new Util();
	$cat->_libelle = $libelle;
	$cat->_description = $description;
	$cat->_image = $util->upload('image', "../upload");
	
	if( empty($id) ) 	// Ajout
		$id = $cat->ajouter();
	else				// Modification
	{
		$cat->_id = $id;
		$cat->modifier();
	}

	header("Location: categorie_liste.php");
} 
else 
	exit('Tous les champs sont obligatoires !!');
?>