<?php
if(isset($_POST['submit'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret ='6Lc-P9sUAAAAAEOXuuqiRKiV8yVeFj2PGHoLUdIG';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success):
            //contact form submission code
            $name = !empty($_POST['name'])?$_POST['name']:'';
            $email = !empty($_POST['email'])?$_POST['email']:'';
            $mobile = !empty($_POST['mobile'])?$_POST['mobile']:'';
            $subject = !empty($_POST['subject'])?$_POST['subject']:'';
            $message = !empty($_POST['message'])?$_POST['message']:'';
            
            $to = 'travelersboutique03@gmail.com';
            $subject_email = 'Travel Boutique Enquiry Form';
            $htmlContent = "
                <h3>Travel Boutique Contact Request details</h3>
                <p><b>Name: </b>".$name."</p>
                <p><b>Email: </b>".$email."</p>
                <p><b>Mobile: </b>".$mobile."</p>
                <p><b>Subject: </b>".$subject."</p>
                <p><b>Message: </b>".$message."</p>
            ";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
            //send email
            @mail($to,$subject_email,$htmlContent,$headers);
            
            //$succMsg = 'Your contact request have submitted successfully.';
			echo "<script>alert('Your contact request have submitted successfully.');</script>";
			echo "<script>window.location.href='index.php';</script>";
        else:
            //$errMsg = 'Robot verification failed, please try again.';
			echo "<script>alert('Robot verification failed, please try again.');</script>";
			echo "<script>window.location.href='contact.php';</script>";
        endif;
    else:
        //$errMsg = 'Please click on the reCAPTCHA box.';
		echo "<script>alert('Please click on the reCAPTCHA box.');</script>";
		echo "<script>window.location.href='contact.php';</script>";
    endif;
else:
    $errMsg = '';
    $succMsg = '';
endif;
?>