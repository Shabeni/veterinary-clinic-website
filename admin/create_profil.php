


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- title -->
    <title>PetWell- Create Profil</title>
    <meta content="Coderthemes" name="author" />
    <meta content="A fully featured multi purpose template" name="description" />

    <!-- theme favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.png">
   

    <!-- third party plugins -->
    <link rel="stylesheet" href="./assets/css/vendor.css" type="text/css" />

    <!-- theme css -->
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
                        <h3 class="my-0">Create new Profil</h3>
                        <p class="mt-1 fw-medium">Form</p>
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
                                    <form action="" method="post" class="form">
    

    <div class="form-group row">
        <div class="col-sm-12 col-md-6">
            <label for="">Role:</label>
            <input type="text" name="role" class="form-control"   />
        </div>

       
    </div>

    <div class="form-group row">
      

        <div class="col-sm-12 col-md-6">
            <label for="">Active:</label>
            <input type="number" name="active" class="form-control" value="1" />
        </div>
    </div>

   

    

    

    <div class="mt-3">
        <input type="submit" value="Submit" name="btn_maj" class="btn btn-primary" onClick='return confirm("Save data ?")' />
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


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    
   


    <script src="./assets/js/theme.min.js"></script>
    <!-- javascript -->
    <!-- vendor js -->
    <script src="./assets/js/vendor.js"></script>
   
    


</body>

</html>



<?php

if(isset($_POST['btn_maj'])):
include_once('CLASSE/profil.class.php');
$p=new Profil('localhost','root','','veterinarian');
$p->role=$_POST['role'];
$p->active=$_POST['active'];



//$p->adresse=$_POST['adresse'];

/*print '<pre>';
var_dump($p);
print '</pre>';*/
if($p->Create()) echo "<script>window.location.href = 'profils.php';
</script>";
else echo 'Erreur  !!!';

endif;