<?php
if ($_GET['randomId'] != "5rfBDJuTmjneVgAkpnjbtNCUVdyTQ_YiQ8VBJwjbmapQfsttl9QvfcivEcjzYXxP") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
