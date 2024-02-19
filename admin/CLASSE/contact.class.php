<?php
//classe CRUD associée à la table SQL users(id,nom,email,role,matricule,actif,departement_id)
Class Contact{
//attributs
public $id,$mail,$number,$location,$work_time;
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

/*
public function RetreiveAnimated(){
	$sql="select * from personnes";
$resultats=$this->cnx->query($sql);
if($resultats) {// s'il y a des données à afficher
//la variable $resultats est de type resultSet
//Convertir $resultats en Tableaux
$resultats->setFetchMode(PDO::FETCH_OBJ);
$personnes=$resultats->fetchall();
echo '<ul id="paragraphe">';
foreach($personnes as $personne):
echo '<li>';
	print '<h2>'.$personne->nom.'</h2>';
	print '<span>+</span>';
	print '<p>ID : '.$personne->id.'</p>';
	print '<p>Email : '.$personne->email.'</p>';
	print '<p>Adresse : '.$personne->adresse.'</p>';
	print '<p><a onClick="return confirm(\'Vous êtes sur ?\');" href="deletePersonne.php?id='.$personne->id.'">Supprimer</a></p>';
	print '<p><a href="updatePersonne.php?id='.$personne->id.'">Modifier</a></p>';
echo '</li>';
endforeach;	
echo '</ul>';
}
	else echo 'Table vide !!!' ;
}
*/


public function RetreiveById(){
	$sql = "SELECT *
	FROM contact where
	id = $this->id";
	
$resultats=$this->cnx->query($sql);
if($resultats) {// s'il y a des données à afficher
//la variable $resultats est de type resultSet
//Convertir $resultats en Tableaux
$resultats->setFetchMode(PDO::FETCH_OBJ);
$contact=$resultats->fetch();
return $contact;
}
	else return false;
}

public function getcontactinfo(){
	$sql = "SELECT *
	FROM contact
	";
	
$resultats=$this->cnx->query($sql);
if($resultats) {// s'il y a des données à afficher
//la variable $resultats est de type resultSet
//Convertir $resultats en Tableaux
$resultats->setFetchMode(PDO::FETCH_OBJ);
$contact=$resultats->fetch();
return $contact;
}
	else return false;
}

public function RetreiveWithDataTables(){
	$sql = "SELECT * from contact";

	$resultats=$this->cnx->query($sql);
	if($resultats) {// s'il y a des données à afficher
	//la variable $resultats est de type resultSet
	//Convertir $resultats en Tableaux
	$resultats->setFetchMode(PDO::FETCH_OBJ);
	$contacts=$resultats->fetchall();
	echo '<table id="myTable" class="table table-bordered table-striped">';
	echo '<thead>';
		echo '<tr>';
		echo '<th>Mail</th><th>number</th><th>location</th><th>fax</th><th>Actions</th>';
		echo '</tr>';
	echo '</thead>';
	print '<tbody>';
	foreach($contacts as $contact):
	echo '<tr>';
		print '<td>'.$contact->mail.'</td>';
		print '<td>'.$contact->number.'</td>';
		print '<td>'.$contact->location.'</td>';
		print '<td>'.$contact->work_time.'</td>';
		print '<td><a class="btn btn-info btn-circle btn-sm " href="contact_details.php?id='.$contact->id.'"><i class="fas fa-eye"></i></a></td>';

		
		//print '<td><a class="btn btn-info btn-circle btn-sm" ;" href="traitDemande.php?id='.$autorisation->id.'"><i class="fas fa-info-circle"></i></a></td>';

	
	echo '</tr>';
	endforeach;	
	print '</tbody>';
	echo '<tfoot>';
		echo '<tr>';
		echo '<th>Mail</th><th>number</th><th>location</th><th>fax</th><th>Actions</th>';
		echo '</tr>';
	echo '</tfoot>';
	echo '</table>';
	}
		else echo 'Table vide !!!' ;
	}


	public function contactinfo(){
		$sql = "SELECT * from contact";
	
		$resultats=$this->cnx->query($sql);
		if($resultats) {// s'il y a des données à afficher
		//la variable $resultats est de type resultSet
		//Convertir $resultats en Tableaux
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		$contact=$resultats->fetch();
		
echo '<div class="row mt-3  ">
    <div class="col-lg-6 ">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-align-start">
                    <img class="me-4 align-self-center flex-shrink-0" src="assets/images/icons/email.png" alt="" height="50" />
                    <div class="flex-grow-1">
                        <h5 class="m-0 fw-medium">Email</h5>
                        <a href="#" class="text-muted fw-normal h5 my-1">'.$contact->mail.'</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-align-start">
                    <img class="me-4 align-self-center flex-shrink-0" src="assets/images/icons/phone.png" alt="" height="50" />
                    <div class="flex-grow-1">
                        <h5 class="m-0 fw-medium">Phone</h5>
                        <a href="#" class="text-muted fw-normal h5 my-1">'.$contact->number.'</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-align-start">
                    <img class="me-4 align-self-center flex-shrink-0" src="assets/images/icons/location.png" alt="" height="50" />
                    <div class="flex-grow-1">
                        <h5 class="m-0 fw-medium">Location</h5>
                        <a href="#" class="text-muted fw-normal h5 my-1">'.$contact->location.'</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-align-start">
                    <img class="me-4 align-self-center flex-shrink-0" src="assets/images/icons/clock.png" alt="" height="50" />
                    <div class="flex-grow-1">
                        <h5 class="m-0 fw-medium">Work Time</h5>
                        <a href="#" class="text-muted fw-normal h5 my-1"> '.$contact->work_time.'</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';


		}
			else echo 'Table vide !!!' ;
		}
	















	
	
	









public function modification(){
    $sql = "UPDATE contact SET  mail= '$this->mail' , number='$this->number', location='$this->location', work_time='$this->work_time' WHERE id = $this->id";
    $resultat = $this->cnx->exec($sql);
    if($resultat) {
        return true;
    } else {
        return false;
    }
}










}



?>