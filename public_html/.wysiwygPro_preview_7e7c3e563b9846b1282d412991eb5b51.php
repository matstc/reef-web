<?php
if ($_GET['randomId'] != "IjzCN7dpXqbtziIwXWGjAnxBka8x2jMP8doV26_KYD7WC_Le6vQet0m0INlgT7u9") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
