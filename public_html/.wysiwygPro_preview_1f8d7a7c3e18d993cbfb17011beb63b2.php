<?php
if ($_GET['randomId'] != "YseIcuGLpWBnbKHVoP6gOV4mv0XOALPiLP5oKWcI5WoH03cMb7SQhOdMipcHs05t") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
