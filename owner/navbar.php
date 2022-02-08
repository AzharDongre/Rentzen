<!DOCTYPE html>


<head>
  <title>Rentzen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="index.php">

  <meta charset="utf-8" />  
</head>
<body>

<body>  
      
<div class="upper">
  <h1 class="rentzen">R E N T Z E N</h1>
  <h1 class="desc">-(Online House Renting System)</h1> 
  
  
   <h2 class="tagline">- Easy Living, Best Rates</h2>
   </div>

   <nav class="navbar navbar-expand-sm navbar-light justify-content-between">

   <div class="container-fluid">

  <a class="navbar-header" href="index.php">
   <!-- <img src="images/logo.jpeg" alt="logo" style="height:50px;">-->
  </a>
  
  <!-- Links -->
  <div class="links">
  <div class="icons">
  <ul class="nav navbar-nav  " alt="nav navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about us.html">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact us.html">Contact Us</a>
    </li>
  </ul>
  
  </div>
  <ul class="nav navbar-nav navbar-right">
      <?php 
      
if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){
?>
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> My Profile
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="profile.php">Profile</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>


<?php
  
}

else {
  ?>
      <li><a href="how-to-register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href="how-to-login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <?php
   } ?>
    </ul>
  </div>
  </div>
</nav>

<script type="text/javascript">  
        var slide_index = 1;  
        displaySlides(slide_index);  
  
        function nextSlide(n) {  
            displaySlides(slide_index += n);  
        }  
  
        function currentSlide(n) {  
            displaySlides(slide_index = n);  
        }  
  
        function displaySlides(n) {  
            var i;  
            var slides = document.getElementsByClassName("showSlide");  
            if (n > slides.length) { slide_index = 1 }  
            if (n < 1) { slide_index = slides.length }  
            for (i = 0; i < slides.length; i++) {  
                slides[i].style.display = "none";  
            }  
            slides[slide_index - 1].style.display = "block";  
        }  
    </script>  
  
</body>  
</html>