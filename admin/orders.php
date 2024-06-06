<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$database = "registration";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 // Ensure this line includes your header
?>
<?php
include ('header.php');
include('sidebar.php');?>
<section class="container2" >
    <div class="row2 table-responsive" style="
    margin-left: 297px; width:950px; margin-top: -600px;">
        <h3 class="text-success text-center mt-4">Order Details</h3>
        <table class="table table-bordered mt-3">
            <tr>
                <th style="color:red; text-align:center;">Sr.No.</th>
                <th style="color:red; text-align:center;">Receiver Name</th>
                <th style="color:red; text-align:center;">Receiver Number</th>
                <th style="color:red; text-align:center;">Receiver Area</th>
                <th style="color:red; text-align:center;">Receiver Pincode</th>
                <th style="color:red; text-align:center;">Order ID</th>
                <th style="color:red; text-align:center;">Price</th>
                <th style="color:red; text-align:center;">Receiver State</th>
                <th style="color:red; text-align:center;">Receipts</th>
                <th style="color:red; text-align:center;">Action</th>
            </tr>
            <tbody>
                <?php
                if (isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id'];
                    $get_order_details = "SELECT * FROM orders WHERE user_id = $user_id";
                    $result_orders = $conn->query($get_order_details);
                    if ($result_orders) {
                        if ($result_orders->num_rows > 0) {
                            $serial_number = 1; 
                            while($row = $result_orders->fetch_assoc()) {
                                echo "<tr>
                                        <td style='text-align:center;'>{$serial_number}</td>
                                        <td>{$row['receiver_name']}</td>
                                        <td>{$row['receiver_mobileNumber']}</td>
                                        <td>{$row['receiver_area']}</td>
                                        <td>{$row['receiver_pincode']}</td>
                                        <td>{$row['orderID']}</td>
                                        <td>{$row['price']}</td>
                                        <td>{$row['receiver_state']}</td>
                                        <td>
                                            <a href='newin.php?orderID={$row['orderID']}' class='btn btn-primary'>View</a>
                                        </td>
                                        <td>
                                            <a href='cancel.php?orderID={$row['orderID']}' class='btn btn-danger' onclick=\"return confirm('Are you sure you want to cancel this order?');\">Cancel</a>
                                        </td>
                                      </tr>";
                                $serial_number++; 
                            }
                        } else {
                            echo "<tr><td colspan='10'>No orders found</td></tr>";
                        }
                    } else {
                        echo "Error: " . $conn->error;
                    }
                } else {
                    echo "<tr><td colspan='10'>User ID not set</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>


<script src="js/main.js"></script>
<script>
    $(document).ready(function () {
        $(window).bind("scroll", function () {
            if ($(window).scrollTop() > 500) {
                $('header').addClass('active');
            } else {
                $('header').removeClass('active');
            }
        })
    })
</script>


