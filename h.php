<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistic Website</title> 
    <!-- Google Fonts Link For Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .logo img{
            height:100px;
            width:150px;
            margin-top :-35px;
        }
        .navbar .logo {
            gap: 10px;
            display: flex;
            align-items: center;
        }
        .navbar .logo img {
            height: 72px;
            margin-top: -18px;
        }
        .nav-link .btn_lg{
            margin-top: -10px;
        }
        @media (min-width: 360px) and (max-width: 786px) {
            .navbar .links {
                display: none;
                position: absolute;
                top: 75%;
                left: 0;
                opacity: 0.9;
                background-color: blue;
                width: 100%;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
                height: 300px;
            }
            .navbar .links.active {
                display: block;
                height: 366px;
                width: 375px;
                margin-top: -18px;
            }
            .navbar .links li {
                text-align: center;
                padding: 10px 0;
            }
            .navbar .links button {
                margin-left: 96px;
                margin-top: 3px;
            }
            .navbar .hamburger-btn {
                position: absolute;
                margin-top: -20px;
                right: 20px;
                transform: translateY(-50%);
            }
            .logo {
                height: 90px;
                width: 180px;
                margin-left: 7px;
                margin-top: -20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <span class="hamburger-btn material-symbols-rounded" onclick="toggleMenu()">menu</span>
            <a href="index.php" class="logo">
                <img src="./images/gatividhi.png" alt="logo">
            </a>
            <ul class="links">
                <li><a href="index.php" style="margin-right:50px; font-size:14px;">HOME</a></li>
                <li><a href="about.php" style="margin-right:50px; font-size:14px;">ABOUT</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="servicesDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right:50px; font-size:14px;">SERVICES</a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown" style="background-color:black; margin-top:30px;">
                        <li><a class="dropdown-item" href="AirFreight.php" style="color:white; background-color:black;">Air Freight</a></li>
                        <li><a class="dropdown-item" href="OceanFreight.php" style="color:white; background-color:black;">Ocean Freight</a></li>
                        <li><a class="dropdown-item" href="LandTransport.php" style="color:white; background-color:black;">Land Transport</a></li>
                        <li><a class="dropdown-item" href="CargoTrans.php" style="color:white; background-color:black;">Cargo Storage</a></li>
                    </ul>
                </li>
                <li><a href="track.php" style="margin-right:50px; font-size:14px;">TRACK</a></li>
                <li><a href="contact.php" style="margin-right:120px; font-size:14px;">CONTACT</a></li>
                <?php
                if (isset($_SESSION['auth'])) {
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?php echo $_SESSION['name']; ?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <?php
                        $sql = "SELECT * FROM signup_frm";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        ?>
                        <li><a class="dropdown-item" href="profile_new.php" style="color:black;">Profile</a></li>
                        <li><a class="dropdown-item" href="sender_section.php" style="color:black;">Ship Now</a></li>
                        <li class="drop-menu-item"><a href="orders.php" style="color:black; margin-left:20px;">My Orders</a></li>
                        <li class="drop-menu-item"><a href="logout.php" style="color:black; margin-left:20px;">Logout</a></li>  
                    </ul>
                </li>
                <?php
                } else {
                ?>
                <li class="nav-item">
                    <button style="background-color:black; border-radius:10px; height:40px; width:70px; font-size:14px;">
                        <a href="login.php" class="nav-link btn_lg">Login</a>
                    </button>
                </li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzCGa9ZQIVFANpcQ7c5bSJ5gE6l9mbCe3m/NB6Y2Dl7z" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-pprn3073KE6tl6YczR6fIV0g0QnjNQzovGVdE8O3pEgGii1jRM/43VsF4y/faTbt" crossorigin="anonymous"></script>
    <script>
        function toggleMenu() {
            var links = document.querySelector('.links');
            links.classList.toggle('active');
        }
    </script>
</body>
</html>
