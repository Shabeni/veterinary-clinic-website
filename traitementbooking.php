<?php 
require('fpdf.php');

class PDF extends FPDF
{
    private $email;
    private $phone;

    function __construct($location,$email, $phone) {
        parent::__construct();
        $this->address = $location;
        $this->email = $email;
        $this->phone = $phone;
    }

    function Footer()
    {
        // Go to 1.5 cm from bottom
        $this->SetY(-15);
        // Select Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Print centered page number
      
        // Print email and phone
        $this->Ln(5); // Line break
        $this->Cell(0, 10, 'Address: '.$this->address.' Email: '.$this->email.' Phone: '.$this->phone, 0, 0, 'C');
    }
}



// Start output buffering
ob_start();

if(isset($_POST['btn_ajouter'])){
    include ('classe/user.class.php');
    $p=new Appointment('localhost','root','','veterinarian');
    include ('./admin/CLASSE/contact.class.php');
    $t=new Contact('localhost','root','','veterinarian');
   
    $p->date=$_POST['date'];
    $p->petname=$_POST['petname'];
    $p->date_of_birth=$_POST['date_of_birth'];
    $p->time="";
    $p->price="";
    $p->typeid=$_POST['type_id'];
    $p->service_id=$_POST['type_service'];
    $p->status='Pending';
    $p->name=$_POST['nom'];
    $p->email=$_POST['email'];
    $p->phone=$_POST['phone'];
    $p->message=$_POST['message'];
    $p->verify_token=md5(rand());

    // Handle the image upload
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];
    
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    $imageExtension = strtolower($imageExtension);
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo "<script> alert('Invalid Image Extension'); </script>";
    }
    else if($fileSize > 20000000){
      echo "<script> alert('Image Size Is Too Large'); </script>";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;
    
      move_uploaded_file($tmpName, 'uploads/' . $newImageName);
      $p->image=$newImageName;
    }

    if($p->CreateAppointment()) {
        // Create a new FPDF object
        $pdf = new FPDF();
        $contact = $t->getcontactinfo();
        $pdf = new PDF($contact->location, $contact->mail, $contact->number);
        // Add a new page
        $pdf->AddPage();
        $pdf->Image('./assets/images/logo.png',10,6,30);
       
        // Set font
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(0,10,date('Y-m-d H:i:s'),0,1,'R');
        // Set fill color
        $pdf->Ln(20); // Add a line break for spacing
        
        $pdf->SetFont('Arial','B',17);
        // Write form data to PDF
        $pdf->Cell(0,10,'Booking Form', 0, 1,'C');
        $pdf->SetFont('Arial','',14); // Change the font size for the content
        
        $pdf->Cell(40,10,'Name: '.$p->name, 0, 1);
        $pdf->Cell(40,10,'Pet Name: '.$p->petname, 0, 1);
        $pdf->Cell(40,10,'Date: '.$p->date, 0, 1);
        $pdf->Cell(40,10,'Status: '.$p->status, 0, 1);
        $pdf->Cell(40,10,'Email: '.$p->email, 0, 1);

        $pdf->SetFillColor(255,255,204); // RGB color code for soft yellow
        $pdf->Cell(40,10,'Token: '.$p->verify_token, 0, 1);
        
        // Add a note
        $pdf->Ln(10); // Add a line break for spacing
        $pdf->SetFont('Arial','B',12); // Set font for the note
        $pdf->Cell(0,10,'Note: Use your email and this token to check your appointment status.', 0, 1, 'C'); // Add the note
       
    
        $unique_id = uniqid();
        $file_name = "./pdf/{$unique_id}.pdf";
        

        // Clear the output buffer and save the PDF to a file
        ob_end_clean();
       
        $pdf->Output('F', $file_name);
        header('Location: contact.php?msg=<a href="'.$file_name.'">Download PDF</a>');
    }
    else echo 'Echec d\'ajout';
}


?>
