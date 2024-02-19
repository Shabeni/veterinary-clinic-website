<?php 
if(isset($_POST['btn_login'])):
    include_once('CLASSE/user.class.php');
    $user=new Appointment('localhost','root','','veterinarian');
    $user->email=$_POST['email'];
    $user->verify_token=($_POST['mdp']);
    $utilisateur=$user->isUser();
    if($utilisateur) {
        //var_dump($utilisateur);
        session_start();
        $_SESSION['name']=$utilisateur->name;
        $_SESSION['email']=$utilisateur->email;
        $_SESSION['status']=$utilisateur->status;
        $_SESSION['price']=$utilisateur->price;
        $_SESSION['time']=$utilisateur->time;
        $_SESSION['date']=$utilisateur->date;
        $_SESSION['id']=$utilisateur->id;
        if($_SESSION['status'] == 'Booked') {
            $message = '<p style="font-size:15px;"> Status: <strong style="color:green;">' . $_SESSION['status'].'</strong></p>'.'<p style="font-size:15px;"> Date:'. $_SESSION['date'].'</p>'. '<p style="font-size:15px;"> Time:' . $_SESSION['time'].'.</p>'.'<p style="font-size:15px;"> Price:' .  $_SESSION['price'].'</p>';
        } else {
            $message = 'Status: ' . $_SESSION['status']. '<p> Date:'. $_SESSION['date'].'</p>';
        }
    } else {
        $message = 'Error: Appointment not found.';
    }
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
                                       

                                        <h6 class="h5 mb-0 mt-3">Welcome !</h6>
                                        <p class="text-muted mt-1 mb-4">Enter your email address and token .</p>

                                        <form action="<?= $_SERVER['PHP_SELF']?>" class="authentication-form" method="post" >

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email <small>*</small></label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="password">Token <small>*</small></label>
                                                
                                                <input type="password" class="form-control" id="password" name="mdp" placeholder="Enter your token" />
                                            </div>

                                          

                                            <div class="mb-0 text-center d-grid">
                                                <button class="btn btn-primary" type="submit"name="btn_login">Verify</button>
                                            </div>
                                        </form>
                                        
                                      
                                    </div>
                                </div>
                                

                        </div> 
                    </div>
                

                    
                   <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Appointment Status</h4>
        
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <?php echo isset($message) ? $message : ''; ?>
      </div>

      <!-- Modal footer -->
   

    </div>
  </div>
</div>

<!-- Include jQuery and Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
    <?php if(isset($message)): ?>
        $("#myModal").modal('show');
    <?php endif; ?>
});
</script>
                    

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