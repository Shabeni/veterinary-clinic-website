<?php 
if(isset($_GET['id'])):
    include_once('CLASSE/appointment.class.php');
    include_once('CLASSE/client.class.php');
    include_once('CLASSE/pet.class.php');
    include_once('CLASSE/service.class.php');
    $p=new Appointment('localhost','root','','veterinarian');
    $p->id=$_GET['id'];
    $autorisationToUpdate=$p->RetreiveById();
    $u = new User('localhost', 'root', '', 'veterinarian');
$u->id = $autorisationToUpdate->client_id;
$userInfo = $u->RetreiveById();
$t = new Pet('localhost', 'root', '', 'veterinarian');
$t->id = $autorisationToUpdate->pet_id;
$petInfo = $t->RetreiveById();
$s = new Service('localhost', 'root', '', 'veterinarian');
$s->id = $autorisationToUpdate->service_id;
$serviceInfo = $s->RetreiveBy();
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
    <title>PetWell- Confirm Appointment</title>
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
                        <h3 class="my-0">Confirm  Appointments</h3>
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
                                    <form action="" method="POST" class="form">
    <input type="hidden" name="id" value="<?= $autorisationToUpdate->id; ?>" />

    <div class="form-group row">
        <div class="col-sm-12 col-md-6">
            <label for="">Date:</label>
            <input type="date" name="date" class="form-control" value="<?= $autorisationToUpdate->date; ?>" />
        </div>

        <div class="col-sm-12 col-md-6">
            <label for="">Time:</label>
            <input type="time" name="time" class="form-control" />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12 col-md-6">
            <label for="">Name:</label>
            <input type="text" name="name" class="form-control" value="<?= $userInfo->name; ?>" disabled />
        </div>

        <div class="col-sm-12 col-md-6">
            <label for="">Price:</label>
            <input type="number" name="price" class="form-control" min="0" step="0.01" />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12 col-md-6">
            <label for="">Pet name:</label>
            <input type="text" name="petname" class="form-control" value="<?= $petInfo->petname; ?>" disabled/>
        </div>

        <div class="col-sm-Phone col-md-6">
            <label for="">Phone:</label>
            <input type="text" name="phone" class="form-control" value="<?= $userInfo->phone; ?>" disabled/>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12 col-md-6">
            <label for="">Status:</label>
            <select name="status" class="form-control">
                <option name="status" value="Pending">Pending</option>
                <option name="status" value="Booked">Booked</option>
            </select>
        </div>








        <div class="col-sm-12 col-md-6">
            <label for="">Type:</label>
            <input type="text" name="Intitule" class="form-control" value="<?= $petInfo->intitule; ?> "readonly />
        </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-12 col-md-6">
    <label for="">Message:</label>
    <textarea name="Message" class="form-control" readonly><?= $autorisationToUpdate->message; ?></textarea>
    </div>
    <div class="col-sm-12 col-md-6">
            <label for="">Service:</label>
            <input type="text" name="Service" class="form-control" value="<?= $serviceInfo->type_service; ?> "readonly />
        </div>
</div>

<!-- The Modal -->


<?php if (!empty($autorisationToUpdate->image)): ?>
    <ul id="imageGallery">
        <!-- The Image -->
        <li>
            <a><img src="../uploads/<?=$autorisationToUpdate->image?>" alt="Image"></a>
        </li>
    </ul>
<?php endif; ?>









 





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
                <ul class="list-inline list-with-separator">
                    <li class="list-inline-item me-0"><a href="#">About</a></li>
                    <li class="list-inline-item me-0"><a href="#">Services</a></li>
                    <li class="list-inline-item me-0"><a href="#">Contact</a></li>
                </ul>
                <p class="mt-2"><script>document.write(new Date().getFullYear())</script> . All rights reserved.</p>
            </div>
        </div>
    </div>
</section>
<!-- footer end -->
    <!-- footer end -->

    
    <script>
$(document).ready(function(){
	$("#imageGallery").imagePopup({
    overlay: "rgba(0, 0, 0, 0.7)",

    closeButton:{
        src: "./assets/images/close.png",
        width: "40px",
        height:"40px"
    },
    imageBorder: "10px solid #ffffff",
    borderRadius: "6px",
    imageWidth: "800px",
    imageHeight: "auto",
    imageCaption: {
        exist: true,
        color: "#ffffff",
        fontSize: "18px"
    },
    open: function(){
        console.log("opened");
    },
    close: function(){
        console.log("closed");
    }
});

});
</script>
  
    

   
    


</body>

</html>


<?php

if(isset($_POST['btn_maj'])):
include_once('CLASSE/appointment.class.php');
$p=new Appointment('localhost','root','','veterinarian');
$p->id = $_POST['id'];
$p->date=$_POST['date'];
$p->time=$_POST['time'];
$p->price=$_POST['price'];
$p->status=$_POST['status'];
//$p->adresse=$_POST['adresse'];

/*print '<pre>';
var_dump($p);
print '</pre>';*/
if($p->modification()) echo "<script>window.location.href = 'pending.php?msg=1';
</script>";
else echo 'Erreur  !!!';

endif;
?>