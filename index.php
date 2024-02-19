<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- title -->
    <title>Home</title>
    
  
    


    <!-- plugins -->
   
    <link rel="stylesheet" href="./assets/css/vendor.min.css" type="text/css" />
    <!-- theme css -->
    <link rel="stylesheet" href="./assets/css/theme.css" type="text/css" />
</head>

<body>
    
    <div class="header-3">
        <header>
          <nav class="navbar navbar-expand-lg topnav-menu navbar-light zindex-10" >
            <div class="container">
              
            <a class="navbar-brand logo" href="/">
                <img src="./assets/images/logo.png" height="65" class="align-top logo-dark" alt="" />
                <img src="./assets/images/logo-light.jpg" height="70" class="align-top logo-light" alt="" />
              </a>
                
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content"
                aria-controls="topnav-menu-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav align-items-lg-center d-flex me-auto">
                  
                </ul>

                
                  <ul class="navbar-nav align-items-lg-center ">
                      <li class="nav-item">
                          <a class="nav-link" href="/index.html">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                          
                                  
                      
                    <li class="nav-item">
                        <a class="nav-link" href="#about-me">About us</a>
                    </li>
                          

                      <li class="nav-item">
                        <a class="nav-link" href="#contact-me">Contact </a>
                    </li>
                          

                       <!-- profile dropdown start -->
                       <li class="nav-item ms-2">
                        <a class="btn btn-outline-secondary btn-sm" href="verify.php">Verify</a>
                    </li>
                       <li class="nav-item ms-2">
                        <a class="btn btn-outline-primary btn-sm" href="account-login.php">Login</a>
                    </li>

                  </ul>
                

                
              </div>
            </div>
          </nav>

        </header>

        <section class="position-relative hero-10 pb-2 pt-7 pt-sm-3 pb-sm-7">
            <div class="container">
                <div class="row align-items-center text-center text-sm-start">
                    <div class="col-lg-6 order-2 order-sm-1">
                        <div class="img-container" data-aos="fade-right">
                            <img src="./assets/images/hero/abc.png" alt="" class="img-fluid" />
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1 order-sm-2" data-aos="fade-left">
                        <h1 class="mt-0 mb-4 pb-2 hero-title">
                            Dedicated to <span class="highlight highlight-success d-inline-block">Your Pet's</span> Health and Happiness
                        </h1>

                        <p class="fs-17 text-muted">Where We Become Your Trusted Partner in Pet Care</p>

                        <div class="pt-4 pb-3">
                            <div class="row g-2 text-start">
                           
                                <div class="col-sm-auto">
                                    <button class="btn btn-primary mt-1 mt-sm-0" onclick="openPopup()">Make an Appointment</button>
                                    <div id="popup" class="modal" onclick="closePopup()">
                                        <iframe id="popup-iframe"></iframe>
                                        <script> function openPopup() {
                                            const pageUrl = 'contact.php';  // Replace with your desired URL
                                            const popupIframe = document.getElementById('popup-iframe');
                                            popupIframe.src = pageUrl;
                                      
                                            // Display the popup
                                            document.getElementById('popup').style.display = 'block';
                                          }
                                      
                                          function closePopup() {
                                            document.getElementById('popup').style.display = 'none';
                                          }</script>
                                      </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
            
                </div>
            </div>
            
              
            </div>
        </section>
    </div>

    <!-- feature start -->
    <section class="position-relative py-xl-8 py-6 features-3" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <h1 class="display-5 fw-medium">Services</h1>
                    
                </div>
            </div>
            <div class="centered">
                <div class="servcard border-left-behind "data-aos="fade-up" data-aos-duration="300">
                
                  <div class="shadow12" ></div>
                  <div class="content">
                    <h2 class="nino">Surgery:</h2>
                    <p class="figo">Providing expert care for your pet's health needs. <a class=" mt-1 mt-sm-0 fw-bolder display-5" onclick="openPopuppp()">Learn more</a></p>
                        <div id="popup" class="modal" onclick="closePopup()">
                            <iframe id="popup-iframe"></iframe>
                            <script> function openPopuppp() {
                                const pageUrl = 'surgery.php';  // Replace with your desired URL
                                const popupIframe = document.getElementById('popup-iframe');
                                popupIframe.src = pageUrl;
                          
                                // Display the popup
                                document.getElementById('popup').style.display = 'block';
                              }
                          
                              function closePopup() {
                                document.getElementById('popup').style.display = 'none';
                              }</script>
                          </div>
                  
                  </div>
                </div>
                
                <div class="servcard border-right-behind border-bottom-behind" data-aos="fade-up" data-aos-duration="600">
                  <div class="shadow" ></div>
                  
                  <div class="content">
                    <h2 class="nino">Pet Check-ups:</h2>
                    <p class="figo">Keep your pet healthy with regular check-ups.<a class=" mt-1 mt-sm-0 fw-bolder display-5" onclick="openPop()">Learn more</a></p>
                    <div id="popup" class="modal" onclick="closePopup()">
                        <iframe id="popup-iframe"></iframe>
                        <script> function openPop() {
                            const pageUrl = 'services.php';  // Replace with your desired URL
                            const popupIframe = document.getElementById('popup-iframe');
                            popupIframe.src = pageUrl;
                      
                            // Display the popup
                            document.getElementById('popup').style.display = 'block';
                          }
                      
                          function closePopup() {
                            document.getElementById('popup').style.display = 'none';
                          }</script>
                      </div>
                  </div>
                </div>
                
                <div class="servcard border-left-behind" data-aos="fade-up" data-aos-duration="900">
                  <div class="shadow13"></div>
                
                  <div class="content">
                    <h2 class="nino fw-semibold ">Emergency Care:</h2>
                    <p class="figo">Providing a rapid response to pet emergencies.<a class=" mt-1 mt-sm-0 fw-bolder display-5" onclick="openPopupp()">Learn more</a></p>
                    <div id="popup" class="modal" onclick="closePopup()">
                        <iframe id="popup-iframe"></iframe>
                        <script> function openPopupp() {
                            const pageUrl = 'emergency.php';  // Replace with your desired URL
                            const popupIframe = document.getElementById('popup-iframe');
                            popupIframe.src = pageUrl;
                      
                            // Display the popup
                            document.getElementById('popup').style.display = 'block';
                          }
                      
                          function closePopup() {
                            document.getElementById('popup').style.display = 'none';
                          }</script>
                      </div>
                  </div>
                </div>
              </div>
    </section>
    

    

    <!-- about me-->
    <section class="section py-4 py-sm-8 bg-gradient3 position-relative" id="about-me" data-aos="fade-up" id="about-me">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1 class="display-4 fw-semibold mb-4" >About Us</h1>
                    <p class="mb-5">
                    PetWell clinic is a new veterinary hospital in Lac 2, founded by Dr. Maya Kalbouch and Dr. Amir Maalouk, who have years of experience in serving the GTA, Scarborough, and the Durham Region. We offer quality and preventive care for your pets, with free parking and local ownership. To learn more about us or book an appointment, visit our website or Facebook page or call us today.
                    </p>
                 
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <img src="./assets/images/features/about-me.png" alt="" class="img-fluid d-block mx-auto mt-4 mt-lg-0" />
                </div>
            </div>
        </div>
    </section>
    <!-- about me -->

    <!-- contact -->
    <section class="my-5 py-6 bg-gradient1 position-relative" id="contact-me">
        <div class="container" data-aos="fade-up" data-aos-duration="1500">
            <div class="row">
                <div class="col text-center">
                
                    <h1 class="display-5 fw-medium">Contact Us</h1>
                    
                </div>
            </div>

            <?php 

include_once('admin/classe/contact.class.php');
$p=new Contact('localhost','root','','veterinarian');
$p->contactinfo();
?>

        
            </div>
        </div>
    </section>
    <!-- contact-->
        <!-- testimonials start -->
        <section class="section pt-5 pb-6 py-sm-8 mb-5 mb-sm-0 bg-gradient3 position-relative testimonials-1">
        <div class="divider top d-none d-sm-block"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Testimonials</span>
                    <h1 class="display-5 fw-medium">What People Say</h1>
                </div>
                <div class="col-auto text-sm-end pt-2 pt-sm-0">
                    <div class="navigations">
                        <button class="btn btn-link text-normal p-0 swiper-custom-prev">
                            <svg class="bi bi-arrow-left" width="1.75em" height="1.75em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 010 .708L3.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M2.5 8a.5.5 0 01.5-.5h10.5a.5.5 0 010 1H3a.5.5 0 01-.5-.5z" clip-rule="evenodd"></path>
                              </svg>
                        </button>
                        <button class="btn btn-link text-normal p-0 swiper-custom-next">
                            <svg class="bi bi-arrow-right" width="1.75em" height="1.75em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L12.793 8l-2.647-2.646a.5.5 0 010-.708z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M2 8a.5.5 0 01.5-.5H13a.5.5 0 010 1H2.5A.5.5 0 012 8z" clip-rule="evenodd"></path>
                              </svg>
                        </button> 
                    </div>
                </div>
            </div>
            <div class="row mt-3 mt-sm-5">
                <div class="col">
                    <div class="slider">
                        <div class="swiper-container" data-toggle="swiper"
                                            data-swiper='{"loop":true, "spaceBetween": 24, "autoplay": {"delay": 5000}, "breakpoints": {"576": {"slidesPerView": 1 }, "768": { "slidesPerView": 2 } }, "roundLengths":true, "navigation": {"nextEl": ".swiper-custom-next","prevEl": ".swiper-custom-prev"}}'>
                                                                                <?php 

                                                    include_once('admin/classe/testimonial.class.php');
                                                    $p=new testimonial('localhost','root','','veterinarian');
                                                    $p->Retreivetestimonial();
                                        ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- testimonials end -->

   <!-- footer -->
   <section class="section pt-4 pb-3 position-relative bg-gradient1">
    <div class="container">
        <div class="row align-items-center border-top border-light pt-4">
            <div class="col text-center">
                
                <ul class="list-inline mb-0 me-3">
                            <li class="list-inline-item text-muted align-middle me-2 text-uppercase fs-13 fw-medium">Social media:</li>
                            <li class="list-inline-item me-2 align-middle">
                                <a href="https://www.facebook.com/profile.php?id=61553930888729&mibextid=ZbWKwL">
                                    <i class="icon-xs icon-dual-primary" data-feather="facebook"></i>
                                </a>
                            </li>
                           
                            <li class="list-inline-item align-middle">
                                <a href="https://www.instagram.com/pet_well91">
                                    <i class="icon-xs icon-dual-danger" data-feather="instagram"></i>
                                </a>
                            </li>
                                              
                </ul>
                <p class="mt-2"><script>document.write(new Date().getFullYear())</script> © PetWell. All rights reserved.</p>
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