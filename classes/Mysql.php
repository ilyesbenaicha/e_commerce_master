<?php
class Mysql
{
	private $_serveur = "127.0.0.1";
	private $_login = "root";
	private $_mdp	= "";
	private $_bdd	= "affable_bean_g2";
	private $_cnx;

	public function get_cnx()
	{
		return $this->_cnx;
	}
	
	public function __construct()
	{

		$this->_cnx = mysqli_connect($this->_serveur, $this->_login, $this->_mdp, $this->_bdd);
		if ( ! $this->_cnx ) {
		    die('Erreur de connexion ' . mysqli_connect_error());
		}
	}
	
	public function requete($q)
	{
		$res = mysqli_query($this->_cnx, $q);
		if (!$res)
			exit("<pre>Erreur dans la requete [$q] : " . mysqli_error($this->_cnx) . "</pre>");
		return $res;
	}
}

?>
