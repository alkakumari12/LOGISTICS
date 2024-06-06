<?php
include('config.php');

if (isset($_GET['email'])){
    $sql = "SELECT * FROM signup_frm WHERE email = '$_GET[email]'";
    $result = mysqli_query($conn, $sql);
    if($result){
        if(mysqli_num_rows($result)==1){
            $result_fetch = mysqli_fetch_array($result);
            if($result_fetch['is_verified']==0){
                $update = "UPDATE signup_frm SET is_verified = 1 WHERE email = '$result_fetch[$email]'";
                if(mysqli_query($conn, $update)){
                    echo "<script> alert('Email Verify Successful'); 
                                window.location.href = 'login.php'; 
                          </script>";
                }
                else{
                    echo "<script> alert('Cannot Run Query'); </script>";
                }
            }
            else{
                echo "<script> alert('Email already signup'); 
                                window.location.href = 'login.php'; 
                      </script>";
            }
        }
    }
    else{
        echo "<script> alert('Cannot Run Query'); </script>";
    }
}
?>
