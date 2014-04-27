<?php
if ($_GET['randomId'] != "k9TbPfkI1kn5wTMkxx_EzUzOmlr84eMZzz2BlfPD01q0K5myqi7SCbGw9GGzFbgo") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
