<!DOCTYPE html>
<html>
<head>
  <title>Online Doctor Appointment System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    #value{ text-shadow: grey 0px 1px; filter: 100px; background-opacity: 0.5;}
    .container
    {
      height: 100%;
      position: fixed;
      bottom: 0;
      right: 0;
      left: 0;
      top: 0;
    }
    
    .header
    {
      height: 45%;
      background-color: black;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
    }
    .head
    {
      height: 15%;
      background-image: linear-gradient(to left, aliceblue, darkslateblue, #060c21);
    }
    
.mySlides {display: none;}
.slideshow-container {
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
.prev
{
  left: 0;
  border-radius: 3px 0 0 3px;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.active, .dot:hover {
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
  .prev, .next,.text {font-size: 11px}
}


    .nav
    {
      background-color: black;
      height: 4%;
      overflow: hidden;
      background-color: #333;
      position: fixed;
      top: 339px;
      right: 0;
      left: 0;
    }

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

    .body
    {
      height: 51.25%;
      width: 100%;
      background-color: #060c21; 
      position: fixed;
      bottom: 0;
      align-items: center;
    }
    .contactus
    {
      height: 422px;
      background-image: url(http://www.innovationchiro.com/wp-content/uploads/chiropractor-susquehanna-county-gray-line.png);
      background-size: 15% 160px;
      background-repeat: no-repeat;
      background-position: 49.5% 0px , right;
    }
    .cleft
    {
      height: 45px;
      width: 38%;
      float: left;
    }
    .cright
    {
      height: 45px;
      width: 38%;
      float: right;
    }
    .footer
    {
      height: 7%;
      background-color: gainsboro;
      position: fixed;
      bottom: 0;
      right: 0;
      left: 0;
    }
    .left
    {
      height: 45px;
      width: 50%;
      float: left;
    }
    .right
    {
      height: 45px;
      width: 50%;
      float: right;
    }
/*
.content
{
  height: 435px;
  width: 85%;
  background-color: mediumslateblue;
  background-image: linear-gradient(to left, silver, thistle, mediumslateblue);
  float: right;
}
*/
  </style>
  <STYLE>A {text-decoration: none;} </STYLE>
  <style>
    #a
    {
      height: 5%;
      color: white; 
      background-color: dimgray; 
      font-size: 25px;
      border: 2px black; 
      border-radius: 2px;
    }
    #a:hover 
    {
      background-color: black;
      color: white;
    }
    #b{background-color: darkslateblue; border: 2px black; border-radius: 4px; color: white;}
    #b:hover
    {
      background-color: beige;
      color: black;
    }
    #box
    {
      position: relative;
      width: 400px;
      height: 210px;
      background: #060c21; 
    }
    #box:before
    {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: #fff;
      z-index: -2;
      border-radius: 10px;
    }
    #box:after
    {
      content: '';
      position: absolute;
      top: 1px;
      left: 1px;
      right: 1px;
      bottom: 1px;
      background: #fff;
      z-index: -2;
      filter: blur(15px);
    }
    #box:before,
    #box:after
    {
      background: linear-gradient(210deg,#fff,#060c21,#00bcd4);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">

      <div class="head"align="center" style="font-size: 40px"><font face="forte" color="papayawhip">Online Doctor Appointment System</font></div>
      
      <div class="slideshow-container">

<div class="mySlides fade">
  <img src="https://previews.123rf.com/images/blueringmedia/blueringmedia1402/blueringmedia140200093/25592556-illustration-of-a-hospital-building.jpg" height="289" style="width:100%">
   
</div>

<div class="mySlides fade">
  <img src="https://mobisoftinfotech.com/resources/wp-content/uploads/2018/07/Banner-1.png" height="289" style="width:100%">
  
</div>

<div class="mySlides fade">
  <img src="https://www.asds.net/Portals/0/Images/hero-medical-professionals.jpg" height="289" style="width:100%">
   
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
      
    </div>

    <div class="nav" align="center" style="background-color: dimgray;">
      <a class="active" href="home.php" id="a"><i class="fa fa-fw fa-home"></i> Home&nbsp; </a> 
      <a href="home1.php" id="a" style="background-color: lavender; border: 2px black; border-radius: 2px; color: black;"><i class="fa fa-fw fa-user-md" ></i> About us&nbsp; </a> 
      <a href="contactus.php" id="a"><i class="fa fa-fw fa-envelope"></i> Contact us&nbsp; </a> 
      <a href="login.php" id="a"><i class="fa fa-fw fa-user"></i> Login&nbsp; </a>
    </div>

    <div class="body">
      
      <div class="contactus">
        <br><p align="center"><font size="10" face="cambria" color="white" id="value"><b>CONTACT</b></font></p>
        <div class="cleft">
          <br><br><br><br>
          <table align="right">
            <tr><th><img src="https://www.pngkit.com/png/full/14-146161_white-location-icon-png-location-logo-png-white.png" height="45" width="30" align="center"></th></tr>
            <tr><th></th></tr>
            <tr><th><font size="4" face="calibri" color="white">Kathmandu,Nepal</font></th></tr>
          </table>
        </div>
        <div class="cright">
          <br><br><br><br>
          <table align="left">
            <tr><th style="height: 45px;"><i class="fa fa-fw fa-phone" style="color: white; font-size: 35px;"></i></th></tr>
            <tr><th></th></tr>
            <tr><th><font size="4" face="calibri" color="white">9845789321</font></th></tr>
          </table> 
        </div>
        <br><br><br><br>
        <table align="center">
          <tr><th style="height: 45px;"><i class="fa fa-fw fa-envelope" style="color: white; font-size: 30px;"></i></th></tr>
          <tr><th></th></tr>
          <tr><th><font size="4" face="calibri" color="white">sss@gmail.com</font></th></tr>
        </table>
      
    </div>

    <div class="footer"><br>
      <div class="left">
        <font size="3" color="black" face="lucida bright">
          &#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Copyright @ 2021 All Reserved
        </font>
      </div>
      <div class="right">
        <font size="3" color="black" face="lucida bright">
          &#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Developed by: www.sss.com<br>
        </font>
      </div>
    </div>
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

function showSlides(n) 
{
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

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = nav.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    nav.classList.add("sticky")
  } else {
    nav.classList.remove("sticky");
  }
}
</script>

</body>
</html>