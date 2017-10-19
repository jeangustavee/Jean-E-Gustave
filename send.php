<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $availability = $_POST['availability'];
    $hear = $_POST['hear'];
    $phone = $_POST['phone'];
    $saving = $_POST['saving'];
    $message = $_POST['message'];
    $idea = $_POST['idea'];
    $logo = $_POST['logo'];
    $website = $_POST['website'];
    $social = $_POST['social'];

    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter a valid email address.';
            $msgClass = 'errordiv';
        }else{
            // Recipient email
            $toEmail = 'hey@anteanstudios.com';
            $emailSubject = 'Launch Fast Challenge Submitted by '.$name;
            $htmlContent = '<h2>Launch Fast Challenge Submitted</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Location</h4><p>'.$location.'</p>
                <h4>Idea</h4><p>'.$idea.'</p>
                <h4>How you heard about us?</h4><p>'.$hear.'</p>
                <h4>availability</h4><p>'.$availability.'</p>
                <h4>Phone</h4><p>'.$phone.'</p>
                <h4>Saving</h4><p>'.$saving.'</p>
                <h4>Logo</h4><p>'.$logo.'</p>
                <h4>Website</h4><p>'.$website.'</p>
                <h4>Social</h4><p>'.$social.'</p>
                <h4>Message</h4><p>'.$message.'</p>';

            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Your information has been submitted successfully !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Your request submission failed, please try again.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
?>
