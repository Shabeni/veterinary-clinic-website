


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- title -->
    <title>Appointments</title>
    

    <!-- theme favicon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.4.1/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

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



    <!-- page-content start -->
    <section class="pb-10  p-3 bg-gradient2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h3 class="my-0">Appointments</h3>
                        <p class="mt-1 fw-medium">Datatables Pending appointments</p>
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
                                    <?php 

include_once('classe/appointment.class.php');
$p=new Appointment('localhost','root','','veterinarian');
$p->RetreiveWithDataTables();
?>
                                        </div>
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



    
   


    <script src="./assets/js/theme.min.js"></script>
    <!-- javascript -->
    <!-- vendor js -->
    <script src="./assets/js/vendor.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <?php
    include_once('includes/scripts.php');
    
    ?>
    <!-- theme js -->
    


</body>

</html>