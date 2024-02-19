<?php

Class Appointment{
//attributs
public $id, $date, $time, $price, $status, $service_id, $client_id, $pet_id, $name, $petname, $phone, $email, $message, $type_id, $image,$date_of_birth,$verify_token;
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
    $sql = "SELECT * FROM appointments INNER JOIN clients ON appointments.client_id = clients.id WHERE email = :email AND verify_token = :verify_token";
    $stmt = $this->cnx->prepare($sql);
    $stmt->execute([':email' => $this->email, ':verify_token' => $this->verify_token]);
    if($stmt->rowCount() > 0) {
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $user = $stmt->fetch();
        return $user;
    } else {
        return false;
    }
}



public function CreateAppointment() {
    try {
        // Begin a transaction
        $this->cnx->beginTransaction();

        // Insert into client table
        $sql = "INSERT INTO clients VALUES (NULL,'$this->name', '$this->phone','$this->email')";
        $this->cnx->exec($sql);

        // Get the last inserted id
        $client_id = $this->cnx->lastInsertId();

		  // Insert into pets table
		  $sql = "INSERT INTO pets VALUES (NULL,'$this->petname', '$this->date_of_birth','$this->typeid', $client_id)";
		  $this->cnx->exec($sql);
  
		  // Get the last inserted id
		  $pet_id = $this->cnx->lastInsertId();

        // Insert into appointment table
        $sql = "INSERT INTO appointments VALUES ( NULL,'$this->date','$this->time','$this->price','$this->status','$this->message','$this->service_id',$client_id, $pet_id,'$this->image','$this->verify_token')";
        $resultat = $this->cnx->exec($sql);

        // Commit the transaction
        $this->cnx->commit();

        if($resultat) return true;
        else return false;
    } catch (Exception $e) {
        // An error occurred; rollback the transaction
        $this->cnx->rollback();

        // Re-throw the exception
        throw $e;
    }
}




public function isDateAvailable($date) {
    // Query to check the number of appointments on the given date
    $query = "SELECT COUNT(*) as count FROM appointments WHERE date = :date";

    // Prepare the query
    $stmt = $this->cnx->prepare($query);

    // Bind the parameters
    $stmt->bindParam(':date', $date);

    // Execute the query
    $stmt->execute();

    // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // If there are more than 27 appointments on the given date, return false
    if ($result['count'] >= 27) {
        return false;
    } else {
        // If there are less than 2 appointments, return true
        return true;
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