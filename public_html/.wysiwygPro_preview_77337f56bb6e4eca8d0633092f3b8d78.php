<?php
if ($_GET['randomId'] != "WzOEqyv0Gr9XyCQp2gsAopv38pSQ1dp20EvTPIdN_PQXfNgy_S_kKuW19L6_W6_A") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
