<?php

include('lock.php');

if (isset($_SESSION['sess_user_id']) == '') {
    header("Location: homepage.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="/images/od1.ico" />
        <title>OurDrive | Edit Profile</title>
        <style>
            <?php
            include 'css.css';
            ?>
        </style>
    </head>
    <body>
    <center>
        <h1 data-title="Welcome To OurDrive" style="margin-bottom:0;"> <a href="#">Welcome To OurDrive</a></h1></center>
    <hr>
    <ul id="menu">
        <li><a href="/php/aMHomepage.php"title="Home"><small>Home</small></a></li>
        <li><a href="/php/reset.php" title="Edit Your Profile "><small>Edit Profile</small></a></li>
        <li><a href="/php/aflogina.php"title="Your Files"><small>Your Stuff</small></a></li>
        <li><a href="/php/aoverview1.php" title="Overview"><small>Overview</small></a></li>
        <li><a href="/php/aContactUs (2).php" title="Contact Us"><small>Contact Us</small></a></li>
        <li><a href="/php/aAboutus.php" title="About Us"><small>About Us</small></a></li>
        <li><a href="/php/homepage.php"title="Logout"><small>Logout</small></a></li>
    </ul><hr>

    <center>
        <form method="POST" action="reset1.php">
            <fieldset style="width:0%; align:right" align="left">
                <legend style="color:red;font-weight:bold" align="left"><font face="timesnew roman" color="#5F9EA0" size=5><u>
                        Edit Your Profile</u> :</font>
                </legend>
                <table width="450" height="250" border="0" align="center" cellpadding="2" cellspacing="5" style="background-color:#463E3F;">
                    <tr><td width="180"><div align="left">First Name:</div></td>
                        <td width="177"><input type="text" size="40" name="fname" pattern="[a-zA-Z]{2,20}" title="Enter only Alphabets and size should be between 2 to 20" value="<?php echo $_SESSION['sess_fname'] ?>" ></td></tr>

                    <tr><td><div align="left">Last Name:</div></td>
                        <td><input type="text" name="lname" size="40" pattern="[a-zA-Z]{2,20}" title="Enter only Alphabets and size should be between 2 to 20"  value="<?php echo $_SESSION['sess_lname'] ?>" ></td></tr>

                    <tr><td><div align="left">Username:</div></td>
                        <td><input type="text" name="uname" size="40" value="<?php echo $_SESSION['login_user'] ?>"></td></tr>

                    <tr><td><div align="left">E-mail:</div></td>
                        <td><input type="text" name="email" size="40" value="<?php echo $_SESSION['sess_email'] ?>"></td></tr>


                    <tr><td width="116"><div align="left">Date Of Birth:</div></td>
                        <td width="177">
                            <select name="day" id="day">
                                <option value="0">Day</option>
                                <option value="1" <?php
                                if ($_SESSION['sess_day'] == '1') {
                                    echo 'selected';
                                }
                                ?> >1</option>
                                <option value="2" <?php
                                if ($_SESSION['sess_day'] == '2') {
                                    echo 'selected';
                                }
                                ?> >2</option>
                                <option value="3" <?php
                                        if ($_SESSION['sess_day'] == '3') {
                                            echo 'selected';
                                        }
                                        ?> >3</option>
                                <option value="4" <?php
                                if ($_SESSION['sess_day'] == '4') {
                                    echo 'selected';
                                }
                                ?> >4</option>
                                <option value="5" <?php
                                if ($_SESSION['sess_day'] == '5') {
                                    echo 'selected';
                                }
                                ?> >5</option>
                                <option value="6" <?php
                                        if ($_SESSION['sess_day'] == '6') {
                                            echo 'selected';
                                        }
                                        ?> >6</option>
                                <option value="7" <?php
                                if ($_SESSION['sess_day'] == '7') {
                                    echo 'selected';
                                }
                                ?> >7</option>
                                <option value="8" <?php
                                if ($_SESSION['sess_day'] == '8') {
                                    echo 'selected';
                                }
                                ?> >8</option>
                                <option value="9" <?php
                                        if ($_SESSION['sess_day'] == '9') {
                                            echo 'selected';
                                        }
                                        ?> >9</option>
                                <option value="10" <?php
                                if ($_SESSION['sess_day'] == '10') {
                                    echo 'selected';
                                }
                                ?> >10</option>
                                <option value="11" <?php
                                if ($_SESSION['sess_day'] == '11') {
                                    echo 'selected';
                                }
                                ?> >11</option>
                                <option value="12" <?php
                                        if ($_SESSION['sess_day'] == '12') {
                                            echo 'selected';
                                        }
                                        ?> >12</option>
                                <option value="13" <?php
                                if ($_SESSION['sess_day'] == '13') {
                                    echo 'selected';
                                }
                                ?> >13</option>
                                <option value="14" <?php
                                if ($_SESSION['sess_day'] == '14') {
                                    echo 'selected';
                                }
                                ?> >14</option>
                                <option value="15" <?php
                                        if ($_SESSION['sess_day'] == '15') {
                                            echo 'selected';
                                        }
                                        ?> >15</option>
                                <option value="16" <?php
                                if ($_SESSION['sess_day'] == '16') {
                                    echo 'selected';
                                }
                                ?> >16</option>
                                <option value="17" <?php
                                if ($_SESSION['sess_day'] == '17') {
                                    echo 'selected';
                                }
                                ?> >17</option>
                                <option value="18" <?php
                                        if ($_SESSION['sess_day'] == '18') {
                                            echo 'selected';
                                        }
                                        ?> >18</option>
                                <option value="19" <?php
                                if ($_SESSION['sess_day'] == '19') {
                                    echo 'selected';
                                }
                                ?>  >19</option>
                                <option value="20" <?php
                                if ($_SESSION['sess_day'] == '20') {
                                    echo 'selected';
                                }
                                ?> >20</option>
                                <option value="21" <?php
                                        if ($_SESSION['sess_day'] == '21') {
                                            echo 'selected';
                                        }
                                        ?> >21</option>
                                <option value="22" <?php
                                if ($_SESSION['sess_day'] == '22') {
                                    echo 'selected';
                                }
                                ?> >22</option>
                                <option value="23" <?php
                                if ($_SESSION['sess_day'] == '23') {
                                    echo 'selected';
                                }
                                ?> >23</option>
                                <option value="24" <?php
                                        if ($_SESSION['sess_day'] == '24') {
                                            echo 'selected';
                                        }
                                        ?> >24</option>
                                <option value="25" <?php
                                if ($_SESSION['sess_day'] == '25') {
                                    echo 'selected';
                                }
                                ?> >25</option>
                                <option value="26" <?php
                                if ($_SESSION['sess_day'] == '26') {
                                    echo 'selected';
                                }
                                ?> >26</option>
                                <option value="27" <?php
                                        if ($_SESSION['sess_day'] == '27') {
                                            echo 'selected';
                                        }
                                        ?> >27</option>
                                <option value="28" <?php
                                if ($_SESSION['sess_day'] == '28') {
                                    echo 'selected';
                                }
                                ?> >28</option>
                                <option value="29" <?php
                                if ($_SESSION['sess_day'] == '29') {
                                    echo 'selected';
                                }
                                ?> >29</option>
                                <option value="30" <?php
                                        if ($_SESSION['sess_day'] == '30') {
                                            echo 'selected';
                                        }
                                        ?> >30</option>
                                <option value="31" <?php
                                if ($_SESSION['sess_day'] == '31') {
                                    echo 'selected';
                                }
                                ?> >31</option>
                            </select>
                            <select name="month" id="month" >
                                <option value="0">Month</option>
                                <option value="1" <?php
                                if ($_SESSION['sess_month'] == '1') {
                                    echo 'selected';
                                }
                                ?> >Jan</option>
                                <option value="2" <?php
                                        if ($_SESSION['sess_month'] == '2') {
                                            echo 'selected';
                                        }
                                        ?> >Feb</option>
                                <option value="3" <?php
                                if ($_SESSION['sess_month'] == '3') {
                                    echo 'selected';
                                }
                                ?> >Mar</option>
                                <option value="4" <?php
                                if ($_SESSION['sess_month'] == '4') {
                                    echo 'selected';
                                }
                                ?> >Apr</option>
                                <option value="5" <?php
                                        if ($_SESSION['sess_month'] == '5') {
                                            echo 'selected';
                                        }
                                        ?> >May</option>
                                <option value="6" <?php
                                if ($_SESSION['sess_month'] == '6') {
                                    echo 'selected';
                                }
                                ?> >Jun</option>
                                <option value="7" <?php
                                if ($_SESSION['sess_month'] == '7') {
                                    echo 'selected';
                                }
                                ?> >Jul</option>
                                <option value="8" <?php
                                        if ($_SESSION['sess_month'] == '8') {
                                            echo 'selected';
                                        }
                                        ?> >Aug</option>
                                <option value="9" <?php
                                if ($_SESSION['sess_month'] == '9') {
                                    echo 'selected';
                                }
                                ?> >Sept</option>
                                <option value="10" <?php
                                if ($_SESSION['sess_month'] == '10') {
                                    echo 'selected';
                                }
                                ?> >Oct</option>
                                <option value="11" <?php
                                        if ($_SESSION['sess_month'] == '11') {
                                            echo 'selected';
                                        }
                                        ?> >Nov</option>
                                <option value="12" <?php
                                if ($_SESSION['sess_month'] == '12') {
                                    echo 'selected';
                                }
                                ?> >Dec</option>
                            </select>
                            <select name="year" id="year">
                                <option value="0" >Year</option>
                                <option value="2014" <?php
                                if ($_SESSION['sess_year'] == '2014') {
                                    echo 'selected';
                                }
                                ?> >2014</option>
                                <option value="2013" <?php
                                        if ($_SESSION['sess_year'] == '2013') {
                                            echo 'selected';
                                        }
                                        ?> >2013</option>
                                <option value="2012" <?php
                                if ($_SESSION['sess_year'] == '2012') {
                                    echo 'selected';
                                }
                                ?> >2012</option>
                                <option value="2011" <?php
                                if ($_SESSION['sess_year'] == '2011') {
                                    echo 'selected';
                                }
                                ?> >2011</option>
                                <option value="2010" <?php
                                        if ($_SESSION['sess_year'] == '2010') {
                                            echo 'selected';
                                        }
                                        ?> >2010</option>
                                <option value="2009" <?php
                                if ($_SESSION['sess_year'] == '2009') {
                                    echo 'selected';
                                }
                                ?> >2009</option>
                                <option value="2008" <?php
                                if ($_SESSION['sess_year'] == '2008') {
                                    echo 'selected';
                                }
                                ?> >2008</option>
                                <option value="2007" <?php
                                        if ($_SESSION['sess_year'] == '2007') {
                                            echo 'selected';
                                        }
                                        ?> >2007</option>
                                <option value="2006" <?php
                                if ($_SESSION['sess_year'] == '2006') {
                                    echo 'selected';
                                }
                                ?> >2006</option>
                                <option value="2005" <?php
                                if ($_SESSION['sess_year'] == '2005') {
                                    echo 'selected';
                                }
                                ?> >2005</option>
                                <option value="2004" <?php
                                        if ($_SESSION['sess_year'] == '2004') {
                                            echo 'selected';
                                        }
                                        ?> >2004</option>
                                <option value="2003" <?php
                                if ($_SESSION['sess_year'] == '2003') {
                                    echo 'selected';
                                }
                                ?> >2003</option>
                                <option value="2002" <?php
                                if ($_SESSION['sess_year'] == '2002') {
                                    echo 'selected';
                                }
                                ?> >2002</option>
                                <option value="2001" <?php
                                        if ($_SESSION['sess_year'] == '2001') {
                                            echo 'selected';
                                        }
                                        ?> >2001</option>
                                <option value="2000" <?php
                                if ($_SESSION['sess_year'] == '2000') {
                                    echo 'selected';
                                }
                                ?> >2000</option>
                                <option value="1999" <?php
                                if ($_SESSION['sess_year'] == '1999') {
                                    echo 'selected';
                                }
                                ?> >1999</option>
                                <option value="1998" <?php
                                        if ($_SESSION['sess_year'] == '1998') {
                                            echo 'selected';
                                        }
                                        ?> >1998</option>
                                <option value="1997" <?php
                                if ($_SESSION['sess_year'] == '1997') {
                                    echo 'selected';
                                }
                                ?> >1997</option>
                                <option value="1996" <?php
                                if ($_SESSION['sess_year'] == '1996') {
                                    echo 'selected';
                                }
                                ?> >1996</option>
                                <option value="1995" <?php
                                        if ($_SESSION['sess_year'] == '1995') {
                                            echo 'selected';
                                        }
                                        ?> >1995</option>
                                <option value="1994" <?php
                                if ($_SESSION['sess_year'] == '1994') {
                                    echo 'selected';
                                }
                                ?> >1994</option>
                                <option value="1993" <?php
                                if ($_SESSION['sess_year'] == '1993') {
                                    echo 'selected';
                                }
                                ?> >1993</option>
                                <option value="1992" <?php
                                        if ($_SESSION['sess_year'] == '1992') {
                                            echo 'selected';
                                        }
                                        ?> >1992</option>
                                <option value="1991" <?php
                                if ($_SESSION['sess_year'] == '1991') {
                                    echo 'selected';
                                }
                                ?> >1991</option>
                                <option value="1990" <?php
                                if ($_SESSION['sess_year'] == '1990') {
                                    echo 'selected';
                                }
                                ?> >1990</option>
                                <option value="1989" <?php
                                        if ($_SESSION['sess_year'] == '1989') {
                                            echo 'selected';
                                        }
                                        ?> >1989</option>
                                <option value="1988" <?php
                                if ($_SESSION['sess_year'] == '1988') {
                                    echo 'selected';
                                }
                                ?> >1988</option>
                                <option value="1987" <?php
                                if ($_SESSION['sess_year'] == '1987') {
                                    echo 'selected';
                                }
                                ?> >1987</option>
                                <option value="1986" <?php
                                        if ($_SESSION['sess_year'] == '1986') {
                                            echo 'selected';
                                        }
                                        ?> >1986</option>
                                <option value="1985" <?php
                                if ($_SESSION['sess_year'] == '1985') {
                                    echo 'selected';
                                }
                                ?> >1985</option>
                                <option value="1984" <?php
                                if ($_SESSION['sess_year'] == '1984') {
                                    echo 'selected';
                                }
                                ?> >1984</option>
                                <option value="1983" <?php
                                        if ($_SESSION['sess_year'] == '1983') {
                                            echo 'selected';
                                        }
                                        ?> >1983</option>
                                <option value="1982" <?php
                                if ($_SESSION['sess_year'] == '1982') {
                                    echo 'selected';
                                }
                                ?> >1982</option>
                                <option value="1981" <?php
                                if ($_SESSION['sess_year'] == '1981') {
                                    echo 'selected';
                                }
                                ?> >1981</option>
                                <option value="1980" <?php
                                        if ($_SESSION['sess_year'] == '1980') {
                                            echo 'selected';
                                        }
                                        ?> >1980</option>
                                <option value="1979" <?php
                                if ($_SESSION['sess_year'] == '1979') {
                                    echo 'selected';
                                }
                                ?> >1979</option>
                                <option value="1978" <?php
                                if ($_SESSION['sess_year'] == '1978') {
                                    echo 'selected';
                                }
                                ?> >1978</option>
                                <option value="1977" <?php
                                        if ($_SESSION['sess_year'] == '1977') {
                                            echo 'selected';
                                        }
                                        ?> >1977</option>
                                <option value="1976" <?php
                                if ($_SESSION['sess_year'] == '1976') {
                                    echo 'selected';
                                }
                                ?> >1976</option>
                                <option value="1975" <?php
                                if ($_SESSION['sess_year'] == '1975') {
                                    echo 'selected';
                                }
                                ?> >1975</option>
                                <option value="1974" <?php
                                        if ($_SESSION['sess_year'] == '1974') {
                                            echo 'selected';
                                        }
                                        ?> >1974</option>
                                <option value="1973" <?php
                                if ($_SESSION['sess_year'] == '1973') {
                                    echo 'selected';
                                }
                                ?> >1973</option>
                                <option value="1972" <?php
                                if ($_SESSION['sess_year'] == '1972') {
                                    echo 'selected';
                                }
                                ?> >1972</option>
                                <option value="1971" <?php
                                        if ($_SESSION['sess_year'] == '1971') {
                                            echo 'selected';
                                        }
                                        ?> >1971</option>
                                <option value="1970" <?php
                                if ($_SESSION['sess_year'] == '1970') {
                                    echo 'selected';
                                }
                                ?> >1970</option>
                                <option value="1969" <?php
                                if ($_SESSION['sess_year'] == '1969') {
                                    echo 'selected';
                                }
                                ?> >1969</option>
                                <option value="1968" <?php
                                        if ($_SESSION['sess_year'] == '1968') {
                                            echo 'selected';
                                        }
                                        ?> >1968</option>
                                <option value="1967" <?php
                                if ($_SESSION['sess_year'] == '1967') {
                                    echo 'selected';
                                }
                                ?> >1967</option>
                                <option value="1966" <?php
                                if ($_SESSION['sess_year'] == '1966') {
                                    echo 'selected';
                                }
                                ?> >1966</option>
                                <option value="1965" <?php
                                        if ($_SESSION['sess_year'] == '1965') {
                                            echo 'selected';
                                        }
                                ?> >1965</option>
                                <option value="1964" <?php
                                        if ($_SESSION['sess_year'] == '1964') {
                                            echo 'selected';
                                        }
                                ?> >1964</option>
                                <option value="1963" <?php
                                        if ($_SESSION['sess_year'] == '1963') {
                                            echo 'selected';
                                        }
                                ?> >1963</option>
                                <option value="1962" <?php
                                        if ($_SESSION['sess_year'] == '1962') {
                                            echo 'selected';
                                        }
                                ?> >1962</option>
                                <option value="1961" <?php
                                        if ($_SESSION['sess_year'] == '1961') {
                                            echo 'selected';
                                        }
                                ?> >1961</option>
                                <option value="1960" <?php
                                        if ($_SESSION['sess_year'] == '1960') {
                                            echo 'selected';
                                        }
                                ?> >1960</option>
                                <option value="1959" <?php
                                        if ($_SESSION['sess_year'] == '1959') {
                                            echo 'selected';
                                        }
                                ?> >1959</option>
                                <option value="1958" <?php
                                        if ($_SESSION['sess_year'] == '1958') {
                                            echo 'selected';
                                        }
                                ?> >1958</option>
                                <option value="1957" <?php
                                        if ($_SESSION['sess_year'] == '1957') {
                                            echo 'selected';
                                        }
                                ?> >1957</option>
                                <option value="1956" <?php
                                        if ($_SESSION['sess_year'] == '1956') {
                                            echo 'selected';
                                        }
                                ?> >1956</option>
                                <option value="1955" <?php
                                        if ($_SESSION['sess_year'] == '1955') {
                                            echo 'selected';
                                        }
                                ?> >1955</option>
                                <option value="1954" <?php
                                        if ($_SESSION['sess_year'] == '1954') {
                                            echo 'selected';
                                        }
                                ?> >1954</option>
                                <option value="1953" <?php
                                        if ($_SESSION['sess_year'] == '1953') {
                                            echo 'selected';
                                        }
                                ?> >1953</option>
                                <option value="1952" <?php
                                        if ($_SESSION['sess_year'] == '1952') {
                                            echo 'selected';
                                        }
                                ?> >1952</option>
                                <option value="1951" <?php
                                        if ($_SESSION['sess_year'] == '1951') {
                                            echo 'selected';
                                        }
                                ?> >1951</option>
                                <option value="1950" <?php
                                        if ($_SESSION['sess_year'] == '1950') {
                                            echo 'selected';
                                        }
                                ?> >1950</option>
                                <option value="1949" <?php
                                        if ($_SESSION['sess_year'] == '1949') {
                                            echo 'selected';
                                        }
                                ?> >1949</option>
                                <option value="1948" <?php
                                        if ($_SESSION['sess_year'] == '1948') {
                                            echo 'selected';
                                        }
                                ?> >1948</option>
                                <option value="1947" <?php
                                        if ($_SESSION['sess_year'] == '1947') {
                                            echo 'selected';
                                        }
                                ?> >1947</option>
                                <option value="1946" <?php
                                        if ($_SESSION['sess_year'] == '1946') {
                                            echo 'selected';
                                        }
                                ?> >1946</option>
                                <option value="1945" <?php
                                        if ($_SESSION['sess_year'] == '1945') {
                                            echo 'selected';
                                        }
                                ?> >1945</option>
                                <option value="1944" <?php
                                        if ($_SESSION['sess_year'] == '1944') {
                                            echo 'selected';
                                        }
                                ?> >1944</option>
                                <option value="1943" <?php
                                        if ($_SESSION['sess_year'] == '1943') {
                                            echo 'selected';
                                        }
                                ?> >1943</option>
                                <option value="1942" <?php
                                        if ($_SESSION['sess_year'] == '1942') {
                                            echo 'selected';
                                        }
                                ?> >1942</option>
                                <option value="1941" <?php
                                        if ($_SESSION['sess_year'] == '1941') {
                                            echo 'selected';
                                        }
                                ?> >1941</option>
                                <option value="1940" <?php
                                        if ($_SESSION['sess_year'] == '1940') {
                                            echo 'selected';
                                        }
                                ?> >1940</option>
                                <option value="1939" <?php
                                        if ($_SESSION['sess_year'] == '1939') {
                                            echo 'selected';
                                        }
                                ?> >1939</option>
                                <option value="1938" <?php
                                        if ($_SESSION['sess_year'] == '1938') {
                                            echo 'selected';
                                        }
                                ?> >1938</option>
                                <option value="1937" <?php
                                        if ($_SESSION['sess_year'] == '1937') {
                                            echo 'selected';
                                        }
                                ?> >1937</option>
                                <option value="1936" <?php
                                        if ($_SESSION['sess_year'] == '1936') {
                                            echo 'selected';
                                        }
                                ?> >1936</option>
                                <option value="1935" <?php
                                        if ($_SESSION['sess_year'] == '1935') {
                                            echo 'selected';
                                        }
                                ?> >1935</option>
                                <option value="1934" <?php
                                        if ($_SESSION['sess_year'] == '1934') {
                                            echo 'selected';
                                        }
                                ?> >1934</option>
                                <option value="1933" <?php
                                        if ($_SESSION['sess_year'] == '1933') {
                                            echo 'selected';
                                        }
                                ?> >1933</option>
                                <option value="1932" <?php
                                        if ($_SESSION['sess_year'] == '1932') {
                                            echo 'selected';
                                        }
                                ?> >1932</option>
                                <option value="1931" <?php
                                        if ($_SESSION['sess_year'] == '1931') {
                                            echo 'selected';
                                        }
                                ?> >1931</option>
                                <option value="1930" <?php
                                        if ($_SESSION['sess_year'] == '1930') {
                                            echo 'selected';
                                        }
                                ?> >1930</option>
                                <option value="1929" <?php
                                        if ($_SESSION['sess_year'] == '1929') {
                                            echo 'selected';
                                        }
                                ?> >1929</option>
                                <option value="1928" <?php
                                        if ($_SESSION['sess_year'] == '1928') {
                                            echo 'selected';
                                        }
                                ?> >1928</option>
                                <option value="1927" <?php
                                        if ($_SESSION['sess_year'] == '1927') {
                                            echo 'selected';
                                        }
                                ?> >1927</option>
                                <option value="1926" <?php
                                        if ($_SESSION['sess_year'] == '1926') {
                                            echo 'selected';
                                        }
                                ?> >1926</option>
                                <option value="1925" <?php
                                        if ($_SESSION['sess_year'] == '1925') {
                                            echo 'selected';
                                        }
                                ?> >1925</option>
                                <option value="1924" <?php
                                        if ($_SESSION['sess_year'] == '1924') {
                                            echo 'selected';
                                        }
                                ?> >1924</option>
                                <option value="1923" <?php
                                        if ($_SESSION['sess_year'] == '1923') {
                                            echo 'selected';
                                        }
                                ?> >1923</option>
                                <option value="1922" <?php
                                        if ($_SESSION['sess_year'] == '1922') {
                                            echo 'selected';
                                        }
                                ?> >1922</option>
                                <option value="1921" <?php
                                        if ($_SESSION['sess_year'] == '1921') {
                                            echo 'selected';
                                        }
                                ?> >1921</option>
                                <option value="1920" <?php
                                        if ($_SESSION['sess_year'] == '1920') {
                                            echo 'selected';
                                        }
                                ?> >1920</option>
                                <option value="1919" <?php
                                        if ($_SESSION['sess_year'] == '1919') {
                                            echo 'selected';
                                        }
                                ?> >1919</option>
                                <option value="1918" <?php
                                        if ($_SESSION['sess_year'] == '1918') {
                                            echo 'selected';
                                        }
                                ?> >1918</option>
                                <option value="1917" <?php
                                        if ($_SESSION['sess_year'] == '1917') {
                                            echo 'selected';
                                        }
                                ?> >1917</option>
                                <option value="1916" <?php
                                        if ($_SESSION['sess_year'] == '1916') {
                                            echo 'selected';
                                        }
                                ?> >1916</option>
                                <option value="1915" <?php
                                        if ($_SESSION['sess_year'] == '1915') {
                                            echo 'selected';
                                        }
                                ?> >1915</option>
                                <option value="1914" <?php
                                        if ($_SESSION['sess_year'] == '1914') {
                                            echo 'selected';
                                        }
                                ?> >1914</option>
                                <option value="1913" <?php
                                        if ($_SESSION['sess_year'] == '1913') {
                                            echo 'selected';
                                        }
                                ?> >1913</option>
                                <option value="1912" <?php
                                        if ($_SESSION['sess_year'] == '1912') {
                                            echo 'selected';
                                        }
                                ?> >1912</option>
                                <option value="1911" <?php
                                        if ($_SESSION['sess_year'] == '1911') {
                                            echo 'selected';
                                        }
                                ?> >1911</option>
                                <option value="1910" <?php
                                        if ($_SESSION['sess_year'] == '1910') {
                                            echo 'selected';
                                        }
                                ?> >1910</option>
                                <option value="1909" <?php
                                        if ($_SESSION['sess_year'] == '1909') {
                                            echo 'selected';
                                        }
                                ?> >1909</option>
                                <option value="1908" <?php
                                        if ($_SESSION['sess_year'] == '1908') {
                                            echo 'selected';
                                        }
                                ?> >1908</option>
                                <option value="1907" <?php
                                        if ($_SESSION['sess_year'] == '1907') {
                                            echo 'selected';
                                        }
                                ?> >1907</option>
                                <option value="1906" <?php
                                        if ($_SESSION['sess_year'] == '1906') {
                                            echo 'selected';
                                        }
                                ?> >1906</option>
                                <option value="1905" <?php
                                        if ($_SESSION['sess_year'] == '1905') {
                                            echo 'selected';
                                        }
                                ?> >1905</option>
                            </select>
                        </td></tr>
                    <tr><td><div align="left">Contact:</div></td>   	
                        <td><input type="text" name="contact" size="40" pattern="[0-9]{10}" title = "Enter 10 digit numbers !!" value="<?php echo $_SESSION['sess_contact'] ?>"></td></tr>
                    <tr><td><div align="left">Gender:</div></td>
                        <td><input type="radio" name="gender" value="female" <?php if($_SESSION['sess_gender'] == 'female'){ echo "checked"; } ?>>Female
                            <input type="radio" name="gender" value="male" <?php if($_SESSION['sess_gender'] == 'male'){ echo "checked"; }?>>Male</td></tr>
                    <tr><td><div align="left"></div></td>
                    <tr><td><div align="left"></div></td>
                    <tr><td></td><td>
                   
                    <tr><td></td><td><input type="submit" name="submit" value="Submit" width="100" height="40"></td></tr><tr><td></td><td><FONT COLOR="#5F9EA0" SIZE=2>Please Refresh again to see your Changes !!</td></tr></form><tr><td><hr></td><td><hr></td></tr>
                    <tr><td><form method="POST" action="pswd.php"><input type="submit" name="submit" value="Change Password" width="100" height="40" title="Click Here To Change Password"></form></td><td><form method="POST" action="delete.php"><input type="submit" name="submit" value="Delete Your Account" width="100" height="40" title="Click Here To Delete Account"></form></td></tr><tr><td><hr></td><td><hr></td></tr>
                </table>
            </fieldset>
    </center>
</body>
</html>