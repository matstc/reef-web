<?php
if ($_GET['randomId'] != "bj3636ncQCclJEWjvXcHZC2Bazg_KkX15oZSnh9cpxtIxCjxxvrGleifXWrbpWpU") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
