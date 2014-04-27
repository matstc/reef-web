<?php
if ($_GET['randomId'] != "Q_1diwqwPZPc1_iRRcXk2NNANo5i8UJXAQOPJlhYV2hcMt6oikkknfskQzFjtjW4") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
