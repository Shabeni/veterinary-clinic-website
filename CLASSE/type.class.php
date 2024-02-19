<?php
//classe CRUD associée à la table SQL users(id,nom,email,role,matricule,actif,departement_id)
Class Type{
//attributs
public $id,$name,$actif;
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
public function Create(){
	//Préparer puis exécuter la requête
	//users(id,nom,email,role,matricule,actif,departement_id)
 $sql="INSERT into types values(NULL,'$this->name','$this->actif')";
$resultat=$this->cnx->exec($sql);
if($resultat) return true;
	else return false;
	
}


public function RetreiveById(){
	$sql="select * from types where id=$this->id";
$resultats=$this->cnx->query($sql);
if($resultats) {// s'il y a des données à afficher
//la variable $resultats est de type resultSet
//Convertir $resultats en Tableaux
$resultats->setFetchMode(PDO::FETCH_OBJ);
$employe=$resultats->fetch();
return $employe;
}
	else return false;
}





public function RetreiveWith() {
    $sql = "SELECT id,intitule FROM types where actif=1";
    $resultats = $this->cnx->query($sql);

    if ($resultats) {
        $types = $resultats->fetchAll(PDO::FETCH_OBJ);
echo '<select class="form-select"  name="type_id">';
        
foreach ($types as $type) :
            echo '<option value="' . $type->id . '">' . $type->intitule . '</option>';
		endforeach;	
		echo '</select>';
        
    }
}










}


?>


