<?php
session_start();
if(!isset($_SESSION['id'])):
header('location:../account-login.php');
//die();
endif;
?>


<!-- Topbar -->
<header>
    <nav class="navbar navbar-expand-lg topnav-menu navbar-light shadow" >
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content"
                aria-controls="topnav-menu-content" >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav align-items-lg-center d-flex me-auto">
                </ul>
               
                <ul class="navbar-nav align-items-lg-center ">
                    <?php if ($_SESSION['role'] == 'veterinarian' || $_SESSION['role'] == 'secretary'): ?>
                        <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pending.php">Appointments </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testimonials.php">Testimonials </a>
                    </li>
                    <?php endif; ?>

                    <?php if ($_SESSION['role'] == 'veterinarian'): ?>
                        <li class="nav-item">
                        <a class="nav-link" href="types.php">Type </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services </a>
                    </li>
                    

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact </a>
                    </li>
               
                    <li class="nav-item">
                        <a class="nav-link" href="profils.php">Profils </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="users.php">Users </a>
                    </li>
                    <?php endif; ?>
                          

                       <!-- proful -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle py-0" href="#" id="user" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="d-flex align-items-center">
                    
                    <div class="flex-grow-1 ms-1 lh-base">
                      <span class="fw-semibold fs-13 d-block line-height-normal"> <?= $_SESSION['username']; ?></span>
                      <span class="text-muted fs-13"><?= $_SESSION['role']; ?></span>
                    </div>
                  </div>
                </a>
            
                <div class="dropdown-menu p-2" aria-labelledby="user">
                  <!-- item start -->
                 
                  <!-- item end -->
  
                  <!-- item start -->
                  <a class="dropdown-item p-2" href="logout.php">
                
                    Sign out
                  </a>
                  <!-- item end -->
               
              </li>

                  </ul>
                

                
              </div>
            </div>
          </nav>

        </header>
    <!-- Navbar end -->