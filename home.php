<!DOCTYPE html>
<html>

<head>
  <title>Online Doctor Appointment System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    #value {
      text-shadow: black 0px 1px;
      filter: 100px;
      background-opacity: 0.5;
    }

    .container {
      height: 100%;
      position: fixed;
      bottom: 0;
      right: 0;
      left: 0;
      top: 0;
    }

    .header {
      height: 45%;
      background-color: black;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
    }

    .head {
      height: 15%;
      background-image: linear-gradient(to left, aliceblue, darkslateblue, #060c21);
    }

    .mySlides {
      height: 30%;
      display: none;
    }

    .slideshow-container {
      height: 30%;
      position: relative;
      margin: auto;
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 130%;
      width: auto;
      padding: 10px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    .prev {
      left: 0;
      border-radius: 3px 0 0 3px;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
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

    .active,
    .dot:hover {
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
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

      .prev,
      .next,
      .text {
        font-size: 11px
      }
    }


    .nav {
      background-color: black;
      height: 4%;
      overflow: hidden;
      background-color: #333;
      position: fixed;
      top: 17.55rem;
      right: 0;
      left: 0;
    }

    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
    }

    .sticky+.content {
      padding-top: 60px;
    }

    .body {
      height: 51%;
      background-color: #060c21;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      align-items: center;
    }

    .login {
      height: 5%;
      width: 35%;

      float: left;
    }

    .adminlogin {
      height: 5%;
      width: 35%;

      float: right;
    }

    .footer {
      height: 5%;
      background-color: gainsboro;
      position: fixed;
      bottom: 0;
      right: 0;
      left: 0;
    }

    .left {
      height: 5px;
      width: 50%;
      float: left;
    }

    .right {
      height: 5px;
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
  <STYLE>
    A {
      text-decoration: none;
    }
  </STYLE>
  <style>
    #a {
      height: 5%;
      color: white;
      background-color: dimgray;
      font-size: 22px;
      border: 2px black;
      border-radius: 2px;
    }

    #a:hover {
      background-color: black;
      color: white;
    }

    #b {
      background-color: darkslateblue;
      border: 2px black;
      border-radius: 4px;
      color: white;
    }

    #b:hover {
      background-color: beige;
      color: black;
    }

    #box {
      position: relative;
      width: 400px;
      height: 210px;
      background: #060c21;
    }

    #box:before {
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

    #box:after {
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
    #box:after {
      background: linear-gradient(210deg, #fff, #060c21, #00bcd4);
    }
  </style>
</head>

<body>

  <div class="container">

    <div class="header">

      <div class="head" align="center" style="font-size: 33px">
        <font face="forte" color="papayawhip">Online Doctor Appointment System</font>
      </div>

      <div class="slideshow-container">
        <div class="mySlides fade"><img src="https://previews.123rf.com/images/blueringmedia/blueringmedia1402/blueringmedia140200093/25592556-illustration-of-a-hospital-building.jpg" height="240" style="width:100%"></div>
        <div class="mySlides fade"><img src="https://mobisoftinfotech.com/resources/wp-content/uploads/2018/07/Banner-1.png" height="240" style="width:100%"></div>
        <div class="mySlides fade"><img src="https://www.asds.net/Portals/0/Images/hero-medical-professionals.jpg" height="240" style="width:100%"></div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>

    </div>

    <div class="nav" align="center" style="background-color: dimgray;">
      <a class="active" href="home.php" id="a" style="background-color: lavender; border: 2px black; border-radius: 2px; color: black;"><i class="fa fa-fw fa-home"></i> Home&nbsp; </a>
      <a href="aboutus.php" id="a"><i class="fa fa-fw fa-user-md"></i> About us&nbsp; </a>
      <a href="contactus.php" id="a"><i class="fa fa-fw fa-envelope"></i> Contact us&nbsp; </a>
      <a href="login.php" id="a"><i class="fa fa-fw fa-user"></i> Login&nbsp; </a>
    </div>

    <div class="body">

      <div class="login">
        <br>
        <table cellspacing="7" cellpadding="4" align="center" style="background-color: #060c21; border-radius: 10px" id="box">
          <tr>
            <th rowspan="2" style="background-image: url(https://www.pinclipart.com/picdir/big/557-5571992_sakura-frame-rosegold-glitter-lighting-geometric-rose-gold.png); background-size: 175px 200px" width="170" height="200" align="center"><img src="https://icons-for-free.com/iconfiles/png/512/boy+guy+man+icon-1320166733913205010.png" height="145" width="137"></th>
            <th colspan="2">
              <font size="6" face="cambria" color="paleturquoise"><u>Patient</u></font><br><br><br>
              <table cellspacing="2" cellpadding="2">
                <tr>
                  <th>
                    <font size="5.5" face="arial" color="white"><a href="register.php" target="_self" id="b">&nbsp;Register&nbsp;</font>
                  </th>
                  <th>
                    <font size="5.5" face="arial" color="white"><a href="login.php" target="_self" id="b">&nbsp;Login&nbsp;</font>
                  </th>
                </tr>
              </table>
            </th>
          </tr>
        </table>
      </div>

      <div class="adminlogin">
        <br>
        <table cellspacing="7" cellpadding="4" align="center" style="background-color: #060c21; border-radius: 10px" id="box">
          <tr>
            <th rowspan="2" style="background-image: url(https://www.emojipik.com/wp-content/uploads/2021/07/Color-Splash-Png-Round-Border-Tech-Style-Round-Png-Image-Free-Download-267--500x500.png); background-size: 175px 200px" width="170" height="200" align="center"><img src="https://icon-library.com/images/system-administrator-icon/system-administrator-icon-1.jpg" height="140" width="137"></th>
            <th colspan="3" align="center">
              <font size="6" face="cambria" color="paleturquoise"><u>Admin</u></font><br><br><br>
              <font size="5.5" face="arial" color="white"><a href="admin/adminlogin.php" target="_self" id="b">&nbsp;Login&nbsp;</font>
            </th>
          </tr>
        </table>
      </div>
      <br>
      <table cellspacing="7" cellpadding="4" align="center" style="background-color: #060c21; border-radius: 10px" id="box">
        <tr>
          <th rowspan="2" style="background-image: url(https://images.vectorhq.com/images/previews/6eb/glowing-circle-psd-416224.png); background-size: 178px 208px" width="170" height="200" align="center"><img src="https://www.rapidrecovery.clinic/wp-content/uploads/2018/10/Lady-3.png" height="140" width="137"></th>
          <th colspan="3">
            <font size="6" face="cambria" color="paleturquoise"><u>Doctor</u></font><br><br><br>
            <font size="5.5" face="arial" color="white"><a href="doctorlogin.php" target="_self" id="b">&nbsp;Login&nbsp;</font>
          </th>
        </tr>
      </table>

    </div>

    <div class="footer">
      <div class="left">
        <font color="black" face="lucida bright" style="font-size: 2px;">
          <br>
        </font>
        <font size="2" color="black" face="lucida bright">
          &#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Copyright @ 2021 All Reserved
        </font>
      </div>
      <div class="right">
        <font size="2" color="black" face="lucida bright">
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

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>

  <script>
    window.onscroll = function() {
      myFunction()
    };

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