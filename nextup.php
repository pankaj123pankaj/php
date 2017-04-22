<!DOCTYPE html>

<html>
    <head>
        <link rel="shortcut icon" href="/images/od1.ico" />
        <title>OurDrive</title>
        <style> 
<?php include'css.css'; ?>
            input[type=submit] {
                border: 10px;
                width: 20%;
                height: 2em;

            }
            form {
                display: inline;
            }
            body {
                background: #666; padding: 0em;
            } 
            h1 {
                position: none;
                font-size: 90px;
                margin-top: 0;
                text-shadow: 10px 3px 10px #292929;
                letter-spacing: -1px;
                -webkit-text-stroke: 0px white;
            } 
            h1 a{
                text-decoration: none;
                color: #ffffff;
                position: absolute; 
                -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), color-stop(50%, rgba(0,0,0,0)), to(rgba(0,0,0,1)));
            }     
            h1 a:hover {
                color: #185a50;
            } 
            h1:after {
                color: #dbdbdb;
                content : attr(data-title);
            }     
            body {
                background-color : transparent;
                background-image: url(/images/bg3.jpg); 
                background-position: none;
                background-size: 100%;
                background-origin: content;
                background-repeat: repeat;
            }
            #menu {
                /*Styling the menu width and height*/
                list-style:circle;
                margin:10px auto 0px auto;
                width:95%;
                height:45px;
                padding: 0px 20px 0px 20px;
	 
                /* Creating the curved corner of the border*/
                border-radius:50px;
 
                /*Styling the background with fading effect*/

                background:#463E3F;
	 
                /*Making the shadow effect into the menu bar */
                box-shadow: inset 1px 1px 10px #FFFFFF;
                border:3px solid #000;
		 
		 
            }
            #menu li /*Styling the li part of the menu*/
            {
                float:left;
                padding:4px 10px 4px 10px;
                display: block;
                position:relative;
                text-align:center;
                margin-right:30px;
                margin-top:7px;
                border:none;
                /*color:#CCCCCC;*/
		 
            }
	 
            #menu li a /*Styling the link part of the menu li*/
            {
                text-decoration:underline;
                color: #5F9EA0;
                font-size: 20px;
            }
            #menu li:hover a /*Styling the link part of the menu li in hover state*/
            {
                color:#FFF;
                text-shadow:1px 1px 10px #CCC;
            }
        </style>
        <style type='text/css'>
            td{
                font-family:times new roman;
                color: #5F9EA0;
                font-size:15pt;
            }
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
        <li><a href="/php/Aboutus.php"title="About Us">About Us</a></li>
    </ul><hr>
    <div align="center"><font color="#BCC6CC" size=5>
        <h2><b>We need your Mobile No  and Email ID to recover your UserName And Password.</b><br><br>
            This protects your account from unauthorised access.
            </font></h2>
        <fieldset style="width:0%;" align="left">
            <legend style="color:red;font-weight:bold"><b><font face="timesnew roman" color="#5F9EA0" size=5><u>Recover UserName And Password</u> :</font></b></legend>
            <table width="500" height="120" cellpadding="1" cellspacing="1" style="background-color:#463E3F;">
                <form action="nextup1.php" method="POST">
                    <tr><td>Enter Mobile No :</td>
                        <td><input type="text" name="contact" pattern="[0-9]{10}" placeholder="Mobile No" size="40" maxlength="100" class="" tabindex="1">
                        </td></tr>
                    <tr><td>Enter E-mail :</td>
                        <td><input type="text" name="email" placeholder="Email Id" size="40" maxlength="100" class="" tabindex="1">
                        </td></tr></font>
                    <tr><td></td>
                        <td><center>
                        <input type="submit" autofocus name="next" id="next" value="Next" title="Click Here To Continue" tabindex="10" border="100" style="background-color:#EE7AE9";></form>
                        <form action="homepage.php" method="POST">
                            <input type="submit" name="exitBtn" id="exitBtn" value="Cancel" title="Click Here To Cancel" tabindex="10" border="100"  style="background-color:#F6CCDA";></form></center>
                    </td></tr>
            </table>
        </fieldset>
    </div>
</body>
</html>