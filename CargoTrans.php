<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Air Freight-GatiVidhi</title>
    <style>
      .container-out{
        margin-top:290px;
      }
         .cargo img {
            width: 100%;
            opacity: 0.7; /* Adjust the blur level as needed */
        }
        .cargo .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color:red;
            font-size: 3em;
           text-align: center;
        }
        .cargo img{
            height: 350px;
             width:100%;
              margin-top:85px;
        }
        .after-cargo{
                display: flex;
        }
        .after-cargo .image 
        {
            width:50%;
            margin-left:40px;
        }
        .after-cargo .image img
        {
            width: 500px;
            height:450px;
            margin-top:40px;
        }
        .after-cargo .text
        {
            width:65%;
            margin-top:20px;
        }
        
        .after-cargo .text p{
            width:659px;
        }
        .cargo-section{
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
          .after-cargo .image img {
               width: 334px;
               height: 403px;
               margin-top: 57px;
            }
          .container-out {
              margin-top: 1464px;
          }
          .cargo .text-overlay {
              top: 30%;
          }
          .card-group{
            margin-left: 40px;
          }
          
          
        .cargo img{
            height: 250px;
            width:100%;
            margin-top:85px;
        }
        
        .after-cargo {
            display: flex;
            flex-direction: column-reverse; /* Reverse the order of flex items */
         }
         .after-cargo .image{
            width: 335px;
            height: 517px;
            margin-top: -53px;
         }

        .after-cargo .text {
            width: 91%;
            margin-top: 20px;
            margin-left: 20px;
            order: 1; /* Change the order of the .text div */
        }
        .after-cargo .text p{
            width: 91%;
            margin-top: 20px;
            margin-left: 20px;
        }
        .cargo-section{
            width:100%;
             height:300px; 
        } 
        .cargo-section .roww {
                 flex-wrap: wrap;
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
        .cargo img{
            height: 300px;
            width:100%;
            margin-top:85px;
        }
        
        .after-cargo {
            display: flex;
            flex-direction:row /* Reverse the order of flex items */
         }
         .after-cargo .image{
            width: 311px;
            height: 517px;
            margin-top: -53px;
         }
         .after-cargo .image img {
             margin-top: 155px;
        }
        .after-cargo .text {
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


.service-section .icon-box {
	margin-bottom: 20px;
	padding: 30px;
	border-radius: 10px;
	background-color: #f8f9fa;
}
.service-section .icon-box:hover .service-title a {
	color: #41A1FD;
}
.service-section .icon-box .service-icon {
	float: left;
	color: #41A1FD;
	font-size: 40px;
}
.service-section .icon-box .service-title {
	margin-left: 70px;
	font-weight: 700;
	margin-bottom: 15px;
	font-size: 18px;
	line-height: 1.2;
}
.service-section .icon-box .service-title a {
	color: #556270;
	transition: 0.3s;
	text-decoration: none;
}
.service-section .icon-box .service-para {
	margin-left: 70px;
	line-height: 24px;
	font-size: 14px;
}
.service-section .service-main-heading {
	color: #556270;
	padding: 0;
	margin-bottom: 20px;
	line-height: 1;
	font-size: 60px;
	font-weight: 600;
}
#row1{
    width: 107%;
    padding-right:50px;
}
    </style>
</head>
<body>
    <?php 
        include('h.php');
    ?>
    <div class="cargo">
        <img src="./images/newrail.webp" alt="Rail Cargo">
        <div class="text-overlay">Rail Freight Service</div>
    </div>
    <div class="after-cargo">
        <div class="image">
            <img src="./images/service-4.jpg">
        </div>
        <div class="text">
            <h2>Rail Services - Strong Connectivity & Sustainability</h2>
            <p>In the domain of government-operated rail transport, GatiVidhi Logistics specializes in facilitating the placement of cargo onto appropriate trains at optimal times for seamless journeys. Acting as intermediaries, we bridge the gap between government-operated rail networks and our customers. Experience the efficiency of rail transport through our dedicated coordination services, linking cargo to the extensive rail network and ensuring precise delivery timing and location. Clients can depend on our streamlined process for consistent and punctual deliveries, where GatiVidhi Logistics' seamless coordination guarantees the efficient arrival of consignments at their destinations.<br>
           1.Breakbulk and Full Rake Movement<br>
           2.Full Container Load Movement<br>
           3.Less than Container Load Movement<br>
           4.Multi-Modal Movements, offering both SLR & VPU facilities for streamlined processes<br>
           5.Door-to-Door and Station-to-Station Movements<br>
           6.Door-to-Station and Station-to-Door Movements<br>
            </p>
        </div>
    </div>


<section class="service-section py-5">
  <div class="container">
    <div class="row justify-content-center py-0">
      <div class="col-md-8 col-12 text-center">
        <h2 style="margin-top:-100px">Features of Cargo Transport</h2>
      </div>
    </div>
    <div class="row" id="row1">
      <div class="col-md-6 col-lg-6 col-12">
        <div class="icon-box">
         
          <p class="service-title" >1. Mode of Transport</p>
          <p class="service-para" style="font-size:19px;">Sea Freight: Suitable for large volumes and heavy cargo, cost-effective over long distances, ideal for international trade.Fastest mode for long-distance transport.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-12 mt-4 mt-md-0">
        <div class="icon-box">
         
          <p class="service-title" >2. Containerization </p>
          <p class="service-para" style="font-size:19px;">Standardization: Use of standardized containers (e.g., 20-foot, 40-foot) for easy handling and transfer across different transport modes.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-12 mt-4 mt-md-0">
        <div class="icon-box">
        
        <p class="service-title" >3. Intermodal and Multimodal Transport </p>
          <p class="service-para" style="font-size:19px;">Intermodal Transport: Combining multiple modes of transport (e.g., sea to rail to road) without handling the cargo itself, ensuring seamless transit.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-12 mt-4 mt-md-0">
        <div class="icon-box">
        
        <p class="service-title" >4. Tracking and Monitoring </p>
          <p class="service-para" style="font-size:19px;">Monitoring Systems: Sensors and IoT devices monitor conditions such as temperature, humidity, and shock, ensuring sensitive cargo is transported.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-12 mt-4 mt-md-0">
        <div class="icon-box">
         
        <p class="service-title" >5. Documentation and Compliance </p>
          <p class="service-para" style="font-size:19px;">Documentation: Comprehensive documentation (e.g., bills of lading, airway bills, customs declarations) ensures legal and regulatory compliance.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-12 mt-4 mt-md-0">
        <div class="icon-box">
        <p class="service-title" >6. Insurance </p>
          <p class="service-para" style="font-size:19px;">Cargo Insurance: Protection against potential losses or damages during transit, providing financial security and peace of mind for shippers.</p>
        </div>
      </div>
    </div>
  </div>
</section>
    


<!-- Explore other section-->

<div class="container-out">
    <center><h2 > Explore Other Services</h2></center>

<div class="card-group">
  <div class="card">
    <img src="./images/service-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <a href="AirFreight.php" style="text-decoration:none;"><h5 class="card-title">Air Freight</h5></a>
      <p class="card-text">Air freight is a critical service for businesses that need to move goods quickly and reliably over long distances, supporting industries such as electronics, fashion and many others in the global economy.</p>
    </div>
  </div>
  <div class="card">
    <img src="./images/service-3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <a href="OceanFreight.php" style="text-decoration:none;"><h5 class="card-title">Ocean Freight</h5></a>
      <p class="card-text">Ocean freight refers to the transportation of goods via ships across oceans and seas. It's a vital component of international trade, facilitating the movement of goods between countries and continents.</p>
    </div>
  </div>
  <div class="card">
    <img src="./images/service-4.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <a href="LandTransport.php" style="text-decoration:none;"><h5 class="card-title">Land Transmit</h5></a>
      <p class="card-text">Road transport involves the movement of goods and passengers by vehicles such as cars, trucks, buses, and motorcycles over roads and highways. It is one of the most common and flexible modes of transportation.</p>
    </div>
  </div>
</div>

</div>
    <!-- Explore other section-->

    <div class="cargo-section">
        <div class="roww">
                <h2>Any questions?</h2>
                <p>Our experts are always there for you. If you wish, we will also call you back – convenient and   straightforward.</p>
                <a href="sender_section.php" class="highlighted-text-cta button-ghost light">
                     Ship Now!
                </a>
        </div>
    </div>   
        <?php 
                include('footer3.php');
        ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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