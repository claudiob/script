<?php require("header.php"); ?>
<body>
  <div class="allen"> 
    <h1>Pr&oacute;ximamente</h1>
    <div>
      <img src="img/boxofficescript.png" alt="Boxoffice Script logo" id="logo" />
      <div class="eastwood" id="signup-div">
        <form id="signup-form" action="/signup.php" method="post">
          <fieldset>              
            <p>Querido Pau Brunet,</p>
            <p><label>me llamo 
              <input id="signup-name" type="text" name="name" /></label>
              y
              <label>mi email es</label> 
              <input id="signup-email" type="text" name="email" /></label>.<br />
              Acu&eacute;rdate de avisarme cuando estrenes Boxoffice Script.
              <input id="signup-button" type="submit" value="Env&iacute;a" />
            </p>
          </fieldset>
        </form>  
      </div>
    </div>
  </div>
  <script type="text/javascript">
    // Form validation
    var form        = document.getElementById('signup-form')
    var form_name   = document.getElementById('signup-name')
    var form_email  = document.getElementById('signup-email')
    var form_submit = document.getElementById('signup-button')
    // enable only if all fields validate
    function toggleSubmit() {form_submit.disabled = !(isValidName() && isValidEmail())}
    // check if the name is valid
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
    checkName()
    checkEmail()
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
          document.getElementById('signup-div').innerHTML = xmlHttpRequest.responseText
        }
      }
      xmlHttpRequest.send("name=" + this.name.value + "&email=" + this.email.value)
      return false
    }


  </script>

<?php require("footer.php"); ?>