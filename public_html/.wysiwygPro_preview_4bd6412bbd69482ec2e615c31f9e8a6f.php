<?php
if ($_GET['randomId'] != "Kl6mLKqYBxTjfvmKQaYlMqOAbbzBub6kZcGqNQ2HsScxTm8SZRoEbwfv2z0jmNvC") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
