<?php
    $EmailFrom   = "WESLEYS PLUMBING & CONSULTING ";
    $receiver = "caipheilunga@gmail.com";
    $Subject = "WESLEYS PLUMBING AND CONSULTING";
        
 	$first_name = htmlspecialchars($_POST["firstName"]);
 	$contactNumber = htmlspecialchars($_POST["contactNumber"]);
 	$subject = htmlspecialchars($_POST["subject"]);
 	$email_address = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
         
        
   $header="MIME-Version: 1.0" . "\r\n"; $header.='From:"ADR CHAMBERS"<info@adrc.co.za>'."\n"; $header.='Content-type:text/html;charset=UTF-8'."\n"; $header.='Content-Transfer-Encoding: 8bit';
         // validation
           $validationOK = true;
           if ( !$validationOK ) {
           print "<meta http-equiv=\"refresh\" content=\"0;URL=emailFail.php\">";
           exit;
          }
                               
                $Body .= "Name : ";
                $Body .= $first_name;
                $Body .= "\n";
                $Body .= "Contact Number: ";
                $Body .= $contactNumber;
                $Body .= "\n";
                $Body .= "Email Address: ";
                $Body .= $email_address;
                $Body .= "\n";
                $Body .= "Subject: ";
                $Body .= $subject;
                $Body .= "\n";
                $Body .= "Message: ";
                $Body .= $message;
                $Body .= "\n";
          
         
             // send email 
             $success = mail( $receiver, $Subject, $Body, "From: <$first_name>" );
         
             // redirect to success page 
             if ( $success ) {
                 print "<meta http-equiv=\"refresh\" content=\"0;URL=success.php\">";
                 } else {
                 print "<meta http-equiv=\"refresh\" content=\"0;URL=emailFail.php\">";   

          }
     ?>