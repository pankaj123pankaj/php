<!DOCTYPE html><html>
    <head>
        <link rel="shortcut icon" href="/php/images/od1.ico" />
        <title>OurDrive</title>
        <style> 
<?php include 'css.css'; ?>
        </style>
    </head>
    <body>
    <center>
        <h1 data-title="Welcome To OurDrive" style="margin-bottom:0;"> <a href="#">Welcome To OurDrive</a></h1></center>
    <hr>
    <ul id="menu">
        <li><a href="/php/MHomepage.php"title="Home">Home</a></li>
        <li><a href="/php/overview1.php"title="Overview">Overview</a></li>
        <li><a href="/php/homepage.php"title="Login Now">Login Now</a></li>
        <li><a href="/php/Signup.php"title="Sign Up">SignUp Now</a></li>
        <li><a href="/php/ContactUs (2).php"title="Contact Us">Contact Us</a></li>
        <li><a href="/php/Aboutus.php"title="About Us">About Us></a></li> 
    </ul><hr>
    <div align="center"><font face="timesnew roman" color="#BCC6CC" size=5>
        <h2>What problem are you having with your  account?</h2>
        </font>
        <fieldset style="width:0%;" align="left">
            <legend style="color:#5F9EA0;font-weight:bold;"><b><font face="timesnew roman" color="#5F9EA0" size=5>Problem Solving</font></b></legend>
            <table width="700" cellpadding="1" cellspacing="1" style="background-color:#463E3F;">
                <form action="forgetinfo1.php" method="POST">
                    <tr><td>
                            <input type='checkbox' name='problem' value='problem' id='problem' tabindex='9'/>
                            <font face="timesnew roman" color="#BCC6CC" size=5>
                            I have a problem with my PASSWORD.
                            </font>
                        </td></tr>
                    <tr><td>
                            <input type='checkbox' name='forgotid' value='forgotid' id='forgotid' tabindex='9' />
                            <font face="timesnew roman" color="#BCC6CC" size=5>
                            I forgot my USERNAME.
                            </font>
                        </td></tr>
                    <tr><td><center>
                        <input type="submit" autofocus name="Next" id="Next" value="Next" title="Click Here To Continue" tabindex="10" border="100" style="background-color:#EE7AE9;"></form>
                        <form action="homepage.php" method="POST">
                            <input type="submit" name="exitBtn" id="exitBtn" value="Cancel" title="Click Here To Cancel" tabindex="10" border="100" style="background-color:#F6CCDA;"></form>
                    </center>
                    </td></tr>
            </table>
        </fieldset>
    </div><br>
    <div align="center" hspace="20">
    </body>
</html>
