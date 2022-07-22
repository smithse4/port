<!-- <?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $emailTo = "stephaniesmithdev@gmail.com";
    $headers = "From: ".$emailFrom;
    $txt = "You have receieved an email from".$name.".\n\n".$message;

    mail($emailTo, $subject, $txt, $headers);
    header('Location: contact.php?mailsend');
}

?> -->

<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
// $subject = $_POST['subject'];
$message= $_POST['message'];
$to = "stephaniesmithdev@gmail.com";
$subject = "Mail From stephaniesmith.dev";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: ".$emailFrom;
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>