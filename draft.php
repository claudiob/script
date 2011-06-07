<?php require("header.php"); ?>
<body>
  <div class="allen"> 
    <h1>Saca tu gui&oacute;n del caj&oacute;n y conviertelo en una pel&iacute;cula.</h1>
    <div>
      <img src="img/boxofficescript.png" alt="Boxoffice Script logo" id="logo" />
      <h2>Leemos tu gui&oacute;n y analizamos su viabilidad comercial. Creamos un estudio de desarrollo para dar valor a tu proyecto. Nos ponemos en contacto con las productoras m&aacute;s interesadas en rodar la pel&iacute;cula. Te ayudamos a fijar el precio y cobramos s&oacute;lo si vendes el gui&oacute;n.</h2>
      <h2>Somos los expertos espa&ntilde;oles del <em>movie business</em> que te informan diariamente de los resultados de taquilla en <a href="http://www.boxoffice.es">Boxoffice.es</a>. Tenemos relaci&oacute;n directa con las mayores productoras de cine en Espa&ntilde;a.</h2>
      <img src="img/companies.png" alt="Empresas con la que trabajamos" id="companies" />
    </div>

    <hr />
    <h1>Tu creatividad saldr&aacute; a la luz. Y tu negocio saldr&aacute; redondo.</h1>

    <div class="joel coen">
       <div class="wilder">
         <span class="coppola">1</span>
         <h3>No tienes nada que perder</h3>
         <p>Si la productora quiere tu gui&oacute;n, pagar&aacute; por ello y tendremos nuestro ingreso. (hacemos pitching?) (Hacemos un contrato de representaci&oacute;n). Estamos a tu lado.</p>
       </div>
       <div class="wilder">
         <span class="coppola">2</span>
         <h3>Tus derechos est&aacute;n a salvo</h3>
         <p>No aceptamos guiones cuya propiedad intelectual no esté registrada. Si todav&iacute;a no lo has hecho <a href="#">registralo</a>.</p>
       </div>
       <div class="wilder">
         <span class="coppola">3</span>
         <h3>Te llevamos hasta el final</h3>
         <p>Otras agencias te cobran simplemente para &lsquo;revisar&rsquo; tu gui&oacute;n. Nosotros nos movemos para que se convierta en pel&iacute;cula.</p>
       </div>
       <div class="wilder">
         <span class="coppola">4</span>
         <h3>Somos honestos</h3>
         <p>Si creemos que tu gui&oacute;n no es maduro, te lo decimos y no lo llevamos adelante. No vamos a molestar las productoras si no estamos seguros de tener una obra de arte vendible.</p>
       </div>
     </div>
   
     <div class="ethan coen">
       <div class="wilder">
         <span class="coppola">5</span>
         <h3>No creamos bases de datos</h3>
         <p>Si tu gui&oacute;n es bueno, nos movemos inmediatamente para posicionarlo en el mercado. No dejamos que se pudra en un cat&aacute;logo para que alguién despistado lo encuentre&hellip;</p>
       </div>
       <div class="wilder">
         <span class="coppola">6</span>
         <h3>Amamos la pantalla grande</h3>
         <p>Nuestra experencia es el cine, y por eso analizamos s&oacute;lo guiones para largometrajes.</p>
       </div>
       <div class="wilder">
         <span class="coppola">7</span>
         <h3>Mimamos tu creatividad</h3>
         <p>Sabemos lo dificil que es escribir un gui&oacute;n. Te ayudamos a venderlo. Mira un ejemplo de un nuestro <a href="#">informe de desarrollo</a>.</p>
       </div>
       <div class="wilder">
         <span class="coppola">8</span>
         <h3>Conocemos el mercado</h3>
         <p>Cada productora busca estilos diferentes, historias de según que género y presupuesto. Llevamos tu gui&oacute;n s&oacute;lo a quién pueda estar&aacute; interesado.</p>
       </div>
     </div>

    <hr />
    <h1>Env&iacute;anos tu gui&oacute;n. En Courier 12 doble espacio, por supuesto.</h1>

    <div class="eastwood">
      <form action="" id="script_form" method="post">
       <fieldset class="credentials">
         <legend>Formulario</legend>
         <p>
           <label for="name">Nombre y apellido</label><br />
           <input id="name" name="name" size="30" type="text" /><br />
         </p>
         <p>
           <label for="email">E-mail</label><br />
           <input id="email" name="email" size="30" type="text" /><br />
           Te contactaremos a esta direcci&oacute;n, no la compartiremos con otros.
         </p>
         <p>
           <label for="synopsis">Sinopsis</label><br />
           <textarea cols="70" rows="7" id="synopsis"></textarea><br />
           Convence las productoras de que tu gui&oacute;n es bueno en pocas palabras.
         </p>
         <p>
           <label for="attachments">Adjuntos</label><br />
           <input type="file" id="attachments" /><br />
           Aceptamos todos los formatos. Recomendamos un archivo ZIP con toda la documentaci&oacute;n.
         </p>
         <p>
           <input value="Env&iacute;a tu gui&oacute;n" type="submit" /> de acuerdo con las <a href="#">condiciones legales</a>.
          </p>
       </fieldset>
       </form>
     </div>
<?php require("footer.php"); ?>