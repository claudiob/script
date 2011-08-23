<?php 

  $to      = 'pau@boxofficescript.com';
  $subject = '[Boxoffice Script] New script: ' . $_POST['title'];
  $random_hash = md5(date('r', time()));
  $headers = 'From: ' . $_POST['email'] . "\r\n" .
      'Reply-To: info@boxofficescript.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion() . "\r\n" .
      'Content-Type: multipart/mixed; boundary="PHP-mixed-'.$random_hash.'"';
  $output = "
--PHP-mixed-$random_hash;
Content-Type: multipart/alternative; boundary='PHP-alt-$random_hash'
--PHP-alt-$random_hash
Content-Type: text/plain; charset='iso-8859-1'
Content-Transfer-Encoding: 7bit
 
Hello World!
This is the simple text version of the email message.
 
--PHP-alt-$random_hash
Content-Type: text/html; charset='iso-8859-1'
Content-Transfer-Encoding: 7bit
 
<h2>Hello World!</h2>
<p>This is the <b>HTML</b> version of the email message.</p>
 
--PHP-alt-$random_hash--";

  foreach ($_REQUEST as $key => $value) {
    if(substr($key, 0, 10) == 'attachment') {
      $attachment = chunk_split(base64_encode(file_get_contents("uploads/$value")));
      // TODO: Change Content-Type appropriately!!!
      $output .= "

--PHP-mixed-$random_hash
Content-Type: application/pdf; name=$value
Content-Transfer-Encoding: base64
Content-Disposition: attachment

$attachment";
    };  
  }
  $output .= "
--PHP-mixed-$random_hash--";
 
  mail($to, $subject, $output, $headers);

  print '<div class="success">
<p>Gracias '. $_POST['name'] .', <strong>hemos recibido tu gui&oacute;n</strong>.</p>
<p>Estudiaremos su viabilidad comercial y te daremos una respuesta dentro de cuatro semanas.</p>
<p>&mdash;Pau Brunet (Boxoffice Script)</p>
</div>';
?>

