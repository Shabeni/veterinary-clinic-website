<?php
//classe CRUD associée à la table SQL users(id,nom,email,role,matricule,actif,departement_id)
Class User{
//attributs
public $id,$name,$phone,$email;
private $cnx,$server,$user,$pwd,$db;

//Public Methods

public function __construct($serveur,$utilisateur,$mdp,$base){
	//connexion à la base de données
	$this->server=$serveur;
	$this->user=$utilisateur;
	$this->pwd=$mdp;
	$this->db=$base;
	try
	{
	$this->cnx = new PDO('mysql:host='.$this->server.'; dbname='.$this->db, $this->user, $this->pwd);
	}
	catch(Exception $e)
	{
	echo'Erreur:'.$e->getMessage().'<br/>';
	echo'N°:'.$e->getCode();
	}
}




public function RetreiveById(){
	$sql="select * from clients where id=$this->id";
$resultats=$this->cnx->query($sql);
if($resultats) {// s'il y a des données à afficher
//la variable $resultats est de type resultSet
//Convertir $resultats en Tableaux
$resultats->setFetchMode(PDO::FETCH_OBJ);
$client=$resultats->fetch();
return $client;
}
	else return false;
}





	











}



?>