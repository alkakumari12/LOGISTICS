<?php
include('config.php');

if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM signup_frm WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        if ($row['is_verified'] == 1) {
            if (password_verify($_POST["password"], $row["password"])) {
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION['auth'] = true;
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['name'] = $row['name'];
                header("location:index.php");
                exit();
            } else {
                echo '<script> alert("Incorrect password");</script>';
            }
        } else {
            echo '<script> alert("Email not verified");</script>';
        }
    } else {
        echo '<script> alert("Invalid email");</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn-GatiVidhi</title>
    <style>
 .container9{
            height: 100%;
            width: 100%;
            background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)) ,url(./images/newsignup.jpeg);
            background-position: center;
            background-size: cover;
            position: absolute;
    }

.container9{
    width: 100%;
    min-height: 100vh;
    position: relative;
    background-position: center;
}
.form-box{
    width: 450px;
    height: 450px;
    position: absolute;
    top: 58%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    padding: 50px 60px 50px;
    text-align: center;
}
.form-box h1{
    font-size: 30px;
    margin-bottom: 40px;
    color: #3c00a0;
    position: relative;
}
.form-box h1::after{
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
.input-field{
    background: #eaeaea;
    margin: 15px 0;
    border-radius: 3px;
    display: flex;
    align-items: center;
    max-height: 65px;
    transition: max-height 0.5s;
    overflow: hidden;
}
input {
            width: 100%;
            background: transparent;
            border: 0;
            outline: 0;
            padding: 18px 15px;

        }
.input-field i{
    margin: 18px;
    color: #999;
}
form p{
    text-align: left;
    font-size: 13px;
}
form p a{
    text-decoration: none;
    color: #3c00a0;
}
.btn-field{
    width: 100%;
    
    display: flex;
    justify-content: space-between;

}
.btn-field button{
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
.input-group{
    height: auto;
    margin-left: 20px;
}
.btn-field button.disable{
    background: #eaeaea;
    color: #555;
}

@media  only screen and (min-width:360px) and (max-width: 767px) {
.form-box{
    width: 340px;
    height: 450px;
   
}
.input-group{
    height: auto;
    margin-left: 0px;
}
}

</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<?php 
  include ('h.php');
?>

<div class="container9">
    <div class="form-box">
        <h1 id="title">Login to Continue</h1>
        <form name="forml" action="" onsubmit="return invalid()" method="post">
            <div class="input-group">
                <div class="input-field">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="email" name="email" placeholder="Email">
                </div> 

                <div class="input-field">
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    <input type="password" name="password" placeholder="Password">
                </div> 
            </div>
            <div class="btn-field">
                <button type="submit" id="signupBtn" name="submit">Log In</button>  
            </div>
        </form>
        <p style="margin-top:10px;">Don't have an account? <a href="signup1.php">Sign Up</a></p>
    </div>
</div>

<?php 
  include ('footer3.php');
?>

<script>
    function invalid(){
        var email = document.forml.email.value;
        var password = document.forml.password.value;
        if(email.length=="" && password.length==""){
            alert("Email & password field is empty");
            return false;
        } else {
            if(email.length==""){
                alert("Email field is empty!!!");
                return false;
            }
            if(password.length==""){
                alert("Password field is empty!!!");
                return false;
            }
        }
    }
</script>   
</body>
</html>
