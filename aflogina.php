<?php
include('lock.php');
if (isset($_SESSION['sess_user_id']) == '') {
    include 'homepage.php';
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="/php/images/od1.ico" />
        <title>OurDrive</title>
        <style>
            <?php include 'css.css'; ?>
        </style>
    </head>
    <body>
    <center>
        <h1 data-title="Welcome To OurDrive" style="margin-bottom:0;"> <a href="/php/aMHomepage.php">Welcome To OurDrive</a></h1></center>
    <hr>
    <ul id="menu">
        <li><a href="/php/aMHomepage.php"title="Home"><small>Home</small></a></li>
        <li><a href="/php/reset.php" title="Edit Your Profile "><small>Edit Profile</small></a></li>
        <li><a href="/php/aflogina.php"title="Your Files"><small>Your Stuff</small></a></li>
        <li><a href="/php/aoverview1.php" title="Overview"><small>Overview</small></a></li>
        <li><a href="/php/aContactUs (2).php" title="Contact Us"><small>Contact Us</small></a></li>
        <li><a href="/php/aAboutus.php" title="About Us"><small>About Us</small></a></li>
        <li><a href="/php/logout.php"title="Logout"><small>Logout</small></a></li>
    </ul><hr>
</style>
</head>
<body>
    <font face="times new roman" color="#5F9EA0" size="5">
    <b>Welcome, <?php echo $_SESSION['login_user'] ?><br><small><u><mark style="background-color:#463E3F;"><font color = '#5F9EA0'>WOW, You got "Unlimited Space and Size" to Save Your Files.</font></mark></u></small></b>
    </font>
    <hr>
    <table width="300" align="center" cellpadding="1" cellspacing="1" style="background-color:#463E3F;">
        <tr><td>
                <fieldset style="width:0%; align:right" align="left">
                    <legend style="color:#5F9EA0;font-weight:bold">
                        Select a file to upload:
                    </legend>
                    <form action="/php/upload.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="uploadedfile" value="" size="50">
                        </fieldset>
                        </td>
                        <td>
                            <input type="submit" name="Upload" value="Upload" >
                    </form>
            </td></tr>
    </table>
    <br>
    <table width="0%" align="center" border ="1" cellpadding="1" cellspacing="1" style="background-color:#463E3F;">
        <thead>
            <tr>
                <td width="5%"><div align ="center">Sr.No</div></td>
                <td width="20%"><div align ="center">File Name</div></td>
				<td width="10%"><div align ="center">Owner</div></td>
                <td width="10%"><div align ="center">File Size</div></td>
                <td width="10%"><div align ="center">Created Date</div></td>
                <td width="10%"><div align ="center">View</div></td>
                <td width="10%"><div align ="center">Download</div></td>
				<td width="10%"><div align ="center">Delete</div></td>
				<td width="10%"><div align ="center">Request</div></td>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conn.php';
                $_SESSION['login_user'];
                
                function SizeUnits($bytes)
                {
                    if ($bytes >= 1073741824)
                    {
                        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                    }
                    elseif ($bytes >= 1048576)
                    {
                        $bytes = number_format($bytes / 1048576, 2) . ' MB';
                    }
                    elseif ($bytes >= 1024)
                    {
                        $bytes = number_format($bytes / 1024, 2) . ' KB';
                    }
                    elseif ($bytes > 1)
                    {
                        $bytes = $bytes . ' bytes';
                    }
                    elseif ($bytes == 1)
                    {
                        $bytes = $bytes . ' byte';
                    }
                    else
                    {
                        $bytes = '0 bytes';
                    }

                    return $bytes;
                }
                
                $query = "SELECT * FROM upload";
                $result = mysql_query($query);
				$id = 1;
                while($row = mysql_fetch_array($result))
                { ?>
                    <tr>
                        <td width="5%">
                            <div align ="center">
                                <?php echo $id; ?>
                            </div>
                        </td>
                        <td width="20%">
                            <div align ="center">
                                <?php echo $row['uploads']; ?>
                            </div>
                        </td>
						<td width="10%">
                            <div align ="center">
                                <?php echo $row['uname']; ?>
                            </div>
                        </td>
                        <td width="10%">
                            <div align ="center">
                                <?php echo SizeUnits($row['size']); ?>
                            </div>
                        </td>
                        <td width="10%">
                            <div align ="center">
                                <?php echo $row['date1']; ?>
                            </div>
                        </td>                        
                        <td width="10%">
                            <div align ="center">
                                <a target="_blank" href="http://localhost/php/uploads/<?php echo $row['uploads']; ?>"><input type = "button" name="view" value="View" /></a>
                            </div>
                        </td>
                        <td width="10%">
                            <div align ="center">
                                <a href="download.php?filename=<?php echo $row['uploads']; ?>"><input type = "button" name="view" value="Download" /></a>
                            </div>
                        </td> 
						<td width="10%">
                            <div align ="center">
                                <?php 
								if($row['uname'] == $_SESSION['login_user']){
							?>
                                <a href="deletefile.php?filename=<?php echo $row['uploads']; ?>"><input type = "button" name="view" value="Delete" /></a>
								<?php 
								}	
							?>
                            </div>
                        </td> 
						<td width="10%">
                            <div align ="center">
							<?php 
								if($row['uname'] != $_SESSION['login_user']){
							?>
                                
                             <form name="requestform" action="/php/sms.php" method="post">
							 <input type="hidden" name="rno" type="hidden" size="40" value="
							 <?php
								 $query1 = "select * from signup where uname = '".$row['uname']."'";
									$result1 = mysql_query($query1);
										$row1 = mysql_fetch_array($result1);
										echo $row1['contact'];
								 ?>
							 ">
							 <input type="hidden" name="rname" size="40" value="<?php echo $row['uname'] ?>">
							 <input type="hidden" name="sname" size="40" value="<?php echo $_SESSION['login_user'] ?>">							 
							 <input type="hidden" name="rdata" size="40" value="<?php echo $row['uploads'] ?>">
							 <input type = "submit" name="Request" value="Request" />
							 </form>
								<?php 
								}
							?>
                            </div>
                        </td>
						
                    </tr>                        
                 <?php $id = $id + 1;
                }
            ?>
        </tbody>
    </table>
</html>

