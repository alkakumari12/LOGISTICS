<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Air Freight-GatiVidhi</title>
    <style>
       
        .main img {
          opacity: 0.9; /* Adjust the blur level as needed */
            height: 350px;
            width:100%;
            margin-top:85px;
        }
        .main .text-overlay {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: red;
            font-size: 3em;
        }
        .after-main{
                display: flex;
        }
        .after-main .pic 
        {
            width:50%;
            margin-left:40px;
        }
        .after-main .pic img
        {
            width: 500px;
            height:430px;
            margin-top:20px;
        }
        .after-main .text
        {
            width:65%;
            margin-top:20px;
        }
        
        .after-main .text p{
            width:659px;
        }
        
        .cont-section{
            width:100%;
             height:300px; 
             background-color:lightskyblue;
             margin-top: 20px;
        } 
        .roww{
            flex-wrap:wrap; 
            margin-right:-15px; 
            margin-left: -15px;
            padding-top: 70px;
            width: 100%;
        }
        .roww h2{
            text-align: center;
        }
        .roww p{
            text-align:center;
        }

        .button-ghost.light {
            background-color: transparent;
            color: #fff;
            border: 2px solid #fff;
            display: inline-block;
            min-height: 48px;
            line-height: 1rem;
            padding: 13px 40px 14px;
            text-transform: uppercase;
            font-weight: 400;
            margin-left: 545px;
            cursor: pointer;
            margin-bottom: 80px;
        }
         

        @media (min-width: 360px) and (max-width: 786px)
        {
          .main .text-overlay {
            top: 34%;
          }
          .card-group{
              margin-left: 40px;
          }


        .main img{
            height: 300px;
            width:100%;
            margin-top:85px;
        }
        
        .after-main {
            display: flex;
            flex-direction: column-reverse; /* Reverse the order of flex items */
         }
         .after-main .pic {
                width: 311px;
                height: 424px;
                margin-top: -53px;
            }               
            .after-main .pic img {
                width: 500px;
                height: 350px;
                margin-top: 60px;
            }
        .after-main .text {
                width: 91%;
                margin-top: 20px;
                margin-left: 20px;
                order: 1; /* Change the order of the .text div */
        }
        .after-main .text p{
                width: 91%;
                margin-top: 20px;
                margin-left: 20px;
            }
        .cont-section{
             width:100%;
             height:300px; 
             background-color:lightskyblue;
        } 
        .cont-section .roww {
                 flex-wrap: wrap;
                /* margin-right: -15px; */
                 /* margin-left: -15px; */
                 padding-top: 70px;
                 width: 100%;
            }
        .roww h2{
            text-align: center;
        }
        .roww p{
            margin-left: 28px;
        }
        .button-ghost.light {
            min-height: 48px;
            line-height: 1rem;
            padding: 13px 40px 14px;
            margin-left: 128px;
            margin-bottom: 65px;
        }

    }
    @media (min-width: 768px) and (max-width: 997px) {
        .main img{
            height: 300px;
            width:100%;
            margin-top:85px;
        }
        
        .after-main {
            display: flex;
            flex-direction: row; /* Reverse the order of flex items */
         }
         .after-main .pic {
                width: 311px;
                height: 517px;
                margin-top: -53px;
            } 
            .after-main .pic img {
            width: 306px;
            height: 431px;
            margin-top: 130px;
            }
            .after-main .text {
                width: 91%;
                margin-top: 20px;
                margin-left: 20px;
               
        }  
        .button-ghost.light {
            margin-left: 311px;
            margin-top: 19px;
            margin-bottom: 65px;
        }

    }
    @media (min-width: 998px) and (max-width: 1280) {
        
    }


    .clients {
    width: 100%;
    text-align: center;
    padding-top: 23px;
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
  .data21{
      margin-top: 25px;
      border-radius: 40px;
  }
  .data22{
    width: 100%;
    height: 355px;
    border-radius: 40px;
    margin-top: 10px;
  }
    </style>
</head>
<body>
    <?php 
        include('h.php');
    ?>
     <div class="main">
        <img src="./images/AIRFRIGHT.jpg" alt="Air Freight">
        <div class="text-overlay">Air Freight Service</div>
    </div>
    <div class="after-main">
        <div class="pic">
            <img src="./images/freight.webp">
        </div>
        <div class="text">
            <h2>Delivering Exceptional Logistics Solutions and Facilitating Air Freight, Air Charter, and Ground Expedited Freight Services Nationwide</h2>
            <p>In contemporary commerce, few functions carry as much significance as transportation. It serves as the backbone for companies, facilitating the acquisition of vital resources and the distribution of finished products to their clientele. The absence of dependable, expeditious carrier services inevitably undermines the longevity of any enterprise. Nonetheless, numerous organizations persist in relying on transportation solutions that lack reliability. At AirFreight.com, we steadfastly adhere to the highest standards of excellence across all our delivery services. In doing so, we not only provide companies of all sizes with an unparalleled delivery solution but also signal to our industry peers the imperative to enhance their offerings for the benefit of their customers.</p>
        </div>
    </div>


    <div class="servicepage2">
        
        <div class="services11 container-fuild py-2 px-5">
              <p>
              Encompasses several key objectives that align with the needs of businesses, consumers, and the overall economy. By achieving these aims, air freight services play a critical role in the supply chain, supporting the global economy, and enabling the swift movement of goods worldwide.</p>
            <!-- <div class="services11 container-fuild"> -->

            <!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3   "> -->
                <div class="row py-2">
                <div class="col-lg-6 col-md-12 col-sm-12  ">
                <center>
                    <img src="./images/air2.jpg" alt="img" class="data21"></center>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 ">
                    <h5 class="text-left"><b>AIM OF AIR FREIGHT</b></h5>
                    <p><strong>1.Speed and Efficiency: </strong> One of the most significant advantages of air freight is its speed. The primary aim is to deliver goods quickly over long distances, significantly faster than other modes of transport like sea or land freight.</p>
                    
                  <p><strong>2.Global Reach: </strong> Air freight aims to provide a global transportation network, allowing goods to be transported to almost any part of the world, including remote or landlocked areas that might be difficult to reach by other means.</p>
                    
                    
                  <p><strong>3.Flexibility: </strong> Offering flexible solutions to meet the diverse needs of different industries. This includes handling a wide range of cargo types, from small parcels to oversized items.</p>
                </div>
        </div>

                <div class="row py-2">
                <div class="col-lg-6 col-md-12 col-sm-12  py-2 ">
                    
                    <p><strong>4.Customer Satisfaction: </strong> Ultimately, the aim is to meet the needs and expectations of customers by providing reliable, efficient, and secure transport services, contributing to overall customer satisfaction and loyalty.</p>
                   
                    <p><strong>5.Reliability: </strong>Ensuring timely and predictable delivery schedules is a crucial aim. Air freight services are known for their reliability and adherence to strict schedules, which is essential for businesses that rely on just-in-time inventory systems.</p>
                   
                   
                    <p><strong>6.Handling High-Value and Perishable Goods: </strong> nother aim is to provide specialized handling for high-value, delicate, or perishable goods such as electronics, pharmaceuticals, and fresh produce. The speed and controlled environment of air freight are ideal for such items.</p>
                    
                </div>



                <div class="col-lg-6 col-md-12 col-sm-12 ">
                    <center>
                    <img src="./images/air4.jpg" alt="img" class="data22"></center>
                </div>
                <br>
            </div>
        </div>
    </div>
    </div>

    <!-- Explore other section-->

    <div class="container-out">
    <center><h2 style="margin-top:20px;"> Explore Other Services</h2></center></div>

    <div class="card-group">
  <div class="card">
    <img src="./images/service-2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <a href="OceanFreight.php" style="text-decoration:none;"><h5 class="card-title">Ocean Freight</h5></a>
      <p class="card-text">Ocean freight refers to the transportation of goods via ships across oceans and seas. It's a vital component of international trade, facilitating the movement of goods between countries and continents.</p>
    </div>
  </div>
  <div class="card">
    <img src="./images/service-3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <a href="LandTransport.php" style="text-decoration:none;"><h5 class="card-title">Land Transmit</h5></a>
      <p class="card-text">Road transport involves the movement of goods and passengers by vehicles such as cars, trucks, buses, and motorcycles over roads and highways. It is one of the most common and flexible modes of transportation.</p>
    </div>
  </div>
  <div class="card">
    <img src="./images/service-4.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <a href="CargoTrans.php" style="text-decoration:none;"><h5 class="card-title">Cargo Storage</h5></a>
      <p class="card-text">Warehouses are facilities specifically designed for the storage of goods. They come in various sizes and configurations, ranging from small storage units to large distribution centers.</p>
      
    </div>
  </div>
</div>


    <!-- Explore other section-->

    <div class="cont-section">
        <div class="roww">
                <h2>Any questions?</h2>
                <p>Our experts are always there for you. If you wish, we will also call you back – convenient and   straightforward.</p>
                <a href="sender_section.php" class="highlighted-text-cta button-ghost light">
                     Ship Now!
                </a>
        </div>
    </div>
        

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


        <?php 
                include('footer3.php');
        ?>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzCGa9ZQIVFANpcQ7c5bSJ5gE6l9mbCe3m/NB6Y2Dl7z" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-pprn3073KE6tl6YczR6fIV0g0QnjNQzovGVdE8O3pEgGii1jRM/43VsF4y/faTbt" crossorigin="anonymous"></script>

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

    <script>
        function toggleMenu() {
            var links = document.querySelector('.links');
            links.classList.toggle('active');
        }
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>