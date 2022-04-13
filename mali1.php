<?php 
if(isset($_POST['submit'])){
    $to = "pavankumar.m.933@gmail.com.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $subject = "Form submission";
    $message = $name . "\n\n" . $email  . "\n\n" . $phone . "\n\n" . $company  . "\n\n" $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>