<?php 
header("HTTP/1.0 404 Not Found"); 
ini_set("include_path", "../include");
?>

<?php
$titleToInsertInHead="404 Error";
?>

<?php 
include 'fullHeader.inc'; 
?>

					<div class="innertube">

<div id="fullcenteredpage">
<br/>
<h1>404 - Page not found.</h1>
<br/>
<br/>
<h1><a href="http://www.wareabouts.com">http://www.wareabouts.com</a></h1>
<br/>
<img src="/image/homer<?php

# get image based on day
echo date("w");
?>.gif" border="0" alt="Homer"/>

<style type="text/css">
  #goog-wm { }
  #goog-wm h3.closest-match { }
  #goog-wm h3.closest-match a { }
  #goog-wm h3.other-things { }
  #goog-wm ul li { }
  #goog-wm li.search-goog { display: block; }
</style>
<br/>
<script type="text/javascript">
  var GOOG_FIXURL_LANG = 'en';
  var GOOG_FIXURL_SITE = 'http://www.wareabouts.com/';
</script>
<script type="text/javascript" 
    src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>

<br/>
<br/>

</div>




</div>



<?php 
include 'footer.inc'; 
?>
