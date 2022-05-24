<html>

<head>
    <title>Doctor Panel</title>
    <?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "doctorappointment");
    if (!($con)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
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
            background-image: url(https://t4.ftcdn.net/jpg/02/19/84/51/360_F_219845109_nVvYH8OBIaHkBnun1cQEq6smPKEHsbZW.jpg);
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
            background-color: mediumpurple;
            font-weight: bold;
        }

        #y {
            background-color: thistle;
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
            <div class="profile"><a href="docprofile.php"><img src="Profile-PNG-Clipart.png" height="32" width="32" align="center" height="38" width="38" align="center"></a></div>
        </div>

        <div class="body">

            <div class="left">
                <h1 align="left">
                    <font size="5" face="arial" color="gainsboro">&#8196;&#8196;<u><a href="doctor.php" id="a">Doctor Dashboard</a></u></font>
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
                            <font size="4" face="arial" color="gainsboro"><a href="docchangepassword.php" target="_self" id="a">&#8196;&#8196;&#8196;&#8196;&#8196;Change Password&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font>
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
                            <font size="4" face="arial" color="gainsboro"><a href="logout.php" target="_self" id="a">Log Out&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font>
                        </th>
                    </tr>

                </table>
            </div>

            <div class="right">

                <?php
                if (isset($_POST['submit'])) {
                    if (isset($_GET['editid'])) {
                        $sql = "UPDATE patient SET status='Active' WHERE patientid='$_GET[patientid]'";
                        $qsql = mysqli_query($con, $sql);

                        $sql = "UPDATE appointment SET departmentid='$_POST[departmentid]',doctorid='$_POST[doctorid]',status='Approved',appointmentdate='$_POST[appointmentdate]',appointmenttime='$_POST[time]' WHERE appointmentid='$_GET[editid]'";
                        if ($qsql = mysqli_query($con, $sql)) {
                            if (!isset($_SESSION['doctorid'])) {
                                echo "<script>alert('appointment record updated successfully...');</script>";
                                echo "<script>location.href='pendingappointment.php'</script>";
                            } else {
                                echo "<script>alert('appointment record updated successfully...');</script>";
                                echo "<script>location.href='pendingappointment.php'</script>";
                            }
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
                ?>

                <div class="admintop">

                    <h2 align="center" style="color: black">Department Details</h2><br>
                    <form method="post" action="" name="frmpatapp" onSubmit="return validateform()">

                        <table width="500" align="center" border="3" style="font-size: 17px; border-radius: 3px;" cellpadding="7">
                            <tr>
                                <td width="37%" id="x">Patient</td>
                                <td id="y" style="font-size: 16.5px;" size="32">
                                    <?php
                                    if (isset($_GET['patientid'])) {
                                        $sqlpatient = "SELECT * FROM patient WHERE patientid='$_GET[patientid]'";
                                        $qsqlpatient = mysqli_query($con, $sqlpatient);
                                        $rspatient = mysqli_fetch_array($qsqlpatient);
                                        echo $rspatient['patientname'] . " (Patient ID - $rspatient[patientid])";
                                    } else {
                                        $sqlpatient = "SELECT * FROM patient WHERE status='Active'";
                                        $qsqlpatient = mysqli_query($con, $sqlpatient);
                                        while ($rspatient = mysqli_fetch_array($qsqlpatient)) {
                                            if ($rspatient['patientid'] == $rsedit['patientid']) {
                                                echo "<option value='$rspatient[patientid]' selected> $rspatient[patientname](Patient ID - $rspatient[patientid])</option>";
                                            }
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td id="x">Department</td>
                                <td id="y"><select name="departmentid" id="departmentid" style="font-size: 16.5px;">
                                        <option value="">Select</option>
                                        <?php
                                        $sqldepartment = "SELECT * FROM department WHERE status='Active'";
                                        $qsqldepartment = mysqli_query($con, $sqldepartment);
                                        while ($rsdepartment = mysqli_fetch_array($qsqldepartment)) {
                                            if ($rsdepartment['departmentid'] == $rsedit['departmentid']) {
                                                echo "<option value='$rsdepartment[departmentid]' selected>$rsdepartment[departmentname]</option>";
                                            } else {
                                                echo "<option value='$rsdepartment[departmentid]'>$rsdepartment[departmentname]</option>";
                                            }
                                        }
                                        ?>
                                    </select></td>
                            </tr>

                            <tr>
                                <td id="x">Doctor</td>
                                <td id="y"><select name="doctorid" id="doctorid" style="font-size: 16.5px;">
                                        <option value="">Select</option>
                                        <?php
                                        $sqldoctor = "SELECT * FROM doctor INNER JOIN department ON department.departmentid=doctor.departmentid WHERE doctor.status='Active'";
                                        $qsqldoctor = mysqli_query($con, $sqldoctor);
                                        while ($rsdoctor = mysqli_fetch_array($qsqldoctor)) {
                                            if ($rsdoctor['doctorid'] == $rsedit['doctorid']) {
                                                echo "<option value='$rsdoctor[doctorid]' selected>$rsdoctor[doctorname] ( $rsdoctor[departmentname] ) </option>";
                                            } else {
                                                echo "<option value='$rsdoctor[doctorid]'>$rsdoctor[doctorname] ( $rsdoctor[departmentname] )</option>";
                                            }
                                        }
                                        ?>
                                    </select></td>
                            </tr>

                            <tr>
                                <td id="x">Appointment Date</td>
                                <td id="y"><input type="date" name="appointmentdate" id="appointmentdate" value="<?php echo $rsedit['appointmentdate']; ?>" style="font-size: 16.5px;" size="32" /></td>
                            </tr>
                            <tr>
                                <td id="x">Requested Appointment Time</td>
                                <td id="y" style="font-size: 16.5px;" size="32"><?php echo date("H:i A", strtotime($rsedit['appointmenttime'])); ?></td>
                            </tr>

                            <tr>
                                <td id="x">Appointment Time</td>
                                <td id="y"><input type="time" name="time" id="time" value="<?php echo date("H:i A", strtotime($rsedit['appointmenttime'])); ?>" style="font-size: 16.5px;" size="32" /></td>
                            </tr>
                            <tr>
                                <td id="x">Appointment reason</td>
                                <td id="y"><textarea name="appreason" id="appreason" cols="31" rows="3" style="font-size: 16.5px;"><?php echo $rsedit['appointmentreason']; ?></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="SUBMIT" style="font-size: 16px;" /></td>
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

        function validateform() {
            if (document.frmpatapp.departmentid.value == "") {
                alert("Please select Department.");
                document.frmpatapp.department.focus();
                return false;
            } else if (document.frmpatapp.doctorid.value == "") {
                alert("Please select Doctor");
                document.frmpatapp.doct.focus();
                return false;
            } else if (document.frmpatapp.appointmentdate.value == "") {
                alert("Please select appointment date.");
                document.frmpatapp.appointmentdate.focus();
                return false;
            } else if (document.frmpatapp.time.value == "") {
                alert("Please select appointment time .");
                document.frmpatapp.time.focus();
                return false;

            } else if (document.frmpatapp.appreason.value == "") {
                alert("Appointment reason should not be empty..");
                document.frmpatapp.appreason.focus();
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>