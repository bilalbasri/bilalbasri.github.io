<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
die(11111);
if(isset($_POST["submit"])) {
}
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;


  // Replace contact@example.com with your real receiving email address
$receiving_email_address = 'bilalelbasri9@gmail.com';

if(isset($_POST["submit"])) {


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'itforconsult@gmail.com';
    $mail->Password = 'bwnu orig anfg ykic';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('bilal-el-basri@hotmail.fr');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = 'ops';
    $mail->Body = 'opsBody';
    $mail->send();

    echo "
    Sent Succesfly
    ";
}
?>
