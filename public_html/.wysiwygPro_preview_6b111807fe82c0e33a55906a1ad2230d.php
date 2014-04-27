<?php
if ($_GET['randomId'] != "T0O0rSys65dWREB1U_L85GV8ZItxauZLWFp57h4XbOVmGUyR3BvitIPPdgl10iDm") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
