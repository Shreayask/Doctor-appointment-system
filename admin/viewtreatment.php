<html>

<head>
    <title>Admin Panel</title>
    <?php
      $con = mysqli_connect("localhost", "root", "", "doctorappointment");
      if (!($con)) 
      {
        echo "Failed connection :" . mysqli_connect_error();
      }
    ?>
    <link rel="stylesheet" href="style/admin.css" type="text/css" />
    <style type="text/css">
      p{text-align: justify;}
        .container
    {
      height: 100%;
      background-image: url(https://icons8.com/wp-content/uploads/2020/02/how-to-create-gradient-article.jpg); 
      position: fixed;
      bottom: 0;
      right: 0;
      left: 0;
      top: 0;
    }
    .admintop
    {
      height: 90%;
      position: fixed;
      right: 0;
      overflow: auto;
      width: 80%;
    }
    
    .dropdown-btn 
    {
  font-size: 18px;
  font-family: arial, serif;
  color: gainsboro;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  outline: none;
}
.dropdown-btn:hover{color: white;}

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
      A {text-decoration: none; color: gainsboro;} 
    </STYLE>
    <style>
      a:hover 
      {
        color: white;
      }
      </style>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div class="container">

      <div class="header">
        <div class="head" align="left"><font size="5" face="forte" color="papayawhip">&#8196;&#8196;&#8196;&#8196;&#8196;Online Doctor Appointment System</font></div>
        <div class="profile"><a href="#"><img src="Profile-PNG-Clipart.png" height="38" width="38" align="center" height="38" width="38" align="center"></div>
      </div>

      <div class="body">

        <div class="left">
          <h1 align="left"><font size="5" face="arial" color="gainsboro">&#8196;&#8196;<u>Admin Dashboard</u></font></h1>
          <table align="center">
            <tr><td></td></tr>
            <tr>
              <th style="position: fixed;"><img src="https://icon-library.com/images/settings-icon-flat/settings-icon-flat-10.jpg" height="27" width="27" align="center"></th>
              <th >
                <button class="dropdown-btn"><b>&#8196;&#8196;&#8196;&#8196;Settings</b><i class="fa fa-caret-down"></i></button>
                <div class="dropdown-container">
                  <table align="left" style="font-family: calibri, serif">
                    <font size="3" face="calibri" color="gainsboro" style="height: 10px;">
                      <tr><th align="left"><a href="#">&#8196;&#8196;&#8196;&#8196;&#8196;Add Department</a></th></tr>
                      <tr><th align="left"><a href="#">&#8196;&#8196;&#8196;&#8196;&#8196;View Department</a></th></tr>
                      <tr><th align="left"><a href="#">&#8196;&#8196;&#8196;&#8196;&#8196;Add Treatment Type</a></th></tr>
                      <tr><th align="left"><a href="#">&#8196;&#8196;&#8196;&#8196;&#8196;View Treatment Type</a></th></tr>
                    </font>
                  </table>
                </div>
              </th>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
              <th><img src="https://img.icons8.com/emoji/452/key-emoji.png" height="27" width="27"></th>
              <th><font size="4" face="arial" color="gainsboro"><a href="changepassword.php" target="_self">&#8196;&#8196;&#8196;&#8196;&#8196;Change Password&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font></th>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
              <th><img src="https://icons555.com/images/icons-gray/image_icon_logout_pic_512x512.png" height="27" width="27"></th>
              <th><font size="4" face="arial" color="gainsboro"><a href="home.php" target="_self" id="tb">Log Out&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font></th>
            </tr>
            
          </table>
        </div>

        <div class="right">
          <?php
            if (isset($_POST['submit'])) 
            {
              $sql = "INSERT INTO department(departmentname,dep_description,status) 
              values('$_POST[departmentname]','$_POST[description]','$_POST[status]')";
              if ($qsql = mysqli_query($con, $sql)) 
              {
                echo "<script>alert('Department record inserted successfully...');</script>";
              } 
              else 
              { 
                echo mysqli_error($con);
              }
            }
          ?>
          <div class="admintop">
            
            <h1 align="center" style="color: black">Add new Department record</h1>
            <form method="post" action="" name="frmdept" onSubmit="return validateform()">
              <table width="500" border="4" align="center">
                <tr>
                    <td width="40%">Department Name</td>
                    <td width="60%"><input type="text" name="departmentname" id="departmentname"></td>
                </tr>
                <tr>
                  <td>Description</td>
                  <td><input name="description" id="textarea" ></input></td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td> 
                    <select name="status" id="select">
                      <option value="">Select</option>
                        <?php
                          $arr = array("Active", "Inactive");
                          foreach ($arr as $val) 
                          {
                            echo "<option value='$val' selected>$val</option>";
                          }
                        ?>
                      </select>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" /></td>
                </tr>
              </table>
            </form>
            <p>&nbsp;</p>
            <script type="application/javascript">
              var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
              var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
              var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
              var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
              var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

              function validateform() {
                if (document.frmdept.departmentname.value == "") 
                {
                  alert("Department name should not be empty..");
                  document.frmdept.departmentname.focus();
                  return false;
                } 
                else if (document.frmdept.status.value == "") 
                {
                  alert("Kindly select the status..");
                  document.frmdept.select.focus();
                  return false;
                } 
                else 
                {
                  return true;
                }
              }
            </script>

          </div>

        </div>

        <div class="footer">
          <div class="ls">
            <font size="1" color="black" face="lucida bright">
            <br><b>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Copyright @ 2021 All Reserved</b></font>
          </div>
          <div class="rs">
            <font size="1" color="black" face="lucida bright">
            <br><b>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Developed by: www.sss.com</b></font>
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
</script>
</body>
</html>     