<?php
if ($_GET['randomId'] != "QlY5sqGoM2KiBiiHvLbESGBGB3xSbHMCNzJFczAVFOPFeGin9HED_Ie5eefDZ9ET") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
