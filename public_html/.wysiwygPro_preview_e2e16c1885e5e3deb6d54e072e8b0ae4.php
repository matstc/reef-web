<?php
if ($_GET['randomId'] != "8ut2XE1xinxPwaGpyHHnLT7wWJdS4Mq1mdlJdXwm_VJgw7cZCLkNdQK6wlK7BUZf") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
