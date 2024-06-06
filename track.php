<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Track-GatiVidhi</title>
    <style>
        body {
            background-color: #dedede;
        }

        .container7 {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 500px;
            margin-top: 150px;
            margin-bottom: 50px;
        }

        form {
            display: grid;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .tracking-result {
            font-size: 16px;
        }

        @media only screen and (min-width:360px) and (max-width: 767px) {
            .container7 {
                height: auto;
                width: 370px;
                margin-left: 11px;
            }
        }

        @media (min-width: 768px) and (max-width: 998px) {
            .container7 {
                width: 370px;
                margin-left: 190px;
            }
        }
    </style>
</head>
<body>
<?php
include('config.php'); 
include('h.php');

if(isset($_POST['track'])) {
    $trackingNumber = $_POST['trackingNumber'];
    $sql = "SELECT * FROM orders WHERE orderID = '$trackingNumber'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="mapouter"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d59673.37255352948!2d77.29224!3d20.808039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x604c3c4160741f7b%3A0x5be6bb2f97663c66!2sPSS%20Techno%20Service%20Digital%20Marketing!5e0!3m2!1sen!2sus!4v1714728553392!5m2!1sen!2sus" width="1260" height="400" style="border:0; margin-top:120px; margin-bottom:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div></div>
        
        <?php
    } else {
        echo "<div class='container7'><p>No Shipping information found for the provided tracking number.</p></div>";
    }
} else {
    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $lastRow = $row;
        }
        ?>
        <div class="container7">
            <form action="" method="post">
                <label for="trackingNumber">Tracking Number:</label>
                <input type="text" name="trackingNumber" value="<?php echo $lastRow['orderID'];?>" required>
                <button type="submit" name="track" id="submit">Track</button>
            </form>
        </div>
        <?php
    } else {
        echo "No results found";
    }
}

include('footer3.php');
?>

<!-- Modal -->
<div class="modal fade" id="trackModal" tabindex="-1" aria-labelledby="trackModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="trackModalLabel">Tracking Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Your parcel track successful.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        <?php if(isset($_POST['track'])) { ?>
            $('#trackModal').modal('show');
        <?php } ?>
    });
</script>
</body>
</html>
