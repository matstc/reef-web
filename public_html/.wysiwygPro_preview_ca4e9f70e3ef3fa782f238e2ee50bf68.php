<?php
if ($_GET['randomId'] != "gHXBqlAHiAdm8hT2A9D2HXfuW9QSE0mxs8V6VlZZokJKLrie_m3MelQqqi2FXlZi") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
