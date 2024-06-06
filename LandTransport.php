<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Land Transport-GatiVidhi</title>
    <style>
    
        .land img {
            height: 350px;
            width:100%;
            margin-top:85px;
           opacity: 0.7; /* Adjust the blur level as needed */
        }
        .land .text-overlay {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: red;
            font-size: 3em;
        
            text-align: center;
        }
        
        .after-land{
                display: flex;
        }
        .after-land .image 
        {
            width:50%;
            margin-left:40px;
        }
        .after-land .image img
        {
            width: 500px;
            height:390px;
            margin-top:20px;
        }
        .after-land .text
        {
            width:65%;
            margin-top:20px;
        }
        .text h2{
            font-size: 1.8rem;
        }
        
        .after-land .text p{
            width:659px;
        }
        .land-section{
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
            .land .text-overlay {
                    top: 34%;
            }
            .card-group{
                margin-left: 40px;
            }
        .land img{
            height: 300px;
            width:100%;
            margin-top:85px;
        }
        
        .after-land {
            display: flex;
            flex-direction: column-reverse; /* Reverse the order of flex items */
         }
         .after-land .text{
            width: 91%;
                margin-top: 20px;
                margin-left: 20px;
                order: 1; /* Change the order of the .text div */
        }
        .after-land .text p{
                width: 91%;
                margin-top: 20px;
                margin-left: 20px;
         }
         .after-land .image img{
            width: 306px;
            height: 292px;
            margin-top: 7px;
            padding-bottom: 20px;
         }
         .after-land .image{
            width: 85%;
            margin-left: 40px;
         }
         .land-section{
            width:100%;
             height:300px; 
             background-color:lightskyblue;
        } 
        .land-section .roww {
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
        .land img{
            height: 300px;
            width: 100%;
            margin-top: 85px;
        }
        .after-land {
            display: flex;
            flex-direction: row;
        }
        .after-land .image{
            width: 311px;
            height: 517px;
            margin-top: -53px;

        }
        .after-land .image img {
            width: 306px;
            height: 431px;
            margin-top: 150px;
        }
        .after-land .text{
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
    .bespoke1{
            margin-top: 20px;
    }
    .bespoke2{
        width: 100%;
        height: 350px;
        border-radius: 30px;
    }
    
    </style>
</head>
<body>
    <?php 
        include('h.php');
    ?>
    <div class="land">
        <img src="./images/truck.jpg" alt="Truck">
        <div class="text-overlay">Land Transport Service</div>
    </div>
    <div class="after-land">
        <div class="image">
            <img src="./images/smalltrans.jpg">
        </div>
        <div class="text">
            <h2>Offering Superior Logistics Services and Facilitating Ground Transportation, Including Expedited Freight Services Nationwide</h2>
            <p>In modern business, few activities are more critical than transportation, which companies rely on both to obtain essential supplies and to send finished goods to their customers. Without efficient and reliable land transport services, no business can sustain itself for long. Yet, many firms still depend on transportation services that fail to meet their needs. At LandTransportation, we uphold the highest standards of quality for all our delivery services. In doing so, we not only provide companies of all sizes with a superior solution for their deliveries, but we also set a precedent for other transportation companies, urging them to enhance their services and prioritize customer satisfaction.Land transport provides a range of benefits, from flexibility and cost-effectiveness for short-distance road transport to the efficiency and large capacity of rail transport for long distances. </p>
        </div>
    </div>


    <div class="servicepage3">
        
        <div class="services11 container-fuild py-1 px-5">
        Land transport provides a range of benefits, from flexibility and cost-effectiveness for short-distance road transport to the efficiency and large capacity of rail transport for long distances. By leveraging the strengths of both road and rail, businesses can optimize their logistics and supply chain operations to achieve reliable, timely, and environmentally friendly transportation solutions.</p>
                <div class="row py-2">
                <div class="col-lg-6 col-md-12 col-sm-12 py-2">
                    <center>
                    <img src="./images/land1.png" alt="img" class="bespoke1">
                   </center>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 py-1">
                    <h5 class="text-left"><strong>BENIFITES OF LAND TRANSPORT</strong></h5>
                    <p><strong>1.Flexibility and Accessibility: </strong>Door-to-Door Service-Road transport provides direct door-to-door delivery, making it convenient for businesses and individuals.</p>
                    
                    <p><strong>2.Cost-Effective for Short Distances: </strong> For short to medium distances, road transport is often more cost-effective than other modes of transportation, Less handling of goods reduces the risk of damage and associated costs.</p>
                    
                    
                    <p><strong>3.Speed and Convenience: </strong> Quick Dispatch- Goods can be dispatched quickly without the need for long loading and unloading times.Timeliness-Ideal for just-in-time delivery systems and urgent shipments within a region.</p>
                </div>
                </div>
                <div class="row"> 
               <div class="col-lg-6 col-md-12 col-sm-12 py-1 ">
                    <p><strong>4.Versatility: </strong> Diverse Cargo Types-Road transport can handle a wide variety of cargo, from small parcels to large, oversized items, Adaptability-Can easily adapt to different types of vehicles such as trucks, vans, and trailers to suit the cargo requirements.</p>

                    <p><strong>5.Efficiency for Long Distances: </strong> Cost-Effective-Rail transport is highly cost-effective for moving large quantities of goods over long distances, Fuel Efficiency- Trains are more fuel-efficient than trucks, reducing transportation costs and environmental impact.</p>

                    <p><strong>6.Environmental Benefits: </strong> Lower Emissions-Rail transport produces fewer greenhouse gas emissions per ton of cargo transported compared to road transport, contributing to reduced environmental impact, Sustainability-Rail is considered a more sustainable mode of transport, supporting eco-friendly logistics strategies.</p></div>
                <div class="col-lg-6 col-md-12 col-sm-12 py-2">
                <center>
                    <img src="./images/blog-1.jpg" alt="img" class="bespoke2">
                </center>
                </div>
                </div>
               <div class="row py-2">
                <div class="col-lg-6 col-md-12 col-sm-12 py-2">
                <center>
                    <img src="./images/land1.png" alt="img" class="bespoke3">
                </center>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 ">
                 <p><strong>7.Intermodal Connectivity: </strong> Seamless Integration-Combining road and rail transport offers seamless intermodal solutions, leveraging the strengths of both modes for efficient cargo movement, Optimal Routing-Goods can be transported by rail over long distances and then transferred to trucks for final delivery, optimizing cost and efficiency.</p>

                <p><strong>8.Enhanced Logistics Solutions: </strong> Supply Chain Efficiency-Integrating road and rail transport improves overall supply chain efficiency, reducing transit times and costs.
                , Flexibility and Reach-The combination allows for broader geographic coverage and better service to both urban and rural areas.<br></p> </div>
                </div> </div></div><br>


                     <!-- Explore other section-->

    <div class="container-out">
    <center><h2 > Explore Other Services</h2></center></div>

    <div class="card-group">
  <div class="card">
    <img src="./images/service-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <a href="AirFreight.php" style="text-decoration:none;"><h5 class="card-title">Air Freight</h5></a>
      <p class="card-text"> Air freight is a critical service for businesses that need to move goods quickly and reliably over long distances, supporting industries such as electronics, fashion and many others in the global economy.</p>
    </div>
  </div>
  <div class="card">
    <img src="./images/service-2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <a href="LandTransport.php" style="text-decoration:none;"><h5 class="card-title">Ocean Freight</h5></a>
      <p class="card-text">Ocean freight refers to the transportation of goods via ships across oceans and seas. It's a vital component of international trade, facilitating the movement of goods between countries and continents.</p>
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

    <div class="land-section">
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