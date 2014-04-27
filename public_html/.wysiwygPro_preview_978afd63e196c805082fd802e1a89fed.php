<?php
if ($_GET['randomId'] != "0pjCqk8G7n_xihZ4bgWmo9vrz3N9Rc7jGJacqAN_SBpsJdhQ003lkTbBUagwd974") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
