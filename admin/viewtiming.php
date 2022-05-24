<?php
session_start();
include('db.php');
?>
<html>

<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" href="style/admin.css" type="text/css" />
  <style type="text/css">
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

    #a {
      text-decoration: none;
      color: gainsboro;
    }

    #a:hover {
      color: white
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
  <style>
    a {
      text-decoration: none;
      color: black;
    }

    a:hover {
      color: midnightblue;
      text-decoration: underline;
      font-weight: bold;
    }

    #a {
      text-decoration: none;
      color: gainsboro;
    }

    #a:hover {
      color: white;
      text-decoration: none;
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
      <div class="profile"><a href="profile.php"><img src="Profile-PNG-Clipart.png" height="32" width="32" align="center"></a></div>
    </div>

    <div class="body">

      <div class="left">
        <h1 align="left">
          <a href="admin.php">
            <font size="5" face="arial" color="gainsboro">&#8196;&#8196;<u><a href="admin.php" id="a">Admin Dashboard</a></u></font>
          </a>
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
                      <th align="left"><a href="adddept.php" id="a">&#8196;&#8196;&#8196;&#8196;&#8196;Add Department</a></th>
                    </tr>
                    <tr>
                      <th align="left"><a href="viewdept.php" id="a">&#8196;&#8196;&#8196;&#8196;&#8196;View Department</a></th>
                    </tr>
                    <tr>
                      <th align="left"><a href="addtreatmenttype.php" id="a">&#8196;&#8196;&#8196;&#8196;&#8196;Add Treatment Type</a></th>
                    </tr>
                    <tr>
                      <th align="left"><a href="viewtreatmenttype.php" id="a">&#8196;&#8196;&#8196;&#8196;&#8196;View Treatment Type</a></th>
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
            <th><a href="changepassword.php" target="_self" id="a">
                <font size="4" face="arial" color="gainsboro" id="a">&#8196;&#8196;&#8196;&#8196;&#8196;Change Password&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</font>
              </a></th>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <th><img src="https://icons555.com/images/icons-gray/image_icon_logout_pic_512x512.png" height="27" width="27"></th>
            <th><a href="../logout.php" target="_self" id="a">
                <font size="4" face="arial" color="gainsboro" id="a">Log Out&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</font>
              </a></th>
          </tr>

        </table>
      </div>

      <div class="right">


        <div class="admintop">

          <?php
          if (isset($_GET['timeid']) && isset($_GET['doctorid'])) {
            $del = "DELETE FROM doctortiming WHERE timingid='$_GET[timeid]'";
            if (mysqli_query($con, $del)) {
              echo "<script>alert('Timing deleted successfully.');
                location.href='viewtiming.php?doctorid=$_GET[doctorid]'</script>";
            } else {
              echo "<script>alert('Failed to delete timing.');
                location.href='viewtiming.php?doctorid=$_GET[doctorid]'</script>";
            }
          }
          ?>
          <h2 align="center">Doctor Timing</h2><br>
          <table class="order-table" width="700" border="7" cellpadding="7" cellspacing="2" align="center" style="border-radius: 3px; border-color: lightslategray;">
            <thead style="font-size: 18px; background-color: lightblue;">
              <tr>
                <th width="25%" height="50">Doctor Name</th>
                <th width="20%">Start time</th>
                <th width="20%">End time</th>
                <th width="15%">Status</th>
                <th width="20%">Action</th>
              </tr>
            </thead>
            <tbody style="text-align: center; font-size: 18px; color: black; background-color: lavender;">
              <tr>
                <?php
                $sql = "SELECT * FROM doctor WHERE doctorid='$_GET[doctorid]'";
                $csql = mysqli_query($con, $sql);
                $doc = mysqli_fetch_array($csql);

                $tsql = "SELECT * FROM doctortiming WHERE doctorid='$_GET[doctorid]'";
                $tmsql = mysqli_query($con, $tsql);
                while ($time = mysqli_fetch_array($tmsql)) {
                  echo "
                    <tr>
                    <td>$doc[doctorname]</td>
                    <td>" . date("H:i A", strtotime($time['starttime'])) . "</td> 
                    <td>" . date("H:i A", strtotime($time['endtime'])) . "</td>
                    <td>$time[status]</td>
                    <td><a href='edittiming.php?timeid=$time[timingid]&doctorid=$_GET[doctorid]'>Edit</a> | <a href='viewtiming.php?timeid=$time[timingid]&doctorid=$_GET[doctorid]'>Delete</a></td>
                    </tr>
                    ";
                }
                ?>
              </tr>
            </tbody>
            <tr>
              <td colspan='5' style="text-align:center;">&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;<button><a href="viewdoctiming.php" style="font-size: 15px;">View Doctor's Timings </a> </button></td>
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