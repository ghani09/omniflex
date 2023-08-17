<?php 

if(isset($_POST["submit"])){

    $userName = $_POST["user_name"];
    $userEmail=$_POST["user_email"];
   
    $phone = $_POST["user_contact"] ;
    $messege=$_POST["user_msg"];
  
    // Sanitize and escape user inputs
    $userName = $conn->real_escape_string($_POST["user_name"]);
    $userEmail = $conn->real_escape_string($_POST["user_email"]);
    $phone = $conn->real_escape_string($_POST["user_contact"]);
    $message = $conn->real_escape_string($_POST["user_msg"]);

    // SQL query to insert data into the table
    $sql = "INSERT INTO user_data (name, email, phone, message) VALUES ('$userName', '$userEmail', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        $to = 'skghani9999@gmail.com';
  $subject ="WebEnquiry-#".rand(1000,9000)."" ;
  $fromName =  "".$userName."";
  $from = "".$userEmail."";
   
  $body = '  
 
      <div style="margin: 50px; font-family: arial, sans-serif; text-align: left; font-size:16px;">
      
          <p><b>Dear</b> Prospect,</p>
          <p>Please find attached the Enquiry details as per the details below:</p>
        
        <section style="padding:6px; border:1px solid black;border-radius:12px; width: 60%;">
        
        
        <table style="border-collapse: collapse; width: 100% ; font-size:16px; ">
        <tr  style="background-color: #ffff;">
          <th style="border: 1px solid #dddddd; padding: 8px;">Name</th>
          <td style="border: 1px solid #dddddd; padding: 8px;">'.$userName.'</td> 
        </tr>
        <tr  style="background-color: #dddddd;">
          <th style="border: 1px solid #dddddd; padding: 8px;">Phone</th>
          <td style="border: 1px solid #dddddd; padding: 8px;">'.$phone.' </td>    
        </tr>
        <tr  style="background-color: #ffff;">
          <th style="border: 1px solid #dddddd; padding: 8px;">Email</th>
          <td style="border: 1px solid #dddddd; padding: 8px;">'.$userEmail.' </td>
        </tr>
        <tr  style="background-color: #dddddd;">
       
          <th style="border: 1px solid #dddddd; padding: 8px;">Subject</th>
          <td style="border: 1px solid #dddddd; padding: 8px;">'.$messege. '</td> 
        </tr>
       
        </table>
        </section>
        <p> Regards </p><br>
        <p>Admin</p>
        </div>';
             


     // Thanks Return Mail Details Ends 
    
    
    // Set content-type header for sending HTML email 
    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
     
    // Additional headers 
    $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
    // $headers .= 'Cc: welcome2@example.com' . "\r\n"; 
  //  $headers .= 'Bcc:gafoorbasha.shaik@monosage.com' . "\r\n"; 
     
    // Send email 
    if(mail($to, $subject, $body, $headers))
    { 
        //success
        
        $customerReplay = '
        <div style="padding:8px;line-height: 1.4;">
            <font face="arial">
              Hi  <b>'.$userName.'</b>,
              <br><br>
            
              We thank you very much for your interest in <b>Omniflex</b>. We have noted down your contact details.
            <br><br>
              We are keen to discuss & understand your requirements.  
               
            <br><br>
              Also, if you like to have more information please contact us  at support@Omniflex.com  and we would be glad to provide the same.
            <br><br>
              Thanking you
            <br><br>
              Customer Engagement Team
            <br><br>
             <b>Omniflex </b>
            </font>
        </div>
        ';
        
        $toOne = $userEmail ;
        
        $subjectOne = 'Thanks for contacting us';
        
        $headersOne = "MIME-Version: 1.0" . "\r\n"; 
        $headersOne .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headersOne .= 'From:skghani9999@gmail.com' . "\r\n";
        
        mail($toOne, $subjectOne, $customerReplay, $headersOne);
  
        


         echo '<script language="javascript">';
      
        echo 'window.location.href="thanks.php";';
        echo '</script>';
      
    }
  }
else{
   echo '0'; 
}

   

    // Close the database connection
    $conn->close();
}
?>




?>






<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OmniFlex || Contact</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/plugins/all.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">



</head>

<body>

    <div class="main-wrapper">


        <!-- navbar starts -->
 
        <?php include "nav.php" ?>
    

    <!-- navbar ends -->

        <!-- Page Banner Start -->
        <div class="section page-banner-section" style="background-image: url(assets/images/bg/page-banner.jpg);">
            <div class="shape-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="944px" height="894px">
                    <defs>
                        <linearGradient id="PSgrad_0" x1="88.295%" x2="0%" y1="0%" y2="46.947%">
                            <stop offset="0%" stop-color="rgb(67,186,255)" stop-opacity="1" />
                            <stop offset="100%" stop-color="rgb(113,65,177)" stop-opacity="1" />
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" fill="rgb(43, 142, 254)" d="M39.612,410.76 L467.344,29.824 C516.51,-13.476 590.638,-9.93 633.938,39.613 L914.192,317.344 C957.492,366.50 953.109,440.637 904.402,483.938 L476.671,864.191 C427.964,907.492 353.376,903.109 310.76,854.402 L29.823,576.670 C-13.477,527.963 -9.94,453.376 39.612,410.76 Z" />
                    <path fill="url(#PSgrad_0)" d="M39.612,410.76 L467.344,29.824 C516.51,-13.476 590.638,-9.93 633.938,39.613 L914.192,317.344 C957.492,366.50 953.109,440.637 904.402,483.938 L476.671,864.191 C427.964,907.492 353.376,903.109 310.76,854.402 L29.823,576.670 C-13.477,527.963 -9.94,453.376 39.612,410.76 Z" />
                </svg>
            </div>
            <div class="shape-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="726.5px" height="726.5px">
                    <path fill-rule="evenodd" stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.302" fill="none" d="M28.14,285.269 L325.37,21.217 C358.860,-8.851 410.655,-5.808 440.723,28.14 L704.777,325.36 C734.846,358.859 731.802,410.654 697.979,440.722 L400.955,704.776 C367.132,734.844 315.338,731.802 285.269,697.978 L21.216,400.954 C-8.852,367.132 -5.808,315.337 28.14,285.269 Z" />
                </svg>
            </div>
            <div class="shape-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="515px" height="515px">
                    <defs>
                        <linearGradient id="PSgrad_0" x1="0%" x2="89.879%" y1="0%" y2="43.837%">
                            <stop offset="0%" stop-color="rgb(67,186,255)" stop-opacity="1" />
                            <stop offset="100%" stop-color="rgb(113,65,177)" stop-opacity="1" />
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" fill="rgb(43, 142, 254)" d="M19.529,202.280 L230.531,14.698 C254.559,-6.661 291.353,-4.498 312.714,19.528 L500.295,230.531 C521.656,254.558 519.493,291.353 495.466,312.713 L284.463,500.295 C260.436,521.655 223.641,519.492 202.281,495.465 L14.699,284.462 C-6.660,260.435 -4.498,223.640 19.529,202.280 Z" />
                    <path fill="url(#PSgrad_0)" d="M19.529,202.280 L230.531,14.698 C254.559,-6.661 291.353,-4.498 312.714,19.528 L500.295,230.531 C521.656,254.558 519.493,291.353 495.466,312.713 L284.463,500.295 C260.436,521.655 223.641,519.492 202.281,495.465 L14.699,284.462 C-6.660,260.435 -4.498,223.640 19.529,202.280 Z" />
                </svg>
            </div>
            <div class="shape-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="972.5px" height="970.5px">
                    <path fill-rule="evenodd" stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M38.245,381.102 L435.258,28.158 C480.467,-12.32 549.697,-7.964 589.888,37.244 L942.832,434.257 C983.23,479.466 978.955,548.697 933.746,588.888 L536.733,941.832 C491.524,982.23 422.293,977.955 382.103,932.745 L29.158,535.732 C-11.32,490.523 -6.963,421.293 38.245,381.102 Z" />
                </svg>
            </div>
            <div class="container">
                <div class="page-banner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title">Contact Us</h2>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ul>
                            </div>
                            <!-- Page Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner End -->

        <!-- Contact Info Start -->
        <div class="section contact-info-section section-padding-02">
            <div class="container">
                <!-- Contact Info Wrap Start -->
                <div class="contact-info-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <img src="assets/images/info-1.png" alt="">
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Give us a call</h5>
                                    <p>(+1) 400-630 123</p>
                                    <p>(+2) 500-950 456</p>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <img src="assets/images/info-2.png" alt="">
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Drop us a line</h5>
                                    <p>info@techwix-theme.com</p>
                                    <p>mail@techwix-tech.com</p>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <img src="assets/images/info-3.png" alt="">
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Visit our office</h5>
                                    <p>New York. 112 W 34th St caroline, USA</p>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                    </div>
                </div>
                <!-- Contact Info Wrap End -->
            </div>
        </div>
        <!-- Contact Info End -->

        <!-- Contact Start -->
        <div class="section techwix-contact-section techwix-contact-section-02 techwix-contact-section-03 section-padding-02">
            <div class="container">
                <!-- Contact Wrap Start -->
                <div class="contact-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- Contact Form Start -->
                            <div class="contact-form">
                                <div class="contact-form-wrap">
                                    <div class="heading-wrap text-center">
                                        <span class="sub-title"> request a quote</span>
                                        <h3 class="title">How May We Help You!</h3>
                                    </div>
                                    <form action="" method = "post">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <input type="text" name="user_name" placeholder="Name *">
                                                </div>
                                                <!-- Single Form End -->
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <input type="email"  name="user_email" placeholder="Email *" >
                                                </div>
                                                <!-- Single Form End -->
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <input type="text" name="user_contact"placeholder="Phone Number *">
                                                </div>
                                                <!-- Single Form End -->
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <textarea placeholder="Write A Message" name="user_msg"></textarea>
                                                </div>
                                                <!-- Single Form End -->
                                            </div>
                                            <div class="col-sm-12">
                                                <!--  Single Form Start -->
                                                <div class="form-btn">
                                                    <button class="btn"  name="sumbit" type="submit">Send Message</button>
                                                </div>
                                                <!--  Single Form End -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Contact Form End -->
                        </div>
                    </div>
                </div>
                <!-- Contact Wrap End -->
            </div>
        </div>
        <!-- Contact End -->

        <!-- Contact Map Start -->
        <div class="section contact-map-section">
            <div class="contact-map-wrap">
                <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=New%20York%20University%20&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="New York University" aria-label="New York University" frameborder="0"></iframe>
            </div>
        </div>
        <!-- Contact Map End -->

<!-- footer section starts -->
<?php include "footer.php" ?>

<!-- footer section ends -->

    </div>

    <!-- JS
    ============================================ -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/plugins/back-to-top.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/appear.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>


</html>