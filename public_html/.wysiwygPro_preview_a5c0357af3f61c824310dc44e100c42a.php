<?php
if ($_GET['randomId'] != "QRRgRbp7vklQ_pxsnXmOqDA2QlelIRHQKp_OEx0ETlITqJ0zXvQjxW3OXsujhkIs") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
