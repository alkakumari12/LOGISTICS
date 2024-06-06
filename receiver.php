<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistic</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300|Nunito:400,700&display=swap" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/b596566aca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .background-section {
            display: flex;
            background-image: url('./images/receiver.avif');
            background-repeat: no-repeat;
            background-size: cover;
            padding: 60px 0;
        }
        .content-wrapper {
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 10px;
            margin-top: 50px;
            margin-left: 63px;
        }
        .left-text {
            color: #333;
            margin-right: 30px;
        }
        .left-text h3 {
            font-size: 24px;
            font-weight: bold;
        }
        .left-text p {
            font-size: 16px;
            margin: 10px 0;
        }
    </style>
</head>

<body>
<?php
include('h.php');
?>

<section class="background-section">
    <div class="containern">
        <div class="row1">
            <div class="col-md-6 left-text">
                <div class="content-wrapper">
                <img src="./images/send.webp" style="padding-bottom:20px;">
                    <h3>Our Fastest Services For Customer</h3>
                    <p>1. Air Freight - Global Economy</p>
                    <p>2. Ocean Freight - PTL/FTL solutions</p>
                    <p>3. Land Transport - Grade A storage space</p>
                    <p>4. Cargo Transport - E2E SC solutions</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-wrapper">
                    <?php
                    if(isset($_SESSION['message'])) {
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['message']; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        <?php
                        unset($_SESSION['message']);
                    }
                    ?>

                    <form id="Form2" class="form-input-box" action="delivery_address.php" method="post">
                        <h3 class="pickup">Receiver Address:</h3>
                        <div class="mb-3">
                            <input name="receiver_name" class="form-control input-field" placeholder="Receiver's Name" onkeydown="return /[a-z A-Z]/i.test(event.key)" required>
                        </div>
                        <div class="mb-3">
                            <input name="receiver_mobileNumber" class="form-control input-field" placeholder="Receiver's Mobile Number" onkeypress="return validateNumber(event)" maxlength="10" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="receiver_pincode" class="form-control input-field" placeholder="Pincode" onkeypress="return validateNumber(event)" maxlength="6" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="receiver_area" class="form-control input-field" placeholder="Area" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="receiver_city" class="form-control input-field" placeholder="City" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="receiver_state" class="form-control input-field" placeholder="State" required>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="userid" value="<?php echo $_SESSION['user_id']?>" class="form-control input-field" required>
                        </div>
                        <div class="mybtn" id="mybtn-box">
                            <button type="button" class="submit-btn btn btn-primary" id="Back1"><a href="sender_section.php" class="text-white" style="text-decoration:none">Back</a></button>
                            <button type="submit" class="submit-btn btn btn-success" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if (key < 48 || key > 57) {
        return false;
    } else {
        return true;
    }
}

var Form1 = document.getElementById("Form1");
var Form2 = document.getElementById("Form2");
var Next1 = document.getElementById("Next1");
var Back1 = document.getElementById("Back1");
var progressss = document.getElementById("progressss");

function isForm1Valid() {
    var inputs = Form1.getElementsByTagName("input");
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].hasAttribute("required") && inputs[i].value.trim() === "") {
            return false;
        }
    }
    return true;
}

Next1.onclick = function() {
    if (isForm1Valid()) {
        Form1.style.left = "-450px";
        Form2.style.left = "0px";
        progressss.style.width = "240px";
    } else {
        alert("Please fill out all required fields of Pickup Address before proceeding.");
    }
}

Back1.onclick = function() {
    Form1.style.left = "0px";
    Form2.style.left = "-450px";
    progressss.style.width = "120px";
}
</script>

<script>
$(document).ready(function () {
    $(window).bind("scroll", function () {
        if ($(window).scrollTop() > 500) {
            $('header').addClass('active');
        } else {
            $('header').removeClass('active');
        }
    });
});
</script>

<?php
 include('footer3.php');
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
