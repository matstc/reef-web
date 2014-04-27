<?php
if ($_GET['randomId'] != "3lUm7sG1egFtovNiUpKUkq1ys1xu0OXORURNzmGUfBmS9yGizcAARvAHREF4ccRJ") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
