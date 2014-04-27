<?php
if ($_GET['randomId'] != "KTM3JFlPLqm6h8kcEsaojVVpGSm2BH133VDU7wWpKoUDTCfJ4RqqNmXGofc_9_9S") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
