<?php 
if(isset($_GET['id'])):
    include_once('CLASSE/contact.class.php');
    
    $p=new Contact('localhost','root','','veterinarian');
    $p->id=$_GET['id'];
    $contactToUpdate=$p->RetreiveById();
   
endif;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- title -->
    <title>Contact Form</title>
    <meta content="Coderthemes" name="author" />
    <meta content="A fully featured multi purpose template" name="description" />

    <!-- theme favicon -->
  
   
  <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- third party plugins -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/jquery.image-popup.js"></script>
 <!-- Image Popup JS -->
 
    <!-- theme css -->
    <link rel="stylesheet" href="./assets/css/vendor.css" type="text/css" />
    <link rel="stylesheet" href="./assets/css/theme.min.css" type="text/css" />
</head>

<body>
    <!-- Navbar start -->
    <?php
include_once('includes/header.php');
?>

    <!-- Navbar end -->

    <!-- page-content start -->
    <section class="pb-10 p-3 bg-gradient2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h3 class="my-0">Contact Form </h3>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <!-- menu start -->
                                    <form action="" method="POST" class="form">
    <input type="hidden" name="id" value="<?= $contactToUpdate->id; ?>" />

    <div class="form-group row">
        <div class="col-sm-12 col-md-6">
            <label for="">Mail:</label>
            <input type="text" name="mail" class="form-control" value="<?= $contactToUpdate->mail; ?>" />
        </div>

        <div class="col-sm-12 col-md-6">
            <label for="">Phone:</label>
            <input type="text" name="number" class="form-control" value="<?= $contactToUpdate->number; ?>"  />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12 col-md-6">
            <label for="">Location:</label>
            <input type="text" name="location" class="form-control" value="<?= $contactToUpdate->location; ?>"  />
        </div>

        <div class="col-sm-12 col-md-6">
            <label for="">Work Time:</label>
            <input type="text" name="work_time" class="form-control" value="<?= $contactToUpdate->work_time; ?>"  />
        </div>
    </div>

 





    <div class="mt-3">
        <input type="submit" value="MODIFIER" name="btn_maj" class="btn btn-primary" onClick='return confirm("Save changes ?")' />
    </div>
</form>

                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
    </section>
    <!-- page-content end -->

    <!-- footer start -->
   <!-- footer start -->
   <section class="section mt-4 pt-4 pb-3  bg-gradient1">
    <div class="container">
        <div class="row align-items-center border-top border-light pt-4">
            <div class="col text-center">
               
                <p class="mt-2"><script>document.write(new Date().getFullYear())</script> . All rights reserved.</p>
            </div>
        </div>
    </div>
</section>
<!-- footer end -->
    <!-- footer end -->

    

</script>
  
    

   
    


</body>

</html>


<?php

if(isset($_POST['btn_maj'])):
include_once('CLASSE/contact.class.php');
$p=new Contact('localhost','root','','veterinarian');
$p->id = $_POST['id'];
$p->mail=$_POST['mail'];
$p->number=$_POST['number'];
$p->location=$_POST['location'];
$p->work_time=$_POST['work_time'];
//$p->adresse=$_POST['adresse'];

/*print '<pre>';
var_dump($p);
print '</pre>';*/
if($p->modification()) echo "<script>window.location.href = 'contact.php?msg=1';
</script>";
else echo 'Erreur  !!!';

endif;
?>