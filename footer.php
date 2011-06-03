        <div id="facebook">
          <div id="fb-root"></div>
          <!--[if IE]>
          <script src="http://connect.facebook.net/es_ES/all.js#xfbml=1" ></script>
          <script>
          // IE does not support window.fbAsyncInit, so it's called directly
          FB.init({appId: '177577225629525', status: true, cookie: true, xfbml: true});
          </script>
          <fb:like-box href="http://www.facebook.com/pages/Boxoffice-Script/176734525715662" width="292" show_faces="false" stream="false" header="true"></fb:like-box>
          <![endif]-->
          <!--[if !IE]><!-->
          <script type="text/javascript">
            window.fbAsyncInit = function() {
              fan = document.createElement("fb:like-box");
              fan.setAttribute("href", "http://www.facebook.com/pages/Boxoffice-Script/176734525715662");
              fan.setAttribute("width", "292");
              fan.setAttribute("show_faces", "false");
              fan.setAttribute("stream", "false");
              fan.setAttribute("header", "true");
              document.getElementById("facebook").appendChild(fan);
              FB.init({appId:'177577225629525', status: true, cookie: true, xfbml: true});
              FB.XFBML.parse();
            };
          </script>
          <!--<![endif]-->
        </div>
        <div id="twitter"></div>
      <!--h1>F&iacute;n.</h1-->
    </div>
    <script type="text/javascript">
    //<![CDATA[
    var _gaq = _gaq || []
    _gaq.push(['_setAccount', 'UA-23662978-1'])
    _gaq.push(['_trackPageview'])
    ;(function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s)
    })()
    //]]>
    </script>
    <!--[if !IE]><!-->
    <script type="text/javascript">
    //<![CDATA[
    function import_script(url) {
      var scriptElem = document.createElement('script')
      scriptElem.setAttribute('src', url)
      scriptElem.setAttribute('type', 'text/javascript')
      document.getElementsByTagName('head')[0].appendChild(scriptElem)
    }
    setTimeout(function() {
      import_script('http://connect.facebook.net/es_ES/all.js#xfbml=1')
      var twElem = document.createElement('a')
      twElem.setAttribute('href', 'http://twitter.com/boxofficescript')
      twElem.setAttribute('class', 'twitter-follow-button')
      twElem.setAttribute('data-align', 'right')
      twElem.setAttribute('data-width', '200px')
      twElem.setAttribute('data-show-count', 'false')
      twElem.setAttribute('data-lang', 'es')
      //twElem.innerHTML = 'Follow @boxofficescript'
      document.getElementById('twitter').appendChild(twElem)
      import_script('http://platform.twitter.com/widgets.js')
    }, 2000) // loaded with a delay to improve page speed
    //]]>
    </script>
    <!--<![endif]-->


  </body>
</html>