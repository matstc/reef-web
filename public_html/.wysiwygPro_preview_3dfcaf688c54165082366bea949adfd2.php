<?php
if ($_GET['randomId'] != "eA6UcK1fq6uGoFolE08x79gZoFEnRhzmfh1HSVvNa5YnDi3d4_zuKL215SClXHKy") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
