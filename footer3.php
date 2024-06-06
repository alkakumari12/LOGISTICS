
    <!----- FONT AWESOME CSS FOR ICONS FONTS ------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <style>
       
footer{
     background-color: #000000ff;
     position: relative;
     width: 100%;
    }
.container1 {
    max-width: 1140px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 235px;
    
}
.row1{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}

.col{
    min-width: 250px;
    color:#f2f2f2f2;
    font-family: poppins;
    padding:0 1rem;
}
.col .logo{
    width: 150px;
    height: 80px;
    margin-top: -20px;
}
.col h3{
    color:#ff014fff;
    margin-bottom: 20px;
    position: relative;
    cursor: pointer;
}
.col h3::after{
    content: '';
    height:3px;
    width:0px;
    background-color: #ff014fff;
    position: absolute;
    bottom: 0;
    left:0;
    transition: 0.3s ease;

}
.col h3:hover::after{
    width:30px;
}
.col .social a i{
    color:#ff014fff;
    margin-top:1rem;
    margin-right: 5px;
    transition: 0.3s ease;
}
.col .social a i:hover{
    transform: scale(1.5);
    filter:grayscale(25);
}
.col .links a{
    display: block;
    text-decoration: none;
    color:#f2f2f2;
    margin-bottom: 5px;
    position: relative;
    transition: 0.3s ease;
}
.col .links a::before{
    content:'';
    height: 16px;
    width:3px;
    position: absolute;
    top:5px;
    left:-10px;
    background-color: #ff014fff;
    transition: 0.5s ease;
    opacity: 0;
}
.col .links a:hover::before{
    opacity: 1;
}
.col .links a:hover{
    transform: translateX(-8px);
    color:#ff014fff;
}
.col .contact-details{
    display: inline-flex;
    justify-content: space-between;
}
.col .contact-details i{
    margin-right:15px;
}
.row1 .form{
    display: flex;
    justify-content: center;
    align-items: center;
    padding:2rem 0;
}
.row1 .form input{
    background-color: #1a1c20ff;
    border:0;
    outline:none;
    padding:14px 20px;
    border-radius: 6px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.form button{
    padding:14px 20px;
    border:0;
    border-radius: 6px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    background-color: #ff014fff;
}
.copy{
    padding-bottom: 20px;
}
/********** Responsive Design ********/
@media (min-width: 360px) and (max-width: 786px)
{
    footer{
     background-color: #000000ff;
     width: 100%;
     height: 882px;
    
}


.container1 {
    max-width: 1140px;
    margin: 0 auto;
    height: 300px;
    padding-top:433px;
    margin-left:29px;

}
  .row1{
    flex-direction: column;
  }
  .col{
    width: 100%;
    text-align: left;
    margin-bottom: 25px;
  }
  .copy{
            margin-top: 400px;
            padding-bottom: 20px;
  }
  #contact{
    margin-left: 50px;
}
#useful-links{
    margin-left: 60px;
}
#services{
    margin-left: 40px;
}
  
}

@media (min-width: 768px) and (max-width: 998px)
{
    footer{
     background-color: #000000ff;
     position: relative;
     width: 100%;
     height: 900px;
    
}
.container1 {
    max-width: 1140px;
    height: 100px;

}
  .row1{
    flex-direction: column;
    margin-top: -15px;
  }
  .col{
    width: 100%;
    text-align: left;
    margin-bottom: 20px;
  }
  
}

@media (min-width: 998px) and (max-width: 1200px){
    footer{
     background-color: #000000ff;
     position: relative;
     width: 100%;
     
    
}
.container1 {
    max-width: 1140px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 300px;

}
  .row1{
    padding-top: 517px;
    flex-direction: column;
  }
  .col{
    width: 100%;
    text-align: left;
    margin-bottom: 25px;
  }
}

#contact{
    margin-right: 30px;
}
#useful-links{
    margin-left: 60px;
}
#services{
    margin-left: 40px;
}


    </style>


     <footer>
        <div class="container1">
            <div class="row1">
                  <div class="col" id="company">
                      <img src="./images/gatividhi.png" alt="" class="logo">
                      <p style="margin-top:10px">
                        We are specialized in designings, make your business a brand.
                        
                      </p>
                      
                  </div>


                  <div class="col" id="services">
                     <h3>SERVICES</h3>
                     <div class="links">
                        <a href="AirFreight.php">Air Freight</a>
                        <a href="OceanFreight.php">Ocean Freight</a>
                        <a href="LandTransport.php">Land Transport</a>
                        <a href="CargoTrans.php">Cargo Storage</a>
                        <a href="sender_section.php">Ship Now</a>
                     </div>
                  </div>

                  <div class="col" id="useful-links">
                     <h3>LINKS</h3>
                     <div class="links">
                        <a href="index.php">Home</a>
                        <a href="about.php">About</a>
                        <a href="services.php">Services</a>
                        <a href="blog.php">Blog</a>
                        <a href="contact.php">Contact</a>
                     </div>
                  </div>

                  <div class="col" id="contact">
                      <h3>CONTACT</h3>
                      <div class="contact-details">
                         <i class="fa fa-location"></i>
                         <p>PSS Techno Service, <br> 63, Noida <br>Email:-hr@psstspl.com</p>
                      </div>
                      <div class="contact-details">
                         <i class="fa fa-phone"></i>
                         <p>+91 1234 412346</p>
                      </div>
                  </div>
                  
            </div>
         
            </div>
           
            <div class="copy">
                    <hr/ style="color:white;">   
                         <center><p1 style="color:white;">@copyright 2024 Gatividhi</p1></center>
            </div>
     </footer>
