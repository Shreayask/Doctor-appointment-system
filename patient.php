<html>

<head>
  <?php
  session_start();
  $con = mysqli_connect("localhost", "root", "", "doctorappointment");
  if (!($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  ?>
  <title>Patient Panel</title>
  <link rel="stylesheet" href="style/admin.css" type="text/css" />
  <style type="text/css">
    p {
      text-align: justify;
    }

    .container {
      height: 100%;
      background-image: url(https://icons8.com/wp-content/uploads/2020/02/how-to-create-gradient-article.jpg);
      position: fixed;
      bottom: 0;
      right: 0;
      left: 0;
      top: 0;
    }

    .header {
      height: 5%;
      background-image: linear-gradient(to left, aliceblue, darkslateblue, #060c21);
    }

    .left {
      height: 95%;
      width: 23%;
      background-color: midnightblue;
      background-image: url(https://images.unsplash.com/photo-1475274047050-1d0c0975c63e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bmlnaHQlMjBza3l8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80);
      background-size: 312px 715px;
      position: fixed;
      bottom: 0;
      right: 0;
      left: 0;
      float: left;
    }

    .right {
      height: 95%;
      width: 77%;
      background-image: url(https://image.shutterstock.com/image-photo/light-purple-gradient-background-radial-260nw-1008593185.jpg);
      background-size: 100%;
    }

    .doctop {
      height: 90%;
      position: fixed;
      right: 0;
      width: 77%;
      overflow: auto;
    }

    .down {
      height: 100%;
      position: fixed;
      right: 0;
      top: 150;
      bottom: 0;
      width: 77%;
    }

    .dl {
      height: 70%;
      width: 32%;
      float: left;
    }

    .dr {
      height: 70%;
      width: 31%;
      float: right;
    }

    .footer {
      height: 5%;
      width: 77%;
      position: fixed;
      right: 0;
      top: 595;
      bottom: 0;
    }

    .dropdown-btn {
      font-size: 18px;
      font-family: arial, serif;
      color: gainsboro;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      outline: none;
    }

    .dropdown-btn:hover {
      color: white;
    }

    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container {
      display: none;
      background-color: none;

    }

    /* Optional: Style the caret down icon */
    .fa-caret-down {
      float: right;
      padding-right: 8px;
    }
  </style>
  <STYLE>
    A {
      text-decoration: none;
      color: gainsboro;
    }
  </STYLE>
  <style>
    a:hover {
      color: white;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div class="container">

    <div class="header">
      <div class="head" align="left">
        <font size="5" face="forte" color="papayawhip">&#8196;&#8196;&#8196;&#8196;&#8196;Online Doctor Appointment System</font>
      </div>
      <div class="profile"><a href="patprofile.php"><img src="Profile-PNG-Clipart.png" height="32" width="32" align="center" height="38" width="38" align="center"></a></div>
    </div>

    <div class="body">

      <div class="left">
        <h1 align="left">
          <font size="5" face="arial" color="gainsboro">&#8196;&#8196;<u><a href="patient.php">Patient Dashboard</a></u></font>
        </h1>
        <table align="center">
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <th><img src="https://img.icons8.com/emoji/452/key-emoji.png" height="27" width="27"></th>
            <th>
              <font size="4" face="arial" color="gainsboro"><a href="patchangepassword.php" target="_self">&#8196;&#8196;&#8196;&#8196;&#8196;Change Password&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font>
            </th>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <th><img src="https://icons555.com/images/icons-gray/image_icon_logout_pic_512x512.png" height="27" width="27"></th>
            <th>
              <font size="4" face="arial" color="gainsboro"><a href="logout.php" target="_self" id="tb">Log Out&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font>
            </th>
          </tr>

        </table>
      </div>

      <div class="right">

        <div class="doctop">

          <?php
          if (isset($_SESSION['patientid'])) {
          ?>
          <?php
          }
          ?>
          <?php
          $sqlpatient = "SELECT * FROM patient WHERE patientid='$_SESSION[patientid]' ";
          $qsqlpatient = mysqli_query($con, $sqlpatient);
          $rspatient = mysqli_fetch_array($qsqlpatient);

          ?>
          <h2 align="center">This account is registered under <?php echo $rspatient['patientname']; ?> </h2>

          <div class="down">
            <div class="dl">
              <table cellspacing="5" cellpadding="3" style="background-color: white; background-image: url(https://thumbs.dreamstime.com/b/abstract-pastel-watercolor-background-orange-pink-painted-paper-187217052.jpg); border-radius: 10px" align="right">
                <tr>
                  <th><img src="https://iconarchive.com/download/i48682/custom-icon-design/pretty-office-2/add-event.ico" height="180" width="180"></th>
                </tr>
                <tr>
                  <th style="background-color: mediumpurple; border: 2px lightsalmon; border-radius: 3px;"><a href="addappointment.php" target="_self">
                      <font size="5" face="forte" color="lavender">&#8196;&#8196;&#8196;&#8196;&#8196;Add Appointment&#8196;&#8196;&#8196;&#8196;&#8196;</font>
                    </a></th>
                </tr>
              </table>

            </div>
            <div class="dr">
              <table cellspacing="5" cellpadding="3" style="background-color: white; background-image: url(https://thumbs.dreamstime.com/b/abstract-pastel-watercolor-background-orange-pink-painted-paper-187217052.jpg); border-radius: 10px" align="left">
                <tr>
                  <th><img src="https://www.shareicon.net/data/512x512/2017/01/23/874910_document_512x512.png" height="180" width="180"></th>
                </tr>
                <tr>
                  <th style="background-color: mediumpurple; border: 2px lightsalmon; border-radius: 3px;"><?php echo "<a href='viewappt.php?patientid=$_SESSION[patientid]' >
                      <font size='5' face='forte' color='lavender'>&#8196;&#8196;&#8196;&#8196;&#8196;View Appointment&#8196;&#8196;&#8196;&#8196;&#8196;</font>
                    </a>" ?></th>
                </tr>
              </table>
            </div>
            <table cellspacing="5" cellpadding="3" style="background-color: white; background-image: url(https://thumbs.dreamstime.com/b/abstract-pastel-watercolor-background-orange-pink-painted-paper-187217052.jpg); border-radius: 10px" align="center">
              <tr>
                <th><img src="https://www.vet-i-care.com/wp-content/uploads/2015/02/mpeh11111.png?fbclid=IwAR380rTMT4bZlHRDvwlVqz3baRWIMJWHDHtTwzrPV8itXryZUVQLcysK-SQ" height="180" width="180"></th>
              </tr>
              <tr>
                <th style="background-color: mediumpurple; border: 2px lightsalmon; border-radius: 3px;"><?php echo "<a href='viewappt.php?patientid=$_SESSION[patientid]' >
                      <font size='5' face='forte' color='lavender'>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;View Report&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</font>
                    </a>" ?></th>
              </tr>
            </table>

          </div>

        </div>

      </div>

      <div class="footer">
        <div class="ls">
          <font size="1" color="black" face="lucida bright">
            <br><b>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Copyright @ 2021 All Reserved</b>
          </font>
        </div>
        <div class="rs">
          <font size="1" color="black" face="lucida bright">
            <br><b>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Developed by: www.sss.com</b>
          </font>
        </div>
      </div>

    </div>
  </div>
  </div>
  <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }

    var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
    var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
    var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
    var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

    function validateform() {
      if (document.frmpatient.patientname.value == "") {
        alert("Patient name should not be empty..");
        document.frmpatient.patientname.focus();
        return false;
      } else if (!document.frmpatient.patientname.value.match(alphaspaceExp)) {
        alert("Patient name not valid..");
        document.frmpatient.patientname.focus();
        return false;
      } else if (document.frmpatient.address.value == "") {
        alert("Address should not be empty..");
        document.frmpatient.address.focus();
        return false;
      } else if (document.frmpatient.phoneno.value == "" || document.frmpatient.phoneno.value.length != 10) {
        alert("Mobile number is not valid.");
        document.frmpatient.phoneno.focus();
        return false;
      } else if (!document.frmpatient.phoneno.value.match(numericExpression)) {
        alert("Mobile number not valid..");
        document.frmpatient.phoneno.focus();
        return false;
      } else if (document.frmpatient.loginid.value == "") {
        alert("Login ID should not be empty..");
        document.frmpatient.loginid.focus();
        return false;
      } else if (!document.frmpatient.loginid.value.match(alphanumericExp)) {
        alert("Login ID not valid..");
        document.frmpatient.loginid.focus();
        return false;
      } else if (document.frmpatient.password.value == "") {
        alert("Password should not be empty..");
        document.frmpatient.password.focus();
        return false;
      } else if (document.frmpatient.password.value.length < 8) {
        alert("Password length should be more than 8 characters...");
        document.frmpatient.password.focus();
        return false;
      } else if (document.frmpatient.password.value != document.frmpatient.confirmpassword.value) {
        alert("Password and confirm password should be equal..");
        document.frmpatient.confirmpassword.focus();
        return false;
      } else if (document.frmpatient.bloodgroup.value == "") {
        alert("Blood Group should not be empty..");
        document.frmpatient.bloodgroup.focus();
        return false;
      } else if (document.frmpatient.gender.value == "") {
        alert("Gender should not be empty..");
        document.frmpatient.gender.focus();
        return false;
      } else {
        return true;
      }
    }
  </script>
</body>

</html>