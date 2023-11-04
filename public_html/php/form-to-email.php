<?php 
if(isset($_POST['submit'])){
    $to = "makrik789@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    
    $subject = "Portfolio Hire form submission";
    $subject2 = "Copy of your form submission - no-reply :)";
    
    $message = $_POST['email'] . "\n" . $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Hey there!\nDear " . $first_name . ".\nThanks for your email. Here is a copy of it:" . "\n\n" . $_POST['message'];

    $headers = "From: " . $from;
    $headers2 = "Mail sent to: " . $to;
    
    if (mail($to,$subject,$message,$headers)) {
        //echo "Mail Sent. Thank you " . $first_name . ", I will contact you shortly.";
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        header('Location: ../contact-thank-you.html');
        exit;
    } else {
        echo("Email sending failed...");
    }
    // You cannot use header and echo together. It's one or the other.
    
    }
?>