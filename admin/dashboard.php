




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- title -->
    <title>PetWell- Dashboard</title>
    <meta content="Coderthemes" name="author" />
    <meta content="A fully featured multi purpose template" name="description" />

    <!-- theme favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.png">


    <!-- third party plugins -->
    <link rel="stylesheet" href="./assets/css/vendor.min.css" type="text/css" />

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
    <section class="position-relative overflow-hidden bg-gradient2 py-3 px-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h3 class="mb-0">Hi  <?= $_SESSION['username']; ?></h3>
                        <p class="mt-1 fw-medium">Welcome back !</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <!-- profile widget star -->
              <!--  <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex">
                                        <img src="./assets/images/avatars/img-8.jpg" class="img-fluid avatar-sm rounded-sm me-3" alt="..." />
                                        <div class="flex-grow-1">
                                            <h4 class="mb-1 mt-0 fs-16">Ms. Greeva Navadiya</h4>
                                            <p class="text-muted pb-0 fs-14">Web & Graphic Designer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto text-end">
                                    <div class="dropdown">
                                        <a class="btn-link text-muted dropdown-toggle arrow-none" href="#" role="button"
                                            id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuLink-1">
                                            <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                    data-feather="edit"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                    data-feather="refresh-cw"></i>Refresh</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#"><i class="icon-xxs icon me-2"
                                                    data-feather="trash-2"></i>Deactivate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-inline py-3 border-bottom">
                                <li class="list-inline-item mb-sm-0 mb-2 me-sm-2">
                                    <a href="#" class="text-muted fs-14"><i class="icon-xs icon me-1"
                                            data-feather="mail"></i>greeva@coderthemes.com</a>
                                </li>
                                <li class="list-inline-item mb-sm-0 mb-2">
                                    <a href="#" class="text-muted fs-14"><i class="icon-xxs icon me-2"
                                            data-feather="phone"></i>+00 123-456-789</a>
                                </li>
                            </ul>

                            <div class="row align-items-center pt-1">
                                <div class="col-md-6">
                                    <p class="float-end mb-0">85%</p>
                                    <h6 class="fw-medium my-0">Project Completion</h6>
                                    <div class="progress mt-3" style="height: 6px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-sm-0 mt-4">
                                    <p class="float-end mb-0">7.5</p>
                                    <h6 class="fw-medium my-0">Overall Rating</h6>
                                    <div class="progress mt-3" style="height: 6px;">
                                        <div class="progress-bar bg-orange" role="progressbar" style="width: 75%;"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- profile widget end -->

                <!-- stats start -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm icon icon-with-bg icon-xs rounded-sm bg-soft-success me-3">
                                    <i class="icon-dual-success" data-feather="check-circle"></i>
                                </div>
                                <div class="flex-grow-1">
                                       <?php
                                    include_once('classe/appointment.class.php');
                                    $p = new Appointment('localhost', 'root', '', 'veterinarian');
                                    $p->counting();
                                    ?>
                                    <p class="text-muted mb-0">Pending</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm icon icon-with-bg icon-xs rounded-sm bg-soft-info me-3 flex-shrink-0">
                                    <i class="icon-dual-info" data-feather="edit-3"></i>
                                </div>
                                <div class="flex-grow-1">
                                <?php
                                    include_once('classe/appointment.class.php');
                                    $p = new Appointment('localhost', 'root', '', 'veterinarian');
                                    $p->counting_booked();
                                    ?>
                                    <p class="text-muted mb-0">Booked </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- stats end -->

                <!-- revenue start -->
               <!-- <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h4 class="mb-1 mt-0 fs-16">Revenue</h4>
                                </div>
                                <div class="col-auto text-end">
                                    <div class="dropdown">
                                        <a class="btn-link text-muted dropdown-toggle arrow-none" href="#" role="button"
                                            id="dropdownMenuLink-2" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuLink-2">
                                            <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                    data-feather="edit"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                    data-feather="refresh-cw"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="">$2,100.00</h1>
                            <p class="text-muted">Last Week</p>

                            <hr class="mb-1" />
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="me-3 flex-shrink-0">
                                            <i class="text-success" data-feather="trending-up"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="mt-0 mb-0">15%</h5>
                                            <p class="text-muted mb-0 fs-13">Prev Week</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="me-3 flex-shrink-0">
                                            <i class="text-danger" data-feather="trending-down"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="mt-0 mb-0">10%</h5>
                                            <p class="text-muted mb-0 fs-13">Prev Month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- revenue end -->
            </div>

            <!-- recent projects start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-3 mt-0 fs-16">Pending Appointment</h4>
                        </div>
                        <div class="col-auto text-end">
                            <a href="pending.php" class="fw-semibold text-primary fs-13">View All <i
                                    class="ms-1 icon-xxs" data-feather="arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="row my-2">
                        <!-- project start -->
                        <?php
                                    include_once('classe/appointment.class.php');
                                    $p = new Appointment('localhost', 'root', '', 'veterinarian');
                                    $p->RetreivewithId();
                                    ?>

<div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-3 mt-0 fs-16">Today's Appointment </h4>
                        </div>
                        <div class="col-auto text-end">
                            <a href="booked.php" class="fw-semibold text-primary fs-13">View All <i
                                    class="ms-1 icon-xxs" data-feather="arrow-right"></i></a>
                        </div>
                    </div>


<?php
                                    include_once('classe/appointment.class.php');
                                    $p = new Appointment('localhost', 'root', '', 'veterinarian');
                                    $p->Retreivebooked();
                                    ?>

</div>
</div>
            <!-- recent projects end -->

            <!-- recent projects start -->
           
    <!-- page-content end -->

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

    <!-- javascript -->
    <!-- vendor js -->
    <script src="./assets/js/vendor.min.js"></script>


    <!-- theme js -->
    <script src="./assets/js/theme.min.js"></script>


</body>

</html>