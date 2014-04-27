<?php
if ($_GET['randomId'] != "O6sxjyfWBI_PmAlFNoKqNsyqfwmovmWJAd9sbRJrRLnjcRxTTyg4KFdodrWfudpI") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
