<?php 
if(isset($_GET['id'])):
include_once('classe/profil.class.php');
$p=new Profil('localhost','root','','veterinarian');
$p->id=$_GET['id'];
if (isset($_GET['active']) && $_GET['active'] == '1') {
    $p->desactiver() ;header('location:profils.php');
} else {
    $p->activer()  ;header('location:profils.php');
}



endif;


?>
