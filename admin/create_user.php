


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- title -->
    <title>PetWell- Create new Users</title>
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
                        <h3 class="my-0">Add new user</h3>
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
            <label for="">Name:</label>
            <input type="text" name="name" class="form-control"  />
        </div>

        <div class="col-sm-12 col-md-6">
            <label for="">email:</label>
            <input type="email" name="email" class="form-control"  />
        </div>
    </div>

    
    <div class="form-group row">
        <div class="col-sm-12 col-md-6">
            <label for="">Password:</label>
            <input type="password" name="mdp" class="form-control"  />
        </div>

        <div class="col-sm-12 col-md-6">
            <label for="">Profil:</label>
            
                                    <div class="text-center">

                                    <div  >
                                    <?php
                                    include_once('classe/profil.class.php');
                                    $p = new Profil('localhost', 'root', '', 'veterinarian');
                                    $p->RetreiveWith();
                                    ?>
                                </div>
                                </div>
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
//$_POST
include ('classe/user.class.php');
$p=new User('localhost','root','','veterinarian');
$p->username=$_POST['name'];
$p->email=$_POST['email'];
$p->mdp=md5($_POST['mdp']);
$p->active=1;
$p->profil_id=$_POST['profil_id'];
if($p->create()) echo "<script>window.location.href = 'users.php';
</script>";
else echo 'Echec d\'ajout';
//var_dump($p);//print_r()
endif;