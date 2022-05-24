<html>

<head>
    <title>Admin Panel</title>
    <?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "doctorappointment");
    if (!$con) {
        echo "Failed connection: " . mysqli_connect_error();
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
    </style>
    <style>
        select {
            width: 290px;
        }

        select:focus {
            min-width: 290px;
            width: auto;
        }

        input[type=submit] {
            background-color: antiquewhite;
            border-radius: 5px;
        }

        input[type=submit]:hover {
            background-color: azure;
        }

        #button {
            background-color: mediumpurple;
            color: white;
            border-radius: 3px;
            font-size: 15px;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container">

        <div class="header">
            <div class="head" align="left">
                <font size="5" face="forte" color="papayawhip">&#8196;&#8196;&#8196;&#8196;&#8196;Online Doctor Appointment System</font>
            </div>
            <div class="profile"><a href="admin/profile.php"><img src="Profile-PNG-Clipart.png" height="32" width="32" align="center" height="38" width="38" align="center"></div>
        </div>

        <div class="body">

            <div class="left">
                <h1 align="left">
                    <a href="admin/admin.php">
                        <font size="5" face="arial" color="gainsboro">&#8196;&#8196;<u>Admin Dashboard</u></font>
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
                                            <th align="left"><a href="admin/adddept.php">&#8196;&#8196;&#8196;&#8196;&#8196;Add Department</a></th>
                                        </tr>
                                        <tr>
                                            <th align="left"><a href="admin/viewdept.php">&#8196;&#8196;&#8196;&#8196;&#8196;View Department</a></th>
                                        </tr>
                                        <tr>
                                            <th align="left"><a href="admin/addtreatmenttype.php">&#8196;&#8196;&#8196;&#8196;&#8196;Add Treatment Type</a></th>
                                        </tr>
                                        <tr>
                                            <th align="left"><a href="admin/viewtreatmenttype.php">&#8196;&#8196;&#8196;&#8196;&#8196;View Treatment Type</a></th>
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
                            <font size="4" face="arial" color="gainsboro"><a href="admin/changepassword.php" target="_self">&#8196;&#8196;&#8196;&#8196;&#8196;Change Password&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font>
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

                    <?php

                    if (((isset($_POST['submit'])) && isset($_GET['doctorid']) && (isset($_GET['patientid']))) || ((isset($_POST['submit'])) && isset($_SESSION['adminid']))) {

                        $sql = "INSERT INTO treatmentrecords (treatmentid,appointmentid,patientid,doctorid,treatmentdescription) 
values ('$_POST[t_type]','$_POST[appid]','$_GET[patientid]','$_GET[doctorid]','$_POST[t_des]')
  ";



                        if (($csql = mysqli_query($con, $sql))) {

                            echo "<script>alert('Treatment Record Added Succesfully')</script>";
                        } else {
                            echo "<script>alert('Failed Operation')</script>";
                        }
                    }
                    if (isset($_GET['appointmentid']) && (isset($_GET['patientid']))) {

                        $asql = "SELECT * FROM appointment,patient  where appointment.patientid= patient.patientid AND 
appointment.appointmentid='$_GET[appointmentid]' AND patient.patientid='$_GET[patientid]'";
                        $acsql = mysqli_query($con, $asql);
                        $arsql = mysqli_fetch_array($acsql);
                        $readonly = " readonly";

                    ?>

                        <h2 align="center" style="color: black">Add New Treatment Record</h2><br>
                        <form action="" name="frmtreatrec" method="post" onSubmit="return validateform()">
                            <table width="500" align="center" border="3" style="font-size: 17px; border-radius: 3px;" cellpadding="7">
                                <tr>
                                    <td width="37%" id="x"><b>Appointment ID</b> </td>
                                    <td id="y"> <input type="text" name="appid" value="<?php echo $arsql['appointmentid'] ?> " <?php echo $readonly ?> style="font-size: 17px;" size="27"> </td>

                                </tr>
                                <tr>
                                    <td id="x"><b>Patient Name</b></td>
                                    <td id="y" style="font-size: 17px;"><?php echo $arsql['patientname'] ?></td>
                                </tr>

                                <tr>

                                    <td id="x"><b>Treatment Type</b> </td>
                                    <td id="y"><select name="t_type" style="font-size: 17px;">
                                            <option value="#"> Select treatment </option>
                                            <?php
                                            $tsql = "SELECT * FROM treatment WHERE Status='Active'";
                                            $ctsql = mysqli_query($con, $tsql);
                                            while ($rstre = mysqli_fetch_array($ctsql)) {
                                                echo " <option value='$rstre[Treatmentid]'>  $rstre[Treatment_Type] </option> ";
                                            }


                                            ?>
                                        </select> </td>
                                </tr>
                                <tr>
                                    <td id="x">Treatment Description</td>
                                    <td id="y"> <textarea name="t_des" id="t_des" cols="38" rows="6">  </textarea> </td>
                                </tr>
                                <tr>
                                    <td id="x">Treatment date</td>
                                    <td id="y" style="font-size: 17px;"> <?php echo $arsql['appointmentdate'];  ?></td>
                                </tr>

                                <tr>
                                    <td colspan="2"><input type="submit" name="submit" value="Submit Records" style="font-size: 16px;">&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;<button id="button"><?php echo " <a href='patientreport.php?patientid=$arsql[patientid]&appointmentid=$arsql[appointmentid]'' id='z'>GO Back To Patient Report</a>" ?></button> </td>
                                </tr>


                            </table>


                        </form>

                    <?php  }





                    ?>
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
            if (document.frmtreatrec.t_type.value == "") {
                alert("Please select Treatment type.");
                document.frmtreatrec.t_type.focus();
                return false;
            } else if (document.frmtreatrec.t_des.value == "") {
                alert("Treatment description should not be empty.");
                document.frmtreatrec.t_des.focus();
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>