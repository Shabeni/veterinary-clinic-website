<?php
//classe CRUD associée à la table SQL users(id,nom,email,role,matricule,actif,departement_id)
Class Testimonial{
//attributs
public $id,$client_name,$testimonial;
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
 $sql="INSERT into testimonials values(NULL,'$this->client_name','$this->testimonial')";
$resultat=$this->cnx->exec($sql);
if($resultat) return true;
	else return false;
	
}




public function RetreiveWithDataTables(){
	$sql="select * from testimonials";
$resultats=$this->cnx->query($sql);
if($resultats) {// s'il y a des données à afficher
//la variable $resultats est de type resultSet
//Convertir $resultats en Tableaux
$resultats->setFetchMode(PDO::FETCH_OBJ);
$testimonials=$resultats->fetchall();
echo'<p><a class="btn btn-info btn-circle btn-sm" ;" href="create_testimonial.php" title="Add"><i class="fas fa-plus"></i></a></p>';
echo '<table  class="table table-bordered" id="myTable" width="100%" cellspacing="0">';

echo '<thead>';

	echo '<tr>';
	echo '<th>ID</th><th>Client</th><th>testimonials</th>';
	echo '</tr>';
echo '</thead>';
print '<tbody>';
foreach($testimonials as $testimonial):
echo '<tr>';
	print '<td>'.$testimonial->id.'</td>';
	print '<td>'.$testimonial->client_name.'</td>';
	print '<td>'.$testimonial->testimonial.'</td>';


echo '</tr>';
endforeach;	
print '</tbody>';
echo '<tfoot>';
	echo '<tr>';
	echo '<th>ID</th><th>Client</th><th>Testimonial</th>';
	echo '</tr>';
echo '</tfoot>';
echo '</table>';
}
	else echo 'Table vide !!!' ;
}

public function desactiver(){
    $sql = "UPDATE types SET actif = 0 WHERE id = $this->id";
    $resultat = $this->cnx->exec($sql);
    if($resultat) {
        return true;
    } else {
        return false;
    }
}
public function activer(){
    $sql = "UPDATE types SET actif = 1 WHERE id = $this->id";
    $resultat = $this->cnx->exec($sql);
    if($resultat) {
        return true;
    } else {
        return false;
    }
}
public function Retreivetestimonial(){
    // Assuming $obj is an instance of your class
    $sql="select * from testimonials";
    $resultats=$this->cnx->query($sql);
    if($resultats) { // s'il y a des données à afficher
        //la variable $resultats est de type resultSet
        //Convertir $resultats en Tableaux
        $resultats->setFetchMode(PDO::FETCH_OBJ);
        $testimonials=$resultats->fetchall();

        if($testimonials) {
            $count = 0;
            echo "<div class=\"swiper-wrapper\">";
            foreach($testimonials as $testimonial) {
                if($count == 4) break; // Stop the loop after 4 testimonials

                echo "<div class=\"swiper-slide \">
                    <div class=\"card mb-0 col-12\">
                        <div class=\"card-body p-md-5\">
                            <p class=\"mb-4 mt-0\">
                            ".$testimonial->testimonial."
                            </p>
                            <div class=\"d-flex text-align-start\">
                                <img class=\"me-2 rounded-circle\" src=\"./assets/images/avatars/img-8.jpg\" alt=\"\" height=\"36\" />
                                <div class=\"flex-grow-1\">
                                    <h6 class=\"m-0\">".$testimonial->client_name."</h6>
                                    
                                </div>
                                <div class=\"align-self-center\">
                                    <i data-feather=\"star\" class=\"icon icon-xxs icon-fill-warning text-warning\"></i>
                                    <i data-feather=\"star\" class=\"icon icon-xxs icon-fill-warning text-warning\"></i>
                                    <i data-feather=\"star\" class=\"icon icon-xxs icon-fill-warning text-warning\"></i>
                                    <i data-feather=\"star\" class=\"icon icon-xxs icon-fill-warning text-warning\"></i>
                                    <i data-feather=\"star\" class=\"icon icon-xxs icon-fill-warning text-warning\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";

                $count++;
            }
            echo "</div>";
        } 
    }
}











}


?>