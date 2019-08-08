
<div id="footer">
<div id="footerLeft">
    <?php
    echo "<a href=\"mailto:?to=&subject=wareabouts&body=";
    echo "http://" . $_SERVER['HTTP_HOST'] . "/setcookie.php5?url=http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    echo "\" id='generate-page-link'>Generate Link</a>"
    ?>


</div>
<div id="footerRight">

<?php
echo "Last Modified: ".date( "F d Y H:i:s", getlastmod() );
?>
</div>
</div>
		</div>
<div id="controlbar" class="highslide-overlay controlbar">
	<a href="#" class="previous" onclick="return hs.previous(this)" title="Previous (left arrow key)"></a>
	<a href="#" class="next" onclick="return hs.next(this)" title="Next (right arrow key)"></a>
    <a href="#" class="highslide-move" onclick="return false" title="Click and drag to move"></a>
    <a href="#" class="close" onclick="return hs.close(this)" title="Close"></a>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3485593-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>

	</body>
</html>

