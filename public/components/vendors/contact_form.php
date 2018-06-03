<?php

if (isset($_POST['submit'])){
  $email = $_POST['email'];
  $date = $_POST['date'];
  $address = $_POST['address'];
  $message = $_POST['message'];

  $mailTo = "josh@joshuaollier.com";
  $headers = "From: ".$email;
  $txt = "You have received an email from ".$email.".\n\n".$message;
  $subject = "New message";

mail($mailTo, $subject, $txt, $headers);
header("Location: ../../pages/submission_success.php");


}

?>
