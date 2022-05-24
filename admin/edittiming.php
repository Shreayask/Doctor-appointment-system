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
            width: 304px;
        }

        select:focus {
            min-width: 304px;
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

                <div class="admintop">

                    <h2 align="center" style="color: black">Doctor Timing</h2><br>
                    <?php
                    if (isset($_POST['submit'])) {


                        $tsql = "UPDATE  doctortiming  SET starttime='$_POST[starttime]' ,endtime='$_POST[endtime]',status='$_POST[status]' WHERE timingid='$_GET[timeid]' ";
                        if (mysqli_query($con, $tsql)) {
                            echo "<script>alert('Timing updated Successfully.');
                location.href='viewtiming.php?doctorid=$_GET[doctorid]'
               
                </script>";
                        } else {
                            echo "<script>alert('Failed to update timing.');
                location.href='viewtiming.php?doctorid=$_GET[doctorid]'
                </script>";
                        }
                    }
                    ?>
                    <form name="timing" action="" method="post" onSubmit="return validateform()">
                        <table width="500" align="center" border="3" style="font-size: 16px; border-radius: 3px;" cellpadding="7">
                            <?php
                            $sql = "SELECT * FROM doctor WHERE doctorid='$_GET[doctorid]'";
                            $csql = mysqli_query($con, $sql);
                            $doc = mysqli_fetch_array($csql);

                            $dsql = "SELECT * FROM department WHERE departmentid='$doc[departmentid]'";
                            $dsql = mysqli_query($con, $dsql);
                            $dep = mysqli_fetch_array($dsql);
                            $readonly = " readonly";

                            $tsql = "SELECT * FROM doctortiming WHERE timingid='$_GET[timeid]'";
                            $tmsql = mysqli_query($con, $tsql);
                            $time = mysqli_fetch_array($tmsql);
                            $starttime = date("H:i A", strtotime($time['starttime']));
                            $endtime = date("H:i A", strtotime($time['endtime']));

                            echo " <tr>
            <td width='37%' id='x'>Doctor Name </td>
            <td id='y' style='font-size: 15px;'> $doc[doctorname] </td>
        </tr>
        <tr>
            <td id='x'>Department </td>
            <td id='y' style='font-size: 15px;'>$dep[departmentname]  </td>
        </tr>
        <tr>
        <td id='x'> Timing</td>
        <td id='y' style='font-size: 15px;'>From: $starttime  &nbsp;&nbsp;&nbsp;To: $endtime </td></tr>
        <tr id='x'><td>New Start time </td>
        <td id='y'><input name='starttime' type='time' />  </td>
</tr>
        
    <tr>
    <td id='x'>New End time </td>
    <td id='y' '><input name='endtime' type='time' />  </td>
</tr>
<tr>
    <td id='x'>Status </td>
    <td id='y' style='font-size: 15px;'><select name='status' value='$time[status]'>
        <option value='Active'>Active </option>
        <option value='Inactive'>Inactive</option>
    </select> </td>
</tr>
        "
                            ?>




                            <tr>
                                <td colspan='2' align="center"><input type="submit" name="submit" value="SUBMIT" style="font-size: 16px;"></td>
                            </tr>





                        </table>
                    </form>
                </div>

            </div>

            <div class=" footer">
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


        function validateform() {
            if (document.timing.starttime.value == "") {
                alert("Please select shift start time.");
                document.timing.starttime.focus();
                return false;
            } else if (document.timing.endtime.value == "") {
                alert("Please select shift end time .");
                document.timing.endtime.focus();
                return false;

            } else if (document.timing.status.value == "") {
                alert("Status should not be empty.");
                document.timing.status.focus();
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>