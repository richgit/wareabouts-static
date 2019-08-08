  <div class="clearfix">
<?php

 #  echo $_SERVER['PHP_SELF'];
 #  echo "<br>";
   $urlToExplode = dirName($_SERVER['PHP_SELF']);   
 #  echo "urlToExplode=" . $urlToExplode . "=";
 #  echo "<br>";
   
   $delimiter = substr($urlToExplode, 0, 1);
 #  echo "delimiter=" . $delimiter . "=";
 #  echo "<br>";
   $explodedUrl = explode($delimiter,$urlToExplode);
   #echo "count=" . count($explodedUrl);	
   #echo "<br>";
   $wa_string = "";
   $wa_string = "<span>You are here &gt; </span>";
   $url = "";
   $doneRoot = false;
   $doneNonRoot = false;
   for ( $counter = 0; $counter < count($explodedUrl) ; $counter += 1) {
          #echo "counter=" . $counter;
          #echo "<br>";
         $dir = $explodedUrl[$counter];
          #echo "dir, before=" . $dir;
          #echo "<br>";
         if ($dir == "\\") {
	     $dir = "";
         }
   $url .= $dir . "/";
     if ($dir == "") {
	    if ($doneRoot == true) {
		    break;
	    };
        $dir = "www.wareabouts.com";
	    $doneRoot = true;
     } else {
		$doneNonRoot = true;
	 }
	 # reduce size of text
#	 if (strlen($dir) > 45) {
#	     $dir = substr($dir, 0, 45) . "...";
#	   }
    // only a link if not the last one
    if ($counter != count($explodedUrl) -1 && $explodedUrl[$counter + 1] != "") {
        $wa_string .= "<a href='";
        $wa_string .= $url . "'>";
        $wa_string .= str_replace ("_", " ", $dir);
        $wa_string .= "</a>";
        $wa_string .= "<span> &gt; </span>";
    } else {
        $wa_string .= str_replace ("_", " ", $dir);
    };   
}
   // don't show root if that is all we have
#   if (!$doneNonRoot) {
#    $wa_string = "";
#  } 
#   echo "str=" . substr($wa_string,strlen ($wa_string) -1,1);
#   echo "<br>";
#   if (substr($wa_string,size($wa_string),1) == "/" {
#     $wa_string = substr($wa_string,0,-1);
#   }
   echo $wa_string ;


?>

  </div>
  <div id="splashContainer">
  </div>