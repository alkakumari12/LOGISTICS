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

include('header.php');
include('sidebar.php'); // Ensure this includes your admin header
?>

<section class="container" style="margin-top:-600px; width:900px;  margin-left:320px;">
    <div class="row table-responsive">
        <h3 class="text-success text-center mt-4">Customers</h3>
        <table class="table table-bordered mt-3">
            <tr>
                <th style="color:red; text-align:center;">Customer ID</th>
                <th style="color:red; text-align:center;">Name</th>
                <th style="color:red; text-align:center;">Email</th>
                <th style="color:red; text-align:center;">Action</th>
            </tr>
            <tbody>
                <?php
                $get_customers = "SELECT * FROM signup_frm";
                $result_customers = $conn->query($get_customers);

                if ($result_customers) {
                    if ($result_customers->num_rows > 0) {
                        while($row = $result_customers->fetch_assoc()) {
                            $customerID = $row['user_id'];
                            $name = $row['name'];
                            $email = $row['email'];
                           

                            echo "<tr>
                                    <td style='text-align:center;'>$customerID</td>
                                    <td>$name</td>
                                    <td>$email</td>
                                   <td>
                                       <a href='delete_customer.php?customerID=$customerID' class='btn btn-danger' onclick=\"return confirm('Are you sure you want to delete this customer?');\">Delete</a>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No customers found</td></tr>";
                    }
                } else {
                    echo "Error: " . $conn->error;
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
