<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Generate unique order ID
    $track_no = "TRACK_" . uniqid(); // Adding a prefix for better identification

    // Collect form data
    $name = $_POST['name'];
    $mobileNumber = $_POST['mobileNumber'];
    $pincode = $_POST['pincode'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $package_category = $_POST['package_category'];
    $package_weight = $_POST['package_weight'];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO pickup_address (track_no, name, mobileNumber, pincode, area, city, package_category, package_weight) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("ssssssss", $track_no, $name, $mobileNumber, $pincode, $area, $city, $package_category, $package_weight);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        // Close statement
        $stmt->close();

        // Redirect to the tracking page with the order ID
        header("Location: track.php?track_no=$track_no");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .ship-cont{
            display: flex;
        } 
        .right-process{
            width: 50%;
            margin-top: 70px;
        }
        .right-process img{
            height: 700px;
        }
        .process{
                margin-top: 100px;
                margin-bottom: 30px;
                width: 50%;
        }
        form {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 600px;
            height: 700px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        form:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        /* Add some additional styling to make the form more visually appealing */


        .sh-but{ 
            margin-top:30px;
            margin-left:230px;
        }



        @media  only screen and (min-width:360px) and (max-width: 767px) {
            .ship-cont{
                flex-direction: column;
            }
            .right-process{
               
                width: 100%;
                height: 560px;
            } 
            .process{
                    width: 10px;
                    height: auto;
            }   
            .right-process img{
                    height: 500px;
            }
            form {
                    width: 370px;
                    margin-left: 10px;
                    margin-top: -177px;
            }
            .sh-but{ 
            margin-top:30px;
            margin-left:110px;
        }
        }
        @media (min-width: 768px) and (max-width: 998px)
        {
            .ship-cont{
                flex-direction: row;
            }
            .right-process{
               
                width: 50%;
                height: 560px;
            } 
            .process{
                    margin-top: 312px;
                    width: 57%;
                    height: auto;
            }   
            .right-process img{
                    margin-top: 130px;
                    height: 500px;
            }
            form {
                    width: 370px;
                    margin-left: 10px;
                    margin-top: -177px;
            }
            .sh-but{ 
            margin-top:30px;
            margin-left:110px;
        }
    }
    </style>
    <title>Shipping Details-GatiVidhi</title>
</head>
<body>

    <?php include 'h.php' ?>


    <div class="ship-cont">
        <div class="right-process"><img src="./images/shipping.avif"></div>
        
        <div class="process">
        <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" onkeydown="return/^[a-zA-Z\s]+$/.test(event.key)" required>
        
        <label for="mobileNumber">Mobile Number:</label>
        <input type="text" id="mobileNumber" name="mobileNumber" onkeypress="return validateNumber(event)" maxlength="10" minlength="10" required>

        <label for="pincode">Pincode:</label>
        <input type="text" id="pincode" name="pincode" onkeypress="return validateNumber(event)" maxlength="6" minlength="6" required>

        <label for="area">Area:</label>
        <input type="text" id="area" name="area" required>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" onkeydown="return/^[a-zA-Z\s]+$/.test(event.key)" required>

        <label for="packageCategory">Package Category:</label>
        <input type="text" id="packageCategory" name="package_category" required>

        <label for="packageWeight">Package Weight:</label>
        <input type="number" id="packageWeight" name="package_weight" step="0.01" onkeypress="return validateNumber(event)" maxlength="10" minlength="10" required>

        <button type="submit" class="sh-but">Shipping</button>
    </form>
    </div>
</div>

    <?php include 'footer3.php' ?>

    <script>
    function validateNumber(e) {
        const pattern = /^[0-9]$/;
        return pattern.test(e.key);
    }
</script>
</body>
</html>
