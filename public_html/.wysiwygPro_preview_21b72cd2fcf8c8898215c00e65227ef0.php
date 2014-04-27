<?php
if ($_GET['randomId'] != "gBzrpknI6InSPpwGK3EhRg56YNQIJvd95apJcLUPDR2sshhaV7CN3VP7RfG2DbKp") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
