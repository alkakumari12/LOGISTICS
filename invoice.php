<?php
session_start();
if (isset($_GET['user_id'])) {
  $user_id = $_GET['user_id'];
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


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>invoice</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300|Nunito:400,700&display=swap" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>

<body>


  <!-- Invoice  -->
  
  <section>
    <div class="container " id="invoice">
      <div class="row">
        <div class="col-12 col-lg-9 col-xl-9 col-xxl-9">
        <div class="row ">
          <div class="text-center" style="margin-top:-30px;">
              <a href="#!">
                <img src="img/newlogo.png" class="img-fluid" alt="BootstrapBrain Logo" width="135" height="44">
              </a>
              
          </div>
          <!-- <div class="col-6 text-right">
            <br>
            <h2><b>INVOICE</b></h2>
          </div> -->
            <!-- <div class="col-6 ">
              <h2 class="text-uppercase  text-dark mt-3"><b>Invoice</b></h2>
            </div>
             -->
            <div class="d-flex ">
              <div class="row">
                <br>
                <h4><b>From:</b></h4>
                <ul>
                  <?php
                  $userid = $_SESSION['user_id'];
                  $get_user_details = "SELECT * FROM signup_frm WHERE user_id='$user_id'";
                  $result_user = mysqli_query($conn, $get_user_details);
                  $row_user = mysqli_fetch_assoc($result_user);
                  if ($row_user) {
                    $name = $row_user['name'];
                    $email = $row_user['email'];
                  
                   
                    echo "
            <li>First Name: $name</li>
            <li>Email: $email</li>
            <li>Contact: $contactno</li>
            <li>Pincode: $pincode</li>
            
            ";
                  }
                  ?>
                </ul>
              </div>
              <div class="row  " style="margin-left: 15rem;">
                <h4><b>Bill To:</b></h4>
                <ul>
                  <?php
                  if (isset($_GET['orderID'])) {
                    $orderID = $_GET['orderID']; // Get the orderID from the URL
                    $get_order_details = "SELECT * FROM orders WHERE orderID = $orderID";
                    $result_orders = mysqli_query($conn, $get_order_details);
                    $row = mysqli_fetch_assoc($result_orders);
                    if ($row) {
                      $receiver_name = $row['receiver_name'];
                      $receiver_mobileNumber = $row['receiver_mobileNumber'];
                     
                      $receiver_pincode = $row['receiver_pincode'];
                      $receiver_state = $row['receiver_state'];
                      echo "
                    <li> Name: $receiver_name</li>
                    <li> Mobile No.: $receiver_mobileNumber</li>
                   
                    <li> Pincode: $receiver_pincode</li>
                   
                    <li> State: $receiver_state</li>
                    ";
                    }
                  } else {
                    echo "OrderID not provided";
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <br>
          <section class="container">
            <table class="table table-secondary table-bordered">
              <tr>
                <td><b>Package_weight</b><BR><?php echo $row_user['package_weight']; ?> </td>
                <td><b>Package_Category</b><BR><?php echo $row_user['package_category']; ?></td>
                <td><b>Price</b><br><?php echo $row['price']; ?></td>
                <td><b>OrderID</b><br><?php echo $row['orderID']; ?></td>
              </tr>
            </table>

            <div class="text-right">
              <b>Amount to Pay:</b><span><b>&nbsp;₹&nbsp;<?php echo $row['price']; ?></b></span>
            </div>
                  
            <hr>
          </section>



          <section class="container" >
            <div>
              <br>
          
              <h6><b>Terms & Conditions</b></h6>
              <li>1. All prices are exclusive of taxes unless otherwise stated. The customer is responsible for any applicable taxes.</li>
              <li>2. These terms and conditions are governed by the laws of jurisdiction.</li>
            </div>


          
            </section>
            <br>  
            <br>
            <br>
                <h5 class="float-left"><b>Thank You!</b></h5>
                <h5 class="float-right">Account's Signature</h5>
            
        </div>
      </div>
    </div>
    <br>
    
    <div class="row">
      <div class="col-12 text-end text-center">
        <button type="submit" class="btn btn-primary mb-3" id="download">Download Invoice</button>
      </div>
    </div>
  </section>

  <script>
    window.onload = function() {
      document.getElementById("download").addEventListener("click", () => {
        const invoice = this.document.getElementById("invoice");
        html2pdf().from(invoice).set({
          margin: 1,
          filename: 'invoice.pdf',
          image: {
            type: 'png',
            quality: 0.98
          },
          html2canvas: {
            scale: 3,
            width: 620,
            height: 830
          },
          jsPDF: {
            unit: 'pt',
            format: 'a4',
            orientation: 'portrait'
          }
        }).save();
      });
    }
  </script>
</body>

</html>