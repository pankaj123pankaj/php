<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <link rel="shortcut icon" href="/php/images/od1.ico" />
    <title>OurDrive | Change Password</title>
    <style>
        <?php include'css.css'; ?>
    </style>
</head>
<body>
<center>
    <h1 data-title="Welcome To OurDrive" style="margin-bottom:0;"><a href="/php/MHomepage.php">Welcome To OurDrive</a></h1></center>
<hr>
<ul id="menu">
    <li><a href="/php/aMHomepage.php"title="Home"><small>Home</small></a></li>
    <li><a href="/php/reset.php" title="Edit Your Profile "><small>Edit Profile</small></a></li>
    <li><a href="/php/aflogin.php"title="Your Files"><small>Your Stuff</small></a></li>
    <li><a href="/php/aoverview1.php" title="Overview"><small>Overview</small></a></li>
    <li><a href="/php/aContactUs (2).php" title="Contact Us"><small>Contact Us</small></a></li>
    <li><a href="/php/aAboutus.php" title="About Us"><small>About Us</small></a></li>
    <li><a href="/php/chat.html"><small>chat</small></a></li>
    <li><a href="/php/homepage.php"title="Logout"><small>Logout</small></a></li>
</ul><hr>
<center>
    <fieldset style="width:0%;" align="left">
        <legend style="color:red;font-weight:bold"><b><font face="timesnew roman" color="#5F9EA0" size=5><u>Delete Account</u> :</font></b></legend>
        <table width="600" height="120" cellpadding="1" cellspacing="1" style="background-color:#463E3F;">
            <form action="/php/delete1.php" method="POST">
                <tr><td width ="20"></td>
                    <td>** Are You Sure ?? You want to Delete Your Account from OurDrive ??
                    </td></tr>
                <tr><td></td>
                    <td><center>

                    <input type="submit" autofocus name="yes" id="yes" value="Yes" title="Click Here To Continue" tabindex="10" border="100" style="background-color:#EE7AE9";></form>
                    <form action="/php/reset.php" method="POST">
                        <input type="submit" name="exitBtn" id="exitBtn" value="NO" title="Click Here To Cancel" tabindex="10" border="100"  style="background-color:#F6CCDA";></form></center>
                </td></tr>
        </table>
    </fieldset>