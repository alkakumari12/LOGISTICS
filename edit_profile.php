<?php
session_start();
include_once('config.php');
include('h.php');

if (strlen($_SESSION['user_id']) == 0) {
    header('location:logout.php');
} else {
    $user_id = $_SESSION['user_id'];

    $msg = "";
    $showModal = false;

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $old_pp = $_POST['old_pp'];

        // Handle file upload
        if ($_FILES['profile_picture']['name']) {
            $profile_picture = $_FILES['profile_picture']['name'];
            $target_dir = "upload/";
            $target_file = $target_dir . basename($profile_picture);

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file)) {
                // Delete the old profile picture if it exists
                if ($old_pp && file_exists($target_dir . $old_pp)) {
                    unlink($target_dir . $old_pp);
                }
            } else {
                $profile_picture = $old_pp;
            }
        } else {
            $profile_picture = $old_pp;
        }

        $query = "UPDATE signup_frm SET name='$name', email='$email', image_url='$profile_picture' WHERE user_id='$user_id'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $msg = "Profile updated successfully.";
            $showModal = true;
        } else {
            $msg = "Failed to update profile. Please try again.";
        }
    }

    $query = mysqli_query($conn, "SELECT * FROM signup_frm WHERE user_id='$user_id'");
    $result = mysqli_fetch_array($query);
?>

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
        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 85px;
            height: 100%;
            width: 100%;
        }
        .card {
            height: 600px;
            width: 600px;
        }
    </style>
</head>
<body>

<div class="card-container">
    <div class="card">
        <div class="card-body">
            <h3 class="mt-4 text-center">Edit Profile</h3>
           
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3 text-center">
                    <img src="upload/<?= $result['image_url'] ?>" class="rounded-circle" style="width: 90px; height: 80px;">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Full Name:</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $result['name']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Id:</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $result['email']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Profile Picture</label>
                    <input type="file" class="form-control" name="profile_picture">
                    <input type="hidden" name="old_pp" value="<?= $result['image_url'] ?>">
                </div>
                <br>
                <div class="mb-3 text-center">
                    <button type="submit" name="update" class="btn btn-primary">Update</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="profile_new.php" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo $msg; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="redirectToProfile()">OK</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    function redirectToProfile() {
        window.location.href = 'profile_new.php';
    }

    <?php if ($showModal): ?>
    var myModal = new bootstrap.Modal(document.getElementById('successModal'), {
        backdrop: 'static'
    });
    myModal.show();
    <?php endif; ?>
</script>

</body>
</html>

<?php
include('footer3.php');
}
?>
