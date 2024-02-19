<?php 
if(isset($_POST['btn_login'])):
include_once('admin/CLASSE/user.class.php');
$user=new User('localhost','root','','veterinarian');
$user->email=$_POST['email'];
$user->mdp=md5($_POST['mdp']);
$utilisateur=$user->isUser();
if($utilisateur) {
	//var_dump($utilisateur);
	session_start();
	$_SESSION['username']=$utilisateur->username;
	$_SESSION['email']=$utilisateur->email;
    $_SESSION['role']=$utilisateur->role;
	$_SESSION['id']=$utilisateur->id;
	header('location:admin/dashboard.php');
	
	}
else header('location:account-login.php');
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
    <title> Log in</title>
    

 
 <link rel="shortcut icon" href="./assets/images/logo.jpeg">


 <!--  plugins -->
 <link rel="stylesheet" href="./assets/css/vendor.css" type="text/css" />

 <!-- css -->
 <link rel="stylesheet" href="./assets/css/theme.min.css" type="text/css" />
</head>

<body>
    <div class="bg-gradient2 min-vh-100 align-items-center d-flex justify-content-center pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-md- shadow">
                                    <div class="p-xl-5 p-3">
                                       

                                        <h6 class="h5 mb-0 mt-3">Welcome back!</h6>
                                        <p class="text-muted mt-1 mb-4">Enter your email address and password .</p>

                                        <form action="<?= $_SERVER['PHP_SELF']?>" class="authentication-form" method="post">

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email <small>*</small></label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="password">Password <small>*</small></label>
                                                
                                                <input type="password" class="form-control" id="password" name="mdp" placeholder="Enter your password" />
                                            </div>

                                          

                                            <div class="mb-0 text-center d-grid">
                                                <button class="btn btn-primary" type="submit"name="btn_login">Log In</button>
                                            </div>
                                        </form>
                                        
                                      
                                    </div>
                                </div>
                                

                        </div> 
                    </div>
                

                   
                    

                </div> 
            </div>
        
        </div>
        
    </div>

    <!-- javascript -->
    <!-- vendor js -->
    <script src="./assets/js/vendor.js"></script>


    <!-- theme js -->
    <script src="./assets/js/theme.js"></script>


</body>

</html>