<?php 
include('CLASSE/user.class.php');
$p = new Appointment('localhost', 'root', '', 'veterinarian');

if ($p->isDateAvailable($_POST['date'])) {
    echo "The selected date is available.";
} else {
    echo "The selected date is not available. Please choose a different date.";
}


?>