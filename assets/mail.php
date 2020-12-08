<?php

if(isset($_POST['send'])){
  // echo "<script>alert('clicked');</script>";

  $name = $_POST['name'];
  $name = filter_var($name,FILTER_SANITIZE_STRING);
  $email = $_POST['email'];
  $email = filter_var($email,FILTER_SANITIZE_EMAIL);
  $message = $_POST['message'];
  $message = filter_var($message,FILTER_SANITIZE_STRING);

  $to = "saurabh.lohar01@gmail.com";
  $subject = "Portfolio Contact Mail";
  $headers = "From:" .$email." " . "\r\n" ;

  if(mail($to,$subject,$message,$headers))
  {
    echo "<script>alert('Mail sent successfully!');</script>";

    Header("Location: ../");
  }
  else{

    Header("Location: ../");
echo "<script>alert('clicked');</script>";
  }


}

//
// $to = "somebody@example.com";
// $subject = "My subject";
// $txt = "Hello world!";
// $headers = "From: webmaster@example.com" . "\r\n" .
// "CC: somebodyelse@example.com";
//
// mail($to,$subject,$txt,$headers);
?>
