<?php
session_start();
include("db.php");
if (isset($_POST['submit'])) {

    $user = "SELECT * FROM admin WHERE loginid='$_POST[login]' AND phonenumber='$_POST[phone]'";
    $chkuser = mysqli_query($con, $user);
    $rs = mysqli_fetch_array($chkuser);
    if ((mysqli_num_rows($chkuser) == 1)) {

        echo " <script> location.href='newpassword.php?adminid=$rs[adminid]'</script>";
    } else {
        echo "<script> alert('Incorrect phonenumber.Try again.')</script>";
    }
}

?>

<html>

<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style/login.css" type="text/css" />
    <style type="text/css">
        .container {
            height: 100%;
            width: 100%;
            background-image: url(https://papers.co/wallpaper/papers.co-vk66-samsung-galaxy-polyart-pastel-blue-violet-pattern-23-wallpaper.jpg);
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
            <form name="loginform" method="post" action="">
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
                            <font size="5" face="candara" color="papayawhip">&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;<i>CONFIRM PHONE NO.</i>&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;&#8196;</font>
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
                            <font size="3" face="cambria"><b>&#8196;&#8196;Login ID:</b></font><br>&#8196;&#8196;<input name="login" type="text" class="no-outline" style="border-left: none; border-top: none; border-right: none; height: 30px; width: 315px;" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <font size="3" face="cambria"><b>&#8196;&#8196;Phone no.:</b></font><br>&#8196;&#8196;<input name="phone" type="text" class="no-outline" style="border-left: none; border-top: none; border-right: none; height: 30px; width: 315px;" />
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