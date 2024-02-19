<?php 
if(isset($_GET['id'])):
include_once('classe/user.class.php');
$p=new User('localhost','root','','veterinarian');
$p->id=$_GET['id'];
if (isset($_GET['user_active']) && $_GET['user_active'] == '1') {
    $p->desactiver() ;header('location:users.php');
} else {
    $p->activer()  ;header('location:users.php');
}



endif;


?>
