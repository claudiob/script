<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Boxoffice Script: del gui&oacute;n a la pel&iacute;cula</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Language" content="es" />
  <meta name="language" content="es" />
  <meta name="robots" content="all" />
  <meta name="description" content="Ponemos en contacto guionistas emergentes con productoras de cine, convertimos guiones en pel&iacute;culas." />
  <meta name="keywords" content="movie, script, Spain, guion, emergentes, escaparate, guionistas, Espana" />
  <meta name="viewport" content="width=900" />
  <meta name='og:title' content='Boxoffice Script' />
  <meta name='og:type' content='website' />
  <meta name='og:url' content='http://boxofficescript.com' />
  <meta name='og:image' content='http://boxofficescript.com/img/boxofficescript_facebook_like.png' />
  <meta name='og:author' content='Pau Brunet' />
  <meta name='og:site_name' content='Boxoffice Script' />
  <meta name='fb:page_id' content='176734525715662' />
  <meta name='fb:admins' content='665788321' />
  <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="img/favicon_iphone.png" rel="apple-touch-icon" />

  <link href="/uploadify/uploadify.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="/uploadify/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="/uploadify/swfobject.js"></script>
  <script type="text/javascript" src="/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
  <script type="text/javascript">
  $(function() {
    $('#custom_file_upload').uploadify({
      'uploader'       : '/uploadify/uploadify.swf',
      'script'         : '/uploadify/uploadify.php',
      'cancelImg'      : '/uploadify/cancel.png',
      'folder'         : '/uploads',
      'multi'          : true,
      'auto'           : true,
      'queueID'        : 'custom-queue',
      'height'         : 25,
      'width'          : 142,
      'rollover'       : true,
      'buttonImg'      : '/uploadify/selecciona.png',
      'sizeLimit'      : 20000000,
      'simUploadLimit' : 3,
      'removeCompleted': false,
      'onComplete'  : function(event, ID, fileObj, response, data) {
        $('#submit-form').append('<input type="hidden" name="attachment-' + ID + '" value="' + fileObj.name + fileObj.type + '" />');
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
  </head>
