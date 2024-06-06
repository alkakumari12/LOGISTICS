<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Footer</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
    * {
  margin: 0;
  padding: 0;
  color: #d9d9d9;
  box-sizing: border-box;
  font-family: "Montserrat", sans-serif;
}
   
   
    section {
  /* Just for parent demo size */
  height: 65vh;
  display: grid;
  place-items: center;
}


    h1 {
  font-size: 48px;
  color: black;
}

footer {
  position: fixed;
  bottom: 0px;
  width: 100%;
  background-color: #111;
}

.main-content {
  display: flex;
}

.main-content .box {
  flex-basis: 50%;
  padding: 10px 20px;
}

.box h2 {
  font-size: 1.125;
  font-weight: 600;
  text-transform: uppercase;
}

.box .content {
  margin: 20px 0 0 0;
  position: relative;
}

.box .content::before {
  position: absolute;
  content: "";
  /*  border: 2px solid red;*/
  /*  Show them the file*/
  top: -10px;
  height: 4px;
  width: 100%;
  background-color: #1a1a1a;
}

.box .content::after {
  position: absolute;
  content: "";
  height: 3px;
  width: 20%;
  background: #f12020;
  top: -10px;
}

.left .content .social {
  margin: 20px 0 0 0;
}

.left .content .social a {
  padding: 0 2px;
}

.left .content .social a span {
  height: 40px;
  width: 40px;
  background-color: #1a1a1a;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
  border-radius: 5px;
  transition: 0.3s;
}

.left .content .social a span:hover {
  background: #f12020;
}

.center .content .fas {
  font-size: 1.4375rem;
  background-color: #1a1a1a;
  height: 45px;
  width: 45px;
  line-height: 45px;
  text-align: center;
  border-radius: 50%;
  cursor: pointer;
  transition: .3s;
}

.center .content .fas:hover {
  background-color: #f12020;
}

.center .content .text {
  font-size: 1.07rem;
  font-weight: 500;
  padding-left: 10px;
}

.center .content .phone {
  margin: 8px 0;
}

.right form .text {
  font-size: 1.07rem;
  margin-bottom: 2px;
  color: #656565;
}

.right form .msg {
  margin-top: 10px;
}

.right form input,
.right form textarea {
  width: 100%;
  font-size: 1.07rem;
  background-color: #151515;
  padding-left: 10px;
  border: 1px solid #222222;
}

.right form input:focus,
.right form textarea:focus {
  outline-color: #3498db;
}

.right form input {
  height: 35px;
}

.right form .btn {
  margin-top: 10px;
}

.right form .btn button {
  height: 40px;
  width: 100%;
  border-radius: 5px;
  border: none;
  outline: none;
  background-color: #f12020;
  font-size: 1.07rem;
  font-weight: 500;
  cursor: pointer;
  transition: .3s;
}

.right form .btn button:hover {
  background-color: #000;
}

.bottom center {
  padding: 5px;
  font-size: 0.94rem;
  background-color: #151515;
}

.bottom center span {
  color: #656565;
}

.bottom center a {
  color: #f12020;
  text-decoration: none;
}

.bottom center a:hover {
  text-decoration: underline;
}

@media screen and (max-width: 900px) {
  footer {
    position: relative;
    bottom: 0px;
  }

  .main-content {
    flex-wrap: wrap;
    flex-direction: column;
  }

  .main-content .box {
    margin: 5px 0;
  }
}


  </style>
</head>



  <footer>
    <div class="main-content">
      <div class="left box">
        <h2>About us</h2>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum sunt saepe maxime consequatur, architecto cum quos quo ut id totam laborum veritatis quaerat esse atque, doloremque facere hic. Odit, eum.</p>
          <div class="social">
            <a href=""><span class="fab fa-facebook-f"></span></a>
            <a href=""><span class="fab fa-instagram"></span></a>
            <a href=""><span class="fab fa-twitter"></span></a>
            <a href=""><span class="fab fa-youtube"></span></a>
          </div>
        </div>
      </div>
      <div class="center box">
        <h2>Adress</h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">London, UK</span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+089-5689754993</span>
          </div>
          <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text">webdev@dev.com</span>
          </div>
        </div>
      </div>
      <div class="right box">
        <h2>Contact US</h2>
        <div class="content">
          <form action="#">
            <div class="email">
              <div class="text">Email:</div>
              <input type="email" required>
            </div>
            <div class="msg">
              <div class="text">Message:</div>
              <textarea name="" id="" cols="25" required rows="2"></textarea>
            </div>
            <div class="btn">
              <button type="submit">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="bottom">
      <center>
        <span class="credit">
          Created by <a href="">WebDev</a> |
        </span>
        <span class="far fa-copyright"></span>
        <span>2021 All Rights Reserved.</span>
      </center>
    </div>

  </footer>

