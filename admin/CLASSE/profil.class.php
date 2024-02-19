<?php
Class Profil{
//attributs
public $id,$role,$active;
private $cnx,$server,$user,$pwd,$db;

public function __construct($serveur,$utilisateur,$mdp,$base){
	
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
 $sql="INSERT into profils values(NULL,'$this->role','$this->active')";
$resultat=$this->cnx->exec($sql);
if($resultat) return true;
	else return false;
	
}
public function RetreiveWithDataTables(){
	$sql="select * from profils";
$resultats=$this->cnx->query($sql);
if($resultats) {
$resultats->setFetchMode(PDO::FETCH_OBJ);
$profils=$resultats->fetchall();
echo'<p><a class="btn btn-info btn-circle btn-sm" ;" href="create_profil.php" title="Add"><i class="fas fa-plus"></i></a></p>';
echo '<table  class="table table-bordered" id="myTable" width="100%" cellspacing="0">';
echo '<thead>';
	echo '<tr>';
	echo '<th>ID</th><th>Intitule</th><th>Active</th><th>Actions</th>';
	echo '</tr>';
echo '</thead>';
print '<tbody>';
foreach($profils as $profil):
echo '<tr>';
	print '<td>'.$profil->id.'</td>';
	print '<td>'.$profil->role.'</td>';
	print '<td>'.$profil->active.'</td>';
	if ($profil->active == 1) {
		print '<td><a class="btn btn-danger" onClick="return confirm(\'Desactiver ce Profil?\');" href="profilbuttons.php?id='.$profil->id.'&active=1">Desactiver</a></td>';
	} else {
		print '<td><a class="btn btn-success" onClick="return confirm(\'Activer ce Profil?\');" href="profilbuttons.php?id='.$profil->id.'&active=0">Activer</a></td>';
	}

echo '</tr>';
endforeach;	
print '</tbody>';
echo '<tfoot>';
	echo '<tr>';
	echo '<th>ID</th><th>Intitule</th><th>Active</th><th>Actions</th>';
	echo '</tr>';
echo '</tfoot>';
echo '</table>';
}
	else echo 'Table vide !!!' ;
}

public function desactiver(){
    $sql = "UPDATE profils SET active = 0 WHERE id = $this->id";
    $resultat = $this->cnx->exec($sql);
    if($resultat) {
        return true;
    } else {
        return false;
    }
}
public function activer(){
    $sql = "UPDATE profils SET active = 1 WHERE id = $this->id";
    $resultat = $this->cnx->exec($sql);
    if($resultat) {
        return true;
    } else {
        return false;
    }
}

public function RetreiveWith() {
    $sql = "SELECT id,role FROM profils";
    $resultats = $this->cnx->query($sql);

    if ($resultats) {
        $profils = $resultats->fetchAll(PDO::FETCH_OBJ);
echo '<select class="form-control"  name="profil_id">';
        
foreach ($profils as $profil) :
            echo '<option value="' . $profil->id . '">' . $profil->role . '</option>';
		endforeach;	
		echo '</select>';
        
    }
}
}
?>