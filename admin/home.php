<?php
include('db_connect.php');
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");
    exit;
}

// Fetch number of customers
$customer_query = "SELECT COUNT(*) AS customer_count FROM signup_frm";
$customer_result = $conn->query($customer_query);
$customer_count = $customer_result->fetch_assoc()['customer_count'];

// Fetch number of orders
$order_query = "SELECT COUNT(*) AS order_count FROM orders";
$order_result = $conn->query($order_query);
$order_count = $order_result->fetch_assoc()['order_count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<body style="background-color:gray;">
<div class="container" style="margin-top: -600px;">
    <div class="row">
        <div class="col-md-4" style="margin-left:320px;"><br><br><br><br><br>
            <div class="card" style="height:200px;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h5 class="card-title"><i class="fas fa-users"></i> Total Customers</h5>
                    <p class="card-text display-4"><?php echo $customer_count; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4"><br><br><br><br><br>
            <div class="card" style="height:200px;">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h5 class="card-title"><i class="fas fa-shopping-cart"></i> Total Orders</h5>
                    <p class="card-text display-4"><?php echo $order_count; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
