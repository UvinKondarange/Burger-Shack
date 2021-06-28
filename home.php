<html>
<head>
	<title>Burger Shack</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}



/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 1s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
	
	
	
</head>
<body>



	<div class="hero">
	
	<div class="nav-bar">
		<div class="nav-logo">
			<img src="logo.png">
		</div>
		<div class="nav-links">
			<ul>
				<a href="ourteam.html"><li>ABOUT</li></a>
				<a href="hotline.html"><li>HOTLINE</li></a>
				<a href="contactus.php"><li>FEEDBACK</li></a>
			</ul>
			<a href="customerlogin.php"><input type="button" class="btn success" name="btn success" value="LOGIN" ></a>
			<a href="customersignup.php"><input type="button" class="btn success" name="btn success" value="SIGNUP" ></a>
		</div>
		</div>
		


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="home.jpg" style="width:100%;height:430px;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slider1.jpg" style="width:100%;height:430px;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slider2.jpg" style="width:100%;height:430px;">
  <div class="text"></div>
</div>


<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slider9.jpg" style="width:100%;height:430px;">
  <div class="text"></div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
<span class="dot"></span> 

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
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>

		<div class="vertical-bar">
			<div class="search-icon">
				<i class="fa fa-th-list"></i>
				<a href="https://www.google.com/"><i class="fa fa-search"></i></a>
			</div>
			<div class="social-icon">
				<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
				<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
				<a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
			</div>
		</div>
		
	</div>

</body>
</html>