<?php

ob_start();
session_start();
if (isset($_POST['Next'])) {
    if (isset($_POST['problem'])) {
        if (isset($_POST['forgotid'])) {
            include ('nextup.php');
        } else {
            include ('nextp.php');
        }
    } elseif (isset($_POST['forgotid'])) {
        include ('nextu.php');
    } else {
        ?> 
        <script type="text/javascript">
            alert("Please Select any One Option");
            history.back();
        </script>
        <?php

    }
}
?>