<?php
if ($_GET['randomId'] != "6uXtV3WCCYArwqPXRFZDfMtdFidcBPd_azvVnVvzoMEnCoEdhuZI0obM4Jns4Px7") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
