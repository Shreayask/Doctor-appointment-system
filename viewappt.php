<html>

<head>
    <title>Patient Panel</title>
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
            background-image: url(https://i.pinimg.com/736x/2b/c8/fb/2bc8fba47c86888731ed3c4e337f8b0a.jpg);
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
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container">

        <div class="header">
            <div class="head" align="left">
                <font size="5" face="forte" color="papayawhip">&#8196;&#8196;&#8196;&#8196;&#8196;Online Doctor Appointment System</font>
            </div>
            <div class="profile"><a href="patprofile.php"><img src="Profile-PNG-Clipart.png" height="32" width="32" align="center" height="38" width="38" align="center"></a></div>
        </div>

        <div class="body">

            <div class="left">
                <h1 align="left">
                    <a href="patient.php" id="a">
                        <font size="5" face="arial">&#8196;&#8196;<u>Patient Dashboard</u></font>
                    </a>
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
                            <font size="4" face="arial" color="gainsboro"><a href="patchangepassword.php" target="_self" id="a">&#8196;&#8196;&#8196;&#8196;&#8196;Change Password&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font>
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
                    $sql = "DELETE FROM appointment WHERE appointmentid='$_GET[delid]'";
                    $qsql = mysqli_query($con, $sql);
                    if (mysqli_affected_rows($con) == 1) {
                        if (isset($_GET['doctorid']) && isset($_GET['patientid'])) {
                            echo "<script>alert('Appointment record deleted successfully.');
                location.href='viewappt.php?patientid=$_GET[patientid]&doctorid=$_GET[doctorid]'</script>";
                        } else {
                            echo "<script>alert('Appointment record deleted successfully.');
                location.href='viewappt.php?patientid=$_GET[patientid]'</script>";
                        }
                    }
                }
                ?>
                <div class="admintop">

                    <h2 align="center" style="color: black">Patient Details</h2><br>
                    <table width="1000" border="7" cellpadding="4" align="center" style="border-radius: 3px; border-color: lightslategray;">
                        <thead style="font-size: 17px; background-color: lightsalmon;">
                            <tr>
                                <th width="14%" height="60">Patient Details</th>
                                <th width="13%">Appointment Id</th>
                                <th width="20%">Appointment Date and Time </th>
                                <th width="12%">Department</th>
                                <th width="12%">Doctor Name</th>
                                <th width="10%">Reason</th>
                                <th width="8%">Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center; font-size: 16.5px; color: black; background-color: blanchedalmond;">
                            <?php
                            if (isset($_GET['patientid'])) {
                                if (isset($_GET['doctorid'])) {
                                    $sqlap = "SELECT * FROM appointment WHERE patientid='$_GET[patientid]' and doctorid='$_GET[doctorid]'";
                                    $csqlapp = mysqli_query($con, $sqlap);
                                } else {
                                    $sqlap = "SELECT * FROM appointment WHERE patientid='$_GET[patientid]' ";
                                    $csqlapp = mysqli_query($con, $sqlap);
                                }
                                if (($num = mysqli_num_rows($csqlapp)) == 0) {
                                    echo "<td colspan='7' style='text-align: center ;'> Records not found </td>";
                                } else {
                                    while ($rsapp = mysqli_fetch_array($csqlapp)) {
                                        $sqlpat = "SELECT * FROM patient WHERE patientid='$rsapp[patientid]'";
                                        $csqlpat = mysqli_query($con, $sqlpat);
                                        $rspat = mysqli_fetch_array($csqlpat);

                                        $sqldep = "SELECT * from department WHERE departmentid='$rsapp[departmentid]'";
                                        $csqldep = mysqli_query($con, $sqldep);
                                        $rsdep = mysqli_fetch_array($csqldep);

                                        $sqldoct = "SELECT * FROM doctor WHERE doctorid='$rsapp[doctorid]'";
                                        $csqldoct = mysqli_query($con, $sqldoct);
                                        $rsdoct = mysqli_fetch_array($csqldoct);
                                        echo "<tr>";


                                        echo "<td>Name: $rspat[patientname]<hr>Phone no.: $rspat[patientphone]</td>";
                                        echo "<td>$rsapp[appointmentid]</td>";
                                        echo " <td>" . date("d-M-Y", strtotime($rsapp['appointmentdate'])) .  " &nbsp; " . date("H:i A", strtotime($rsapp['appointmenttime'])) . " </td>";
                                        echo "<td>$rsdep[departmentname]</td>";
                                        echo "<td> $rsdoct[doctorname]</td>";
                                        echo "<td>$rsapp[appointmentreason]</td>";
                                        echo "<td>$rsapp[status]</td>";
                                        echo "<td>";

                                        if ($rsapp['status'] != 'Approved') {
                                            echo "  <a href='viewappt.php?delid=$rsapp[appointmentid]&patientid=$rspat[patientid]''>Delete</a> ";
                                        } else {
                                            if (isset($_GET['patientid']) && isset($_GET['doctorid'])) {
                                                echo "<a href='report.php?patientid=$rspat[patientid]&appointmentid=$rsapp[appointmentid]'>View Report</a><hr>
                                <a href='viewappt.php?delid=$rsapp[appointmentid]&patientid=$_GET[patientid]&doctorid=$_GET[doctorid]'>Delete</a>";
                                            } else {
                                                echo "<a href='report.php?patientid=$rspat[patientid]&appointmentid=$rsapp[appointmentid]'>View Report</a> 
                               ";
                                            }
                                        }
                                        echo "</td>";
                                        echo "</td>";
                                    }
                                }
                            }

                            ?>

                        </tbody>

                    </table><br>

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