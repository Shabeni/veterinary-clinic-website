<?php
//classe CRUD associée à la table SQL users(id,nom,email,role,matricule,actif,departement_id)
Class Service{
//attributs
public $id,$type_service,$actif;
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
 $sql="INSERT into services values(NULL,'$this->type_service','$this->actif')";
$resultat=$this->cnx->exec($sql);
if($resultat) return true;
	else return false;
	
}


public function RetreiveBy(){
	$sql = "SELECT *
	FROM services  WHERE services.id = $this->id";
	
$resultats=$this->cnx->query($sql);
if($resultats) {// s'il y a des données à afficher
//la variable $resultats est de type resultSet
//Convertir $resultats en Tableaux
$resultats->setFetchMode(PDO::FETCH_OBJ);
$service=$resultats->fetch();
return $service;
}
	else return false;
}



public function RetreiveById(){
	$sql="select * from services where id=$this->id";
$resultats=$this->cnx->query($sql);
if($resultats) {// s'il y a des données à afficher
//la variable $resultats est de type resultSet
//Convertir $resultats en Tableaux
$resultats->setFetchMode(PDO::FETCH_OBJ);
$service=$resultats->fetch();
return $service;
}
	else return false;
}

public function RetreiveWithDataTables(){
	$sql="select * from services";
$resultats=$this->cnx->query($sql);
if($resultats) {// s'il y a des données à afficher
//la variable $resultats est de type resultSet
//Convertir $resultats en Tableaux
$resultats->setFetchMode(PDO::FETCH_OBJ);
$services=$resultats->fetchall();
echo'<p><a class="btn btn-info btn-circle btn-sm" ;" href="create_service.php" title="Add"><i class="fas fa-plus"></i></a></p>';
echo '<table  class="table table-bordered" id="myTable" width="100%" cellspacing="0">';

echo '<thead>';

	echo '<tr>';
	echo '<th>ID</th><th>services</th><th>Active</th><th>Actions</th>';
	echo '</tr>';
echo '</thead>';
print '<tbody>';
foreach($services as $service):
echo '<tr>';
	print '<td>'.$service->id.'</td>';
	print '<td>'.$service->type_service.'</td>';
	print '<td>'.$service->actif.'</td>';
	if ($service->actif == 1) {
		print '<td><a class="btn btn-danger" onClick="return confirm(\'Desactiver ce Service?\');" href="servicebuttons.php?id='.$service->id.'&active=1">Desactiver</a></td>';
	} else {
		print '<td><a class="btn btn-success" onClick="return confirm(\'Activer ce Service?\');" href="servicebuttons.php?id='.$service->id.'&active=0">Activer</a></td>';
	}

echo '</tr>';
endforeach;	
print '</tbody>';
echo '<tfoot>';
	echo '<tr>';
	echo '<th>ID</th><th>services</th><th>Active</th><th>Actions</th>';
	echo '</tr>';
echo '</tfoot>';
echo '</table>';
}
	else echo 'Table vide !!!' ;
}

public function desactiver(){
    $sql = "UPDATE services SET actif = 0 WHERE id = $this->id";
    $resultat = $this->cnx->exec($sql);
    if($resultat) {
        return true;
    } else {
        return false;
    }
}
public function activer(){
    $sql = "UPDATE services SET actif = 1 WHERE id = $this->id";
    $resultat = $this->cnx->exec($sql);
    if($resultat) {
        return true;
    } else {
        return false;
    }
}

public function RetreiveWith() {
    $sql = "SELECT * FROM services where actif=1";
    $resultats = $this->cnx->query($sql);

    if ($resultats) {
        $services = $resultats->fetchAll(PDO::FETCH_OBJ);
echo '<select class="custom-select mr-sm-1"  name="type_service">';
        
foreach ($services as $service) :
            echo '<option value="' . $service->id . '">' . $service->type_service . '</option>';
		endforeach;	
		echo '</select>';
        
    }
}










}


?>