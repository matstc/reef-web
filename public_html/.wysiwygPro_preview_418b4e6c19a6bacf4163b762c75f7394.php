<?php
if ($_GET['randomId'] != "rixg6RZFUvY9rqoJRYkhEYgijAlTr2YjEWtnFiG_i5ICYOvb50abCmNBNTsxBGyY") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
