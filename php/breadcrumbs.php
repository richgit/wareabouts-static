<html>
 <head>
  <title>PHP Test</title>
  <style>
  .largeLink {
color:#666666;
font-family:Arial,Helvetica,sans-serif;
font-size:12px;
font-style:normal;
font-weight:bold;
line-height:24px;
text-decoration:none;
}
.largeLink:visited {
color:#333333;
text-decoration:none;
}
.largeLink:hover {
background-color:#CCCCCC;
color:#666666;
text-decoration:none;
}
  </style>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>
<div class='large'>

 
 <?php
   echo $_SERVER['PHP_SELF'];
   $urlToExplode = dirName($_SERVER['PHP_SELF']);   
   
   $delimiter = "/";
   $explodedUrl = explode($delimiter,$urlToExplode);
   echo "count=" . count($explodedUrl);
   echo "<br>";
   $wa_string = "";
   $url = "";
   foreach ($explodedUrl as $dir) {
     echo "string=" . $wa_string;
	 echo "<br>";
     echo "dir=" . $dir;
	 echo "<br>";
	   $url .= $dir . "/";
       if ($dir == "") {
	     $dir = "wareabouts";
       }
	 $wa_string .= "<a class='largelink' href='";
	 $wa_string .= $url . "index.php5' target='_blank'>";
	 $wa_string .= $dir . "</a>";
	 $wa_string .= "/";
   }
   $wa_string = substr($wa_string,0,-1);
   echo "<br><br>STRING=", $wa_string;

?>
</div>
 </body>
</html>



