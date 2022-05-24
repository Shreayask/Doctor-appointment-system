<html>

<head>
  <title>Admin Panel</title>
  <?php
  $con = mysqli_connect("localhost", "root", "", "doctorappointment");
  if (!($con)) {
    echo "Failed connection :" . mysqli_connect_error();
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
      background-image: url(https://t4.ftcdn.net/jpg/03/10/16/27/360_F_310162798_6hWbaSFgDtWp4AhhaKPlTgAZUDL1c4UY.jpg);
      background-size: 100%;
    }

    .admintop {
      height: 90%;
      width: 77%;
      position: fixed;
      right: 0;
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
  <?php
  if (isset($_POST['submit'])) {
    $sqli = "INSERT INTO admin(Admin_Name,Login_ID,Password,Status)values('$_POST[adminname]','$_POST[loginid]','$_POST[password]','$_POST[select]')";
    if ($qsqli = mysqli_query($con, $sqli)) {
      echo "<script>alert('New admin inserted successfully...');</script>";
    } else {
      echo mysqli_error($con);
    }
  }
  ?>
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
          <font size="5" face="arial" color="gainsboro">&#8196;&#8196;<u><a href="admin.php">Admin Dashboard</a></u></font>
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
              <font size="4" face="arial" color="gainsboro"><a href="../logout.php" target="_self" id="tb">Log Out&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font>
            </th>
          </tr>

        </table>
      </div>

      <div class="right">
        <?php
        if (isset($_POST['submit'])) {
          $loginsql = "SELECT * FROM admin WHERE loginid='$_POST[loginid]'  ";
          $chklogin = mysqli_query($con, $loginsql);
          if (mysqli_num_rows($chklogin) == 1) {

            echo "<script>alert('Login Id is already taken.')</script>";
          } else {


            $sql = "INSERT INTO admin(adminname,loginid,password,Status,address,gender,phonenumber) values('$_POST[adminname]','$_POST[loginid]','$_POST[password]','$_POST[status]','$_POST[address]','$_POST[gender]','$_POST[phonenumber]')";
            if ($qsql = mysqli_query($con, $sql)) {
              echo "<script>alert('Administrator record inserted successfully...');</script>";
            } else {
              echo mysqli_error($con);
            }
          }
        }
        ?>
        <div class="admintop">

          <h2 align="center">
            <font color="black">Add New Administrator Record</font>
          </h2><br>
          <form method="post" action="" name="frmadmin" onSubmit="return validateform()">
            <table width="500" align="center" border="3" style="font-size: 17px; border-radius: 3px;" cellpadding="7">
              <tbody>
                <tr>
                  <td width="37%" id="x">Admin Name</td>
                  <td id="y"><input type="text" name="adminname" id="adminname" style="font-size: 16.5px;" size="29" /></td>
                </tr>
                <tr>
                  <td id="x">Login ID</td>
                  <td id="y"><input type="text" name="loginid" id="loginid" style="font-size: 16.5px;" size="29" /></td>
                </tr>

                <tr>
                  <td id="x">Password</td>
                  <td id="y"><input type="password" name="password" id="password" style="font-size: 16.5px;" size="29" /></td>
                </tr>
                <tr>
                  <td id="x">Confirm Password</td>
                  <td id="y"><input type="password" name="cnfirmpassword" id="cnfirmpassword" style="font-size: 16.5px;" size="29" /></td>
                </tr>
                <tr>
                  <td id="x">Status</td>
                  <td id="y"><select name="status" id="select" style="font-size: 16.5px;">
                      <?php
                      $arr = array("Active", "Inactive");
                      foreach ($arr as $val) {

                        echo "<option value='$val'>$val</option>";
                      }
                      ?>
                    </select></td>
                </tr>
                <tr>
                  <td id="x">Address</td>
                  <td id="y"><input type="text" name="address" id="address" style="font-size: 16.5px;" size="29" /></td>
                </tr>
                <tr>
                  <td id="x">Gender</td>
                  <td id="y"><select name="gender" style="font-size: 16.5px;">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="others"> Other</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td id="x">Phone number</td>
                  <td id="y"><input type="text" name="phonenumber" id="phonenumber" style="font-size: 16.5px;" size="29" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="SUBMIT" style="font-size: 16px;" /></td>
                </tr>
              </tbody>
            </table>
          </form>

          <p>&nbsp;</p>


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
        if (document.frmadmin.adminname.value == "") {
          alert("Admin name should not be empty..");
          document.frmadmin.adminname.focus();
          return false;
        } else if (!document.frmadmin.adminname.value.match(alphaspaceExp)) {
          alert("Admin name not valid..");
          document.frmadmin.adminname.focus();
          return false;
        } else if (document.frmadmin.loginid.value == "") {
          alert("Login ID should not be empty/");
          document.frmadmin.loginid.focus();
          return false;
        } else if (document.frmadmin.address.value == "") {
          alert("Address should not be empty..");
          document.frmadmin.address.focus();
          return false;
        } else if (document.frmadmin.phonenumber.value == "" || document.frmadmin.phonenumber.value.length != 10) {
          alert("Phone number should is not valid.");
          document.frmadmin.phonenumber.focus();
          return false;
        } else if (document.frmadmin.status.value == "") {
          alert("Kindly select the status..");
          document.frmadmin.status.focus();
          return false;
        } else if (document.frmadmin.password.value == "") {
          alert("Password should not be empty..");
          document.frmadmin.password.focus();
          return false;
        } else if (document.frmadmin.password.value.length < 8) {
          alert("Password length should be more than 8 characters...");
          document.frmadmin.password.focus();
          return false;
        } else if (document.frmadmin.password.value != document.frmadmin.cnfirmpassword.value) {
          alert("Password and confirm password should be equal..");
          document.frmadmin.cnfirmpassword.focus();
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