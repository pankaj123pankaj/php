<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <link rel="shortcut icon" href="/images/od1.ico" />
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
        <legend style="color:#5F9EA0;font-weight:bold"><font face="timesnew roman" color="#5F9EA0" size=5><u>
                Change Password</u> :</font>
        </legend>
        <table width="500" height="180" align="right" cellpadding="1" cellspacing="1" style="background-color:#463E3F;">
            <form name="loginform" action="/php/pswd1.php" method="post"> 

                <tr><td width="276"><div align="left">Old Password :</div></td>
                    <td width="177"><input name="opswd" type="password" size="40" placeholder="Old Password"/></td></tr>

                <tr><td><div align="left">New Password :</div></td>
                    <td><input name="pswd" type="password" size="40" placeholder="New Password"/></td></tr>

                <tr><td><div align="left">Confirm New Password :</div></td>
                    <td><input name="cpswd" type="password" size="40" placeholder="Confirm New Password"/></td></tr>

                <tr><td><div align="right"></div></td>
                    <td><input type="submit" value="Change Password" name="change" title="Click Here To Change Password"></td></tr>
        </table>
        </form>
    </fieldset>
</center>
</body>
</html>