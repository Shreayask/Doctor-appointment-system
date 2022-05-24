<html>

<head>
  <title>Admin Panel</title>
  <?php
  $con = mysqli_connect("localhost", "root", "", "doctorappointment");
  if (!$con) {
    echo "Failed connection :" . mysqli_connect_error();
  }

  if (isset($_POST['submit'])) {
    $sql = "UPDATE patient SET patientname='$_POST[patientname]', address='$_POST[address]',patientphone='$_POST[phonenumber]',
    status='$_POST[status]', gender='$_POST[gender]',bloodgroup='$_POST[bloodgroup]' WHERE patientid='$_GET[editid]'";
    if ($csql = mysqli_query($con, $sql)) {
      echo "<script>alert('Patient records successfully updated.') </script>";
    } else {
      echo "<script>alert('Patient Update Failed.') </script>";
    }
  }
  ?>
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
      background-image: url(https://i2.wp.com/files.123freevectors.com/wp-content/original/2087-blue-watercolor-background.jpg?w=600);
      background-size: 100%;
    }

    .admintop {
      height: 90%;
      width: 77%;
      position: fixed;
      right: 0;
      overflow: auto;
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

    #x {
      background-color: paleturquoise;
      font-weight: bold;
    }

    #y {
      background-color: mintcream;
    }

    #button {
      background-color: mediumpurple;
      color: white;
      border-radius: 3px;
      font-size: 16px;
    }

    #button:hover {
      background-color: lemonchiffon;
      color: black;
    }

    #z {
      color: white;
    }

    #z:hover {
      color: black;
    }
  </style>
  <style>
    select {
      width: 300px;
    }

    select:focus {
      min-width: 300px;
      width: auto;
    }

    input[type=submit] {
      background-color: antiquewhite;
      border-radius: 5px;
    }

    input[type=submit]:hover {
      background-color: azure;
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
      <div class="profile"><a href="profile.php"><img src="Profile-PNG-Clipart.png" height="32" width="32" align="center" height="38" width="38" align="center"></a></div>
    </div>

    <div class="body">

      <div class="left">
        <h1 align="left">
          <a href="admin.php" id="a">
            <font size="5" face="arial">&#8196;&#8196;<u>Admin Dashboard</u></font>
          </a>
        </h1>
        <table align="center">
          <tr>
            <td></td>
          </tr>
          <tr>
            <th style="position: fixed;"><img src="https://icon-library.com/images/settings-icon-flat/settings-icon-flat-10.jpg" height="27" width="27" align="center"></th>
            <th>
              <button class="dropdown-btn" style="text-decoration: none;"><b>&#8196;&#8196;&#8196;&#8196;Settings</b><i class="fa fa-caret-down"></i></button>
              <div class="dropdown-container">
                <table align="left" style="font-family: calibri, serif">
                  <font size="3" face="calibri" color="gainsboro" style="height: 10px;">
                    <tr>
                      <th align="left"><a href="adddept.php">&#8196;&#8196;&#8196;&#8196;&#8196;Add Department</a></th>
                    </tr>
                    <tr>
                      <th align="left"><a href="viewdept.php">&#8196;&#8196;&#8196;&#8196;&#8196;View Department</a></th>
                    </tr>
                    <tr>
                      <th align="left"><a href="addtreatmenttype.php">&#8196;&#8196;&#8196;&#8196;&#8196;Add Treatment Type</a></th>
                    </tr>
                    <tr>
                      <th align="left"><a href="viewtreatmenttype.php">&#8196;&#8196;&#8196;&#8196;&#8196;View Treatment Type</a></th>
                    </tr>
                  </font>
                </table>
              </div>
            </th>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <th><img src="https://img.icons8.com/emoji/452/key-emoji.png" height="27" width="27"></th>
            <th>
              <font size="4" face="arial" color="gainsboro"><a href="changepassword.php" target="_self">&#8196;&#8196;&#8196;&#8196;&#8196;Change Password&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font>
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
              <font size="4" face="arial" color="gainsboro"><a href="../logout.php" target="_self" id="tb">Log Out&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font>
            </th>
          </tr>

        </table>
      </div>

      <div class="right">

        <div class="admintop">

          <h2 align="center">
            <font color="black">Patient Details</font>
          </h2><br>
          <?php
          if (isset($_GET['editid'])) {
            $sql = "SELECT * from patient WHERE patientid='$_GET[editid]'";
            $csql = mysqli_query($con, $sql);
            $readonly = " readonly";
            while ($rs = mysqli_fetch_array($csql)) {



          ?>
              <form action="" method="post" name="frmadmin" onSubmit="return validateform()">
                <table width="500" align="center" border="3" style="font-size: 17px; border-radius: 3px;" cellpadding="7">
                  <tr>
                    <td width="37%" id="x">Patient Id</td>
                    <td id="y"><input type="text" value="<?php echo $rs['patientid']  ?>" <?php echo $readonly ?> style="font-size: 16.5px;" size="32" /></td>
                  </tr>
                  <tr>
                    <td id="x">Patient Name</td>
                    <td id="y"><input type="text" name="patientname" id="patientname" value="<?php echo $rs['patientname']  ?>" style="font-size: 16.5px;" size="32" /></td>
                  </tr>
                  <tr>
                    <td id="x">Login ID</td>
                    <td id="y"><input type="text" name="loginid" id="loginid" value="<?php echo $rs['loginid']  ?>" <?php echo $readonly ?> style="font-size: 16.5px;" size="32" /></td>
                  </tr>
                  <tr>
                    <td id="x">Address</td>
                    <td id="y"><input type="text" name="address" id="address" value="<?php echo $rs['address']  ?>" style="font-size: 16.5px;" size="32" /></td>
                  </tr>
                  <tr>
                    <td id="x">Phone number</td>
                    <td id="y"><input type="text" name="phonenumber" id="phonenumber" value="<?php echo $rs['patientphone']  ?>" style="font-size: 16.5px;" size="32" /></td>
                  </tr>
                  <tr>
                    <td id="x">Blood group</td>

                    <td id="y">
                      <select name="bloodgroup">
                        <option value="<?php echo $rs['bloodgroup']  ?>"><?php echo $rs['bloodgroup']  ?></option>
                        <?php
                        $arr = array("A-", "A+", "B+", "B-", "O+", "O-", "AB+", "AB-");
                        foreach ($arr as $val) {
                          echo "<option value='$val'>$val</option>";
                        }
                        ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td id="x">Gender</td>
                    <td id="y">
                      <select name="gender" value="<?php echo $rs['gender']  ?>" style="font-size: 16.5px;">

                        <?php
                        $arr = array("Female", "Male", "Others");
                        foreach ($arr as $val) {

                          echo "<option value='$val'>$val</option>";
                        }
                        ?>
                      </select>
                    </td>
                    </td>
                  </tr>

                  <tr>
                    <td id="x">Status</td>
                    <td id="y"><select name="status" value="<?php echo $rs['status']  ?>" style="font-size: 16.5px;">

                        <?php
                        $arr = array("Active", "Inactive");
                        foreach ($arr as $val) {

                          echo "<option value='$val'>$val</option>";
                        }
                        ?>
                      </select></td>
                  </tr>
                  <tr>

                    <td colspan="2">&#8196;<input type="submit" name="submit" id="submit" value="SUBMIT" style="font-size: 16px;" />&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;<button id="button"><a href='viewpatient.php' id="z">View Patient Lists</a> </button></td>
                  </tr>

                </table>

            <?php
            }
          }
            ?>
              </form>

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
        } else if (document.frmpatient.phonenumber.value == "" || document.frmpatient.phonenumber.value.length != 10) {
          alert("Mobile number is not valid.");
          document.frmpatient.phoneno.focus();
          return false;
        } else if (!document.frmpatient.phonenumber.value.match(numericExpression)) {
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