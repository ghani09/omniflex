<?php
if(isset($_POST["send_email"])){

  $userName = $_POST["user_name"];
  $userEmail=$_POST["user_email"];
 
  $phone = $_POST["user_contact"] ;
  $messege=$_POST["user_msg"];




  //mail
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
            
              We thank you very much for your interest in <b>Monosage</b>. We have noted down your contact details.
            <br><br>
              We are keen to discuss & understand your requirements.  
               
            <br><br>
              Also, if you like to have more information please contact us  at support@monosage.com  and we would be glad to provide the same.
            <br><br>
              Thanking you
            <br><br>
              Customer Engagement Team
            <br><br>
             <b>Monosage </b>
            </font>
        </div>
        ';
        
        $toOne = $userEmail ;
        
        $subjectOne = 'Thanks for contacting us';
        
        $headersOne = "MIME-Version: 1.0" . "\r\n"; 
        $headersOne .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headersOne .= 'From:gafoorbasha.shaik@monosage.com' . "\r\n";
        
        mail($toOne, $subjectOne, $customerReplay, $headersOne);
  
        


         echo '<script language="javascript">';
      
        echo 'window.location.href="thanks.php";';
        echo '</script>';
      
    }
  }
else{
   echo '0'; 
}



?>