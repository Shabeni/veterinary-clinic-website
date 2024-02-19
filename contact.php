<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- title -->
    <title> Contact Us</title>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    


    <!-- third party plugins -->
    <link rel="stylesheet" href="./assets/css/vendor.css" type="text/css" />

    <!-- theme css -->
    <link rel="stylesheet" href="./assets/css/theme.min.css" type="text/css" />
</head>

<body onload="setDateRange()">
    <div class="header-7 bg-gradient2">
     
    <?php
if (isset($_GET['msg'])) {
    // Display the success alert with the link to the PDF
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Booked Success. We will contact you shortly. </strong>' . $_GET['msg'] . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}
?>

        <section class="hero-4 pt-lg-5 pb-sm-8 pb-6 pt-9">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="hero-title mb-0">Appointment</h1>
                        <p class="mb-4 fs-17 text-muted">Please fill out the following form and we will get back to you shortly</p>
                    </div>
                </div>
            </div>
            <div class="shape bottom">
                <svg width="1440px" height="40px" viewBox="0 0 1440 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="shape-b" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                       
                    </g>
                </svg>
            </div>
        </section>
    </div>

    <!-- Contact us start -->
    <section class="section pb-lg-7 py-4 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="card shadow-none">
                        <div class="card-body p-xl-5 p-0">
                            <h2 class="mb-2 mt-0 fw-medium">Let's Talk Further</h2>
                            <p class="mb-5">Please fill out the following form and we will get back to you shortly</p>

                            <form id="myForm" action="traitementbooking.php" method="POST" enctype="multipart/form-data">
             

    <div class="tab" id = "tab-1">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputName1" class="fw-medium form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Your Name" name="nom" required/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputName" class="fw-medium form-label">Phone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName" name="phone" placeholder="Phone" required/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-5">
                    <label for="exampleInputName" class="fw-medium form-label">Email <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName" name="email" placeholder="Email" required/>
                </div>
            </div>
        </div>
        <div class="index-btn-wrapper">
            <div class="btn btn-primary" onclick="run(1, 2);">Next</div>
        </div>
    </div>
    <div class="tab" id = "tab-2">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputName1" class="fw-medium form-label">PetName <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Your Name" name="petname" required/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputName" class="fw-medium form-label">Date of birth <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="exampleInputName" name="date_of_birth" placeholder="Date" required/>
                </div>
            </div>
            <div class="col-md-12">
            <div class="mb-6">
                    <label for="exampleInputName" class="fw-medium form-label">Type <span class="text-danger" required>*</span></label>
                    <?php
                        include_once('classe/type.class.php');
                        $p = new Type('localhost', 'root', '', 'veterinarian');
                        $p->RetreiveWith();
                    ?>
                </div>
            </div>
        </div>
        <div class="index-btn-wrapper">
        <div class="btn btn-primary" onclick="run(2, 1);">Previous</div>
            <div class="btn btn-primary" onclick="run(2, 3);">Next</div>
        </div>
    </div>
    <div class="tab" id = "tab-3">
        <div class="row mb-3">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Type Your Message to know more about Your case..." name="message"></textarea>
        </div>
            
         
        
        <div class="index-btn-wrapper">
            <div class="btn btn-primary" onclick="run(3, 2);">Previous</div>
            <div class="btn btn-primary" onclick="run(3, 4);">Next</div>
        </div>
    </div>

 

    <div class="tab" id = "tab-4">
    <div class="row">
        <div class="col-md-5">
            <div class="mb-3">
                <label for="exampleDate" class="fw-medium form-label">Date <span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="date" name="date"/>
                <span id="availability" style="font-size: small;"></span>
            </div>
        </div>
        <div class="col-md-5">
            <div class="mb-3">
                <label for="exampleInputName" class="fw-medium form-label">Service <span class="text-danger" required>*</span></label>
                <?php
                    include_once('classe/service.class.php');
                    $p = new Service('localhost', 'root', '', 'veterinarian');
                    $p->RetreiveWith();
                ?>
            </div>
        </div>
        <div class="col-md-10">
        <div class="mb-5">
            <label for="imageUpload" class="form-label">Upload Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        </div>
    </div>
    <div class="index-btn-wrapper">
        <div class="btn btn-primary" onclick="run(4, 3);">Previous</div>
        <button class = "btn btn-primary" type="submit" name="btn_ajouter" id="btn_ajouter" disabled>Send</button>
    </div>
</div>

</form>

                        </div>
                    </div>
                </div>

            

           
        </div>
    </section>
    <!-- Contact us end -->
  
    

  

    <!-- javascript -->
    
    <!-- vendor js -->
    <script>


function setDateRange() {
  var today = new Date();
  var nextYear = new Date();

  nextYear.setDate(today.getDate() + 30); // add 365 days to the current date

  var minDate = today.toISOString().split('T')[0];
  var maxDate = nextYear.toISOString().split('T')[0];
  
  document.getElementById("date").min = minDate;
  document.getElementById("date").max = maxDate;
}






document.getElementById('date').addEventListener('change', function() {
    var date = this.value;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'check_date.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        // Update the availability message
        var availability = document.getElementById('availability');
        availability.textContent = this.responseText;

        
        if (this.responseText === "The selected date is available.") {
            availability.style.color = 'green';
        } else {
            availability.style.color = 'red';
        }

        
        var submitButton = document.getElementById('btn_ajouter');
        if (this.responseText === "The selected date is available.") {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    };
    xhr.send('date=' + date);
});

    </script>

<script>
      // Default tab
      $(".tab").css("display", "none");
      $("#tab-1").css("display", "block");

      function run(hideTab, showTab){
        if(hideTab < showTab){ // If not press previous button
          // Validation if press next button
          var currentTab = 0;
          x = $('#tab-'+hideTab);
          y = $(x).find("input")
          for (i = 0; i < y.length; i++){
            if (y[i].value == ""){
              $(y[i]).css("background", "#ffdddd");
              return false;
            }
          }
        }

      

        // Switch tab
        $("#tab-"+hideTab).css("display", "none");
        $("#tab-"+showTab).css("display", "block");
        $("input").css("background", "#fff");
      }
    </script>
    <!-- theme js -->
    <script src="assets/js/theme.js"></script>


</body>

</html>