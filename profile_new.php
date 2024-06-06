<?php 
session_start();
include_once('config.php');
if (strlen($_SESSION['user_id']==0)) {
  header('location:logout.php');
  } else{
?>

<?php
include('h.php');
?>

<?php 
$user_id=$_SESSION['user_id'];
$query=mysqli_query($conn,"select * from signup_frm where user_id='$user_id'");
while($result=mysqli_fetch_array($query))
{?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            height: 100%;
            width: 100%;
            background-image: url('./images/sender.jpg');
            background-size: cover;
            background-repeat: no-repeat;
           
        }
        .card-containerr {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 85px;
        }
        .card {
            height: 530px;
            width:600px;
        }
        .button {
            display: inline-block;
            padding: 10px 45px;
            margin: 32px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="card-containerr">
    <div class="card">
        <div class="card-body">
            <h3 class="mt-4 text-center">Welcome to <?php echo $result['name']; ?> Profile</h3>
            
            <div class="mb-3">
                <img src="upload/<?php echo $result['image_url']; ?>" class="rounded-circle" style="width: 90px; height: 80px;">
            </div>


            <div class="mb-3">
                <label class="form-label">Full Name:</label>
                <input type="text" class="form-control" name="fname" value="<?php echo $result['name']?>">
            </div>
           
            <div class="mb-3">
                <label class="form-label">Email Id:</label>
                <input type="text" class="form-control" name="uname" value="<?php echo $result['email']?>">
            </div>
            
           

            <div class="card-body">
            <a href="edit_profile.php?user_id=<?php echo $user_id ?>" class="button">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php" class="button">Home</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php 
}
include('footer3.php');
?>
</body>
</html>
<?php } ?>
