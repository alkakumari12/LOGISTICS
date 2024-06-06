<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contact-GatiVidhi</title>
    <style>
        .head{
            margin-top: 0px;
        }
        .head img{
            height: 300px;
            width: 100%;
            margin-top: 85px;
           
        }

        /* color:  red#ec1c24, black#212d31, grey#343a40, white#eee  */

.contain {
  background-color: #eee;
  max-width: 1170px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
  margin-top: 30px;
}

div.form {
  height: 630px;
  background-color: #eee;
}
.contact-wrapper {
  margin: auto 0;
}

.submit-btn {
  float: left;
}
.reset-btn {
  float: right;
}

.form-headline:after {
  content: "";
  display: block;
  width: 10%;
  padding-top: 10px;
  border-bottom: 3px solid #ec1c24;
}

.highlight-text {
  color: #ec1c24;
}

.hightlight-contact-info {
  font-weight: 700;
  font-size: 22px;
  line-height: 1.5;
}

.highlight-text-grey {
  font-weight: 500;
}

.email-info {
    margin-top: 20px;
}

::-webkit-input-placeholder { /* Chrome */
  font-family: 'Roboto', sans-serif;
}

.required-input {
  color: black;
}
@media (min-width: 600px) {
  .contain {
    padding: 0;
  }
}

h3,
ul {
  margin: 0;
}

h3 {
  margin-bottom: 1rem;
}

.form-input:focus,
textarea:focus{
  outline: 1.5px solid #ec1c24;
}

.form-input,
textarea {
  width: 100%;
  border: 1px solid #bdbdbd;
  border-radius: 5px;
}

.wrapper > * {
  padding: 1em;
}
@media (min-width: 700px) {
  .wrapper {
    display: grid;
    grid-template-columns: 2fr 1fr;
  }
  .wrapper > * {
    padding: 2em 2em;
  }
  
}

ul {
  list-style: none;
  padding: 0;
}

.contacts {
  color: #212d31;
}

.form {
  background: #fff;
}

form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}
form label {
  display: block;
}
form p {
  margin: 0;
}

.full-width {
  grid-column: 1 / 3;
}

button,
.submit-btn,
.form-input,
textarea {
  padding: 1em;
}

button, .submit-btn {
  background: transparent;
 
  color: #ec1c24;
  border-radius: 15px;
  padding: 5px 10px;
  text-transform: uppercase;
}
button:hover, .submit-btn:hover,
button:focus , .submit-btn:focus{
  background: #ec1c24;
  outline: 0;
  color: #eee;
}
.error {
  color: #ec1c24;
}
/* For Mobile View */
@media only screen and (max-width: 767px) {
  .head img {
    height: 200px; /* Adjusted height for mobile */
    margin-top: 84px; /* Adjusted margin top for mobile */
  }

  .contain {
    margin-top: 20px; /* Adjusted margin top for mobile */
  }

  .form {
    height: auto; /* Adjusted height for mobile */
  }

  .form-input,
  textarea {
    width: calc(100% - 22px); /* Adjusted width for mobile */
  }

  button,
  .submit-btn {
    padding: 0.5em 1em; /* Adjusted padding for mobile */
    font-size: 14px; /* Adjusted font size for mobile */
  }
  .contact-wrapper {
  margin-top:-97px;
}
}

/* For Tablet View */
@media (min-width: 768px) and (max-width: 997px) {
  .head img {
    height: 250px; /* Adjusted height for tablet */
    margin-top: 84px; /* Adjusted margin top for tablet */
  }

  .contain {
    margin-top: 30px; /* Adjusted margin top for tablet */
  }
  .contact-wrapper {
    width: 331px;
}
}

/* For Laptop View */
@media (min-width: 998px) {
  .head img {
    height: 370px; /* Adjusted height for laptop */
    margin-top: 85px; /* Adjusted margin top for laptop */
  }

  .contain {
    margin-top: 30px; /* Adjusted margin top for laptop */
  }
}


</style>
</head>
<body>
    <?php include 'h.php' ?>
    <div class="head">
        <img src="./images/contact.webp">
    </div>


    <div class="contain">

    <div class="wrapper">

    <div class="form">
      <h4>GET IN TOUCH</h4>
      <h2 class="form-headline">Send us a message</h2>
      <form method="POST" id="submit-form">
        
        <p> 
          <input id="name" class="form-input" type="text" placeholder="Your Name*" name="name" onkeydown="return/^[a-zA-Z\s]+$/.test(event.key)" required>
          <small></small>
        </p>
        
        <p>
          <input id="email" name="email" class="form-input" type="email" placeholder="Your Email*">
          <small></small>
        </p>
        
        <p class="full-width">
          <input id="phone" name="phone" class="form-input" type="text" placeholder=" Your Phone Number*" onkeypress="return validateNumber(event)" maxlength="10" minlength="10" required>
          <small></small>
        </p>
        
        <p class="full-width">
          <textarea  minlength="20" name="message" id="message" cols="30" rows="7" placeholder="Your Message*" required></textarea>
          <small></small>
        </p>
        <!--<p class="full-width">
          <input type="checkbox" id="checkbox" name="checkbox" checked> Yes, I would like to receive communications by call / email about Company's services.
        </p>-->
        <p class="full-width">
          <input type="submit" class="submit-btn" value="Submit"  id="form-submit">
          <span style="color:green;" id="msg"></span>
        </p>
      </form>
    </div>

    <div class="contacts contact-wrapper">

      <ul>
        <li>BSI, Bussiness Sector 63 (Noida)<span class="highlight-text-grey"></span><br>We are ready to know
          how we can help you?</li>
        <span class="hightlight-contact-info">
          <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i>hrpss@gmail.com</li>
          <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text">+911 111 0112</span></li>
        </span>
      </ul>
    </div>
  </div>
</div>


<div class="mapouter"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d59673.37255352948!2d77.29224!3d20.808039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x604c3c4160741f7b%3A0x5be6bb2f97663c66!2sPSS%20Techno%20Service%20Digital%20Marketing!5e0!3m2!1sen!2sus!4v1714728553392!5m2!1sen!2sus" width="1262" height="450" style="border:0; margin-top:30px; margin-bottom:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div></div>

  <?php include 'footer3.php' ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  jQuery('#submit-form').on('submit',function(e){
  
  jQuery('#msg').html('');
  jQuery('#form-submit').html('Please wait');
  jQuery('#form-submit').attr('disabled',true);
  jQuery.ajax({
    url:'save.php',
    type:'post',
    data:jQuery('#submit-form').serialize(),
    success:function(result){
      jQuery('#msg').html(result);
      
      jQuery('#form-submit').html('Submit');
      jQuery('#form-submit').attr('disabled',false);
      jQuery('#submit-form')[0].reset();
    }
 });
 e.preventDefault();
});
</script>

 
 
 <script>
    function validateNumber(e) {
        const pattern = /^[0-9]$/;
        return pattern.test(e.key);
    }
</script>


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