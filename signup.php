<?php
$to      = 'pau@boxofficescript.com';
$subject = '[Boxoffice Script] ' . $_POST['email'] . ' quiere subscribirse';
$message = $_POST['name'] . ' (' . $_POST['email'] . ')';
$headers = 'From: ' . $_POST['email'] . "\r\n" .
    'Reply-To: info@boxofficescript.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

<?php
print '<div class="success">
<p>Gracias '. $_POST['name'] .',</p>
<p>te avisar&eacute; el d&iacute;a en que estrene la web de Boxoffice Script.</p>
<p>&mdash;Pau Brunet</p>
</div>';
?>

