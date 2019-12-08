<?php
   require './PHPMailerAutoload.php';
   require './config.php';
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      //echo var_dump($_POST);
      $mail_id = $_POST["mail_id"];


      $mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(EMAIL, 'Stalker');
$mail->addAddress($mail_id);     // Add a recipient
$mail->addAddress($mail_id);               // Name is optional
$mail->addReplyTo(EMAIL, 'Information');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}






   }
?>

<html>
<head>
</head>
<body>
   <form action="./mail.php" method="POST">
      <input type="text" name="mail_id">
      <input type="submit" value="submit">
   </form>
</body>
</html>