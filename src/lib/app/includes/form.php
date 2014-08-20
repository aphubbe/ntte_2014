<?php

// define variables and set to empty values
$nameErr = $emailErr = $subjectErr = $commentErr = $captchaErr = "";
$name = $email = $dept = $subject = $comment ="";
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    
   if (empty($_POST["name"])) {
     $nameErr = $nameErrVerbose;
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = $nameErrVerbose1;
     }
   }
  
   if (empty($_POST["email"])) {
     $emailErr = $emailErrVerbose;
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailErr = $emailErrVerbose1;
     }
   }
   
   $dept = test_input($_POST["dept"]);
    
   if (empty($_POST["subject"])) {
     $subjectErr = $subjectErrVerbose;
   } else {
     $subject = test_input($_POST["subject"]);
   }

   if (empty($_POST["comment"])) {
     $commentErr = $commentErrVerbose;
   } else {
     $comment = test_input($_POST["comment"]);
   }
   
   // check reCAPTCHA information
        require_once(LIB_PATH . 'vendor/recaptcha/recaptcha-php-1.11/recaptchalib.php');
         
        $resp = recaptcha_check_answer ($strRecaptchaPrivateKey,
                                    $_SERVER["REMOTE_ADDR"],
                                    $_POST["recaptcha_challenge_field"],
                                    $_POST["recaptcha_response_field"]);
         
        // if CAPTCHA is correctly entered!                       
        if ($resp->is_valid) {
            // great success!            
        } else {
            $captchaErr = $captchaErrVerbose;
        }
        
    if (empty($nameErr) && empty($emailErr) && empty($subjectErr) && empty($commentErr) && empty($captchaErr)) {
        if (!empty($dept)) {
            $subject = $dept . ' : ' . $subject;
        }
        foreach ($aContactEmails as &$strMail) {
            mail($strMail,$subject,$comment . '<br><br>' . $name,"From: $email\r\nContent-Type: text/html; charset=ISO-8859-1\r\n");
        }
        $success = true;
    }
}

