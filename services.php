<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services-GatiVidhi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <style>
    .home img{
            margin-top: 85px;
            height: 370px;
            width: 100%;
            opacity: 0.7;
    }
    .container-inn {
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 415px;
      background-color: #f0f0f0;
     }
     .ser-class{
      display:flex;
       width:100%;
      }
    .container-inn:hover{
        color: blue;
        cursor: pointer;
    }
    .container-out{
        text-align: center;
        height: 200px;
        width: 100%;
    }
    .container-out h2{
      font-size: 38px;
    }
    .container-out h2{
      margin-top: 20px;
    }
    .card {
      width: 200px;
      height: 300px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 16px;
      box-sizing: border-box;
      margin: 16px;
      text-align: center;
    }
    .card img{
        height: 200px;
        width: 100%;
    }


.clients {
    width: 100%;
    text-align: center;
    padding-top: 275px;
}

.clients h2{
    font-size: 38px;
    color: black;
}

:root {
    --marquee-width: 100vw;
    --marquee-height: 20vh;
    /* --marquee-elements: 12; */ /* defined with JavaScript */
    --marquee-elements-displayed: 5;
    --marquee-element-width: calc(var(--marquee-width) / var(--marquee-elements-displayed));
    --marquee-animation-duration: calc(var(--marquee-elements) * 3s);
  }
  
  .marquee {
    width: var(--marquee-width);
    height: var(--marquee-height);
    /* background-color: #111; */
    color: #eee;
    overflow: hidden;
    position: relative;
    width: 100%;
    height:250px
  }
  .marquee:before, .marquee:after {
    position: absolute;
    top: 0;
    width: 10rem;
    height: 100%;
    content: "";
    z-index: 1;
  }

  .marquee:before {
    left: 0;
    background: linear-gradient(to right, #beb4b4 0%, transparent 100%);
  }
  .marquee:after {
    right: 0;
    background: linear-gradient(to left, #beb4b4 0%, transparent 100%);
  }

  .marquee-content {
    list-style: none;
    height: 100%;
    display: flex;
    animation: scrolling var(--marquee-animation-duration) linear infinite;
  }

  .marquee-content li{
    display: flex;
    justify-content: center;
    align-items: center;
    width: var(--marquee-element-width);
    flex-shrink: 0;

  }

  .marquee ul li img{
    padding-left: 20px;
  }

  .marquee-content:hover {
    animation-play-state: paused;
    /* box-shadow: 10px 10px 20px 10px rgba(182, 10, 10, 0.2); */
  }

  .marquee-content li:hover {
    background: rgb(217, 217, 217);
  }

  @keyframes scrolling {
    0% { transform: translateX(0); }
    100% { transform: translateX(calc(-1 * var(--marquee-element-width) * var(--marquee-elements))); }
  }

  @media  only screen and (min-width:360px) and (max-width: 767px) {
    /* html { font-size: 12px; } */
    :root {
      --marquee-width: 100vw;
      --marquee-height: 12vh;
      --marquee-elements-displayed: 3;
    }
    .marquee:before, .marquee:after { width: 5rem; }
    .marquee ul li img{
      height: 72%!important;
      width: 100%!important;
      padding-left: 10px;
    }
    
    .marquee-content li img:hover {
      padding-left:10px;
      background:rgb(217, 217, 217);
    }

    .marquee-content li:hover{
      width: 40%;
    }
    #p{
      height: 110%!important;
    }
  }
 
  @media  only screen and (min-width:360px) and (max-width: 767px) {
    .container-out{
        text-align: center;
        height: 805px;
        width: 100%;
    }
    .container-out h2{
      margin-top: 5px;
    }
      .container-inn {
      height: 1707px;
    }
    .ser-class{
      margin-left: 25px;
      flex-direction: column;
       width: 100%;
       height: 1690px;
      }
      .clients {
    width: 100%;
    text-align: center;
    padding-top:970px;
    /* margin-bottom: 40px; */
}

.card {
      width: 200px;
      height: 300px;
    }
  }
   
@media (min-width: 768px) and (max-width: 998px)
{
  .container-out{
        text-align: center;
        height: 805px;
        width: 100%;
    }
    .container-out h2{
      margin-top: 34px;
    }
      .container-inn {
      height: 914px;
    }
    .ser-class{
        display: flex;
        flex-flow: row wrap;
        margin-left: 46px;
      }
      .clients {
        width: 100%;
        margin-top: -81px;
      }
      .card {
      width: 200px;
      height: 300px;
      }
  }

    

</style>
</head>
<body>
    <?php include ('h.php'); ?>

    <div class="home">
        <img src="./images/servb.avif">
    </div>
   
    <!-- Services Start -->
<div class="container-out">
    <h2>Our Services</h2>
 <div class="container-inn">
 <div class="ser-class">
  <div class="card">
  <a href="AirFreight.php">
    <img src="./images/service-1.jpg">
    <a href="AirFreight.php" style="text-decoration:none;">
    <h2>Air Freight</h2></a>
    <p>plays a crucial role in meeting the demands of today's fast-paced global economy.</p>
  </div>
  
  <div class="card">
  <img src="./images/service-2.jpg">
  <a href="OceanFreight.php" style="text-decoration:none;">
  <h2>Ocean Freight</h2></a>
    <p>component of global trade and transportation,facilitating the movement of goods.</p>
  </div>
  
  <div class="card">
  <img src="./images/service-3.jpg">
  <a href="LandTransport.php" style="text-decoration:none;">
  <h2>Land Transport</h2></a>
    <p>movement of goods and passengers using motor vehicles such as trucks.</p>
  </div>
  
  <div class="card">
  <img src="./images/service-4.jpg">
  <a href="CargoTrans.php" style="text-decoration:none;">
  <h2>Cargo Storage</h2></a>
    <p>plays a vital role in the logistics and supply chain ecosystem.</p>
  </div>
</div> 
</div>
</div>

     <!--End -->

    <div class="clients">
    <h2>Our Partners</h2>
    <div class="marquee">
    <ul class="marquee-content">
        <li id="p"><img src="./images/libas.avif" style=" height:100px; "></li>
        <li id="o"><img src="./images/nuawoman.avif" style=" height:100px;"></li>
        <li id="g"> <img src="./images/shiprocket.avif" style=" height:100px;  "></li>
        <li id="gl"><img src="./images/shop101.avif" style=" height:100px;"></li>
        <li id="g"> <img src="./images/pepperfry.avif" style=" height:100px;  "></li>
        <li id="g"> <img src="./images/naaptol.avif" style=" height:100px;  "></li>

      </ul>
    </div>
  </div>
     


    <?php include 'footer3.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
    var show = document.getElementById("navLinks");

    function showMenu() {
      show.style.right = "0";
    }
    function hideMenu() {
      show.style.right = "-150px";
    }
  </script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 200,
      duration: 1500,
    });
  </script>

  <script>
    const root = document.documentElement;
    const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
    const marqueeContent = document.querySelector(".marquee-content");

    root.style.setProperty("--marquee-elements", marqueeContent.children.length);

    for (let i = 0; i < marqueeElementsDisplayed; i++) {
      marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
    }
  </script>
</body>
</html>