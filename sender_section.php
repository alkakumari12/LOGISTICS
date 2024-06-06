<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickup Address</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .background-section {
            display: flex;
            background-image: url('./images/sender.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            padding: 60px 0;
        }
        .content-wrapper {
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 10px;
            margin-top: 30px;
            margin-left: 30px;
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
    <div class="containeru" >
        <div class="row1">
            <div class="col-md-6 left-text">
                <div class="content-wrapper">
                <img src="./images/send.webp" style="padding-bottom:20px;">
                    <h3>Our  Fastest Services For Customer</h3>
                    <p>1. Air Freight - Global Economy</p>
                    <p>2. Ocean Fright - PTL/FTL solutions</p>
                    <p>3. Land Transport - Grade A storage space</p>
                    <p>4. Cargo Transport - E2E SC solutions</p>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-wrapper">
                    <form id="Form1" action="pickup_address.php" method="post" class="form-input-box" required >
                        <center><h3 class="pickup">Start Shipping Now</h3></center><br>
                        <div class="mb-3">
                            <input type="text" name="pincode" class="form-control input-field" required placeholder="Pincode" onkeypress="return validateNumber(event)" maxlength="6" minlength="6">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="area" class="form-control input-field" required placeholder="Area" onkeydown="return/^[a-zA-Z\s]+$/.test(event.key)">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="city" class="form-control input-field" required placeholder="City" onkeydown="return/^[a-zA-Z\s]+$/.test(event.key)">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="userid" value="<?php echo $_SESSION['user_id']?>" class="form-control input-field" required placeholder="ID"> 
                        </div>
                        <div class="mb-3">
                            <select name="package_weight" class="form-control input-field" required>
                                <option value="" disabled selected>Package Weight</option>
                                <option>Extra Small(500gm)</option>
                                <option>Small(500gm-2kg)</option>
                                <option>Medium(2kg-5kg)</option>
                                <option>Large(5kg-more)</option>
                            </select>                            
                        </div>
                        <div class="mb-3">
                            <select name="package_category" class="form-control input-field" required>
                                <option value="" disabled selected>Package Category</option>
                                <option>Baby Care</option>
                                <option>Document</option>
                                <option>Electronics</option>
                                <option>Household Items</option>
                            </select>
                        </div>
                        <div class="mybtn" id="mybtn-box">
                            <center><button type="submit" class="submit-btn btn btn-primary" name="next" id="Next1">Next</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
    var Form1 = $("#Form1");

    $("#Next1").click(function(event) {
        event.preventDefault();
        
        // Check if Form1 is valid
        if (isForm1Valid()) {
            // If Form1 is valid, submit the form
            Form1.submit();
        } else {
            // If Form1 is not valid, display an alert message
            alert("Please fill out all required fields of Pickup Address before proceeding.");
        }
    });

    // Function to check if all required fields in Form1 are filled out
    function isForm1Valid() {
        var inputs = Form1.find("input[required], select[required]");
        var isValid = true;

        // Loop through each input field
        inputs.each(function() {
            // Check if the field is required and empty
            if ($(this).val().trim() === "") {
                isValid = false;
                return false; // Break out of the loop if any field is empty
            }
        });

        return isValid;
    }
});
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


<script>
    function validateNumber(e) {
        const pattern = /^[0-9]$/;
        return pattern.test(e.key);
    }
</script>

<?php 
    include('footer3.php');
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
