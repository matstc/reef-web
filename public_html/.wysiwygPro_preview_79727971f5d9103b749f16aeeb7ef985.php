<?php
if ($_GET['randomId'] != "AxmejXsT77i6KdPtNz4UhGtkGXF_o0EJhEzx17e7uxoib5YZBIrThOQVwUIUFZss") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
