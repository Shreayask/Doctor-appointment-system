<html>

<head>
  <title>Admin Panel</title>
  <?php
  //connection creation
  $con = mysqli_connect("localhost", "root", "", "doctorappointment");
  //check connection
  if (!($con)) { {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  }
  ?>
  <script type="application/javascript">
    (function(document) {
      'use strict';

      var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
          _input = e.target;
          var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
          Arr.forEach.call(tables, function(table) {
            Arr.forEach.call(table.tBodies, function(tbody) {
              Arr.forEach.call(tbody.rows, _filter);
            });
          });
        }

        function _filter(row) {
          var text = row.textContent.toLowerCase(),
            val = _input.value.toLowerCase();
          row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
          init: function() {
            var inputs = document.getElementsByClassName('light-table-filter');
            Arr.forEach.call(inputs, function(input) {
              input.oninput = _onInputEvent;
            });
          }
        };
      })(Array.prototype);

      document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
          LightTableFilter.init();
        }
      });

    })(document);
  </script>
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
          <font size="5" face="arial" color="gainsboro">&#8196;&#8196;<u><a href="admin.php" id="a">Admin Dashboard</a></u></font>
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
          if (isset($_GET['delid'])) {
            $sql = "DELETE FROM doctor WHERE doctorid= '$_GET[delid]'";

            $qsql = mysqli_query($con, $sql);
            $delapp = "DELETE FROM appointment WHERE doctorid ='$_GET[delid]' ";
            $sdelapp = mysqli_query($con, $delapp);

            if (mysqli_affected_rows($con) == 1) {
              echo "<script>alert('Doctor record deleted successfully..'); </script>";
            } else {
              echo "<script>alert('Doctor record deleted successfully..')</script>";
            }
          }
          ?>


          <h2 align="center">Doctor Details</h2><br>
          <h3>&#8196;&#8196;&#8196;&#8196;Search Doctor - <input type="search" class="light-table-filter" data-table="order-table" placeholder="Search" style="font-size: 17px;" /></h3><br>
          <table class="order-table" width="1020" border="7" cellpadding="7" cellspacing="2" align="center" style="border-radius: 3px; border-color: lightslategray;">

            <thead style="font-size: 16.5px; background-color: lightblue;">
              <tr>

                <th width="14%">Doctor Name</th>
                <th width="8%">Address</th>
                <th width="8%">Mobile No.</th>
                <th width="10%">Department</th>
                <th width="7%">Education</th>
                <th width="7%">Experience</th>
                <th width="9%">Doctor Fees</th>
                <th width="6%">Gender</th>
                <th width="8%">Shift Time</th>
                <th width="5%">Status</th>
                <th width="10%">Action</th>
              </tr>
            </thead>
            <tbody style="text-align: center; font-size: 16px; color: black; background-color: lavender;">
              <?php
              $sql = "SELECT * FROM doctor";

              $qsql = mysqli_query($con, $sql);
              if (($num = mysqli_num_rows($qsql)) == 0) {
                echo "<td colspan='11' style='text-align: center ;'> Records not found </td>";
              } else {
                while ($rs = mysqli_fetch_array($qsql)) {
                  $sqldep = "SELECT * from department WHERE departmentid='$rs[departmentid]'";
                  $csql = mysqli_query($con, $sqldep);
                  $dep = mysqli_fetch_array($csql);

                  echo "<tr>
         
        <td>$rs[doctorname]</td>
        <td>$rs[address]</td>
          <td>$rs[doctorphoneno]</td>
       <td>$dep[departmentname]</td>
<td>$rs[education]</td>
      <td>$rs[experience]</td>
       <td>$rs[fees]</td>
         <td>$rs[gender]</td>
         <td><a href='viewtiming.php?doctorid=$rs[doctorid]'>View Timing</a></td>
            
          <td>$rs[status]</td>
           <td>
       <a href='editdoctor.php?editid=$rs[doctorid]'>Edit</a> <hr> <a href='viewdoctor.php?delid=$rs[doctorid]'>Delete</a> </td>
        </tr>";
                }
              }
              ?> </tbody>
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