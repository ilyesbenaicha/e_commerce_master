<?php
require_once("Mysql.php");
class Produit extends Mysql
{
	// Les attributs privés
	private $_id;
	private $_libelle;
	private $_description;
	private $_image;
	private $_prix;

	// Méthode magique pour les setters & getters
	public function __get($attribut) {
		if (property_exists($this, $attribut)) 
                return ( $this->$attribut ); 
        else
			exit("Erreur dans la calsse " . __CLASS__ . " : l'attribut $property n'existe pas!");     
    }

    public function __set($attribut, $value) {
        if (property_exists($this, $attribut)) {
            $this->$attribut = (mysqli_real_escape_string($this->get_cnx(), $value)) ;
        }
        else
        	exit("Erreur dans la calsse " . __CLASS__ . " : l'attribut $property n'existe pas!");
    }

	public function details($id)
	{
		$q = "SELECT * FROM produit WHERE id ='$id'";
		$res = $this->requete($q);
		$row = mysqli_fetch_array( $res); 
		$cat = new Produit();
		
		$cat->_id 			= $row['id'];
		$cat->_libelle 		= $row['libelle'];
		$cat->_image 		= $row['image'];
		$cat->_description	= $row['description'];
		$cat->_prix	= $row['prix'];
	
		return $cat;
	}


	public function liste()
	{
		$q = "SELECT * FROM produit ORDER BY libelle";
		$list_cat = array(); // Tableau VIDE
		$res = $this->requete($q);
		while($row = mysqli_fetch_array( $res)){
			$cat = new Categorie();

			$cat->_id 			= $row['id'];
			$cat->_libelle 		= $row['libelle'];
			$cat->_image 		= $row['image'];
			$cat->_description	= $row['description'];
			$cat->_prix	= $row['prix'];
		
			$list_cat[]=$cat;
		}
		
		return $list_cat;
	}
	
	public function ajouter()
	{
	    $q = "INSERT INTO produit(id, libelle, image, description,prix) VALUES 
	  		(  null				, '$this->_libelle'		,
			  '$this->_image'	, '$this->_description','$this->_prix'	
			)";
		$res = $this->requete($q);
		return mysqli_insert_id($this->get_cnx());
	}
	
	public function modifier(){
		$q = "UPDATE produit SET
			  libelle 	= '$this->_libelle',
			  image = IF('$this->_image' = '', image, '$this->_image') ,
			  description = '$this->_description',
			  prix = '$this->_prix'
			  WHERE id = '$this->_id' ";
	  
		$res = $this->requete($q);
		return $res;
	}

	public function supprimer($id){
		$q = "DELETE FROM produit WHERE id = '$id'";
		$res = $this->requete($q);
		return $res;
	}	 
}
?>