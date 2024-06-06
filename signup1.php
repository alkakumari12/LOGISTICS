<?php
include('config.php');
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email)
{
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'alka58406@gmail.com';
        $mail->Password   = 'acck nfxz qfyw xzav';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('alka58406@gmail.com', $email);
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Email verified';
        $mail->Body    = "Signup Successful 
            Click the link below to verify the email address <a href='http://localhost:8080/newlog/verify.php?email=$email'>Verify</a>";

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $is_verified = $_POST["is_verified"];

    $sql = "SELECT * FROM signup_frm WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);
    $count_name = mysqli_num_rows($result);

    $sql = "SELECT * FROM signup_frm WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if ($count_name == 0 && $count_email == 0) {
        if ($password) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO signup_frm(name, email, password, is_verified) VALUES('$name', '$email', '$hash', 0)";
            $result = mysqli_query($conn, $sql) && sendMail($_POST['email']);
            if ($result) {
                // Success action
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp-GatiVidhi</title>
    <style>
        body, html {
            width: 100%;
            height: 110%;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(./images/newsignup.jpeg);
            background-position: center;
            background-size: cover;
        }

        .containere {
            width: 100%;
            align-items: center;
            position: absolute;
        }
        .containere {
            width: 100%;
            min-height: 120vh;
            position: relative;
            background-position: center;
        }

        .sg {
            margin-left: 400px;
            height: 615px;
            width: 450px;
            background: #fff;
            padding: 81px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            z-index: 2;
            margin-top: 100px;
        }

        .sg h1 {
            font-size: 30px;
            margin-bottom: 25px;
            color: #3c00a0;
            position: relative;
        }

        .sg h1::after {
            content: '';
            width: 30px;
            height: 4px;
            border-radius: 3px;
            background: #3c00a0;
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translate(-50%);
        }

        .input-field {
            background: #eaeaea;
            margin: 15px 0;
            border-radius: 3px;
            display: flex;
            align-items: center;
        }

        input {
            width: 100%;
            background: transparent;
            border: 0;
            outline: 0;
            padding: 18px 15px;
        }

        .input-field i {
            margin: 16px;
            color: #999;
        }

        form p {
            text-align: left;
            font-size: 13px;
        }

        form p a {
            text-decoration: none;
            color: #3c00a0;
        }

        .btn-field {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .btn-field button {
            background: #3c00a0;
            color: #fff;
            height: 48px;
            border-radius: 15px;
            border: 0;
            outline: 0;
            cursor: pointer;
            transition: 1s;
            width: 100%;
        }

        .btn-field button.disable {
            background: #eaeaea;
            color: #555;
        }

        .popup {
            width: 400px;
            background: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.1);
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
        }

        .open-popup {
            visibility: visible;
            top: 50%;
            transform: translate(-50%, -50%) scale(1);
        }

        .popup img {
            width: 100px;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .popup h2 {
            font-size: 38px;
            font-weight: 500;
            margin: 30px 0 10px;
        }

        .popup button {
            width: 100%;
            margin-top: 50px;
            padding: 10px 0;
            background: #6fd649;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php include 'h.php'; ?>
    <div class="containere">
        <div class="sg">
            <h1 id="title" style="margin-top:-40px;">Sign Up</h1>
            <form id="forms" action="" method="post" onsubmit="return validateForm()">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" name="name" placeholder="Name" onkeydown="return/^[a-zA-Z\s]+$/.test(event.key)" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-phone"></i>
                        <input type="text" name="phone" placeholder="Phone Number" onkeypress="return validateNumber(event)" maxlength="10" minlength="10" required>
                    </div>

                    <div class="input-field">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-field">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        <input type="password" name="password" placeholder="Password" maxlength="10" required>
                    </div>
                </div>
                <div class="btn-field">
                    <button type="submit" id="signupBtn" name="submit">Sign Up</button>
                </div>

                <div class="popup" id="popup">
                    <img src="./images/tick.jpg">
                    <h2>Signup Successfully! Check Your Email</h2>
                    <button type="button" ondblclick="closePopup()">OK</button>
                </div>
            </form>
            <p style="margin-top:10px;">Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>

    <script>
        function validateNumber(e) {
            const pattern = /^[0-9]$/;
            return pattern.test(e.key);
        }

        function validateForm() {
            const form = document.getElementById('forms');
            const name = form.elements["name"].value;
            const phone = form.elements["phone"].value;
            const email = form.elements["email"].value;
            const password = form.elements["password"].value;

            if (name === "" || phone === "" || email === "" || password === "") {
                alert("All fields are required.");
                return false;
            }

            openPopup();
            return true;
        }

        function openPopup() {
            document.getElementById("popup").classList.add("open-popup");
        }

        function closePopup() {
            document.getElementById("popup").classList.remove("open-popup");
        }
    </script>

    <?php include 'footer3.php'; ?>
</body>
</html>
