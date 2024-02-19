<?php
if(isset($_POST['btn_maj'])):
    include_once('CLASSE/autorisation.class.php');
    $p=new Appointment('localhost','root','','veterinarian');
    $p->id=$_POST['id'];
    $p->date=$_POST['date'];
    $p->time=$_POST['time'];
    $p->price=$_POST['price'];
    $p->status=$_POST['status'];

    /*print '<pre>';
    var_dump($p);
    print '</pre>';*/

    if($p->modification()) {
        header('location:pending.php');
    }
    else {
        echo 'Erreur  !!!';
    }
endif;
?>