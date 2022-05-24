<?php
include('db.php');
if (isset($_POST['submit'])) {
    $sql = "UPDATE doctor SET password='$_POST[newpassword]' WHERE doctorid='$_GET[doctorid]'";


    $qsql = mysqli_query($con, $sql);
    if (mysqli_affected_rows($con) == 1) {
        echo "<script>alert('Password has been updated successfully.');
        location.href='doctorlogin.php'</script>";
    } else {
        echo "<script>alert('Failed to update password.');</script>";
    }
}
?>

<html>

<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="style/login.css" type="text/css" />
    <style type="text/css">
        .container {
            height: 100%;
            width: 100%;
            background-image: url(https://papers.co/wallpaper/papers.co-vk65-samsung-galaxy-polyart-pastel-pink-yellow-pattern-29-wallpaper.jpg);
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
            top: 0;
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

        #b {}

        #b:hover {
            color: blue;
        }
    </STYLE>

</head>

<body>
    <div class="container">
        <div class="header"></div>
        <div class="body">
            <div class="left"></div>
            <div class="right"></div>
            <form method="post" action="" name="frmpatchange" onSubmit="return validateform()">
                <br>
                <table cellspacing="7" cellpadding="4" align="center" style="background-color: white; border: 2px white; border-radius: 25px; opacity: 5px;">
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="5" align="center" style="height: 55px; background-color: dimgray; background-image: linear-gradient(to left, lightsteelblue, midnightblue); border: 2px dimgray; border-radius: 25px">
                            <font size="5" face="candara" color="papayawhip">&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;<i>CHANGE PASSWORD</i>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</font>
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
                            <font size="3" face="cambria"><b>&#8196;New Password:&#8196;&#8196;&#8196;&#8196;&#8196;</b></font>&#8196;&#8196;<input type="password" name="newpassword" id="newpassword" class="no-outline" style="border-left: none; border-top: none; border-right: none; height: 30px; width: 280px;" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <font size="3" face="cambria"><b>&#8196;Confirm Password:</b></font>&#8196;&#8196;<input type="password" name="password" id="password" class="no-outline" style="border-left: none; border-top: none; border-right: none; height: 30px; width: 280px;" />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="5" style="text-align: center;"><input type="submit" name="submit" class="submit" value="    SUBMIT    " style="background-color: mediumslateblue; background-image: linear-gradient(to left, silver, thistle, mediumslateblue); border-radius: 15px" id="submit" align="center" /></td>
                    </tr>
                    <tr>
                        <td></td>
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
                    <br>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;Developed by: www.sss.com<br>
                </font>
            </div>
        </div>
    </div>
</body>

</html>


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