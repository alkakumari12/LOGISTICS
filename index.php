<?php 
session_start();
  include ('config.php');
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-GatiVidhi</title> 
    <!-- Google Fonts Link For Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="script.js" defer></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');
    .second{
      display: flex; 
      margin-top:-20px;
    }
     .second .right-c{
      width: 50%;
      margin-left:30px;
      margin-right: 20px;
    } 
    .second .imag-sec{
      width:45%;

    } 
    .imag-sec img{
    height:370px;
    width:100%;
    border-radius:3px;
    }
  .button {
  background-color: wheat; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top: 20px;
  border-radius: 3px;
}

    @media (min-width:360px) and (max-width: 768px) {
      .second{
        display: flex;
        flex-flow: row wrap;
        width: 696px;
        margin-top: -40px;
    }
     .second .right-c{
      width: 50%;
      margin-left:30px;
      margin-right: 20px;
    } 
   .second .right-c .button {
      margin-top: -3px;
   }
    .second .imag-sec{
      width:50%;

    } 
    .imag-sec img{
      margin-top: 19px;
      margin-left: 19px;
    }
  }

  @media (min-width: 768px) and (max-width: 998px)
    {
      .second{
          display: flex; 
          flex-flow: row;
          margin-top: -230px;
    }
     .second .right-c{
      width: 50%;
    } 
    .second .imag-sec{
      width:50%;

    } 
    .imag-sec img{
      margin-top: 19px;
      margin-left: 41px;
    }
    
  }
    
    
    
    .container-inn {
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 422px;
      background-color: #f0f0f0;
     }
     .servi{
        width: 100%;
        display: flex;
     }
   
     @media (min-width:360px) and (max-width: 768px) {
    .container-inn {
      margin-top: 18px;
      height: 1709px;
     
    }
    .container-out{
        text-align: center;
        height: 957px;
        width: 100%;
        margin-top: 270px;
    }
    .container-out h3{
      margin-top: 40px;
    }
    .servi{
        height:1705px;
        width: 100%;
        flex-direction: column;
        margin-left: 25px;
        
     }

    } 
    @media (min-width: 768px) and (max-width: 998px)
    {
      .container-inn {
      margin-top: 18px;
      height: 879px;
     
    }
    .container-out{
        text-align: center;
        height: 957px;
        width: 100%;
        margin-top: 270px;
    }
    .container-out h3{
      margin-top: -10px;
    }
    .servi{
        display: flex;
        flex-flow: row wrap;
        height: 200px;
        margin-top: -604px;
     }

    }  
    @media (min-width: 998px) and (max-width: 1200px){
       .container-inn {
      margin-top: 18px;
      height: 1555px;
     
    }
    .container-out{
        text-align: center;
        height: 957px;
        width: 100%;
        margin-top: 270px;
    }
    .container-out h3{
      margin-top: 688px;
    }
    .servi{
        height:1550px;
        width: 100%;
        flex-direction: column;
        margin-left: 25px;
        
     }
    }
    .container-inn:hover{
        color: blue;
        cursor: pointer;
    }
    .container-out{
        text-align: center;
        height: 200px;
        width: 100%;
        margin-top: 37px;
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

    .banner-title{
        font-size: 39px;
    }

    @media (min-width: 360px) and (max-width: 786px)
    {
      .banner-title{
       
        font-size: 26px;
    }
    
    }
  .page-banner.home-page{
    overflow: hidden;
    
  }
  .page-banner.home-page video{
    float: right;
    height: 520px;
    object-fit: fill;
    width: 100%;
    margin-top: 25px;
  }
  .page-banner{
    position: relative;
  }
  .page-banner .banner-content.absolute{
    position: absolute;
    top: -130px;
  }
  .page-banner .banner-content{
    color: #fff;
  }
  .vertical-center{
    align-items: center;
    display: flex;
    height: 100%;
    width: 100%;
  }
  .page-banner.home-page .banner-content{
    background: linear-gradient(90deg,#002357 0,#002357 24%,rgba(0,35,87,.22));
    height: 738px;
  }

@media (min-width: 360px) and (max-width: 786px)
{
  .page-banner.home-page .banner-content{
    height: 815px;
  }

  .page-banner.home-page video {
    height: 600px;
    width: 100%;
    
}
}

  .page-banner.home-page .banner-content .banner-subtitle, .page-banner.home-page .banner-content .banner-title{
    max-width: 752px;
    
  }
  
  .page-banner .banner-content .banner-title{
    
    margin-bottom: 1.3rem;
  }
  .page-banner .banner-content .banner-subtitle{
    margin-bottom: 23px;
  }
   
  @media (min-width: 360px) and (max-width: 786px)
{
  .right-content h1{
    margin-top: -3px;
  }

}
  .right-content p{
    margin-top: 30px;
  }
  
 


p,a,h1,h2,h3,h4 {
	margin: 0;
	padding: 0;
}


.section-team .header-section .title {
    font-weight: 200;
    font-size: 35px;
    margin-top: -100px;
}


h1, h2, h3, h4, h5, h6 {
  color:#0b0861;
}
a, a:hover, a:focus, a:active {
    text-decoration: none;
    outline: none;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.heading {
    margin-top: 100px;
}
.separator {
    position: relative;
    display: inline-block;
    text-transform: capitalize;
    margin-bottom: 30px;
}
.separator:after,
.separator:before {
    position: absolute;
    content: "";
    width: 50px;
    height: 2px;
    background: #0b0861;
    top: 50%;
}

.separator i {
    color: #0b0861;
}

.separator:after {
    right: 140%;
}

.separator:before {
    left: 140%;
}

.amazing_feature {
padding-top:110px;
padding-bottom:50px;
}

@media (min-width:360px) and (max-width: 768px) {
  .amazing_feature {
        padding-top:1418px;
}
}
@media (min-width: 768px) and (max-width: 998px)
{
  .amazing_feature {
        padding-top:565px;
        display: flex;
        flex-flow: row wrap;
        height: 200px;
}
   .amazing_feature .row{
        display: flex;
        flex-flow: row wrap;
        height: 200px;
  }
  .row {
    margin-right: -15px;
    margin-left: -15px;
  }

}
.single_feature{
background: #fff none repeat scroll 0 0;
box-shadow:0 2px 30px rgba(0, 0, 0, 0.1);
margin-bottom: 30px;
padding: 40px 40px;
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.single_feature:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #0b0861;
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.single_feature:hover, .single_feature:focus, .single_feature:active {
  color: white;
}
.single_feature:hover:before, .single_feature:focus:before, .single_feature:active:before {
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
}

.single_feature i {
  border: 1px solid #e8e8e9;
  border-radius: 50%;
  color: #333;
  float: left;
  font-size: 20px;
  height: 60px;
  line-height: 60px;
  margin-right: 15px;
  position: relative;
  text-align: center;
  transition: all 0.3s ease 0s;
  width: 60px;
  z-index: 3;
  margin-top: 25px;
}
.single_feature:hover i{
  background: #fff;border: 1px solid #fff;color:#0b0861;
}
.single_feature h3 {
  text-transform: capitalize;
  font-size: 20px;
  font-weight:400;
  margin-top:0px;
  overflow: hidden;
}
.single_feature:hover h3{color:#fff;}
.single_feature span {
border-bottom: 1px dashed #ccc;
display: block;
margin: 15px auto 10px;
width: 80px;
}
.single_feature p { 
  margin-bottom: 0 ;
  overflow: hidden;
}

.content{
  width:100%;
  height: 400px;
  background: linear-gradient(90deg,#002357 0,#002357 24%,rgba(0,35,87,.22));
  height: 400px;
            
  }
.content h2{
    font-size: 1.75rem;
    padding-top: 20px;
    color: white;
    text-align: center;
}
        .content .content1{
           
            width:100%;
            height: 300px;
            display: flex;
        }
        .content .content1 .text{
            
            width:50%;
            height:250px;
        }
        .content .content1 .text p{
          color: white;
          font-size: 18px;
          margin-top: 50px;
          margin-left: 50px;
        }
        @media (min-width:360px) and (max-width: 768px) {
          .content1 .text p{
          height: 10px;
          margin-top: 50px;
          margin-left: 50px;
        }
        }
       
       
        .content .content1 .image{
           
            width:50%;
            height:250px;
            margin-left: 40px;
        }
        .content .content1 .image img{
          height: 300px;
          width: 500px;
          margin-top: 10px;
          margin-left: 50px;
          
        }

        .our-blog{
            text-align: center;
            width:100%;
            height: 500px;
            margin-top: 30px;
            border-radius: 3px;
        
        }
        .content-blog{
            width:100%;
            height: 400px;
        }
        .content-blog .content-b{
            width:100%;
            height: 300px;
            display: flex;
        }
        .content-blog .content-b .image1{
            width:50%;
            height:250px;
          
        }
        .content-blog .content-b .image1 img{
          height: 350px;
          width: 500px;
          margin-top: 30px;
          margin-left: 50px;
          border-radius: 1px;
        }
        .content-blog .content-b .image1 .image-1c{
          height: 200px; 
          width: 500px;
          margin-left:90px;
           background-color: #ccc;
        }

        .content-blog .content-b .image2{
            width:50%;
            height:250px;
        }
        .content-blog .content-b .image2 img{
          height: 350px;
          width: 500px;
          margin-top: 30px;
          margin-right: 50px;
          border-radius: 1px;
      
        }
        .content-blog .content-b .image2 .image-2c{
          height: 200px; 
          width: 500px;
           margin-left:40px;
           background-color: #ccc;
        }

.clients {
    width: 100%;
    margin: auto;
    text-align: center;
    
   
    /* margin-bottom: 40px; */
}

.clients h2{
  margin-top: 35px;
  font-size: 1.75rem;
    color: black;
    padding-bottom: 30px;
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
    height:200px;
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

  @media   (min-width:360px) and (max-width: 767px) {
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


  .our-container{
    margin-top: 410px;
    flex-direction: column;
  }
  
@media (min-width:360px) and (max-width: 768px) {
  .our-container {
  
    margin-top: 1974px; /* Resetting margin-top */
  }
  .content{
	width:100%;
	margin-top:50px;
	height:790px;
}
.content1{
	flex-direction:column;
}

.content .content1{
	width: 100%;
	height: 300px;
	display: flex;
}
.content .content1 .text{
	width: 80%;
	height: 250px;
}
.content .content1 .text p{
  width:289px;
  margin-top:10px;
	margin-left:68px;
}
.content .content1 .image{
	width: 80%;
	height: 250px;
	margin-left:0px;
	margin-top:310px;
}
.content .content1 .image img{
    
    margin-top: 71px;
    margin-left: 43px;
}
}
@media (min-width: 768px) and (max-width: 998px)
{
  .our-container {
  
  margin-top: 952px; /* Resetting margin-top */
}
.content{
  height: 520px;
}
.content1{
	flex-direction:row;
}
.content .content1 .text p{
  width:289px;
  margin-top:10px;
	margin-left:30px;
}
.content .content1 .image img{
    margin-top: -253px;
    margin-left: -21px;
    }
}

@media (min-width:360px) and (max-width: 768px) {
        .our-blog{
           width:100%;
            height: 500px;
            margin-top: 30px;
        
        
        }
        .content-blog{
            width:100%;
            height: 400px;
        }
        .content-blog .content-b {
            width: 583px;
            flex-direction: column;
        }
        .content-blog .content-b .image1{
            width:50%;
            height:250px;
          
        }
        .content-blog .content-b .image1 img{
          height: 240px;
          width: 550px;
          margin-top: 17px;
        
        }
        .content-blog .content-b .image1 .image-1c{
          height: 224px; 
          width: 100%;
          margin-left:51px;

        }

        .content-blog .content-b .image2{
            width:50%;
            height:250px;
        }
        .content-blog .content-b .image2 img{
          height: 240px;
          width: 550px;
          margin-top: 253px;
          margin-right: -99px;
        
      
        }
      .content-blog .content-b .image2 .image-2c{
          height: 224px; 
          width: 100%;
           margin-left:50px;
}
}

/*@media (min-width:360px) and (max-width: 880px) {
  .second .right-c {
    width: 103%;
    margin-left: 30px;
    margin-right: 20px;
}
.second {
    display: flex;
    flex-flow: row wrap;
    width: 100%;
    margin-top: -60px;
}
.second .imag-sec {
    width: 100%;
}
.imag-sec img {
    width: 320px;
}
}*/



/*@media (min-width: 768px) and (max-width: 998px)
{
  .our-blog{
    display: flex;
    flex-direction: row wrap;
  }
  .content-blog .content-b{
            width:627px;
           flex-direction: row;
        }
    .content-blog .content-b .image1{
            width:50%;
            height:250px;
          
        }
        .content-blog .content-b .image1 img{
          height:245px;
          width: 500px;
          margin-top: 27px;
        
        }
        .content-blog .content-b .image1 .image-1c{
          height: 230px; 
          width: 100%;
          margin-left:51px;

        }

        .content-blog .content-b .image2{
            width:50%;
            height:250px;
        }
        .content-blog .content-b .image2 img{
          height: 245px;
          width: 500px;
          margin-top: 25px;
          margin-right: -175px;
        
      
        }
      .content-blog .content-b .image2 .image-2c{
          height: 230px; 
          width: 100%;
           margin-left:89px;
}
}*/



@media (min-width:360px) and (max-width: 768px) {
    .clients{
          margin-top: 20px;
    }
}
@media (min-width: 768px) and (max-width: 998px){
  .clients{
          margin-top: 20px;
    }
}

  .blog {
    text-align: center;
    margin: 12px 10px;
    
  }

    .blog_title{
      margin: 0px 0px 30px;
      font-family: 'Raleway',sans-serif;
    }
    .blog_item h1{
      font-size: 8px;
    }
    .blog_wrapper {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      align-content: center;
      width: 100%;
      justify-content:center;
    }
      .blog_item {
        a{
          color: inherit; /* blue colors for links too */
          text-decoration: inherit;
        }
        margin: 0px 20px 40px;
        min-height: 300px;
        background: #fff 50%;
        background-size: cover;
        border-radius: 5px;
        text-decoration: none;
        box-shadow: 8px 14px 38px rgba(39,44,49,.06), 1px 3px 8px rgba(39,44,49,.03);
        box-shadow: 8px 8px 8px 8px  black;
        transition: all .5s ease;
        
      
        .bi_img {
          height: 200px;
          margin: 0px 0px 20px;
          overflow: hidden;
          img{
            width: 90%;
          }
        }
        .bi_title {
          font-size: 1.2rem;
          font-weight: 500;
          margin: 1.5em 0 .5em;
        }

        .bi_content {
          padding: 20px;
          font-size: 18px;
          text-align: justify;
         
        }
        .reading_time{
          font-family: 'Raleway', sans-serif;
          color: #738a94;
          font-size: 0.8rem;
          line-height: 33px;
          letter-spacing: .5px;
          text-transform: uppercase;
        }
        &:hover{
          box-shadow: 8px 28px 50px rgba(39,44,49,.07), 1px 6px 12px rgba(39,44,49,.04);
          transition: all .4s ease;
          transform: translate3D(0,-1px,0) scale(1.02);
        }
      }
    

    .blog_button {
      a {
        text-decoration: inherit;
        display: block;
        width: 200px;
        margin: 0px auto 5px;
        letter-spacing: 1px;
        padding: 10px 25px;
        background: #fc4f4f;
        color: white;
        outline-offset: -2px;
        transition: all .3s ease;}
        &:hover{
          background: #fff;
          color: #fc4f4f;
        }
      }
    
  
@media only screen and (max-width: 900px) {
  .blog{
    .blog_wrapper {
      display: grid;
      grid-template-columns: 1fr 1fr;
    }
  }
}
@media only screen and (max-width: 600px) {
  .blog{
    .blog_wrapper {
      display: grid;
      grid-template-columns: 1fr;
    }
  }
}
  
#ro{
    margin-top:-30px;
}
    
</style>
</head>
<body>

  <?php
   include ('h.php');
   
   ?>
    
    
<section class="page-banner home-page"><video autoplay="" muted="" loop="" poster="https://www.connecta-network.com/wp-content/webp-express/webp-images/doc-root/wp-content/themes/connecta/assets/images/home-banner.png.webp" class=""> <source class="lazy lazy-hidden" src="https://www.connecta-network.com/wp-content/themes/connecta/assets/videos/banner_c.webm" type="video/webm"> Your browser does not support the video tag.</video>

<div class="banner-content absolute vertical-center">
    <div class="container"><h1 class="banner-title">Unlock Global Opportunities with GatiVidhi: Your Key to Expanding Freight Networks</h1>
    
  <p class="banner-subtitle" style="font-size: 19px;">At GatiVidhi, we provide a platform where freight forwarders not only connect but also collaborate seamlessly to navigate the complexities of logistics and supply chain management.Join GatiVidhi today and empower your logistics network too.
</p> 
</div>
</div>
</section>











<!--<div class="container" > 
<div id="content">
    <div class="card">
        <img src="./images/feature.jpg" alt="Card Image">
        <div class="card-content">
            <div class="card-title">Card 1</div>
            <div class="card-description">This is the description for card 1.</div>
        </div>
    </div>

    <div class="card">
        <img src="./images/feature.jpg" alt="Card Image">
        <div class="card-content">
            <div class="card-title">Card 2</div>
            <div class="card-description">This is the description for card 2.</div>
        </div>
    </div>

    <div class="card">
        <img src="./images/feature.jpg" alt="Card Image">
        <div class="card-content">
            <div class="card-title">Card 3</div>
            <div class="card-description">This is the description for card 3.</div>
        </div>
    </div>
</div>
</div>-->

<!--<section class="about-section" id="abt-section">
        <div class="container">
            <div class="row">                
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h3>About Company</h3>
                            <h2>We are leader in <br>Industrial market Since 1992</h2>
                        </div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. </div>
                        <ul class="list-style-one">
                            <li>Lorem Ipsum is simply dummy tex</li>
                            <li>Consectetur adipisicing elit</li>
                            <li>Sed do eiusmod tempor incididunt</li>
                        </ul>
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-style-one">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column 
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img src="./images/image-1-about.jpg" alt=""></a></figure>
                        <figure class="image-2"><a href="#" class="lightbox-image" data-fancybox="images"><img src="./images/image-2-about.jpg" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>-->

<!--<div class="who">
<div class="blue_lignt_design_pattern">
          <div class="dotted-img">
          <div class="our-reach-sec">
            <div class="container" style="padding:0px; margin:0px;">
              <div class="careers-point1">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="right-content">
                      <h1 >Who We Are</h1>
                      <p>Logistic is India’s largest Supply Chain company. Starting out in 2019 with an aim to fulfil the supply chain requirements of customers across India, we are today the preferred partner for various businesses with our consistent excellence in consumer experience, reliable delivery and managing variability at scale. We strive to empower every Indian’s dream by delivering value through Innovation in Technology and Commerce.</p>
                     
                    </div>
                    <button class="button"><a href="process_shipping.php" style="text-decoration:none;">Track & Order</a></button>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="images-sec">
                      <img src="./images/blog-6.jpg" alt="Who We Are" class="img-responsive">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
</div>-->
  <div class="second" >
      <div class="right-c">
              <h1  style="font-size: 1.75rem;">WHO WE ARE</h1>
                <p>GatiVidhi is India’s largest Supply Chain company. Starting out in 2019 with an aim to fulfill the supply chain requirements of customers across India, we are today the preferred partner for various businesses with our consistent excellence in consumer experience, reliable delivery and managing variability at scale. We strive to empower every Indian’s dream by delivering value through Innovation in Technology and Commerce.With the foundational supply chain components established, GatiVidhi Logistics develops, executes, and oversees tailored supply chains for global industry markets or customized solutions for intricate transportation models.</p>
                <button class="button"><a href="track.php" style="text-decoration:none;">Track & Trace</a></button>
      </div>
    
    <div class="imag-sec"> 
          <img src="./images/blog-6.jpg" alt="">
    </div>
  </div>               



<!--our services-->

<div class="container-out">
    <h3>OUR SERVICES</h3>
 <div class="container-inn">
  <div class="servi">
  <div class="card">
    <img src="./images/service-1.jpg"></a>
    <a href="AirFreight.php" style="text-decoration:none;"><h2>Air Freight</h2></a>
    <p>Transport of goods and passengers using aircraft for rapid delivery across long distances.</p>
  </div>
  
  <div class="card">
  <img src="./images/service-2.jpg"></a>
  <a href="OceanFreight.php" style="text-decoration:none;"><h2>Ocean Freight</h2></a>
    <p>Transport of goods using ships for efficient and cost-effective delivery across vast distances.</p>
  </div>
  
  <div class="card">
  
  <img src="./images/service-3.jpg"></a>
  <a href="LandTransport.php" style="text-decoration:none;"><h2>Land Transport</h2></a>
    <p>Movement of goods and passengers using motor vehicles such as trucks.</p>
  </div>
  
  <div class="card">
  
  <img src="./images/service-4.jpg"></a>
  <a href="CargoTrans.php" style="text-decoration:none;"><h2>Cargo Storage</h2></a>
    <p>Transportation of goods and passengers using trains for efficient and reliable rail networks</p>
  </div>
</div> 
</div>
</div>

<!--<div class="cont-out">
    <h2 style="padding-top:50px;">Our Services</h2>
  <div class="cont-serv" style="display: flex; justify-content:center; background-color:#ccc; height:500px;   margin-top:280px;">
  <div class="card">
        <img src="./images/service-1.jpg" alt="Card Image 1">
        <h4 class="mb-3">Air Freight</h4>
                      <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                      <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
  </div>

    <div class="card">
        <img src="./images/service-2.jpg" alt="Card Image 2">
        <h4 class="mb-3">Ocean Freight</h4>
                      <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                      <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
    </div>

    <div class="card">
        <img src="./images/service-3.jpg" alt="Card Image 3">
        <h4 class="mb-3">Road Freight</h4>
                      <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                      <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
    </div>

    <div class="card">
        <img src="./images/service-2.jpg" alt="Card Image 2">
        <h4 class="mb-3">Ocean Freight</h4>
                      <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                      <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
    </div>
</div>

</div>-->

<!--our team-->
<!--<section class="section-team">
		<div class="container">
			<!-- Start Header Section -->
			<!--<div class="row justify-content-center text-center">
				<div class="col-md-8 col-lg-6">
					<div class="header-section">
						<h2 class="title">Let's Meet With Our Team Members</h2>
					</div>
				</div>
			</div>
		</div>
</section>-->

<section class="amazing_feature">
      <div class="container">

            <div class="row"> 
                <div class="col-md-12 text-center heading-main">
                    <h3 class="heading">OUR FEATURES</h3>
                    <div class="separator"><i class="fa fa-service below-line-about-icon"></i></div>

                </div>
            </div>      
        <div class="row" id="ro">         
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_feature">
              <div class="feature_icon"><i class="far fa-heart"></i></div>
              <h3>Order & Time Management</h3>
              <p>Prioritizing tasks and projects means deciding which ones are most important for your business's focusing on them first.</p>  
            </div>
          </div><!-- END COL-->               
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_feature">
              <div class="feature_icon"><i class="fa fa-magic"></i></div>
              <h3>Inventory & Logistics Management</h3>
              <p>Helps businesses figure out how much of a product they should have, making it easier to plan how much stock to keep.</p>    
            </div>
          </div><!-- END COL-->         
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_feature">
              <div class="feature_icon"><i class="fas fa-location-arrow"></i></div>
              <h3>Supplychain Management</h3>
              <p>The journey of a product from its raw materials to the hands of the consumer, ensuring smooth successful delivery.</p>  
            </div>
          </div><!-- END COL-->             
          <!-- <div class="col-md-4 col-sm-6 col-xs-12"> -->
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_feature">
              <div class="feature_icon"><i class="far fa-money-bill-alt"></i></div>
              <h3>Warehouse Management</h3>
              <p>Warehouse management involves the methods and tasks needed to run a smoothly every day.</p>  
            </div>
          </div><!-- END COL-->         
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_feature">
              <div class="feature_icon"><i class="fa fa-cog"></i></div>
              <h3>Real-time Management</h3>
              <p>Is a way for companies to make quick decisions and changes as things happen, helping them deliver faster.</p>  
            </div>
          </div><!-- END COL-->         
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_feature">
              <div class="feature_icon"><i class="fa fa-database"></i></div>
              <h3>Forecasting Management</h3>
              <p>Forecasting management means predicting how much of a product or service will be needed in the future.</p>  
            </div>
          </div><!-- END COL-->           
        </div><!--- END ROW -->     
      </div><!--- END CONTAINER -->   
    </section>


    
  <div class="our-container">
    <div class="content">
        <h2>WHY CHOOSE US?</h2>
        <div class="content1">
            <div class="text"><p> When you choose GatiVidhi, you're not just a client – you're a partner. We believe in building long-term relationships based on mutual trust, respect, and collaboration. Whether you're a new customer or a returning client, we value your business and are committed to helping you succeed.As a responsible corporate citizen, we are committed to sustainability and environmental stewardship.</p></div>
            <div class="image"><img src="./images/clients.png"></div>
        </div>
    </div>
  </div>


<!--div class="our-blog">
    <div class="content-blog">
        <h2>OUR LATEST BLOG</h2>
        <div class="content-b" >
            <div class="image1" ><img src="./images/blog-1.jpg">
            <div class="image-1c">
                       <h4 class="font-weight-bold mb-3">Top Trends Shaping the Future of Logistics</h4>
                        <p>As the logistics industry continues to evolve at a rapid pace, it's crucial for businesses to emerging trends in this blog post.</p>
                        <a class="border-bottom border-primary text-uppercase text-decoration-none" href="blog.php">Read More <i class="fa fa-angle-right"></i></a>
            </div>
            </div>
            <div class="image2" ><img src="./images/blog-2.jpg">
          <div class="image-2c">
          <h4 class="font-weight-bold mb-3">Unlocking the Power of Data Analytics in Logistics</h4>
                        <p> In this blog post, we'll explore how data analytics can help businesses improve efficiency, reduce costs.</p>
                        <a class="border-bottom border-primary text-uppercase text-decoration-none" href="blog.php">Read More <i class="fa fa-angle-right"></i></a>
          </div>
          </div>
        </div>
    </div>
</div>-->

<!--<div class="blog">
        <div class="blog_title">
          <h1 style="font-size:1.75rem;">OUR LATEST BLOGS</h1>
        </div>
        <div class="blog_wrapper">
          
          <div class="blog_item">
            <a href="#">
              <div class="bi_img"><img src="./images/blog-4.jpg"></div>
              <div class="bi_title">Blog-1</div>
              <div class="bi_content">Mobile wallets are making headlines these days. Domestic e-commerce companies, such
                as Flipkart, plan to launch a wallet soon, while a few payment gateways, such as Paytm and Mobikwik.</div>
             
            </a>
          </div>
          <div class="blog_item">
            <a href="#">
              <div class="bi_img"><img src="./images/blog-1.jpg"></div>
              <div class="bi_title">Blog-2</div>
              <div class="bi_content">Mobile wallets are making headlines these days. Domestic e-commerce companies, such
                as Flipkart, plan to launch a wallet soon, while a few payment gateways, such as Paytm and Mobikwik.</div>
             
            </a>
          </div>
          <div class="blog_item">
            <a href="#">
              <div class="bi_img"><img src="./images/blog-2.jpg"></div>
              <div class="bi_title">Blog-3</div>
              <div class="bi_content">Mobile wallets are making headlines these days. Domestic e-commerce companies, such
                as Flipkart, plan to launch a wallet soon, while a few payment gateways, such as Paytm and Mobikwik.</div>
            
            </a>
          </div>
        </div>
    <div class="blog_button"><a href="blog.php">See all blogs</a></div>
      </div>-->

  

<div class="clients">
    <h2><u>OUR PARTNERS</u></h2>
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
 include ('footer3.php');
 ?>

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