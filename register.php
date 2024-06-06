<?php
include('config.php');
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email)
{
    //Load Composer's autoloader
    require 'PHPMailer\Exception.php';
    require 'PHPMailer\PHPMailer.php';
    require 'PHPMailer\SMTP.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'alka58406@gmail.com';                  //SMTP username
        $mail->Password   = 'accknfxzqfywxzav';                     //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('alka58406@gmail.com', 'Alka');
        $mail->addAddress($email);     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email verified';
        $mail->Body    = "Signup Successful. Click the link below to verify the email address: <a  href='http://localhost/newlog/verify.php?email=$email'>Verify</a>";
    
        if ($mail->send()) {
            return true;
        } else {
            // Log error or display error message
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        }
    } catch (Exception $e) {
        // Log exception or display exception message
        echo 'Mailer Error: ' . $e->getMessage();
        return false;
    }
}

if (isset($_POST['submit_btn'])) {
    $name = $_POST["uname"]; // Change to the correct column name
    $email = $_POST["email"];
    $password = $_POST["password"];
    // $is_verified = $_POST["is_verified"];

    $sql = "SELECT * FROM signup_form WHERE username = '$username'"; // Change to the correct column name
    $result = mysqli_query($conn, $sql);
    $count_name = mysqli_num_rows($result);

    $sql = "SELECT * FROM signup_form WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if ($count_name == 0 && $count_email == 0) {
        if ($password) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO signup_form(name, email, password, is_verified) VALUES('$name', '$email', '$hash', 0)";
            $result = mysqli_query($conn, $sql) && sendMail($_POST['email']);
            if ($result) {
                header('Location:message.php');
            } else {
                echo '<script> alert("Failed to send verification email.");</script>';
            }
        } else {
            echo '<script> alert("Password do not match!!!");</script>';
        }
    } else {
        if ($count_name > 0) {
            echo '<script> alert("Username already exists!!!");</script>';
        }
        if ($count_email > 0) {
            echo '<script> alert("Email already exists!!!");</script>';
        }
    }
}
?>
