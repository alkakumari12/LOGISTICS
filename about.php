<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>About-GatiVidhi</title>

    <style>
        
@import url('https://fonts.googleapis.com/css?family=Roboto');
body{
   margin:0;
   padding:0;
   font-family: 'Roboto', sans-serif;
   position:relative;
}

.header3{
   width:100%;
   height:350px;
   background-image:url('./images/header.jpg');
   background-repeat: no-repeat;
   margin-top: 85px;
}
.container3{
   width:100%;
}
.container3 h1{
   font-size:38px
}
.about{
   padding:4% 0;
   width:100%;
   height:auto;
   background-color:#fff;
}
.about .left{
   padding:2% 0;
   float:left;
   width:50%;
   display:inline-block;
}
.about .right{
   width:50%;
   display:inline-block;
}
.about .right img{
   width:550px;
   height: 400px;
   border-radius: 7px;
}
.about .left h1{
   text-align:center;
   color: #0b0861;
   margin: -40px;
}
.about .left hr{
   width:20%;
   border-top:2px solid #000;
   border-bottom:none;
   margin-top: 50px;
   margin-left:250px;
}
.about .left p{
   font-size:19px;
   margin:33px auto;
   width:80%;
}

.mission{
   padding:5% 0;
   width:100%;
   height:auto;
   background-color:#fff;
   margin-top: -70px;
}
.mission .right{
   padding:2% 0;
   width:50%;
   display:inline-block;
}
.mission .left{
   float: left;
   width:50%;
   display: inline-block;
}
.mission .left img{
   width:550px;
   height: 400px;
   border-radius: 7px;
   margin-left: 60px;
}
.mission .right h1{
   text-align:center;
   color: #0b0861;
   margin:0 0 20px 0;
}
.mission .right hr{
   width:35%;
   border-top:2px solid #000;
   border-bottom:none;
   margin-left: 204px;
}
.mission .right p{
   font-size:19px;
   margin:0px auto;
   width:80%
}

/*team*/
.tcard{
      margin-bottom: 37px;
    }
.team{
   margin-top: -40px;
   padding-left: 25px;
}
.team h1{
   text-align:center;
   font-size: 38px;
   color: #0b0861;
}
.team h1 hr{
   width:10%;
   border-top:2px solid #000;
   background-color:transperant;
   border-bottom:none;
   margin-bottom:50px;
   margin-left: 500px;
}
.team .cardss{
   position:relative;
   width:280px;
   height:400px;
   background-color:#fff;
   display:inline-block;
   margin:10px;
   box-shadow:0 5px 10px rgba(0,0,0,0.5);
   margin-top: -40px;
}
.cardss img{
   position:absolute;
   background-color:#fff;
   width:100%;
   border:none;
   top:0;
   left:0;
}
.team .cardss h3{
   position:absolute;
   margin:0;
   display:inline-block;
    top:75%;
    left:47%;
    text-align: center;
   transform:translate(-50%);
} 
.team .cardss p{
   position:absolute;
   margin:0;
   display:inline-block;
   top:85%;
   left:50%;
   font-size:20px;
   transform:translate(-50%);
} 
/* For Mobile View */
@media (min-width: 360px) and (max-width: 767px) {
    .header3 {
        height: 400px; /* Adjusted height for mobile view */
        margin-top: 55px; /* Adjusted margin top for mobile view */
    }
      .about .left{
            padding: 11% 0px;
            width: 100%;
    }
    
      .about .right{
         width: 90%;
         margin-left: 19px;
      }
      .about .right img{
         height: 277px;
      }
      .mission .left{
         width: 90%;
         margin-left: -41px;
      }
      .mission .left img{
         height: 277px;
         margin-top: 60px;
      }
      .mission .right{
            padding: 11% 0px;
            width: 100%;
    }
    .tcard{
      margin-left: 20px;
      margin-top: 1px;
    
    }
    
   
    .tcard{
   column-gap: 27px;
   
}
.tcard .cardss{
   margin-bottom: 53px;
}
.team h1 hr {
        margin-left: 45%;
    }
}

/* For Tablet View */
@media (min-width: 768px) and (max-width: 997px) {
    .header3 {
        height: 300px; /* Adjusted height for better display */
        margin-top: 65px;
    }
    .container3 h1 {
        font-size: 45px; /* Slightly increased font size */
    }
    .about .left h1,
    .mission .right h1,
    .team h1 {
        font-size: 27px; /* Adjusted font size for headings */
       }
       .about .left h1{
         margin-top: -37px;
       }
    .team h1 hr {
        margin-left: 45%;
    }
    .cardss {
        width: 250px; /* Adjusted card width */
        margin: 50px; /* Adjusted margin for better spacing */
    }
    .cardss h1,
    .cardss p {
        margin: 10px 0; /* Adjusted margin for better spacing */
    }
    .about .right img {
    width: 276px;
    height: 317px;
    border-radius: 7px;
    margin-left: 100px;
}
.about .left p {
    margin-left: 15px;
    /* margin-right: 11px; */
    font-size: 16px;
    width: 117%;
}
.mission .left img {
    width: 276px;
    height: 317px;
    /* border-radius: 7px; */
    margin-left: 14px;
    padding-top: 25px;
}
.mission .right p {
    font-size: 16px;
    /* margin: 0px auto; */
    width: 117%;
    margin-left: -66px;
}
.team{
   margin-top: 6px;
}

.tcard{
   column-gap: 27px;
   padding-left: 40px;
   margin-bottom: -10px;
}
.tcard .cardss{
   margin-bottom: 53px;
}
}


/* For Laptop View */
@media (min-width: 998px) {
    .header3 {
        height: 370px;
        margin-top: 85px;
    }
    .container3 h1 {
        font-size: 50px;
    }
}

  .clients {
    width: 100%;
    text-align: center;
    padding-top: 0px;
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
         
      

 
</style>
</head>
<body>
    <?php include ('h.php');  ?>

    <div class="header3">

</div>

<div class="container3">
   
   <div class="about">
      <div class="left">
         <h1 style="font-size:1.75rem;">ABOUT US</h1>
         <hr>
         <p>we specialize in seamless international freight forwarding via air or ocean, ensuring your goods reach their destination with efficiency and reliability.Our contract GatiVidhi encompass state-of-the-art warehousing facilities, guaranteeing optimal inventory management and distribution strategies tailored to your unique business needs. With a fleet of modern trucks and a network of trusted partners, our transportation services offer flexibility and scalability, ensuring your goods are delivered safely and on time.</p>
      </div>
      <div class="right">
         <img src="./images/about.jpg">
      </div>
      <div class="clear"></div>
   </div>
</div>
   
   
   <div class="mission">
     
      <div class="left">
         <img src="./images/mission.jpg">
      </div>
        <div class="right">
         <h1 style="font-size:1.75rem;">OUR COMPANY MISSION</h1>
         <hr>
         <p>"At GatiVidhi, our mission is to deliver unparalleled supply chain solutions that drive sustainable growth for our customers and society at large. We are dedicated to providing exceptional service quality through continuous innovation and insightful logistics strategies. Our commitment to excellence, efficiency, and environmental stewardship ensures we remain the trusted partner for businesses worldwide, helping them navigate the complexities of global trade with confidence and reliability."</p>
      </div>
      <div class="clear"></div>
      
   </div>


  
   <div class="about" style="margin-top:-40px;">
      <div class="left">
         <h1 style="font-size:1.75rem;">OUR COMPANY VISSION</h1>
         <hr>
         <p>"At GatiVidhi, our vision is to become the premier global logistics partner, renowned for our comprehensive and tailored supply chain solutions. We strive to lead the industry through our commitment to excellence in international freight forwarding, contract logistics, and transportation services. By leveraging cutting-edge technology and fostering a culture of continuous improvement, we aim to provide unparalleled service that adapts to the unique needs of each customer, ensuring their goods move seamlessly across borders and through complex transportation networks."</p>
      </div>
      <div class="right">
         <img src="./images/vsimg.png">
      </div>
      <div class="clear"></div>
</div> 
   

<div class="clients">
    <h2 style="font-size:1.75rem;">OUR PARTNERS</h2>
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
   
    

  <!-- <div class="team">
      <h1> Our Team<hr></h1>
   <div class="tcard">
      <div class="cardss">
         <img src="./images/team-1.jpg">
         <h3>Full Name</h3>
         <p>Designation</p>
      </div>
      <div class="cardss">
         <img src="./images/team-2.jpg">
         <h3>Full Name</h3>
         <p>Designation</p>
      </div>
      <div class="cardss">
         <img src="./images/team-3.jpg">
         <h3>Full Name</h3>
         <p>Designation</p>
      </div>
      <div class="cardss">
         <img src="./images/team-4.jpg">
         <h3>Full Name</h3>
         <p>Designation</p>
     </div>
   </div>
   </div>-->



   

      
<?php include ('footer3.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzCGa9ZQIVFANpcQ7c5bSJ5gE6l9mbCe3m/NB6Y2Dl7z" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-pprn3073KE6tl6YczR6fIV0g0QnjNQzovGVdE8O3pEgGii1jRM/43VsF4y/faTbt" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
</body>
</html>