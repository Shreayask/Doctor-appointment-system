<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="style/login.css" type="text/css" />
  <?php
  session_start();
  $con = mysqli_connect("localhost", "root", "", "doctorappointment");
  if (!($con)) {
    echo "Failed Connection: " . mysqli_connect_error();
  }
  ?>
  <style type="text/css">
    .container {
      height: 100%;
      width: 100%;
      background-image: url(https://papers.co/wallpaper/papers.co-vk65-samsung-galaxy-polyart-pastel-pink-yellow-pattern-29-wallpaper.jpg);
      position: fixed;
      bottom: 0;
      right: 0;
      left: 0;
      top: 0;
    }

    input[type=submit] {
      font-size: 17px;
      font-weight: bold;
      font-family: lucida console, monospace;
    }
  </style>
  <STYLE>
    A {
      text-decoration: none;
    }
  </STYLE>

</head>

<body>
  <?php
  if (isset($_POST['submit'])) {
    $loginsql = "SELECT * FROM doctor WHERE loginid='$_POST[loginid]' AND password='$_POST[password]' AND status='Active'";
    $chklogin = mysqli_query($con, $loginsql);
    if (mysqli_num_rows($chklogin) == 1) {
      $rslogin = mysqli_fetch_array($chklogin);
      $_SESSION['doctorid'] = $rslogin['doctorid'];
      echo "<script>window.location='doctor.php';</script>";
    } else {
      echo "<script>alert('Invalid login id and password entered'); </script>";
    }
  }
  ?>
  <div class="container">
    <div class="header"></div>
    <div class="body">
      <div class="left"></div>
      <div class="right"></div>
      <form method="post" action="" name="frmpatlogin" onSubmit="return validateform()">
        <br>
        <table cellspacing="7" cellpadding="4" align="center" style="background-color: white; border: 2px white; border-radius: 30px; opacity: 5px;">
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <th colspan="5" align="center" style="height: 55px; background-color: dimgray; background-image: linear-gradient(to left, lightsteelblue, midnightblue); border: 2px dimgray; border-radius: 20px">
              <font size="5" face="forte" color="papayawhip">&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Doctor LOGIN&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</font>
            </th>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td colspan="5">
              <font size="3" face="cambria"><b>&#8196;&#8196;&#8196;&#8196;&#8196;Login ID:</b></font><br>&#8196;&#8196;&#8196;&#8196;&#8196;<input type="text" class="no-outline" name="loginid" id="Login ID" style="border-left: none; border-top: none; border-right: none; height: 30px; width: 315px;" />
            </td>
          </tr>
          <tr>
            <td colspan="5">
              <font size="3" face="cambria"><b>&#8196;&#8196;&#8196;&#8196;&#8196;Password:</b></font><br>&#8196;&#8196;&#8196;&#8196;&#8196;<input type="password" class="no-outline" name="password" id="Password" style="border-left: none; border-top: none; border-right: none; height: 30px; width: 315px;" /><br>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;
              <a href="doctorforgotpassword.php">
                <font size="3" face="calibri" color="darkorchid"><b>Forgot Password?</b></font>
            </td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td colspan="5" style="text-align: center;"><input type="submit" name="submit" class="submit" value="    LOGIN    " style="background-color: mediumslateblue; background-image: linear-gradient(to left, silver, thistle, mediumslateblue); border-radius: 15px" id="submit" align="center" /></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>

        </table>
      </form>
      </table>
    </div>
    <div class="footer"><br>
      <div class="left">
        <font size="3" color="black" face="lucida bright">
          <br>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Copyright @ 2021 All Reserved
        </font>
      </div>
      <div class="right">
        <font size="3" color="black" face="lucida bright">
          <br>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Developed by: www.sss.com<br>
        </font>
      </div>
    </div>
  </div>
</body>

</html>
<script type="application/javascript">
  var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
  var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
  var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
  var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
  var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

  function validateform() {
    if (document.doctorloginform.loginid.value == "") {
      alert("Login ID should not be empty..");
      document.doctorloginform.loginid.focus();
      return false;
    } else if (!document.doctorloginform.loginid.value.match(alphanumericExp)) {
      alert("Login ID not valid..");
      document.doctorloginform.loginid.focus();
      return false;
    } else if (document.doctorloginform.password.value == "") {
      alert("Password should not be empty..");
      document.doctorloginform.password.focus();
      return false;
    } else if (document.doctorloginform.password.value.length < 8) {
      alert("Password length should be more than 8 characters...");
      document.doctorloginform.password.focus();
      return false;
    }

  }
</script>