<?php 
include('db_connect.php'); // Include your database connection file
include('header.php');
include('sidebar.php');

if(isset($_GET['id'])) {
    $user_id = $_GET['id']; // Get the user ID from the URL
} else {
    echo '<script type="text/javascript">alert("User ID not provided")</script>';
    exit; // Exit if user ID is not provided in the URL
}

if(isset($_POST['update'])) {
    $user_id = $_POST['user_id'];
     $pincode = $_POST['pincode'];
     $area = $_POST['area'];
     $city = $_POST['city'];
     $package_category = $_POST['package_category'];
     $package_weight = $_POST['package_weight'];

    $query = "UPDATE user SET pincode='$pincode', area='$area', city='$city', package_category='$package_category', package_weight='$package_weight' WHERE user_id='$user_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run) {
        echo '<script type="text/javascript">alert("Data Updated"); window.location.href = "parcel_list.php?page=parcel_list";</script>';
       

    } else {
        echo '<script type="text/javascript">alert("Data not Updated")</script>';
     }
 }

// Fetch data from the database 
// if(isset($_GET['user_id'])) {
//     $user_id = $_GET['user_id'];
//     $query = "SELECT * FROM user WHERE user_id='$user_id'";
//     $result = mysqli_query($conn, $query);
//     $query_run = mysqli_fetch_assoc($result);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update File</title>
    <style>
        body {
           
            background-repeat: no-repeat;
            background-size: cover;
           
        }
        input {
            width: 60%;
            height: 5%;
            border: 1px;
            border-radius: 0.5px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
        
    </style>
</head>
<body>
    
    <?php
         $query1= "SELECT * FROM user WHERE user_id='$user_id'";
         $result1 = mysqli_query($conn, $query1);
         $total1 = mysqli_num_rows($result1);
         $query_run1 = mysqli_fetch_assoc($result1);
    ?>
        <form method="POST" style="margin-top:-600px; margin-left:530px;">
        <h1>Edit Parcel</h1>

            <input type="number" name="user_id" placeholder="Enter Your id" value="<?php echo $query_run1['user_id']; ?>" required><br>
            <input type="number" name="pincode" placeholder="Enter Your pincode" required value="<?php echo $query_run1['pincode']; ?>"><br>
           <input type="text" name="area" placeholder="Enter Your area" required value="<?php echo $query_run1['area']; ?>"><br>
            <input type="text" name="city" placeholder="Enter Your city" required value="<?php echo $query_run1['city']; ?>"><br>
            <input type="text" name="package_category" placeholder="Enter package Category" required value="<?php echo $query_run1['package_category']; ?>"><br>
            <input type="text" name="package_weight" placeholder="Enter Your package weight" required value="<?php echo $query_run1['package_weight']; ?>"><br>
            <input type="submit" name="update" value="Update"  style="width:100px;  height:40px; margin-left:30px;">
           
        </form>
    
   
</body>
</html>
