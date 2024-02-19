<?php
//classe CRUD associée à la table SQL users(id,nom,email,role,matricule,actif,departement_id)
Class Appointment{
//attributs
public $id,$date,$time,$price,$status,$service_id,$client_id,$pet_id,$message;
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
	$sql = "SELECT *
	FROM appointments where
	id = $this->id";
	
$resultats=$this->cnx->query($sql);
if($resultats) {// s'il y a des données à afficher
//la variable $resultats est de type resultSet
//Convertir $resultats en Tableaux
$resultats->setFetchMode(PDO::FETCH_OBJ);
$appointment=$resultats->fetch();
return $appointment;
}
	else return false;
}


public function RetreivewithId(){
    // Assuming $obj is an instance of your class
    $sql="select * from appointments INNER JOIN services ON appointments.service_id = services.id INNER JOIN clients ON appointments.client_id = clients.id INNER JOIN pets ON appointments.pet_id = pets.id  where status='Pending'";
    $resultats=$this->cnx->query($sql);
    if($resultats) { // s'il y a des données à afficher
        //la variable $resultats est de type resultSet
        //Convertir $resultats en Tableaux
        $resultats->setFetchMode(PDO::FETCH_OBJ);
        $appointments=$resultats->fetchall();

        if($appointments) {
            $count = 0;
            foreach($appointments as $appointment) {
                if($count == 3) break; // Stop the loop after 3 appointments

                echo "<div class='col-md-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <!-- action start -->
                            <div class='row align-items-center'>
                                <div class='col'>
                                    <p class='text-muted fs-13 fw-medium mb-0'>".$appointment->date."</p>
                                </div>
                                <div class='col-auto text-end'>
                                    <div class='dropdown'>
                                        <a 
                                            role='button' id='dropdownMenuLink-4' data-bs-toggle='dropdown'
                                            aria-haspopup='true' aria-expanded='false'>
                                           
                                        </a>
                                        
                                            
                                          
                                            
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- action end -->

                            <div class='mt-3'>
                                <h4 class='mt-0 mb-1'><a href=''>".$appointment->name."</a></h4>
                                <label class='badge badge-soft-orange mb-1'>".$appointment->type_service."</label>

                                <p class='text-muted fs-14 mt-3'>".$appointment->message."</p>
                            </div>

                            <!-- progress -->
                    
                            <!-- progress end -->

                            <!-- assignment start -->
                        
                            <!-- assignment end -->
                        </div>
                    </div>
                </div>";

                $count++;
            }
        } else {
            echo "No pending appointments found.";
        }
    }
}





public function Retreivebooked(){
    // Assuming $obj is an instance of your class
    $sql="select * from appointments INNER JOIN services ON appointments.service_id = services.id INNER JOIN clients ON appointments.client_id = clients.id INNER JOIN pets ON appointments.pet_id = pets.id INNER JOIN types ON pets.typeid = types.id  where status='booked'  AND DATE(date) = CURDATE()  ORDER BY time DESC";
    $resultats=$this->cnx->query($sql);
    if($resultats) { // s'il y a des données à afficher
        //la variable $resultats est de type resultSet
        //Convertir $resultats en Tableaux
        $resultats->setFetchMode(PDO::FETCH_OBJ);
        $appointments=$resultats->fetchall();

        if($appointments) {
            $count = 0;
            foreach($appointments as $appointment) {
                if($count == 4) break; // Stop the loop after 3 appointments

				echo " 
					<!-- task start -->
					<div class=\"row mb-2\">
						<div class=\"col\">
							<div class=\"card mb-0\">
								<div class=\"card-body\">
									<div class=\"row align-items-center justify-content-sm-between\">
										<div class=\"col-lg-6\">
											<div class=\"form-check\">
												
												<label class=\"form-check-label\" for=\"task1\">
													".$appointment->name."
												</label>
											</div> <!-- end checkbox -->
										</div> <!-- end col -->
										<div class=\"col-lg-3\">
											<span class=\"badge badge-soft-info rounded-pill\">".$appointment->time."</span>
										</div>
										<div class=\"col-lg-3\">
											<ul class=\"list-inline text-sm-end mb-0\" id=\"tooltip-container2\">
												<li class=\"list-inline-item pe-3\" id=\"tooltip-container2\">
													
												<label class=\"form-check-label\" for=\"task1\">".$appointment->intitule."
												
											</label>
													</li>
													
<li class=\"list-inline-item\">
    <span class=\"badge badge-soft-danger p-1\">".$appointment->type_service."</span>
</li>

</ul>
</div> <!-- end col -->
</div>
</div>
</div>
</div>
</div>
";

			
                                                            


                $count++;
            }
        } else {
            echo "No booked appointments today.";
        }
    }
}






public function RetreiveWithDataTables(){
	$sql = "SELECT appointments.id, appointments.date, clients.name, clients.phone, appointments.status 
	FROM appointments 
	INNER JOIN clients ON appointments.client_id = clients.id 
	WHERE appointments.status = 'Pending'";

	$resultats=$this->cnx->query($sql);
	if($resultats) {// s'il y a des données à afficher
	//la variable $resultats est de type resultSet
	//Convertir $resultats en Tableaux
	$resultats->setFetchMode(PDO::FETCH_OBJ);
	$appointments=$resultats->fetchall();
	echo'<p><a class="btn btn-info btn-circle btn-sm" ;" href="booked.php" title="Booked"><i class="fas fa-calendar-check"></i></a></p>';
	echo '<table id="myTable" class="display nowrap" style="width:100%">';
	echo '<thead>';
		echo '<tr>';
		echo '<th>Date</th><th>name</th><th>Phone</th><th>Status</th><th>Action</th>';
		echo '</tr>';
	echo '</thead>';
	print '<tbody>';
	foreach($appointments as $appointment):
	echo '<tr>';
		print '<td>'.$appointment->date.'</td>';
		print '<td>'.$appointment->name.'</td>';
		print '<td>'.$appointment->phone.'</td>';
		print '<td>'.$appointment->status.'</td>';
		print '<td><a class="btn btn-info btn-circle btn-sm" ;" href="Detailsbooking.php?id='.$appointment->id.'"><i class="fas fa-eye"></i></a></td>';
		
		//print '<td><a class="btn btn-info btn-circle btn-sm" ;" href="traitDemande.php?id='.$autorisation->id.'"><i class="fas fa-info-circle"></i></a></td>';

	
	echo '</tr>';
	endforeach;	
	print '</tbody>';
	echo '<tfoot>';
		echo '<tr>';
		echo '<th>Date</th><th>name</th><th>Phone</th><th>Status</th><th>Action</th>';
		echo '</tr>';
	echo '</tfoot>';
	echo '</table>';
	}
		else echo 'Table vide !!!' ;
	}

	public function booked(){
		$sql = "SELECT *
		FROM appointments 
		INNER JOIN clients ON appointments.client_id = clients.id INNER JOIN pets ON appointments.pet_id = pets.id  INNER JOIN types ON pets.typeid= types.id 
		WHERE appointments.status = 'Booked'";
	$resultats=$this->cnx->query($sql);
	if($resultats) {// s'il y a des données à afficher
	//la variable $resultats est de type resultSet
	//Convertir $resultats en Tableaux
	$resultats->setFetchMode(PDO::FETCH_OBJ);
	$appointments=$resultats->fetchall();
	echo '<table id="myTable" class="display nowrap" style="width:100%">';
	echo '<thead>';
		echo '<tr>';
		echo '<th>Date</th><th>name</th><th>Phone</th><th>Type</th><th>Time</th><th>Status</th>';
		echo '</tr>';
	echo '</thead>';
	print '<tbody>';
	foreach($appointments as $appointment):
	echo '<tr>';
		print '<td>'.$appointment->date.'</td>';
		print '<td>'.$appointment->name.'</td>';
		print '<td>'.$appointment->phone.'</td>';
		print '<td>'.$appointment->intitule.'</td>';
		print '<td>'.$appointment->time.'</td>';
		print '<td>'.$appointment->status.'</td>';
	
	
	echo '</tr>';
	endforeach;	
	print '</tbody>';
	echo '<tfoot>';
		echo '<tr>';
		echo '<th>Date</th><th>name</th><th>Phone</th><th>Type</th><th>Time</th><th>Status</th>';
		echo '</tr>';
	echo '</tfoot>';
	echo '</table>';
	}
		else echo 'Table vide !!!' ;
	}
	
	
	









public function modification(){
    $sql = "UPDATE appointments SET date = '$this->date' , time='$this->time', price='$this->price', status='$this->status' WHERE id = $this->id";
    $resultat = $this->cnx->exec($sql);
    if($resultat) {
        return true;
    } else {
        return false;
    }
}



public function counting(){
    $sql = "SELECT COUNT(*) as count FROM appointments WHERE status = 'Pending' ";
    $resultat = $this->cnx->query($sql);
    $count = $resultat->fetch(PDO::FETCH_ASSOC)['count'];
    if ($count > 0) {
        echo '<h3 class="mt-0 mb-0">' . $count . '</h3>';
    } else {
        echo '<h3 class="mt-0 mb-0"> 0</h3>';
    }
}
public function counting_booked(){
    $sql = "SELECT COUNT(*) as count FROM appointments WHERE status = 'Booked' AND DATE(date) = CURDATE() ";
    $resultat = $this->cnx->query($sql);
    $count = $resultat->fetch(PDO::FETCH_ASSOC)['count'];
    if ($count > 0) {
        echo '<h3 class="mt-0 mb-0">' . $count . '</h3>';
    } else {
        echo '<h3 class="mt-0 mb-0"> 0</h3>';
    }
}






}



?>