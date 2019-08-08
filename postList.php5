<?php 

include 'php/posts.php5'; 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>


		<meta http-equiv="Cache-Control" content="no-cache">
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Expires" content="0">
		<meta name="description"
			content="CMS">
		<meta http-equiv="Content-Type"
			content="text/html; charset=iso-8859-1">
		<title>CMS Evaluation</title>

		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery.dimensions.js'></script>
		<script type="text/javascript" src="js/thickbox.js"></script>


		<link rel="shortcut icon"
			href="http://www.wareabouts.com/image/favicon.ico">
		<style type="text/css">
<!--

		.tipSource {
			text-decoration: none;
			color: #000;
			border-bottom: 0;
			border-bottom: 0;
		}
		.tipContent {
			border-top: 1px solid #999;
			padding-left: 3em; padding-right: 5em;
			border-top: 1px dashed #999;

		}
		.jq-tipContent {
			margin: 0;
			padding: 5px 5px 0px 5px;
			background: #CCC;
			border: 1px solid black;
			line-height:1em;
		}
		.jq-tipContent h4 {
			margin: -5px -5px 0px -5px;	/* Make sure background color goes side-to-side */
			padding: 3px 15px 3px 15px;
			text-align: center;
			background-color: #666666;
			color: #FFF;
			font-size: 13px;

}

body{
margin:10;
padding:0;
line-height: 1.5em;
}

#maincontainer{
width: 740px; /*Width of main container*/
margin: 0 auto; /*Center container on page*/
}

#topsection{
	height: 40px; /*Height of top section*/
	background-color: #FFFFFF;
	background-position: bottom;
}

#contentwrapper{
float: left;
width: 100%;
}

#contentcolumn{
margin-left: 180px; /*Set left margin to LeftColumnWidth*/
}

#leftcolumn{
	float: left;
	width: 180px; /*Width of left column*/
	margin-left: -740px;
	background-color: #FFFFFF;
}

#footer{
	clear: left;
	width: 100%;
	color: #FFF;
	text-align: left;
	padding: 4px 0;
	background-color: #FFFFFF;
}

.innertube{
margin: 10px; /*Margins for inner DIV inside each column (to provide padding)*/
margin-top: 0;
}
-->
</style>

		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/thickbox.css" type="text/css"
			media="screen" />

		<script type='text/javascript'>
		$( document ).ready( function () {
			$( 'a.tipSource' ).hover ( function () {
		
				var tipId = $(this ).attr ( 'href' );
				var tip = $( tipId );
				var tipSourceOffset = {};
				$( this ).offset ({ margin: true, padding: true,
									border: true, scroll: false }, tipSourceOffset);
				var scroll = {
					left: $( window ).scrollLeft(),
					top: $( window ).scrollTop()
				};
				var viewportWidth = $( window ).width();
				var viewportHeight = $( window ).height();
				var top, left;
		
				if ( (tipSourceOffset.left - scroll.left) < (viewportWidth / 2) ) {
					left = tipSourceOffset.left;
				} else {
					left = tipSourceOffset.left + $( this ).width() - tip.width();
				}
				top = tipSourceOffset.top + $( this ).height() + 5;
				tip.css ({
					top: top + 'px',
					left: left - 5 + 'px'
				}).show( 'fast' );
		
			}, function () {
				var tipId = $(this ).attr ( 'href' );
				$( tipId ).hide( 'fast' );
			}).click ( function () {
				// Disable the link
				return ( false );});
			$( 'div.tipContent' )
				.css({ position: 'absolute' })
				.removeClass( 'tipContent' )
				.addClass ( 'jq-tipContent' )
				.hide();
		});
	</script>


	</head>

	<body>
<p>
 
</p>
		<div id="maincontainer">

			<div id="topsection">
				<div class="innertube">
					<table border="0" width="100%">
						<tbody>
							<tr>
								<td>
									<a href="http://www.wareabouts.com/" class="largeLink">CMS Evaluation</a><span class="large">/photos/2007</span>
								</td>

								<td valign="bottom">
									<div class="smallLink" align="right">
										lenya
									</div>

								</td>
								<td valign="bottom">
									<div class="smallLink" align="right">
										OpenCms
									</div>
								</td>

								<td valign="bottom">
									<div class="small" align="right">
                                      <form name="clientForm" id="clientForm" action="http://images.google.co.uk/images" method="get">
                                      <input class="small" type="text" name="q"  id="searchTerms" value="" />
									  <input type="hidden"  name="sitesearch" value="www.wareabouts.com" />
									  <input class="small" type="submit" name="submit" value="Go">
									  </form>
  
									</div>
								</td>

							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div id="contentwrapper">
				<div id="contentcolumn">
					<div class="innertube">
<?php
  # list all years (latest first) and then get all top level posts for each year
  arsort($yearArray);
  foreach ($yearArray as $key => $val) {
    #echo "YEAR=" . $val;
    echo "<a href='";
	echo "/" . $val . "/index.php5";
	echo "' class='smallLink'>";
	echo $val;
	echo "</a><br>";
	$postsForAYear = $postsArray[$val];
	$lastPostDescription = "";
    foreach ($postsForAYear as $post) {
	  if ($post["description"] != $lastPostDescription) {
        echo "<a href='";
	    echo $post["link"];
	    echo "' class='smallLink'>";
        echo "&nbsp;" . $post["description"];
	    echo "</a><br>";
	    # remember last description so we don't have two the same
	    $lastPostDescription = $post["description"];
	  }
	
	
  }

}
?>


					</div>
				</div>
			</div>


			<div id="footer" style="text-align: right;">

				<!-- counterdata.com Code START -->
				<a
					href="http://www.counterdata.com/details.php?page=211872&amp;print_page=http://www.wareabouts.com"
					title="http://www.wareabouts.com Stats" target="_blank"
					style="font-family: Geneva,Arial,Helvetica,sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none;">Counter
					Stats</a>
				<br>
				<a
					href="http://www.best-webhosting.com.au/web-hosting-recommended-hosts.html"
					target="_blank"><img src="index_files/count.png"
						alt="australian hosting" border="0">
				</a>
				<br>
				<a
					href="http://www.best-webhosting.com.au/web-hosting-recommended-hosts.html"
					title="australian hosting" target="_blank"
					style="font-family: Geneva,Arial,Helvetica,sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none;">australian
					hosting</a><font
					style="font-family: Geneva,Arial,Helvetica,sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none;">
					Counter</font>

				<!-- counterdata.com -->
			</div>

		</div>
	</body>
</html>
