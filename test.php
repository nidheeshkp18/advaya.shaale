<?php 
phpinfo();
include("class.phpmailer.php");
include("class.smtp.php");

  $to = "Suhas.vishwas92@gmail.com"; // this is your Email address
$from = $_POST['email']; // this is the sender's Email address
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$formg = $_POST['formg'];
$pancardNo = $_POST['pancardNo'];
$address = $_POST['address'];
$subject = "Donataion form submission";
$message =  "Name: ".$name . "\n\n" ."Email: ". $email  . "\n\n" ."Phone: ". $phone . "\n\n" ."80G Form Required: ". $formg  . "\n\n" ."Pancard No: ". $pancardNo  . "\n\n". $address  . "\n\n";




if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']))
{
echo "All fields required";
}
else{
 
$headers = "From:" . $from;
$result = mail($to, $subject, $message, $headers );
        if ( $result ) {
          echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        } else {
            echo 'FAIL';
        }
 
}
   
   ?> 
