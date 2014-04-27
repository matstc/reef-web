<?php
if ($_GET['randomId'] != "hC0l1bSwHNluNdEqrhI15_jfbUvFiPQRqnZix3sswmtHp8RVy2N_pMPfzLMAL_w2") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
