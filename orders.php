<?php
session_start();
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
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

include('h.php');

?>

<section class="container">
    <div class="row table-responsive">
        <h3 class="text-success text-center mt-4">View Orders</h3>
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
                if (isset($user_id)) {
                    $get_order_details = "SELECT * FROM orders WHERE user_id = $user_id";
                    $result_orders = $conn->query($get_order_details);
                    if ($result_orders) {
                        if ($result_orders->num_rows > 0) {
                            $serial_number = 1; 
                            while($row = $result_orders->fetch_assoc()) {
                                $receiver_name = $row['receiver_name'];
                                $receiver_mobileNumber = $row['receiver_mobileNumber'];
                                $receiver_area = $row['receiver_area'];
                                $receiver_pincode = $row['receiver_pincode'];
                                $orderID = $row['orderID'];
                                $price = $row['price'];
                                $receiver_state = $row['receiver_state'];

                                echo "<tr>
                                        <td style='text-align:center;'>$serial_number</td>
                                        <td>$receiver_name</td>
                                        <td>$receiver_mobileNumber</td>
                                        <td>$receiver_area</td>
                                        <td>$receiver_pincode</td>
                                        <td>$orderID</td>
                                        <td>$price</td>
                                        <td>$receiver_state</td>
                                        <td>
                                            <a href='newin.php?orderID=$orderID' class='btn btn-primary'>View</a>
                                        </td>
                                        <td>
                                            <a href='cancel.php?orderID=$orderID' class='btn btn-danger' onclick=\"return confirm('Are you sure you want to cancel this order?');\">Cancel</a>
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

<?php
include('footer3.php');
?>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
