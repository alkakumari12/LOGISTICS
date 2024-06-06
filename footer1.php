<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer HTML & CSS</title>
    
    <!----- FONT AWESOME CSS FOR ICONS FONTS ------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <style>
       footer {
    background-color: #000000ff;
    position: relative;
    width: 100%;
    height: auto;
    margin-top: 30px;
    padding: 20px 0; /* Adjust padding as needed */
}

.container1 {
    max-width: 90%;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: auto;
}

.row1 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.col {
    min-width: 250px;
    color: #f2f2f2f2;
    font-family: poppins;
    padding: 0.5rem;
    text-align: center;
}

.col .logo {
    width: 100px;
    height: 50px;
}

.col h3 {
    color: #ff014fff;
    margin-bottom: 20px;
    position: relative;
    cursor: pointer;
}

.col h3::after {
    content: '';
    height: 3px;
    width: 0px;
    background-color: #ff014fff;
    position: absolute;
    bottom: 0;
    left: 0;
    transition: 0.3s ease;
}

.col h3:hover::after {
    width: 30px;
}

.col .social a i {
    color: #ff014fff;
    margin-top: 2rem;
    margin-right: 5px;
    transition: 0.3s ease;
}

.col .social a i:hover {
    transform: scale(1.5);
    filter: grayscale(25);
}

.col .links a {
    display: block;
    text-decoration: none;
    color: #f2f2f2;
    margin-bottom: 5px;
    position: relative;
    transition: 0.3s ease;
}

.col .links a::before {
    content: '';
    height: 16px;
    width: 3px;
    position: absolute;
    top: 5px;
    left: -10px;
    background-color: #ff014fff;
    transition: 0.5s ease;
    opacity: 0;
}

.col .links a:hover::before {
    opacity: 1;
}

.col .links a:hover {
    transform: translateX(-8px);
    color: #ff014fff;
}

.col .contact-details {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 10px;
}

.col .contact-details i {
    margin-bottom: 5px;
}

.row1 .form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 2rem 0;
}

.row1 .form input {
    width: 100%;
    background-color: #1a1c20ff;
    border: 0;
    outline: none;
    padding: 14px 20px;
    border-radius: 6px;
    margin-bottom: 10px;
}

.form button {
    width: 100%;
    padding: 14px 20px;
    border: 0;
    border-radius: 6px;
    background-color: #ff014fff;
}

@media only screen and (min-width: 768px) {
    .container1 {
        flex-direction: row;
    }

    .col {
        flex: 1;
        text-align: left;
    }

    .row1 {
        flex-direction: row;
    }

    .row1 .form {
        flex: 1;
        padding: 0;
    }
}


    </style>

</head>
<body>
     <footer>
        <div class="container1">
            <div class="row1">
                  <div class="col" id="company">
                      <img src="./images/newlogo.jpg" alt="" class="logo">
                      <p>
                        We are specialized in designings, make your business a brand.
                        Try our premium services.
                      </p>
                      <div class="social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                      </div>
                  </div>


                  <div class="col" id="services">
                     <h3>Services</h3>
                     <div class="links">
                        <a href="#">Air Freight</a>
                        <a href="#">Ocean Freight</a>
                        <a href="#">Land Transport</a>
                        <a href="#">Cargo Storage</a>
                     </div>
                  </div>

                  <div class="col" id="useful-links">
                     <h3>Links</h3>
                     <div class="links">
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Blog</a>
                        <a href="#">Contact</a>
                     </div>
                  </div>

                  <div class="col" id="contact">
                      <h3>Contact</h3>
                      <div class="contact-details">
                         <i class="fa fa-location"></i>
                         <p>BSI, PSS Techno Services, <br> 63, Noida</p>
                      </div>
                      <div class="contact-details">
                         <i class="fa fa-phone"></i>
                         <p>+91 234 00168</p>
                      </div>
                  </div>
            </div>

            

        </div>
     </footer>
</body>
</html>