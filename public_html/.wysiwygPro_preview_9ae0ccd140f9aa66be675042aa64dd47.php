<?php
if ($_GET['randomId'] != "GBVqQnpCdsrgsU5v6Uu7ShCosAFMFv5gG44RQQzv_6ysmumB46pVEFBR99A66NQ0") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
