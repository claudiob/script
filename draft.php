<?php require("header.php"); ?>
<body>
  <div class="allen"> 
    <h1>Saca tu gui&oacute;n del caj&oacute;n y convi&eacute;rtelo en una pel&iacute;cula.</h1>
    <div>
      <img src="img/boxofficescript.png" alt="Boxoffice Script logo" id="logo" />
      <h2>Leemos tu gui&oacute;n y analizamos su viabilidad comercial. Creamos un estudio de desarrollo para dar valor a tu proyecto. Nos ponemos en contacto con las productoras m&aacute;s interesadas en rodar la pel&iacute;cula. Te ayudamos a fijar el precio y cobramos s&oacute;lo si vendes el gui&oacute;n.</h2>
      <h2>Somos los expertos espa&ntilde;oles del <em>movie business</em> que te informan diariamente de los resultados de taquilla en <a href="http://www.boxoffice.es">Boxoffice.es</a>. 
        Tenemos relaci&oacute;n directa con las mayores productoras de cine en Espa&ntilde;a.
        Hemos trabajado como consultores de estas importantes empresas:
      </h2>
      <img src="img/companies.png" alt="Filmax, Media Films, Perro Verde Films, Escandalo Films, Zentropa Spain, Continental Cine, Oberon Cinematogr&aacute;fica" id="companies" />
    </div>

    <hr />
    <h1>Tu creatividad saldr&aacute; a la luz. Y tu negocio ser&aacute; redondo.</h1>

    <div class="joel coen">
       <div class="wilder">
         <span class="coppola">1</span>
         <h3>No tienes nada que perder</h3>
         <p>Si la productora quiere tu gui&oacute;n, pagar&aacute; por ello y compartiremos el dinero. Si no, no cobraremos nada.</p>
       </div>
       <div class="wilder">
         <span class="coppola">2</span>
         <h3>Tus derechos est&aacute;n a salvo</h3>
         <p>No aceptamos guiones cuya propiedad intelectual no esté registrada. Si todav&iacute;a no lo has hecho <a href="http://www.mcu.es/propiedadInt/SC/procedimientosAdministrativos/InscripcionRegistro.html" title="Registro de la propiedad intelectual">reg&iacute;stralo</a>.</p>
       </div>
       <div class="wilder">
         <span class="coppola">3</span>
         <h3>Te llevamos hasta el final</h3>
         <p>Otras agencias cobran s&oacute;lo para &lsquo;revisar&rsquo; tu gui&oacute;n. Nosotros lo movemos entre productoras para que se convierta en pel&iacute;cula.</p>
       </div>
       <div class="wilder">
         <span class="coppola">4</span>
         <h3>Somos honestos</h3>
         <p>Si creemos que tu gui&oacute;n no es maduro, lo decimos. No vamos a molestar las productoras si no estamos seguros de tener una obra de arte vendible.</p>
       </div>
     </div>
   
     <div class="ethan coen">
       <div class="wilder">
         <span class="coppola">5</span>
         <h3>Amamos la pantalla grande</h3>
         <p>Nuestra experiencia es el cine, y por eso analizamos s&oacute;lo guiones para largometrajes.</p>
       </div>
       <div class="wilder">
         <span class="coppola">6</span>
         <h3>Mimamos tu creatividad</h3>
         <p>Redactamos un informe de desarrollo que ayuda a posicionar tu gui&oacute;n en el mercado.</p>
       </div>
       <div class="wilder">
         <span class="coppola">7</span>
         <h3>No creamos bases de datos</h3>
         <p>Fijamos un plazo de un a&ntilde;o para posicionar tu gui&oacute;n en el mercado. Si no lo conseguimos, te quedar&aacute;s con todos los derechos para seguir su desarrollo.</p>
       </div>
       <div class="wilder">
         <span class="coppola">8</span>
         <!--
         <h3>Conocemos el mercado</h3>
         <p>Cada productora busca estilos diferentes, historias de según que género y presupuesto. Llevamos tu gui&oacute;n s&oacute;lo a quién pueda estar&aacute; interesado.</p>
         -->
         <h3>Somos legales</h3>
         <p>Nuestras <a href="condiciones-generales.pdf" title="Condiciones Generales (PDF)">condiciones generales</a> y el contrato de representaci&oacute;n han sido redactados por la <a href="http://www.rionegroaudiovisual.com" title="Rionegro">Asesor&iacute;a Legal Audiovisual Rionegro</a>.</p>
       </div>
     </div>

    <hr />
    <h1>Env&iacute;anos tu gui&oacute;n. En Courier 12 doble espacio, por supuesto.</h1>

    <div class="eastwood" id="submit-div">

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
          <span id="status-message"></span>
          <div id="custom-queue"></div>
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

      <script type="text/javascript">
      //<![CDATA[
      // Form validation
      if(false) {    // DON'T COMMIT !!!!!! Remove once file upload works
      var form        = document.getElementById('submit-form')
      var form_title  = document.getElementById('submit-title')
      var form_name   = document.getElementById('submit-name')
      var form_email  = document.getElementById('submit-email')
      var form_submit = document.getElementById('submit-button')
      // enable only if all fields validate
      function toggleSubmit() {form_submit.disabled = !(isValidTitle() && isValidName() && isValidEmail())}
      // check if the name is valid
      function isValidTitle() {return (form_title.value.length > 0)}
      function checkTitle() {
        form_title.setAttribute("class", (isValidTitle() ? "right" : "wrong"))
        toggleSubmit()
      }
      function isValidName() {return (form_name.value.length > 0)}
      function checkName() {
        form_name.setAttribute("class", (isValidName() ? "right" : "wrong"))
        toggleSubmit()
      }
      // check if the email is valid
      function isValidEmail() {return (/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(form_email.value))}
      function checkEmail() {
        form_email.setAttribute("class", (isValidEmail() ? "right" : "wrong"))
        toggleSubmit()
      }
      // run the initial check upon loading
      checkTitle()
      checkName()
      checkEmail()
      // hook actions on the 'name' field
      var timer_title = ""
      form_title.onfocus = function() {timer_title = setInterval(checkTitle, 100)}
      form_title.onblur = function() {clearInterval(timer_title); checkTitle()}
      // hook actions on the 'name' field
      var timer_name = ""
      form_name.onfocus = function() {timer_name = setInterval(checkName, 100)}
      form_name.onblur = function() {clearInterval(timer_name); checkName()}
      // hook actions on the 'email' field
      var timer_email = ""
      form_email.onfocus = function() {timer_email = setInterval(checkEmail, 100)}
      form_email.onblur = function() {clearInterval(timer_email); checkEmail()}
      // submit the form with XHR
      form.onsubmit = function() {
        if (window.XMLHttpRequest)
          xmlHttpRequest = new XMLHttpRequest()
        else if (window.ActiveXObject)
          xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
        else {// without XHR
          return true
        }
        xmlHttpRequest.open(this.method, this.action, true);
        xmlHttpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlHttpRequest.onreadystatechange = function() {
          if (xmlHttpRequest.readyState == 4) { // Loaded, data transfer complete
            document.getElementById('submit-div').innerHTML = xmlHttpRequest.responseText
            document.getElementById('submit-by-email').style.display = 'none'
          }
        }
        xmlHttpRequest.send("title=" + this.title.value + "&name=" + this.name.value + "&email=" + this.email.value)
        // And here attach the files!!! Yuippieee!!
        return false
      }
      } // if false
      //]]>
      </script>
    </div>
   <div class="nolan" id="submit-by-email">
     <p><sup>*</sup>Si lo encuentras m&aacute;s pr&aacute;ctico, tambi&eacute;n puedes enviar el material por email a guiones@boxofficescript.com.</p>
   </div>
     
<?php require("footer.php"); ?>