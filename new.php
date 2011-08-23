<!--Begin Header-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demos - Uploadify</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="/uploadify/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/uploadify/swfobject.js"></script>
<script type="text/javascript" src="/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
</head>
<body>

<script type="text/javascript">
$(function() {
  $('#custom_file_upload').uploadify({
    'uploader'       : '/uploadify/uploadify.swf',
    'script'         : '/uploadify/uploadify.php',
    'cancelImg'      : '/uploadify/cancel.png',
    'folder'         : '/uploads',
    'multi'          : true,
    'auto'           : true,
    'fileExt'        : '*.jpg;*.gif;*.png',
    'fileDesc'       : 'Image Files (.JPG, .GIF, .PNG)',
    'queueID'        : 'custom-queue',
    'queueSizeLimit' : 3,
    'simUploadLimit' : 3,
    'removeCompleted': false,
    'onComplete'  : function(event, ID, fileObj, response, data) {
      $('#submit-form').append('<input type="hidden" name="attachment-' + ID + '" value="' + fileObj.name + '" />');
    },
    'onSelectOnce'   : function(event,data) {
        $('#status-message').text(data.filesSelected + ' files have been added to the queue.');
    },
    'onAllComplete'  : function(event,data) {
        $('#status-message').text(data.filesUploaded + ' files uploaded, ' + data.errors + ' errors.');
    }
  });				
});
</script>
				

<div id="status-message">Select some files to upload:</div>
<div id="custom-queue"></div>

<form enctype="multipart/form-data" action="submit.php" id="submit-form" method="post">
 <fieldset class="credentials">
   <legend>Formulario</legend>
   <p>
     <label for="title">T&iacute;tulo:</label>
     <input id="submit-title" name="title" size="50" type="text" />
   </p>
   <p>
     <label for="name">Autor:</label>
     <input id="submit-name" name="name" size="50" type="text" />
   </p>
   <p>
     <label for="email">E-mail:</label>
     <input id="submit-email" name="email" size="50" type="text" />
   </p>
   <p>
     <label for="Filedata">Adjuntos:</label>
     <input id="custom_file_upload" type="file" name="Filedata" style="margin-top: 5px" />      
     Aseg&uacute;rate de incluir<sup>*</sup>: 
     gui&oacute;n completo, 
     sinopsis,
     biograf&iacute;a del autor, 
     documento que acredite la propiedad intelectual,
     declaración del personal técnico/artístico a quien se haya solicitado participar al proyecto.<br />
   </p>
   <p style="text-align: center">
     <input id="submit-button" value="Env&iacute;a tu gui&oacute;n" type="submit" /> de acuerdo con las <a href="condiciones-generales.pdf" title="Condiciones Generales (PDF)">condiciones legales</a>.
    </p>
 </fieldset>
 </form>

</body>
</html>
<!--End Footer-->