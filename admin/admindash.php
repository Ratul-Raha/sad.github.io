<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "stylesheet" href= "../css/newsidebar.css">
<link rel = "stylesheet" href= "../css/slideshow.css">
</head>
<body style="background-image: url(../img/chess.jpg); background-repeat:no-repeat;">
<div class="sidebar">

  <a class="active" href="admindash.php">Home</a>
  <a href="tendererdetailsnew.php" >TENDERER DETAILS</a> 
  <a href="vatpayerdetails.php" >VAT PAYER DETAILS</a>
  <a href="scheduletable.php" >SCHEDULE TABLE</a>
  <a href="vattable.php" >VAT TABLE</a>
  <a href="deletestudent.php">PAYMENT HISTORY</a>
  <a href="../image upload/profiles.php">USERS PROFILE</a>
  <a href="logout.php">LOGOUT <i class="fa fa-fw fa-user"></i></a>
</div>

<div class="header-section jumbotron" style="background-image: url(../img/head.png); opacity:0.8; margin-left:200px; height:156px; width:1720px;">

	<div class="container">
		<div class="row">
			<div class="col-md-12" style="margin-top:-20px;">
				<h1 class="text-center" style="color:white";>
					
				</h1>
					
			</div>
		</div>
	</div>
</div>  
</body>
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background-color:  black;
  opacity:0.5;
  margin-left:500px;
  margin-right:350px;
  margin-top:150px;
  
}

/* Slides */
.mySlides {
  display: none;
  padding: 180px;
  text-align: center;
  font-size: 20px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: black;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #43C6DB;
	margin-left:500px;
	margin-right:350px;
	opacity:0.6;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {
	font-style: italic;
	color:white;
	}

/* Add a blue color to the author */
.author {color: white;}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides">
  <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
  <p class="author">- John Keats</p>
</div>

<div class="mySlides">
  <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
  <p class="author">- Ernest Hemingway</p>
</div>

<div class="mySlides">
  <q>I have not failed. I've just found 10,000 ways that won't work.</q>
  <p class="author">- Thomas A. Edison</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>




<?php include('../footer.php') ?>
