<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Blog-GatiVidhi</title>
<style>
  .blob{
    margin-top: 113px;
    
  }
  .blob h3{
    text-align: center;
  }
  
  .containerii {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
    background-color: gainsboro;
    height: 400px;
  }

  .containerii2{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    background-color: gainsboro;
    margin-bottom: 20px;
  }

  .carding {
    width: 350px;
    height: 350px;
    margin: 20px;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .carding img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .carding:hover img {
    transform: scale(1.1);
  }

  .carding .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    opacity: 0;
    transition: opacity 0.5s ease;
  }

  .carding:hover .overlay {
    opacity: 1;
  }



  @media (min-width:360px) and (max-width: 767px) {
    .containerii {
      flex-direction: row;
      height: 1180px;
      }
  }
  @media (min-width: 768px) and (max-width: 998px)
{
  .bcont
      {
        display: flex;
      }
    .containerii{
      margin-top:0px ;
      height: 1170px;
    }
}
</style>
</head>
<body>
  <?php
    include ('h.php');
  ?>

<div class="blob">
    <h3>OUR LATEST BLOG</h3>
</div>
<div class="bcont">
<div class="containerii">
  <div class="carding">
    <img src="./images/blog-1.jpg" alt="Image 1">
    <div class="overlay">Blog-1</div>
  </div>

  <div class="carding">
    <img src="./images/blog-2.jpg" alt="Image 2">
    <div class="overlay">Blog-2</div>
  </div>

  <div class="carding">
    <img src="./images/blog-3.jpg" alt="Image 3">
    <div class="overlay">Blog-3</div>
  </div>
</div>

<div class="containerii2">
  <div class="carding">
    <img src="./images/blog-4.jpg" alt="Image 4">
    <div class="overlay">Blog-4</div>
  </div>

  <div class="carding">
    <img src="./images/blog-5.jpg" alt="Image 5">
    <div class="overlay">Blog-5</div>
  </div>

  <div class="carding">
    <img src="./images/blog-6.jpg" alt="Image 6">
    <div class="overlay">Blog-6</div>
  </div>
</div>
</div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <?php 
        include ('footer3.php');
      ?>
</body>
</html>
