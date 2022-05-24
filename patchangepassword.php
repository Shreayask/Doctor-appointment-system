<html>

<head>
    <title>Patient Panel</title>
    <?php
    session_start();
    //connection 
    include("db.php");
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
            background-image: url(https://image.shutterstock.com/image-photo/light-purple-gradient-background-radial-260nw-1008593185.jpg);
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
            background-color: lightsalmon;
            font-weight: bold;
        }

        #y {
            background-color: blanchedalmond;
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
            <div class="profile"><a href="patprofile.php"><img src="Profile-PNG-Clipart.png" height="32" width="32" align="center" height="38" width="38" align="center"></div>
        </div>

        <div class="body">

            <div class="left">
                <h1 align="left">
                    <font size="5" face="arial" color="gainsboro">&#8196;&#8196;<u><a href="patient.php">Patient Dashboard</a></u></font>
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
                            <font size="4" face="arial" color="gainsboro"><a href="patchangepassword.php" target="_self">&#8196;&#8196;&#8196;&#8196;&#8196;Change Password&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</a></font>
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
                <?php
                if (isset($_POST['submit'])) {
                    $sql = "UPDATE patient SET password='$_POST[newpassword]' WHERE patientid='$_SESSION[patientid]'";


                    $qsql = mysqli_query($con, $sql);
                    if (mysqli_affected_rows($con) == 1) {
                        echo "<script>alert('Password has been updated successfully..');</script>";
                    } else {
                        echo "<script>alert('Failed to update password..');</script>";
                    }
                }
                ?>

                <div class="admintop">

                    <h2 align="center" style="color: black">Change Password</h2><br><br>
                    <form method="post" action="" name="frmpatchange" onSubmit="return validateform()">
                        <table width="450" align="center" border="3" style="font-size: 18px; border-radius: 3px;" cellpadding="7">
                            <tbody>

                                <tr>
                                    <td width="45%" id="x">New Password</td>
                                    <td id="y"><input type="password" name="newpassword" id="newpassword" style="font-size: 17px;" size="20" /></td>
                                </tr>
                                <tr>
                                    <td id="x">Confirm Password</td>
                                    <td id="y"><input type="password" name="password" id="password" style="font-size: 17px;" size="20" /></td>
                                </tr>
                                <tr>
                                    <td height="36" colspan="2" align="center"><input type="submit" name="submit" id="submit" value="SUBMIT" style="font-size: 16.5px;" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <script type="application/javascript">
                        function validateform() {
                            if (document.frmpatchange.newpassword.value == "") {
                                alert("New Password should not be empty..");
                                document.frmpatchange.newpassword.focus();
                                return false;
                            } else if (document.frmpatchange.newpassword.value.length < 8) {
                                alert("New Password length should be more than 8 characters...");
                                document.frmpatchange.newpassword.focus();
                                return false;
                            } else if (document.frmpatchange.newpassword.value != document.frmpatchange.password.value) {
                                alert(" New Password and confirm password should be equal..");
                                document.frmpatchange.password.focus();
                                return false;
                            } else {
                                return true;
                            }
                        }
                    </script>

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