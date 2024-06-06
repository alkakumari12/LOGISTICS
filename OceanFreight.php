<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>OceanFreight-GatiVidhi</title>

    <style>
            
        .ocean-img img {
            background: rgba(0, 128, 0, 0.1);
            height: 350px;
             width: 100%;
            margin-top:85px; 
            opacity: 0.9; /* Adjust the blur level as needed */
        }
        .ocean-img .text-overlay {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: red;
            font-size: 3em;
        }
            .OC-section{
                    display:flex;
            }
            .OC-image{
                width:50%;
            }
            .OC-image img{
                height: 480px;
                margin-top: 40px;
            }
            .OC-text
            { width:60%;
             margin-top: 25px;
            }
            .OC-text p{
                width: 624px;
            }
            .ship-section{
            width:100%;
            height:300px; 
            background-color:lightskyblue;
            margin-top: 20px;
        } 
        .rowws{
            flex-wrap:wrap; 
            margin-right:-15px; 
            margin-left: -15px;
            padding-top: 70px;
            width: 100%;
        }
        .rowws h2{
            text-align: center;
        }
        .rowws p{
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
            .ocean-img .text-overlay {
                     top: 34%;
            }
            .card-group{
                margin-left: 40px;
            }
            .ocean-img img{
                height: 300px;
                 width: 100%;
                 margin-top:85px; 
            }
            .OC-section{
                display: flex;
                flex-direction: column-reverse;
            }
            .OC-section .OC-text {
                width: 91%;
                margin-top: 20px;
                margin-left: 20px;
                order: 1; /* Change the order of the .text div */
            }
            .OC-section .OC-image {
                width: 419px;
                height: 352px;
                margin-top: -65px;
            } 
            .OC-section .OC-text p{
                width: 91%;
                margin-top: 20px;
                margin-left: 20px;
            }

            .ship-section{
            width:100%;
             height:300px; 
             background-color:lightskyblue;
            } 
            .cont-section .rowws {
                 flex-wrap: wrap;
                /* margin-right: -15px; */
                 /* margin-left: -15px; */
                 padding-top: 70px;
                 width: 100%;
            }
        .rowws h2{
            text-align: center;
        }
        .rowws p{
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
        .ocean-img img{
            height: 300px;
            width:100%;
            margin-top:85px;
        }
        
        .OC-section {
            display: flex;
            flex-direction: row; /* Reverse the order of flex items */
         }
          .OC-image{
                width: 300px;
                height: 100%;
                margin-top: -53px;
            } 
            .OC-image img{
                height: 450px;
                margin-top: 132px;
            }
            .OC-section .OC-text{
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
    .app1{
            margin-top: 25px;
            height: 400px;
            border-radius: 10px;
    }
    .app3{
            margin-top: 10px;
            height: 320px;
           
    }
    </style>
</head>
<body>
    <?php
        include('h.php');
    ?>

    <div class="ocean-img">
        <img src="./images/Ocean.webp" alt="Ocean">
        <div class="text-overlay">Ocean Freight Service</div>
    </div>
        <div class="OC-section">
            <div class="OC-image">
                <img src="./images/oc.png">
            </div>
            <div class="OC-text">
                <h2 style>Require ocean freight services?</h2>
                <p>Once you provide us with details regarding your shipment, including its destination, desired delivery timeframe, and budget constraints, we can assist you in devising the optimal plan to ensure its timely arrival. Entrusting us with your ocean freight requirements grants you access to the extensive multimodal FedEx network, among the significant advantages we offer.</p>

                <h2>Ocean freight last-mile delivery with day-definite service?</h2>
                <p>Frustrated with the uncertainty surrounding your shipment arrival times? Our last-mile day-definite delivery service offers precise transit time estimates once your ocean freight shipment reaches port. This enables you to plan with confidence, anticipate labor requirements, communicate effectively with consignees, and uphold timely deliveries. This service is applicable for both palletized and non-palletized cargo weighing less than 20,000 lbs, originating from the Asia Pacific region, and includes customs brokerage through GatiVidhi Freight.</p>
            </div>
        </div>
    </div>

    <div class="servicepage2">
        
        <div class="services11 container-fuild py-1 px-5">
        <p>Ocean freight services are essential for global trade and commerce, providing cost-effective, reliable, and efficient transportation solutions for businesses and industries around the world.ocean freight services are focused on adapting to changing market dynamics, embracing digitalization and sustainability, enhancing customer experience, and ensuring operational resilience to navigate challenges and capitalize on growth opportunities in the global shipping industry.</p> 
                <div class="row py-2">
                <div class="col-lg-6 col-md-12 col-sm-12">
                <center>
                    <img src="./images/AIM.jpg" alt="img" class="app1">
                    </center>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12    ">
                    <h5 class="text-left"><strong>AIM OF OCEAN FRIGHT</strong></h5>
                    <p>Ocean freight services aim to provide efficient and reliable transportation of goods over long distances.</p>
                    <p><strong>1. Global Connectivity: </strong>Ocean freight services connect major trading hubs and markets across the globe, enabling businesses to reach customers in distant locations.</p>
                        <p><strong>2. Versatility: </strong>Ocean freight is often more cost-effective than other modes of transportation, particularly for bulky or heavy goods and commodities. </p>
                        <p><strong>3. Cost-Effectiveness:</strong>Ocean freight services cater to a wide range of cargo types, including containerized goods, bulk commodities, vehicles, machinery, and project cargo. </p>
                        <p><strong>4. Reliability and Safety: </strong>Ocean freight services prioritize the safety and security of cargo throughout the shipping process. Vessels are equipped with modern navigation</p>

                    </div></div>
                <div class="row py-2">
                <div class="col-lg-6 col-md-12 col-sm-12 py-3">
                    
                    <p><strong>5. Environmental Sustainability: </strong>Ocean freight services strive to minimize their environmental impact by adopting eco-friendly practices and technologies. Efforts to reduce emissions, optimize fuel consumption and mitigate pollution.</p>

                    <p><strong>6. Customer Satisfaction: </strong>cean freight services focus on meeting customer expectations by providing timely, efficient, and cost-effective transportation solutions.By offering competitive shipping rates, reliable transit times.</p></div>

                <div class="col-lg-6 col-md-12 col-sm-12 py-2">
                    <center>
                    <img src="./images/aim2.png" alt="img" class="app2">
                    </center>
                </div></div>
                <div class="row py-2">
                <div class="col-lg-6 col-md-12 col-sm-12 py-2">
                    <center>
                    <img src="./images/aim3.png" alt="img" class="app3"></center>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 py-2">
                    <h5 class="text-left"><b>CURRENTLY FOCUS ON</b> </h5>
                    <p><strong>Customer-Centric Solutions: </strong> Ocean freight services are increasingly focused on providing customer-centric solutions tailored to meet the unique needs of shippers and consignees. </p>
                
                    <p><strong>Trade Compliance and Regulations: </strong>  Ocean freight services are paying close attention to evolving trade regulations and compliance requirements. Companies are investing in compliance management systems, training programs. </p>
                
                    <p><strong>Digitalization and Technology Adoption:  </strong> The adoption of digital technologies is a major focus area for ocean freight services. Companies are investing in digital platforms, data analytics, and automation to streamline processes, improve visibility, and enhance operational efficiency across the supply chain. </p>
                
                
                </div> </div> 
            </div>


             <!-- Explore other section-->

    <div class="container-out">
    <center><h2 > Explore Other Services</h2></center></div>

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

    

    <div class="ship-section">
        <div class="rowws">
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