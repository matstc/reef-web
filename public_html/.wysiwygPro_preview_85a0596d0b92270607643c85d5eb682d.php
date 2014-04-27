<?php
if ($_GET['randomId'] != "6_qru1Zglp2KcnSB25q_S8T46QnjVH0IdfvLkbpkv9rLeaNtA0w0XzjuS8jaO1cK") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
