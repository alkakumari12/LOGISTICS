<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistic</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300|Nunito:400,700&display=swap"
        rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/b596566aca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css" integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</head>

<body>

<header>
<nav>
<div class="container logo-new">
   <a class="menu-button" onclick=showSidebar()><img src="img/image.png" alt=""></a>
    <div class="logistics ">
        <a href="index.php"><img src="img/logis2.png" alt="" width="120vw"  height="70vh"></a>
        
    </div>
    <div class="nav-content">
    <ul class="sidebar">
        <li onclick=hideSidebar()><a href=""><i class="fa-solid fa-xmark"></i></a></li>       
        <li><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="resposibility.php">RESPONSIBILITIES</a></li>
        <!-- <li><a href="services.php">SERVICES</a></li> -->
        <div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" style="margin-left:8px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  SERVICES
  </button>
  <div class="dropdown-menu">
        <li class="drop-menu-item"><a href="b2c.php">B2C EXPRESS</a></li>
        <li class="drop-menu-item"><a href="warehousing.php">WAREHOUSING</a></li>
        <li class="drop-menu-item"><a href="4pl.php">4PL SOLUTION</a></li>
        <li class="drop-menu-item"><a href="b2b.php">B2B EXPRESS</a></li>
  </div>
</div>
        <li><a href="contact.php">CONTACT</a></li>
        <!-- <?php
                    if(isset($_SESSION['auth']))
                    {
                        ?>
  <li class="hideOnMobile size menu-item nav-item"><a href="#" class="nav-item nav-link btn_lg"><i
                            class="ri-arrow-drop-down-fill"></i><i class="fa-regular fa-user"></i><?php echo $_SESSION['name'] ?></a>
  <ul class="drop-menu">
                        <li class="drop-menu-item"><a href="profile.php">MY PROFILE</a></li>
                        <li class="drop-menu-item"><a href="sender_section.php">SHIP NOW</a></li>
                        <li class="drop-menu-item"><a href="#"><button type="button"  class="btn text-light" style="margin-left:-22px;" aria-current="page" href="#" id="log" data-bs-toggle="modal" data-bs-target="#reg-modal">TRACK NOW</button></a></li>
                        <li class="drop-menu-item"><a href="logout.php">LOGOUT</a></li>                       
    </ul>
                    </div>
                    <?php
                    }
                    else{
                        ?>
                        <li class="nav-item">
                        <a href="login.php" class="nav-link btn_lg">LOGIN</a>
                        </li>
                        <?php
                    }
                    ?>                   
                    </li>        -->
    </ul>   
    <ul class="navbar">
        <li class="hideOnMobile size"><a href="index.php">HOME</a></li>
        <li class="hideOnMobile size"><a href="about.php">ABOUT</a></li>
        <li class="hideOnMobile size"><a href="resposibility.php">RESPONSIBILITIES</a></li>
        <li class="hideOnMobile size menu-item"><a href="services.php" class="nav-item nav-link">SERVICES<i
                            class="ri-arrow-drop-down-fill"></i></a>
                    <ul class="drop-menu">
                        <li class="drop-menu-item"><a href="b2c.php">B2C EXPRESS</a></li>
                        <li class="drop-menu-item"><a href="warehousing.php">WAREHOUSING</a></li>
                        <li class="drop-menu-item"><a href="4pl.php">4PL SOLUTION</a></li>
                        <li class="drop-menu-item"><a href="b2b.php">B2B EXPRESS</a></li>                       
                    </ul>
                </li>
        <li class="hideOnMobile size"><a href="contact.php">CONTACT</a></li>   
     <?php
                    if(isset($_SESSION['auth']))
                    {
                        ?>
  <li class=" size menu-item nav-item"><a href="#" class="nav-item nav-link btn_lg"><i
                            class="ri-arrow-drop-down-fill"></i><i class="fa-regular fa-user"></i><?php echo $_SESSION['name'] ?></a>
  <ul class="drop-menu">
                        <li class="drop-menu-item"><a href="profile_new.php">MY PROFILE</a></li>
                        <li class="drop-menu-item"><a href="sender_section.php">SHIP NOW</a></li>
                        <li class="drop-menu-item"><a href="orders.php">ORDERS</a></li>
                        <li class="drop-menu-item"><a href="#"><button type="button"  class="btn text-light" style="margin-left:-22px;" aria-current="page" href="#" id="log" data-bs-toggle="modal" data-bs-target="#reg-modal">TRACK NOW</button></a></li>
                        <li class="drop-menu-item"><a href="logout.php">LOGOUT</a></li>                       
    </ul>
                    </div>
                    <?php
                    }
                    else{
                        ?>
                        <li class="nav-item">
                        <a href="login.php" class="nav-link btn_lg">LOGIN</a>
                        </li>
                        <?php
                    }
                    ?>                   
                    </li>         
    </ul>   
    </div>    
</div> 
</nav>
</header>

<script>
    function showSidebar(){
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'flex'
    }
    function hideSidebar(){
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'none' 
    }
</script>













<div class="modal fade"  id="reg-modal" tabindex="-1" aria-labelledby="modal-title"
  aria-hidden="true">
  <div class="modal-dialog mmain">
    <div class="modal-content ">
      <div class="modal-header ">
      <h3 class="modal-title" id="exampleModalLabel">Tracking</h3>
      
    <br>
        <!-- <h3 class="modal-title" id="exampleModalLabel">Tracking</h3> -->
        <div class="logistic " style="align-items:center;" >
        <img src="img/logis2.png" alt="" width="100vw"  height="70vh">
    </div>
      </div>
      <div class="modal-body">
        <div class="lmodalmain">
          <form action="order_id.php" method="GET">
          <input type="text" name="order-id" onkeypress="return validateNumber(event)"  placeholder="Enter Order ID">
        <br><br>
            
            <div class="wa d-flex align-items-center justify-content-between ">
              <button class="login btn btn-primary ">Track Order</button>
              
          </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>