<?php
if ($_GET['randomId'] != "M_vdwV1rJAV3CmEwWwRuK5KGhdy5cLqwRt3ISRVSPTqDVphsGBDmEaagRt0vwso9") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
