<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $phone = ($_POST['phone']);
    $message = ($_POST['message']);

    $html = "<table><tr><td>name</td><td>$name</td></tr><tr><td>email</td><td>$email</td></tr><tr><td>phone</td><td>$phone</td></tr><tr><td>message</td><td>$message</td></tr></table>";

    include('smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->Username = "alka58406@gmail.com";
    $mail->Password = "accknfxzqfywxzav";
    $mail->SetFrom("alka58406@gmail.com");
    $mail->addAddress("alka58406@gmail.com");
    $mail->IsHTML(true);
    $mail->Subject = "New Enquiry";
    $mail->Body = $html;
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
if($mail->send()){
         echo "Thankyou for connecting with us";
  }else{
      echo"Message Error";
  }
}

?>