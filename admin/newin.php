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
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>

<body>


  <!-- Invoice  -->
  


  
    <div class="container " id="invoice">
      <div class="row">
        <div class="col-12 col-lg-9 col-xl-9 col-xxl-9">
        <div class="row ">
          <div class="text-left" style="margin-top:-150px; background: rgb(238,174,202);
              background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);">
              <a href="#!">
                <img src="..\images\gatividhi.png" class="img-fluid" alt="" width="120px;" height="40px; " >
              </a>
              <h3 style="float:right; margin-top:50px; margin-right:20px;">Invoice<p>#9876543210</p></h3>
              
              <hr style="margin-top:-10px;">
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
              <div class="row" style="margin-left: 1rem; margin-top: 50px; ">
                <br>
                <h4><b>Sender:</b></h4>
                <ul>
                <?php
$get_name = "SELECT name FROM signup_frm";
$result_sender = mysqli_query($conn, $get_name);
$row_sender = mysqli_fetch_assoc($result_sender);

$get_user_details = "SELECT * FROM user";
$result_user = mysqli_query($conn, $get_user_details);
$row_user = mysqli_fetch_assoc($result_user);

if ($row_sender && $row_user) {
    $name = $row_sender['name'];
    $address = $row_user['area'];
    $pincode = $row_user['pincode'];

    echo "
        Name: $name<br>
        Address: $address<br>
        Pincode: $pincode<br>
    ";
}
?>

                </ul>
              </div>
              <div class="row  " style="margin-left: 13rem; margin-top: 50px;">
                <h4><b>Receiver:</b></h4>
                <ul>
                  <?php
                    $get_order_details = "SELECT * FROM orders";
                    $result_orders = mysqli_query($conn, $get_order_details);
                    $row = mysqli_fetch_assoc($result_orders);
                    if ($row) {
                      $receiver_name = $row['receiver_name'];
                      $receiver_area = $row['receiver_area'];
                     
                      $receiver_mobileNumber = $row['receiver_mobileNumber'];
                     
                      echo "
                            Name: $receiver_name<br>
                            Address: $receiver_area<br>
                            Contact: $receiver_mobileNumber<br>
                   
                  
                          ";
                    }
                   else {
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
                <td><b>weight</b><BR><?php echo $row_user['package_weight']; ?> </td>
                <td><b>package_category</b><BR><?php echo $row_user['package_category']; ?></td>
                <td><b>Price</b><br><?php echo $row['price']; ?></td>
                
              </tr>
            </table>

            <div class="text-right">
              <b>Amount to Pay:</b><span style="color:red;"><b>&nbsp;₹&nbsp;<?php echo $row['price']; ?></b></span>
            </div>
                  
            <hr>
          </section>



          <section class="container" >
            <div>
              <br>
          
              <h6><b>Terms & Conditions</b></h6>
              1. All prices are exclusive of taxes unless otherwise stated. The customer is responsible for any applicable taxes.<br>
              2. These terms and conditions are governed by the laws of jurisdiction.
            </div>


          
            </section>
            <br>  
            
            
           
                <h5 class="text-center"><b>Thank You!</b></h5><br><br>
                <h5 class="float-right" style="float:right;">Account's Signature</h5>
            
        </div>
      </div>
    </div>
    <br>
    
    <div class="row">
      <div class="col-12 text-end text-center">
        <button type="submit" class="btn btn-primary mb-3" id="download">Download Invoice</button>
      </div>
    </div>


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