<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>MusicBoax</title>
  <link rel="shortcut icon" href="Images/Icon.jpg" type="image/jpg">
  <link rel="stylesheet" type="text/css" href="CSS/design.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
       <link rel="stylesheet"  href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
</head>
<body class="column">

<div id="main">
    <nav role = "main">
        <img id="logo" src="Images/logo.jpg" alt="temporarylogo" >
     

<nav class="navbar">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
</nav>
</div>

<!-- Slideshow container 
<div class="slideshow-container">

   Full-width images with number and caption text 
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="Images/Weeknd-afterhours.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="Images/enoc-ozuna.png" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="Images/eminem-kamikaze.jpg" title="eminem-kamikaze" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  

The dots/circle
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>

-->

</body>
<!-- Footer -->
  <footer class="bg-white">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="img/logo.png" alt="" width="180" class="mb-3">
          <p class="font-italic text-muted">MusicBoax online mp3 player, Click any icon below to get in touch with us</p>
          <ul class="list-inline mt-4">
            <li class="list-inline-item"><a href="#"  title="twitter"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/mmmmadushan/" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="https://www.reddit.com/user/BardoEduardo/" target="_blank" title="reddit"><i class="fa fa-reddit" aria-hidden="true"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
       <!-- <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Shop</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-muted">For Women</a></li>
            <li class="mb-2"><a href="#" class="text-muted">For Men</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Stores</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Our Blog</a></li>
          </ul>
        </div>-->
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="Login.php" class="text-muted">Login</a></li>
            <li class="mb-2"><a href="Register.php" class="text-muted">Register</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Report Bug</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Donate</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Subscribe to get notified of new songs</h6>
          <p class="text-muted mb-4">Get notified everytime a new album is released!!</p>
          <div class="p-1 rounded border">
            <div class="input-group">
              <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
              <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link"><a href="" target="_self" title=""><i class="fa fa-paper-plane"></i></a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Copyrights -->
    <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2021 MusicBoax All rights reserved.</p>
      </div>
    </div>
  </footer>
  <!-- End -->
</html>