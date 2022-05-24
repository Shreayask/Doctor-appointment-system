<?php
include("db.php");

/*Billing calculation*/

if (isset($_POST['submit']) && isset($_GET['patientid'])) {


    $tsql = "SELECT * FROM treatmentrecords,treatment WHERE treatmentrecords.treatmentid=treatment.Treatmentid and
 treatmentrecords.appointmentid='$_GET[appointmentid]' and treatmentrecords.patientid='$_GET[patientid]'";
    $tc = mysqli_query($con, $tsql);

    $bsql = "SELECT * FROM doctor where doctorid='$_GET[doctorid]'";
    $bcsql = mysqli_query($con, $bsql);
    $drs = mysqli_fetch_array($bcsql);

    $tcost = 0;

    $payment = "SELECT * from appointment,billing WHERE appointment.appointmentid=billing.appointmentid  and 
appointment.appointmentid='$_GET[appointmentid]'";
    $pc = mysqli_query($con, $payment);



    if (mysqli_num_rows($pc) == 0) {

        while ($trs = mysqli_fetch_array($tc)) {
            $tcost = $tcost + $trs['Treatment_Cost'];
        }
        $billamt =  $tcost +  $drs['fees'];

        $billing = "INSERT INTO billing (appointmentid,patientid,totalamount,status)
    values ('$_GET[appointmentid]','$_GET[patientid]','$billamt','$_POST[status]')";




        if ((mysqli_query($con, $billing))) {

            echo "<script>alert('Treatment Record Added Succesfully');</script>";
        } else {
            echo "<script>alert('Failed to add  bill')</script>";
        }
    } else {

        $payrs = mysqli_fetch_array($pc);

        $tcost = 0;
        while ($trs = mysqli_fetch_array($tc)) {
            $tcost = $tcost + $trs['Treatment_Cost'];
        }
        $billamt = $tcost +  $drs['fees'];

        $billing = "UPDATE  billing SET totalamount='$billamt',status='$_POST[status]' WHERE appointmentid='$_GET[appointmentid]' and patientid='$_GET[patientid]' 
    and billid='$payrs[billid]' ";;
        if ((mysqli_query($con, $billing))) {

            echo "<script>alert('Treatment Record Updated Succesfully')</script>";
        } else {
            echo "<script>alert('Failed to update')</script>";
        }
    }
}
?>

<html>

<head>
    <title>Admin Panel</title>
    <?php
    $con = mysqli_connect("localhost", "root", "", "doctorappointment");
    if (!($con)) {
        echo "Failed connection :" . mysqli_connect_error();
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

        #button {
            background-color: cornflowerblue;
            color: white;
            border-radius: 3px;
        }

        #button:hover {
            background-color: lemonchiffon;
            color: black;
        }

        input[type=submit] {
            background-color: antiquewhite;
            border-radius: 5px;
        }

        input[type=submit]:hover {
            background-color: azure;
        }

        select {
            width: 150px;
        }

        select:focus {
            min-width: 150px;
            width: auto;
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
            <div class="profile"><a href="admin/profile.php"><img src="Profile-PNG-Clipart.png" height="32" width="32" align="center" height="38" width="38" align="center"></a></div>
        </div>

        <div class="body">

            <div class="left">
                <h1 align="left">

                    <font size="5" face="arial" color="gainsboro">
                        &#8196;&#8196;<a href="admin/admin.php" id="a"><u>Admin Dashboard</u></a>
                    </font>

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
                                            <th align="left"><a href="admin/adddept.php" id="a">&#8196;&#8196;&#8196;&#8196;&#8196;Add Department</a></th>
                                        </tr>
                                        <tr>
                                            <th align="left"><a href="admin/viewdept.php" id="a">&#8196;&#8196;&#8196;&#8196;&#8196;View Department</a></th>
                                        </tr>
                                        <tr>
                                            <th align="left"><a href="admin/addtreatmenttype.php" id="a">&#8196;&#8196;&#8196;&#8196;&#8196;Add Treatment Type</a></th>
                                        </tr>
                                        <tr>
                                            <th align="left"><a href="admin/viewtreatmenttype.php" id="a">&#8196;&#8196;&#8196;&#8196;&#8196;View Treatment Type</a></th>
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
                            <font size="4" face="arial" color="gainsboro"><a href="admin/changepassword.php" target="_self" id="a">&#8196;&#8196;&#8196;&#8196;&#8196;Change Password&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font>
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
                if (isset($_GET['delid'])) {
                    $del = "DELETE FROM patient WHERE patientid ='$_GET[delid]' ";
                    $sdel = mysqli_query($con, $del);
                    $delapp = "DELETE FROM appointment WHERE patientid ='$_GET[delid]' ";
                    $sdelapp = mysqli_query($con, $delapp);
                    if (mysqli_affected_rows($con) == 1) {
                        echo "<script>alert('Patient successfully deleted')</script> ";
                    } else {
                        echo "<script>alert('Failed to delete')</script>";
                    }
                }
                ?>
                <div class="admintop">

                    <h2 align="center" style="color: black">Payment</h2><br>
                    <?php
                    if ((isset($_GET['appointmentid'])) || (isset($_GET['patientid']))) {

                        $sqlap2 = "SELECT * from treatment,treatmentrecords WHERE  treatmentrecords.treatmentid=treatment.Treatmentid and treatmentrecords.appointmentid='$_GET[appointmentid]' and treatmentrecords.patientid='$_GET[patientid]'";
                        $csqla2 = mysqli_query($con, $sqlap2);
                        $rs2 = mysqli_fetch_array($csqla2);



                        $payment = "SELECT * from appointment,billing  WHERE appointment.appointmentid=billing.appointmentid  and 
    appointment.appointmentid='$_GET[appointmentid]'";
                        $pc = mysqli_query($con, $payment);
                        $payrs = mysqli_fetch_array($pc);

                        $dcsql = "SELECT * from doctor WHERE doctorid='$_GET[doctorid]'";
                        $dc = mysqli_query($con, $dcsql);
                        $dcrs = mysqli_fetch_array($dc);


                    ?>
                        <form method="post" action="" name="billform">
                            <table class="order-table" width="550" border="3" cellpadding="4" align="center" style="border-radius: 3px; border-color: lightslategray;">
                                <tr>
                                    <td><b>&#8196;Payment For Appointment Number</b></td>
                                    <td>&#8196;<?php echo $_GET['appointmentid']; ?> </td>
                                </tr>
                            </table>
                            <br>
                            <table width="550" border="3" cellpadding="4" align="center" style="background-color: lavender; border-radius: 3px; border-color: lightslategray;">
                                <tr>
                                    <th colspan="2" style="text-align:center; background-color: lightslategrey">Treatment Details</th>

                                </tr>
                                <tr>
                                    <th style="background-color: lightsteelblue;"> Treatment</th>
                                    <th style="background-color: lightsteelblue;">Cost </th>
                                </tr>
                                <tr>
                                    <td>&#8196;Doctor fees</td>
                                    <td>&#8196;<?php echo "$dcrs[fees]" ?> </td>
                                </tr>

                                <?php
                                $sqlap2 = "SELECT   Treatment_Type, Treatment_Cost from treatment,treatmentrecords WHERE  
     treatmentrecords.treatmentid=treatment.Treatmentid and treatmentrecords.appointmentid='$_GET[appointmentid]' and treatmentrecords.patientid='$_GET[patientid]'";
                                $csqla2 = mysqli_query($con, $sqlap2);
                                $totalmon = 0;
                                while ($rs2 = mysqli_fetch_array($csqla2)) {

                                    echo "<tr> <td>&#8196;$rs2[Treatment_Type] </td>
       <td>&#8196;$rs2[Treatment_Cost] </td></tr>
       ";
                                    $totalmon = $totalmon + $rs2['Treatment_Cost'];
                                }
                                $totals = $totalmon + $dcrs['fees'];
                                echo "<tr> <td style='background-color: paleturquoise; font-weight: bold;'>&#8196;Total Amount</td>
    <td style='background-color: paleturquoise; font-weight: bold;'>&#8196;$totals </td></tr>";

                                ?>

                                <tr>
                                    <td style='background-color: paleturquoise; font-weight: bold;'>&#8196;Payment Status</td>
                                    <td style='background-color: paleturquoise; font-weight: bold;'>&#8196;<select name="status">
                                            <option value="Not Paid">Not Paid</option>
                                            <option value=" Paid"> Paid</option>
                                        </select></td>
                                </tr>

                                <tr>
                                    <td colspan="2"><input type="submit" name="submit" value="Save Details" style="width:100%; border-radius:4px;"> </td>
                                </tr>
                                <?php if (isset($_POST['submit'])) {
                                    echo "<td style='background-color: skyblue; font-weight: bold;'>&#8196;Total amount</td>
        <td style='background-color: skyblue; font-weight: bold;'>&#8196;$payrs[totalamount]</td>
        </tr>
        <tr>
        <td style='background-color: skyblue; font-weight: bold;'>&#8196;Status
        </td>
        <td style='background-color: skyblue; font-weight: bold;'>&#8196;$payrs[status]</td></tr>
        ";
                                }
                                ?>

                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align:center;">
                                        <button id="button"><?php echo "<a href='patientreport.php?appointmentid=$_GET[appointmentid]&patientid=$_GET[patientid]&doctorid=$_GET[doctorid]' style='text-decoration: none;' >View Patient report</a>" ?></button>
                                    </td>
                                </tr>

                            </table>
                        </form>
                    <?php
                    }
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
    </script>
</body>

</html>