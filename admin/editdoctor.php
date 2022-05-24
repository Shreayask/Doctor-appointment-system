<html>

<head>
  <title>Admin Panel</title>
  <?php
  $con = mysqli_connect("localhost", "root", "", "doctorappointment");
  if (!$con) {
    echo "Failed connection :" . mysqli_connect_error();
  }

  if (isset($_POST['submit'])) {
    $sql = "UPDATE doctor SET doctorname='$_POST[doctorname]', address='$_POST[address]',doctorphoneno='$_POST[phonenumber]',
    status='$_POST[status]', gender='$_POST[gender]',education='$_POST[education]',experience='$_POST[experience]',fees='$_POST[fees]' WHERE doctorid='$_GET[editid]'";
    if ($csql = mysqli_query($con, $sql)) {
      echo "<script>alert('Doctor records successfully updated.') </script>";
    } else {
      echo "<script>alert('Doctor Update Failed.') </script>";
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

    button {
      background-color: mediumpurple;
      color: white;
      border-radius: 3px;
      font-size: 16px;
    }

    button:hover {
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
      <div class="profile"><a href="profile.php"><img src="Profile-PNG-Clipart.png" height="38" width="38" align="center" height="38" width="38" align="center"></a></div>
    </div>

    <div class="body">

      <div class="left">
        <h1 align="left">
          <font size="5" face="arial" color="gainsboro">&#8196;&#8196;<u>Admin Dashboard</u></font>
        </h1>
        <table align="center">
          <tr>
            <td></td>
          </tr>
          <tr>
            <th style="position: fixed;"><img src="https://icon-library.com/images/settings-icon-flat/settings-icon-flat-10.jpg" height="27" width="27" align="center"></th>
            <th>
              <button class="dropdown-btn"><b>&#8196;&#8196;&#8196;&#8196;Settings</b><i class="fa fa-caret-down"></i></button>
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
              <font size="4" face="arial" color="gainsboro"><a href="home.php" target="_self" id="tb">Log Out&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font>
            </th>
          </tr>

        </table>
      </div>

      <div class="right">

        <div class="admintop">

          <h1 align="center">
            <font color="black">Doctor Details</font>
          </h1><br>
          <?php
          if (isset($_GET['editid'])) {
            $sql = "SELECT * from doctor WHERE doctorid='$_GET[editid]'";
            $csql = mysqli_query($con, $sql);
            $readonly = " readonly";

            while ($rs = mysqli_fetch_array($csql)) {
          ?>
              <form action="" method="post" name="frmadmin" onSubmit="return validateform()">
                <table width="510" align="center" border="3" style="font-size: 16px; border-radius: 3px;" cellpadding="5">
                  <tr>
                    <td width="37%" id="x">Doctor Id</td>
                    <td id="y"><input type="text" value="<?php echo $rs['doctorid']  ?>" <?php echo $readonly ?> style="font-size: 16px;" size="32" /></td>
                  </tr>
                  <tr>
                    <td id="x">Doctor Name</td>
                    <td id="y"><input type="text" name="doctorname" id="doctorname" value="<?php echo $rs['doctorname']  ?>" style="font-size: 16px;" size="32" /></td>
                  </tr>
                  <tr>
                    <td id="x">Login ID</td>
                    <td id="y"><input type="text" name="loginid" id="loginid" value="<?php echo $rs['loginid']  ?>" <?php echo $readonly ?> style="font-size: 16px;" size="32" /></td>
                  </tr>
                  <tr>
                    <td id="x">Address</td>
                    <td id="y"><input type="text" name="address" id="address" value="<?php echo $rs['address']  ?> " style="font-size: 16px;" size="32" /></td>
                  </tr>
                  <tr>
                    <td id="x">Phone number</td>
                    <td id="y"><input type="text" name="phonenumber" id="phonenumber" value="<?php echo $rs['doctorphoneno']  ?>" style="font-size: 16px;" size="32" /></td>
                  </tr>
                  <tr>
                    <td id="x">Gender</td>
                    <td id="y"><select name="gender" style="font-size: 16px;">
                        <option value="<?php echo $rs['gender']  ?>"><?php echo $rs['gender']  ?></option>
                        <?php
                        $arr = array("Female", "Male", "Others");
                        foreach ($arr as $val) {
                          echo "<option value='$val'>$val</option>";
                        }
                        ?>
                      </select></td>
                    </td>
                  </tr>
                  <tr>
                    <td id="x">Department</td>
                    <td>
                      <?php
                      $sqldep = "SELECT * FROM department WHERE departmentid='$rs[departmentid]'";
                      $dep = mysqli_query($con, $sqldep);
                      $deprs = mysqli_fetch_array($dep);
                      echo "<select name='depid'  style='font-size: 16px;'>
                        <option value='$deprs[departmentid]'>$deprs[departmentname]</option>";
                      $sqldepartment = "SELECT * FROM department WHERE status='Active'";
                      $qsqldepartment = mysqli_query($con, $sqldepartment);
                      while ($rsdepartment = mysqli_fetch_array($qsqldepartment)) {
                        echo "<option value='$rsdepartment[departmentid]'>$rsdepartment[departmentname]</option>";
                      }
                      ?>
                      </select></td>
                  </tr>
                  <tr>
                    <td id="x">Education</td>
                    <td id="y"><input type="text" name="education" id="education" value="<?php echo $rs['education'] ?>" style="font-size: 16px;" size="32" /></td>
                  </tr>
                  <tr>
                    <td id="x">Experience</td>
                    <td id="y"><input type="text" name="experience" id="experience" value="<?php echo $rs['experience'];  ?>" style="font-size: 16px;" size="32" /></td>
                  </tr>
                  <tr>
                    <td id="x">Consultancy Charge</td>
                    <td id="y"><input type="text" name="fees" id="fees" value="<?php echo $rs['fees']  ?>" style="font-size: 16px;" size="32" /></td>
                  </tr>
                  <tr>
                    <td id="x">Status</td>
                    <td id="y"><select name="status" value="<?php echo $rs['status']  ?>" style="font-size: 16px;">
                        <?php
                        $arr = array("Active", "Inactive");
                        foreach ($arr as $val) {
                          echo "<option value='$val'>$val</option>";
                        }
                        ?>
                      </select></td>
                  </tr>
                  <tr>

                    <td colspan="2">&#8196;<input type="submit" name="submit" id="submit" value="SUBMIT" style="font-size: 16px;" />&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;<button><a href="viewdoctor.php" id="z">View Doctor Lists</a> </button></td>
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

    <script type="application/javascript">
      var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
      var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
      var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
      var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
      var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

      function validateform() {
        if (document.frmdoctlogin.loginid.value == "") {
          alert("Login ID should not be empty..");
          document.frmdoctlogin.loginid.focus();
          return false;
        } else if (!document.frmdoctlogin.loginid.value.match(alphanumericExp)) {
          alert("Login ID not valid.");
          document.frmdoctlogin.loginid.focus();
          return false;
        } else if (document.frmdoctlogin.doctorname.value == "") {
          alert("Name should not be empty.");
          document.frmdoctlogin.doctorname.focus();
          return false;
        } else if (!document.frmdoctlogin.phonenumber.value.match(numericExpression)) {
          alert("Phone number is  not valid..");
          document.frmdoctlogin.phonenumber.focus();
          return false;
        } else if (!document.frmdoctlogin.experience.value.match(numericExpression)) {
          alert("Enter  numeric values only in experience. ");
          document.frmdoctlogin.experience.focus();
          return false;
        } else if (!document.frmdoctlogin.fees.value.match(numericExpression)) {
          alert("Enter  numeric values only in consultancy charge. ");
          document.frmdoctlogin.fees.focus();
          return false;
        } else if (document.frmdoctlogin.phonenumber.value.length != 10 || document.frmdoctlogin.phonenumber.value == "") {
          alert("Phone number is  not valid..");
          document.frmdoctlogin.phonenumber.focus();
          return false;
        } else if (document.frmdoctlogin.gender.value == "") {
          alert("Gender should not be empty.");
          document.frmdoctlogin.gender.focus();
          return false;
        } else if (document.frmdoctlogin.address.value == "") {
          alert("Address should not be empty..");
          document.frmdoctlogin.address.focus();
          return false;
        } else if (document.frmdoctlogin.experience.value == "") {
          alert("Experience should not be empty..");
          document.frmdoctlogin.experience.focus();
          return false;
        } else if (document.frmdoctlogin.education.value == "") {
          alert("Education should not be empty..");
          document.frmdoctlogin.education.focus();
          return false;
        } else if (document.frmdoctlogin.depid.value == "") {
          alert("Select department.");
          document.frmdoctlogin.depid.focus();
          return false;
        } else if (document.frmdoctlogin.password.value == "") {
          alert("Password should not be empty..");
          document.frmdoctlogin.password.focus();
          return false;
        } else if (document.frmdoctlogin.password.value.length < 8) {
          alert("Password length should be more than 8 characters...");
          document.frmdoctlogin.password.focus();
          return false;
        } else if (document.frmdoctlogin.password.value != document.frmdoctlogin.cnfirmpassword.value) {
          alert("Password and confirm password should be equal..");
          document.frmdoctlogin.cnfirmpassword.focus();
          return false;
        } else if (document.frmdoctlogin.status.value == "") {
          alert("Please select status.");
          document.frmdoctlogin.cnfirmpassword.focus();
          return false;
        } else {
          return true;
        }


      }
    </script>

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
    </script>
</body>

</html>