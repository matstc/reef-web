<?php
if ($_GET['randomId'] != "XoE93yK1jjkHKK_7Iz0b4MUF6N044C05tTUF1Q8hAa3s_gRDBClnieTufeaIea8G") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
