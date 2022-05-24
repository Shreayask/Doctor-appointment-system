<html>

<head>

    <title>Register</title>
    <link rel="stylesheet" href="style/login.css" type="text/css" />
    <?php
    //connection creation
    $con = mysqli_connect("localhost", "root", "", "doctorappointment");
    //check connection
    if (!($con)) { {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }



    if (isset($_POST['submit'])) {


        $loginsql = "SELECT * FROM patient WHERE loginid='$_POST[loginid]'  ";
        $chklogin = mysqli_query($con, $loginsql);
        if (mysqli_num_rows($chklogin) == 1) {

            echo "<script>alert('Login Id is already taken.')</script>";
        } else {

            $ins = "INSERT INTO patient  (patientname,address,gender,bloodgroup,patientphone,loginid,password,status) values
    ('$_POST[patientname]','$_POST[address]','$_POST[gender]','$_POST[bloodgroup]',
    '$_POST[phoneno]','$_POST[loginid]','$_POST[password]','Active')";

            if ($chk = mysqli_query($con, $ins)) {
                echo "<script>alert('Patient record added sucessfully...')</script>";
                echo "<script>location.href='login.php'</script>";
                $insid = mysqli_insert_id($con);
            } else {
                echo mysqli_error($con);
            }
        }
    }

    ?>
    <style type="text/css">
        .container {
            height: 100%;
            width: 100%;
            background-image: url(https://icons8.com/wp-content/uploads/2020/02/how-to-create-gradient-article.jpg);
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
            top: 0;
        }

        .container {
            height: 100%;
            background-image: url(https://icons8.com/wp-content/uploads/2020/02/how-to-create-gradient-article.jpg);
            background-size: 100% 100%;

        }

        .header {
            height: 5%;
        }

        .body {
            height: 85%;
        }

        .left {
            height: 85%;
            width: 30%;
            float: left;
        }

        .right {
            height: 85%;
            width: 30%;
            float: right;
        }

        .footer {
            height: 10%;

        }

        .left {
            height: 10%;
            width: 50%;
            float: left;
        }

        .right {
            height: 10%;
            width: 50%;
            float: right;
        }

        input[type=submit] {
            font-size: 17px;
            font-weight: bold;
            font-family: lucida console, monospace;
        }
    </style>
    <STYLE>
        A {
            text-decoration: none;
        }
    </STYLE>

    <title> Registration </title>
</head>

<body>
    <div class="container">
        <div class="header"></div>
        <div class="body">
            <div class="left"></div>
            <div class="right"></div>

            <form method="POST" action=" " name="frmpatient" onsubmit=" return validateform()">
                <table cellspacing="7" cellpadding="4" align="center" style="background-color: white; border: 2px white; border-radius: 30px; opacity: 5px;">
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="10" align="center" style="height: 55px; background-color: dimgray; background-image: linear-gradient(to left, lightsteelblue, midnightblue); border: 2px dimgray; border-radius: 20px">
                            <font size="5" face="forte" color="papayawhip">&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Register&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</font>
                        </th>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <font size="3" face="cambria"><b>&#8196;&#8196;&#8196;&#8196;Patient Name:</b></font>
                        </td>
                        <td colspan="5"><input type="name" class="no-outline" name="patientname" id="Name" style="border-left: none; border-top: none; border-right: none; height: 30px; width: 315px;" />&#8196;&#8196;</td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            <font size="3" face="cambria"><b>&#8196;&#8196;&#8196;&#8196;Address:</b></font>
                        </td>
                        <td colspan="5"><input type="text" class="no-outline" name="address" id="Address" style="border-left: none; border-top: none; border-right: none; height: 30px; width: 315px;" />&#8196;&#8196;</td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            <font size="3" face="cambria"><b>&#8196;&#8196;&#8196;&#8196;Gender</b></font>
                        </td>
                        <td colspan="5">
                            <select name="gender">
                                <option value="male">
                                    <font size="3" face="cambria">Male</font>
                                </option>
                                <option value="female">
                                    <font size="3" face="cambria">Female</font>
                                </option>
                                <option value="others">
                                    <font size="3" face="cambria">Other</font>
                                </option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            <font size="3" face="cambria"><b>&#8196;&#8196;&#8196;&#8196;Blood Group:</b></font>
                        </td>
                        <td colspan="5">
                            <select name="bloodgroup">
                                <option value="">Select blood group</option>
                                <?php
                                $arr = array("A-", "A+", "B+", "B-", "O+", "O-", "AB+", "AB-");
                                foreach ($arr as $val) {
                                    echo "<option value='$val'>$val</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            <font size="3" face="cambria"><b>&#8196;&#8196;&#8196;&#8196;Phone number:</b></font>
                        </td>
                        <td colspan="5"><input type="tel" class="no-outline" name="phoneno" id="Phone" style="border-left: none; border-top: none; border-right: none; height: 30px; width: 315px;" />&#8196;&#8196;</td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            <font size="3" face="cambria"><b>&#8196;&#8196;&#8196;&#8196;Login ID:</b></font>
                        </td>
                        <td colspan="5"><input type="text" class="no-outline" name="loginid" id="Login ID" style="border-left: none; border-top: none; border-right: none; height: 30px; width: 315px;" />&#8196;&#8196;</td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            <font size="3" face="cambria"><b>&#8196;&#8196;&#8196;&#8196;Password:</b></font>
                        </td>
                        <td colspan="5"><input type="password" class="no-outline" name="password" id="Password" style="border-left: none; border-top: none; border-right: none; height: 30px; width: 315px;" />&#8196;&#8196;</td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            <font size="3" face="cambria"><b>&#8196;&#8196;&#8196;&#8196;Confirm Password:</b></font>
                        </td>
                        <td colspan="5"><input type="password" class="no-outline" name="confirmpassword" id="Confirm Password" style="border-left: none; border-top: none; border-right: none; height: 30px; width: 315px;" />&#8196;&#8196;</td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="10" style="text-align: center;"><input type="submit" name="submit" class="submit" value="    REGISTER    " style="background-color: mediumslateblue; background-image: linear-gradient(to left, silver, thistle, mediumslateblue); border-radius: 15px" id="submit" align="center" /></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </form>


            </table>
        </div>
        <div class="footer"><br>
            <div class="left">
                <font size="3" color="black" face="lucida bright">
                    <br>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Copyright @ 2021 All Reserved
                </font>
            </div>
            <div class="right">
                <font size="3" color="black" face="lucida bright">
                    <br>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Developed by: www.sss.com<br>
                </font>
            </div>
        </div>
    </div>

</body>

</html>

<script type="application/javascript">
    var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
    var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
    var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
    var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

    function validateform() {
        if (document.frmpatient.patientname.value == "") {
            alert("Patient name should not be empty..");
            document.frmpatient.patientname.focus();
            return false;
        } else if (!document.frmpatient.patientname.value.match(alphaspaceExp)) {
            alert("Patient name not valid..");
            document.frmpatient.patientname.focus();
            return false;
        } else if (document.frmpatient.address.value == "") {
            alert("Address should not be empty..");
            document.frmpatient.address.focus();
            return false;
        } else if (document.frmpatient.phoneno.value == "" || document.frmpatient.phoneno.value.length != 10) {
            alert("Mobile number is not valid.");
            document.frmpatient.phoneno.focus();
            return false;
        } else if (!document.frmpatient.phoneno.value.match(numericExpression)) {
            alert("Mobile number not valid..");
            document.frmpatient.phoneno.focus();
            return false;
        } else if (document.frmpatient.loginid.value == "") {
            alert("Login ID should not be empty..");
            document.frmpatient.loginid.focus();
            return false;
        } else if (!document.frmpatient.loginid.value.match(alphanumericExp)) {
            alert("Login ID not valid..");
            document.frmpatient.loginid.focus();
            return false;
        } else if (document.frmpatient.password.value == "") {
            alert("Password should not be empty..");
            document.frmpatient.password.focus();
            return false;
        } else if (document.frmpatient.password.value.length < 8) {
            alert("Password length should be more than 8 characters...");
            document.frmpatient.password.focus();
            return false;
        } else if (document.frmpatient.password.value != document.frmpatient.confirmpassword.value) {
            alert("Password and confirm password should be equal..");
            document.frmpatient.confirmpassword.focus();
            return false;
        } else if (document.frmpatient.bloodgroup.value == "") {
            alert("Blood Group should not be empty..");
            document.frmpatient.bloodgroup.focus();
            return false;
        } else if (document.frmpatient.gender.value == "") {
            alert("Gender should not be empty..");
            document.frmpatient.gender.focus();
            return false;
        } else {
            return true;
        }
    }
</script>