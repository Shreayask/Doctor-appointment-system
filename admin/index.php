<!DOCTYPE html>
<html>

<head>
  <title>Online Doctor Appointment System</title>
  <style type="text/css">
    #value {
      text-shadow: black 0px 1px;
      filter: 100px;
      background-opacity: 0.5;
    }

    .container {
      height: 753px;
      position: fixed;
      bottom: 0;
      right: 0;
      left: 0;
      top: 0;
    }

    .header {
      height: 273px;
      background-color: lightslategrey;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
    }

    .picture {
      height: 273px;
      background: url(https://image.freepik.com/free-vector/appointment-booking-with-calendar_23-2148553008.jpg) left no-repeat, url(https://www.asds.net/Portals/0/Images/hero-medical-professionals.jpg) right no-repeat, url(https://i.pinimg.com/originals/b4/3a/44/b43a445b6dc4d05e0c86b30cd93d6b6e.jpg) no-repeat;
      background-size: 27% 273px, 27% 273px, 100% 251px;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
    }

    .body {
      height: 480px;
      background-color: azure;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
    }

    .login {
      height: 480px;
      width: 35%;
      background-color: azure;
      float: left;
    }

    .adminlogin {
      height: 480px;
      width: 35%;
      background-color: azure;
      float: right;
    }

    .footer {
      height: 55px;
      background-color: gainsboro;
      position: fixed;
      bottom: 0;
      right: 0;
      left: 0;
    }

    .left {
      height: 45px;
      width: 50%;
      float: left;
    }

    .right {
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
  <STYLE>
    A {
      text-decoration: none;
    }
  </STYLE>
  <style>
    #a {
      color: white;
      background-color: black;
      border: 2px black;
      border-radius: 2px;
    }

    #a:hover {
      background-color: lavender;
      color: black;
    }

    #b {
      background-color: darkslateblue;
      border: 2px black;
      border-radius: 4px;
      color: white;
    }

    #b:hover {
      background-color: lightsalmon;
      color: black;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="picture">
        <h1 align="center" class="name">
          <font size="10" face="cambria" id="value"><b><i></br>Online Doctor <br> Appointment System</i></b></font>
          <font size="2" face="cambria" id="value"><br><br></font>
        </h1>
        <table cellpadding="0.5" cellspacing="3" align="center">
          <tr>
            <th>
              <font size="4" face="calibri" color="white"><a href="home.php" target="_self" id="a">&nbsp;Home&nbsp;</b></font>
            </th>
            <th>
              <font size="4" face="calibri" color="white"><a href="aboutus.php" target="_self" id="a">&nbsp;About Us&nbsp;</font>
            </th>
            <th>
              <font size="4" face="calibri" color="white"><a href="login.php" target="_self" id="a">&nbsp;Login&nbsp;</font>
            </th>
            <th>
              <font size="4" face="calibri" color="white"><a href="contactus.php" target="_self" id="a">&nbsp;Contact Us&nbsp;</font>
            </th>
          </tr>
        </table>
      </div>
    </div>
    <div class="body">

      <div class="login">
        <br><br><br><br>
        <table cellspacing="7" cellpadding="4" align="center" style="background-color: white; border-radius: 10px">
          <tr>
            <th rowspan="2"><img src="https://tadeco-cms.tadeco-group.tn/wp-content/uploads/2020/06/user.png" height="200" width="200"></th>
            <th colspan="2">
              <font size="6" face="arial" color="darkslategray">Patient</font><br><br><br>
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
        <br><br><br><br>
        <table cellspacing="7" cellpadding="4" align="center" style="background-color: white; border-radius: 10px">
          <tr>
            <th rowspan="2"><img src="https://www.pngkey.com/png/full/203-2037403_flat-faces-icons-circle-girl-flat-icon-png.png" height="200" width="200"></th>
            <th colspan="3" align="center">
              <font size="6" face="arial" color="darkslategray">Admin</font><br><br><br>
              <font size="5.5" face="arial" color="white"><a href="adminlogin.php" target="_self" id="b">&nbsp;Login&nbsp;</font>
            </th>
          </tr>
        </table>
      </div>
      <br><br><br><br>
      <table cellspacing="7" cellpadding="4" align="center" style="background-color: white; border-radius: 10px">
        <tr>
          <th rowspan="2"><img src="https://www.pngrepo.com/download/284250/surgeon-doctor.png" height="200" width="200"></th>
          <th colspan="3">
            <font size="6" face="arial" color="darkslategray">Doctor</font><br><br><br>
            <font size="5.5" face="arial" color="white"><a href="doctorlogin.php" target="_self" id="b">&nbsp;Login&nbsp;</font>
          </th>
        </tr>
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
</body>

</html>