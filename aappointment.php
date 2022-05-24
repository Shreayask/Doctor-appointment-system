<html>

<head>
  <title>Doctor Panel</title>
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
      background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQztNy58P6wBAafqqrGyp8XNyWeABDEO5-Ibw&usqp=CAU);
      background-size: 100%;
    }

    .admintop {
      height: 90%;
      width: 77%;
      position: fixed;
      right: 0;
    }

    .atl {
      height: 90%;
      width: 45%;
      float: left;
    }

    .atr {
      height: 90%;
      width: 45%;
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

    table:hover {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 20px 30px 0 rgba(0, 0, 0, 0.19);
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
      <div class="profile"><a href="docprofile.php"><img src="Profile-PNG-Clipart.png" height="32" width="32" align="center"></a></div>
    </div>

    <div class="body">

      <div class="left">
        <h1 align="left">
          <font size="5" face="arial" color="gainsboro">&#8196;&#8196;<u><a href="doctor.php">Doctor Dashboard</a></u></font>
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
              <font size="4" face="arial" color="gainsboro"><a href="docchangepassword.php" target="_self">&#8196;&#8196;&#8196;&#8196;&#8196;Change Password&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font>
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

        <div class="admintop">
          <div class="atl">
            <br><br><br>
            <table cellspacing="5" cellpadding="3" style="background-color: white; background-image: url(https://thumbs.dreamstime.com/b/abstract-mauve-lavender-textured-background-subtle-vector-graphic-pattern-mauve-lavender-background-subtle-vector-graphics-161303881.jpg); border-radius: 10px" align="right">
              <tr>
                <th><img src="https://www.pngrepo.com/download/68627/calendar-and-clock.png" height="190" width="190"></th>
              </tr>
              <tr>
                <th style="background-color: mediumpurple; border: 2px lightsalmon; border-radius: 3px;"><a href="pendingappointment.php" target="_self">
                    <font size="5" face="forte" color="lavender">&#8196;&#8196;View Pending Appointments&#8196;&#8196;</font>
                  </a></th>
              </tr>
            </table>
          </div>
          <div class="atr">
            <br><br><br>
            <table cellspacing="5" cellpadding="3" style="background-color: white; background-image: url(https://thumbs.dreamstime.com/b/abstract-mauve-lavender-textured-background-subtle-vector-graphic-pattern-mauve-lavender-background-subtle-vector-graphics-161303881.jpg); border-radius: 10px" align="left">
              <tr>
                <th><img src="https://image.flaticon.com/icons/png/512/425/425868.png" height="190" width="190"></th>
              </tr>
              <tr>
                <th style="background-color: mediumpurple; border: 2px lightsalmon; border-radius: 3px;"><a href="approvedappointments.php" target="_self">
                    <font size="5" face="forte" color="lavender">&#8196;&#8196;View Approved Appointments&#8196;&#8196;</font>
                  </a></th>
              </tr>
            </table>
          </div>
          <br><br><br>
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