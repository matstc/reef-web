<?php
if ($_GET['randomId'] != "tp0mOFmLkQXb65PDj3ACmA0Y70wcjcIFHzwcFUeF8bdGon9p78HrSoeGzGeWis4E") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
