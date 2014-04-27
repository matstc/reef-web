<?php
if ($_GET['randomId'] != "Xh4YP6jIcaWP9__qbmGcgRUBgdAEMLteaelcb1aIh4zfl5YCgwpSLDxmL9PZOgxQ") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
