<?php
//classe CRUD associée à la table SQL users(id,nom,email,role,matricule,actif,departement_id)
Class User{
//attributs
public $id,$username,$email,$mdp,$active,$profil_id;
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

public function isUser(){
	$sql="SELECT * FROM users INNER JOIN profils ON users.profil_id = profils.id
	where email='$this->email' and mdp='$this->mdp' and users.active=1 and profils.active=1";
	$resultat=$this->cnx->query($sql);
	if($resultat->rowCount()>0) {// s'il y a des données à afficher
	$resultat->setFetchMode(PDO::FETCH_OBJ);
	$user=$resultat->fetch();//objet qui contient les infos de cet utilisateur
	return $user;
	}
	else {
	return false;	
	}
	}
public function Create(){
	//Préparer puis exécuter la requête
	//users(id,nom,email,role,matricule,actif,departement_id)
PRINT $sql="INSERT into users values( NULL,'$this->username','$this->email','$this->mdp','$this->active','$this->profil_id')";
$resultat=$this->cnx->exec($sql);
if($resultat) return true;
	else return false;
	
}
















public function RetreiveWithDataTables(){
	$sql = "SELECT users.id AS user_id,users.active AS user_active, users.*, profils.* FROM users INNER JOIN profils ON users.profil_id = profils.id";



	$resultats=$this->cnx->query($sql);
	if($resultats) {// s'il y a des données à afficher
	//la variable $resultats est de type resultSet
	//Convertir $resultats en Tableaux
	$resultats->setFetchMode(PDO::FETCH_OBJ);
	$users=$resultats->fetchall();
	echo'<p><a class="btn btn-info btn-circle btn-sm" ;" href="create_user.php" title="Add"><i class="fas fa-plus"></i></a></p>';
	echo '<table id="myTable" class="table table-bordered table-striped">';
	echo '<thead>';
		echo '<tr>';
		echo '<th>Idf</th><th>Username</th><th>Email</th><th>Active</th><th>Profil</th><th>Action</th>';
		echo '</tr>';
	echo '</thead>';
	print '<tbody>';
	foreach($users as $user):
	echo '<tr>';
		print '<td>'.$user->user_id.'</td>';
		print '<td>'.$user->username.'</td>';
		print '<td>'.$user->email.'</td>';
		print '<td>'.$user->user_active.'</td>';
		print '<td>'.$user->role.'</td>';
		if ($user->user_active == 1) {
			print '<td><a class="btn btn-danger" onClick="return confirm(\'Desactiver cet user?\');" href="userbuttons.php?id='.$user->user_id.'&user_active=1">Desactiver</a></td>';
		} else {
			print '<td><a class="btn btn-success" onClick="return confirm(\'Activer cet user?\');" href="userbuttons.php?id='.$user->user_id.'&user_active=0">Activer</a></td>';
		}

		
		//print '<td><a class="btn btn-info btn-circle btn-sm" ;" href="traitDemande.php?id='.$autorisation->id.'"><i class="fas fa-info-circle"></i></a></td>';

	
	echo '</tr>';
	endforeach;	
	print '</tbody>';
	echo '<tfoot>';
		echo '<tr>';
		echo '<th>Mail</th><th>number</th><th>location</th><th>fax</th><th>Profil</th><th>Action</th>';
		echo '</tr>';
	echo '</tfoot>';
	echo '</table>';
	}
		else echo 'Table vide !!!' ;
	}


	public function desactiver(){
		$sql = "UPDATE users SET active = 0 WHERE id = $this->id";
		$resultat = $this->cnx->exec($sql);
		if($resultat) {
			return true;
		} else {
			return false;
		}
	}
	public function activer(){
		$sql = "UPDATE users SET active = 1 WHERE id = $this->id";
		$resultat = $this->cnx->exec($sql);
		if($resultat) {
			return true;
		} else {
			return false;
		}
	}

/*
public function Retreive(){
	$sql="select * from users";
$resultats=$this->cnx->query($sql);
if($resultats) {// s'il y a des données à afficher
//la variable $resultats est de type resultSet
//Convertir $resultats en Tableaux
$resultats->setFetchMode(PDO::FETCH_OBJ);
$users=$resultats->fetchall();
echo '<table>';
echo '<tr>';
echo '<th>ID</th><th>Nom</th><th>Email</th><th>Adresse</th>';
echo '</tr>';
foreach($users as $personne):
echo '<tr>';
	print '<td>'.$personne->id.'</td>';
	print '<td>'.$personne->nom.'</td>';
	print '<td>'.$personne->email.'</td>';
	print '<td>'.$personne->adresse.'</td>';
	print '<td><a onClick="return confirm(\'Vous êtes sur ?\');" href="deletePersonne.php?id='.$personne->id.'">Supprimer</a></td>';
	print '<td><a href="updatePersonne.php?id='.$personne->id.'">Modifier</a></td>';
echo '</tr>';
endforeach;	
echo '</table>';
}
	else echo 'Table vide !!!' ;
}
public function findByID(){
	$sql="select * from users where id=$this->id";
$resultats=$this->cnx->query($sql);
if($resultats) {// s'il y a des données à afficher
//la variable $resultats est de type resultSet
//Convertir $resultats en Tableaux
$resultats->setFetchMode(PDO::FETCH_OBJ);
$personne=$resultats->fetch();
return $personne;
}
	else return false;
}
public function Update(){
	$sql="update users set nom='$this->nom', email='$this->email',
	adresse='$this->adresse' where id=$this->id";
$resultat=$this->cnx->exec($sql);
if($resultat) return true;
	else return false;
}
public function Delete(){
	$sql="delete from users where id=$this->id";
$resultat=$this->cnx->exec($sql);
if($resultat) return true;
	else return false;
}*/
}


?>