<html>

<head>
    <title>Admin Panel</title>
    <?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "doctorappointment");
    if (!($con)) {
        echo "Failed connection:" . mysqli_connect_error();
    }

    ?>
    <link rel="stylesheet" href="style/admin.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            width: 387px;
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
            <div class="profile"><a href="profile.php"><img src="Profile-PNG-Clipart.png" height="32" width="32" align="center" height="38" width="38" align="center"></div>
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
                if (isset($_GET['patientid'])) {
                    $sql = "SELECT * FROM patient WHERE patientid='$_GET[patientid]'";
                    $csql = mysqli_query($con, $sql);
                    $patdis = mysqli_fetch_array($csql);
                    $readonly = " readonly";
                }
                ?>
                <div class="admintop">

                    <?php
                    $sqldept = "SELECT * FROM department WHERE status='Active'";

                    if (isset($_POST['submit'])) {
                        if (isset($_GET['patientid'])) {
                            $lastinsid = $_GET['patientid'];
                        }

                        $sqlappointment = "SELECT * FROM appointment WHERE appointmentdate='$_POST[appointmentdate]' AND appointmenttime='$_POST[appointmenttime]' AND doctorid='$_POST[doct]' AND status='Approved'";
                        $qsqlappointment = mysqli_query($con, $sqlappointment);
                        if (mysqli_num_rows($qsqlappointment) >= 1) {
                            echo "<script>alert('Appointment already scheduled for this time..');</script>";
                        } else {
                            $sql = "INSERT INTO appointment(patientid,appointmentdate,appointmenttime,appointmentreason,status,departmentid,doctorid) values('$lastinsid','$_POST[appointmentdate]','$_POST[appointmenttime]','$_POST[app_reason]','Pending','$_POST[department]','$_POST[doct]')";
                            if ($qsql = mysqli_query($con, $sql)) {
                                echo "<script>alert('Appointment record inserted successfully...');</script>";
                                echo "<script>location.href='addappt.php'</script>";
                            } else {
                                echo mysqli_error($con);
                            }
                        }
                    }
                    if (isset($_GET['editid'])) {
                        $sql = "SELECT * FROM appointment WHERE appointmentid='$_GET[editid]' ";
                        $qsql = mysqli_query($con, $sql);
                        $rsedit = mysqli_fetch_array($qsql);
                    }
                    if (isset($_GET['patientid'])) {
                        $sqlpatient = "SELECT * FROM patient WHERE patientid='$_GET[patientid]' ";
                        $qsqlpatient = mysqli_query($con, $sqlpatient);
                        $rspatient = mysqli_fetch_array($qsqlpatient);
                        $readonly = " readonly";
                    }
                    ?>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                    <h2 align="center" style="color: black">Add New Appointment</h2><br>
                    <form method="post" action="" name="forms" onSubmit="return validateform()">
                        <table width="650" align="center" border="3" style="font-size: 17px; border-radius: 3px;" cellpadding="7">
                            <tbody>
                                <tr>
                                    <td width="37%" id="x">Patient Name</td>
                                    <td id="y"><input type="text" name="patient" id="patient" value="<?php echo $rspatient['patientname'];  ?>" <?php echo "$readonly"; ?> style="font-size: 16.5px;" size="43"></td>
                                </tr>
                                <tr>
                                    <td id="x">Address</td>
                                    <td id="y"><input name="address" id="textarea" value="<?php echo $rspatient['address'];  ?>" <?php echo "$readonly"; ?> style="font-size: 16.5px;" size="43"></td>
                                </tr>

                                <tr>
                                    <td id="x">Mobile Number</td>
                                    <td id="y"><input type="text" name="patientphone" id="mobileno" value="<?php echo $rspatient['patientphone'];  ?> " <?php echo $readonly ?> style="font-size: 16.5px;" size="43"></td>

                                </tr>
                                <tr>
                                    <td id="x">Department</td>
                                    <td id="y">
                                        <select name="department" id="department" onchange="loaddoctor(this.value)" style="font-size: 16.5px;">
                                            <option value="null">Select department</option>
                                            <?php
                                            $sqldept = "SELECT * FROM department WHERE status='Active'";
                                            $qsqldept = mysqli_query($con, $sqldept);
                                            while ($rsdept = mysqli_fetch_array($qsqldept)) {
                                                echo "<option value='$rsdept[departmentid]'>$rsdept[departmentname]</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="x">Doctors</td>
                                    <td id="y">
                                        <div id="divdoc">
                                            <select name="doctors" id="doctors" style="font-size: 16.5px;">
                                                <option value="null">Select doctor</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="x"><strong>Doctor Timing</strong></td>
                                    <td id="y">
                                        <div id="divtime" style="font-size: 16.5px;">
                                            <select name="timing" id="timing" style="font-size: 16.5px;">
                                                <option value="">View timing</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="x">Enter Appointment Date</td>
                                    <td id="y"><input type="date" min="<?php echo date("Y-m-d"); ?>" name="appointmentdate" id="appointmentdate" style="font-size: 16.5px;" size="43"></td>
                                </tr>
                                <tr>
                                    <td id="x">Enter Appointment Time</td>
                                    <td id="y"><input type="time" name="appointmenttime" id="appointmenttime" style="font-size: 16.5px;" size="43"></td>
                                </tr>
                                <tr>
                                    <td id="x">Appointment reason</td>
                                    <td id="y" style="font-size: 16px;"><textarea name="app_reason" id="app_reason" cols="52.5"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="SUBMIT" style="font-size: 16.5px;" /></td>
                                </tr>
                            </tbody>
                        </table>
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

<script type="application/javascript">
    function validateform() {

        if (document.forms.department.value == "null") {
            alert("Department should not be empty..");
            document.forms.department.focus();
            return false;

        } else if (document.forms.app_reason.value == "") {
            alert("Appointment reason should not be empty..");
            document.forms.app_reason.focus();
            return false;
        } else if (document.forms.appointmentdate.value == "" || document.forms.appointmentdate.value == null) {
            alert("Appointment date should not be empty..");
            document.forms.appointmentdate.focus();
            return false;
        } else if (document.forms.appointmenttime.value == "" || document.forms.appointmenttime.value == null) {
            alert("Appointment time should not be empty..");
            document.forms.appointmenttime.focus();
            return false;
        } else if (document.forms.doctors.value == "" || document.forms.doctors.value == null) {
            alert("Doctors  should not be empty..");
            document.forms.doctors.focus();
            return false;
        } else {
            return true;
        }
    }

    function loaddoctor(deptid) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("divdoc").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../departmentDoctor.php?deptid=" + deptid, true);
        xmlhttp.send();
    }

    function loadtime(docid) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("divtime").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../Doctimeload.php?docid=" + docid, true);
        xmlhttp.send();
    }
</script>