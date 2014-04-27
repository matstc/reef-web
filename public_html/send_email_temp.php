<?php

function send_mail($from, $to,$title,$subject,$content)
{ 
 
 
  $random_hash = md5(date('r', time()));
 
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

   $headers .= 'From:'.$from . "\r\n" .
    'Reply-To: '.$from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();



  $filename = "email_template.html";

  $fh = fopen($filename, "r");
  $template_body = fread($fh, filesize($filename));
  fclose($fh);
  $plain_text = "";
  $body = str_replace("XXXSUBJECTXXX", stripslashes($subject), $template_body);
  $body = str_replace("XXXTITLEXXX", stripslashes($title), $body);
  $output = str_replace("XXXCONTENTXXX", stripslashes($content), $body);
  echo @mail($to, $subject, $output, $headers);


}
 
?>
