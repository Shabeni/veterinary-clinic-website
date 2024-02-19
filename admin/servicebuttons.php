<?php 
if(isset($_GET['id'])):
include_once('classe/service.class.php');
$p=new Service('localhost','root','','veterinarian');
$p->id=$_GET['id'];
if (isset($_GET['active']) && $_GET['active'] == '1') {
    $p->desactiver() ;header('location:services.php');
} else {
    $p->activer()  ;header('location:services.php');
}



endif;


?>
