<?php
if ($_GET['randomId'] != "C7_rV1Ir1pdqKI5zM8rnKnswuHfM7jrd0wsw6ZIzZm5C7n7dbPALODPhOzaMubwl") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
