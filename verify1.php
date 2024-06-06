<?php
include('config.php');

function sendConfirmationEmail($email, $orderID)
{
    // Load Composer's autoloader
    require 'vendor/autoload.php'; // Assuming PHPMailer is installed via Composer

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'alka58406@gmail.com';                 // SMTP username
        $mail->Password   = 'acck nfxz qfyw xzav';                         // SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        // Recipients
        $mail->setFrom('alka58406@gmail.com', 'Alka Kumari');
        $mail->addAddress($email);                                  // Add a recipient

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = 'Order Confirmation';
        $mail->Body    = "Your order with ID: $orderID has been confirmed successfully.";

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

if (isset($_GET['orderID'])) {
    $orderID = $_GET['orderID'];

    // Retrieve order information
    $sql = "SELECT * FROM orders WHERE orderID = '$orderID'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['status'] == 0) {
                // Update order status
                $update = "UPDATE orders SET status = 1 WHERE orderID = '$orderID'";
                if (mysqli_query($conn, $update)) {
                    // Send confirmation email
                    $email = $row['email'];
                    $mailSent = sendConfirmationEmail($email, $orderID);

                    if ($mailSent) {
                        echo "<script> alert('Order confirmed successfully. Confirmation email sent.'); 
                                    window.location.href = 'track.php'; 
                              </script>";
                    } else {
                        echo "<script> alert('Order confirmed successfully. Error sending confirmation email.'); 
                                    window.location.href = 'track.php'; 
                              </script>";
                    }
                } else {
                    echo "<script> alert('Cannot run query to update order status.'); 
                                    window.location.href = 'track.php'; 
                              </script>";
                }
            } else {
                echo "<script> alert('Order already verified'); 
                                    window.location.href = 'track.php'; 
                              </script>";
            }
        }
    } else {
        echo "<script> alert('Cannot run query to retrieve order information.'); 
                        window.location.href = 'track.php'; 
                  </script>";
    }
}
?>
