<?php 
ini_set("include_path", "../include");
?>

<?php
$titleToInsertInHead="Search";
?>

<?php 
include 'fullHeader.inc'; 
?>

<div class="outer">

<div class="float-wrap">

  <div class="center">

        <div class="innertube">
<?php 
include 'breadcrumbs.inc'; 
?>

<?php

  $searchTermPassed = FALSE;
  if (isset($_POST['search']) && strlen($_POST['search']) > 0) {
    $searchTerm = $_POST['search'];
    $searchTermPassed = TRUE;
  } else if (isset($_GET['search']) && strlen($_GET['search']) > 0) {
    $searchTerm = $_GET['search'];
    $searchTermPassed = TRUE;
    echo "<script type=\"text/javascript\">";
	echo "$(\"#search\").val(\"" . $searchTerm . "\");";
	echo "</script>";
	
  }
?>
 
 <div>
	<h1>Blog Posts <span id="blogposts"></span></h1>
 </div>

<?php

  if ($searchTermPassed) {
  
    writeToSearchLog($searchTerm); 
  
    $results = array();
    $searchTerm = trim(strtolower($searchTerm));

	# search through all images
    krsort($imagesForAllYearsArray);
    #echo "imagesForAllYearsArray<br>" . print_r($imagesForAllYearsArray) . "<br/>";

    $searchResultsFound = FALSE;
	foreach ($imagesForAllYearsArray as $image) {  
      $alt = $image["alt"];
	  $imageText = $image["alt"] . $image["keywords"];
      $postLinkUrl = $image["postLinkUrl"];

	  $explodedSearch = explode(" ", $searchTerm);
      #echo "count=" . count($explodedSearch) . "<br>";	
	  $found = TRUE;
      for ( $counter = 0; $counter < count($explodedSearch) ; $counter += 1) {
          if (strpos(strtolower($imageText), $explodedSearch[$counter]) === false) {
		    $found = FALSE;
		  }
	  }
	  if ($found) {
	    $searchResultsFound = TRUE;
	    // add to results array
		$results[$alt] = $postLinkUrl;
	  }
	  // break out if we have more than 100
	  if (count($results) === 101) {
	    break;
	  }
	  
	}
	
	if ($searchResultsFound) {
	  // print results
	  while (list($desc, $url) = each($results)) {
		echo "<div class=\"searchResultPostDesc\">";
		echo "<a href=\"";
	    echo $url ;
	    echo "\" title=\"";
	    echo $desc;
	    echo "\">";
        echo $desc;
        echo "</a></div><br/>";
	  }
      $plural = "";
	  if (count($results) > 1) {
	    $plural = "s";
	  }
	  echo "<script>";
	  echo "var x=document.getElementById('blogposts');";
	  if (count($results) === 101) {
	    echo "x.innerHTML =' (searching for \"" . $searchTerm . "\" returns more than 100 posts)';";
	  } else {
	    echo "x.innerHTML =' (searching for \"" . $searchTerm . "\" returns " . count($results) . " post" . $plural . ")';";
	  }
      echo "</script>";
	} else {
        echo "<p>Searching for \"" . $searchTerm . "\" returns no results</p>";
	}
	  

      #echo "year" . $year . "<br>";
      #echo "count" . $count . "<br>";

  }

  function writeToSearchLog($searchString) {
  
 
    $myFile = "../sitetracker/search" . date('Ym') . ".log";
    $fh = fopen($myFile, 'a-') or die("can't open file");

    $currentDate = date('d M Y H:i:s');
    $ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

    $stringData = $currentDate . "," . $ip . "," . $searchString . "\n";
  
    fwrite($fh, $stringData);
    fclose($fh);

  }

  
?>
						<div style="clear: left;">
						<br/>
                        </div>
						<div>
							<h1>Images/Videos <span id="imagesvideos"></span></h1>
                        </div>
						
<?php

  if ($searchTermPassed) {
    $searchTerm = trim(strtolower($searchTerm));

	# search through all images
    krsort($imagesForAllYearsArray);
    #echo "imagesForAllYearsArray<br>" . print_r($imagesForAllYearsArray) . "<br/>";

    $searchResultsFound = FALSE;
	$count = 0;
    foreach ($imagesForAllYearsArray as $image) {  
      $date = $image["date"];
      $alt = $image["alt"];
	  $imageText = $image["alt"] . $image["keywords"];
      $title = $image["title"];
      $lowerTitle = strtolower($title);
      $imageLinkUrl = $image["imageLinkUrl"];
      $imageUrl = $image["imageUrl"];

	  $explodedSearch = explode(" ", $searchTerm);
      #echo "count=" . count($explodedSearch) . "<br>";	
	  $found = TRUE;
      for ( $counter = 0; $counter < count($explodedSearch) ; $counter += 1) {
        #echo "explodedSearch=" . $explodedSearch[$counter] . "<br>";	
        #echo "lowerTitle=" . $lowerTitle . "<br>";	
		#if ($explodedSearch != " ") {
          if (strpos(strtolower($imageText), $explodedSearch[$counter]) === false) {
		    $found = FALSE;
		  }
		#}
	  }
	  if ($found) {
  	    $count += 1;
  	    // break out if we have more than 200
	    if ($count > 200) {
	      break;
	    }

	    if ($count%3 == 1) {
	      echo "<div style=\"clear:both;\"></div>";
	    }
	    $searchResultsFound = TRUE;
        #echo "imageLinkUrl=" . $imageLinkUrl . "<br>";	
        #echo "pos=" . strrpos($imageLinkUrl, "/") . "<br>";	
		echo "<div class=\"searchResultOuter\">";
		echo "<div class=\"searchResultInner\">";
		echo "<a class=\"searchResultDate\" href=\"";
	    echo substr($imageLinkUrl, 0, strrpos($imageLinkUrl, "/")) ;
	    echo "/\" title=\"";
	    echo $alt;
	    echo "\">";
        echo $date	;
        echo "</a>";
	    echo "<a class=\"searchResultImage\" href=\"";
	    echo $imageLinkUrl;
	    echo "\" title=\"";
	    echo $alt;
	    echo "\">";
	    echo "<img width=\"85%\" src=\"";
	    echo $imageUrl;
	    echo "\" border=\"0\" alt=\"";
        echo $alt;
        echo"\"/></a>";
		echo "<a class=\"searchResultDesc\" href=\"";
	    echo substr($imageLinkUrl, 0, strrpos($imageLinkUrl, "/")) ;
	    echo "/\" title=\"";
	    echo $alt;
	    echo "\">";
        echo $title;
        echo "</a><br/>";
		echo "</div>";
		echo "</div>";
		
	  }
	}
	
	if (!$searchResultsFound) {
        echo "<p>Searching for \"" . $searchTerm . "\" returns no results</p>";
	} else {
        $plural = "";
	    if ($count > 1) {
	      $plural = "s";
	    }
	    echo "<script>";
	    echo "var x=document.getElementById('imagesvideos');";
  	    if ($count > 200) {
	      echo "x.innerHTML =' (searching for \"" . $searchTerm . "\" returns more than 200 results)';";
	    } else {
	      echo "x.innerHTML =' (searching for \"" . $searchTerm . "\" returns " . $count . " result" . $plural . ")';";
		}
        echo "</script>";
    }


      #echo "year" . $year . "<br>";
      #echo "count" . $count . "<br>";

  }
  
?>
                </div>


					</div> <!-- end of center -->
<div class="left">
<div class="container-left">

<?php 
include 'leftYearsWithRandom.inc'; 
?>
			</div>
					
			</div>
				</div>

<div class="right">

<?php 
include 'rightColumn.inc'; 
?>

</div> <!-- end right div -->
<br class="clear"/>  <!-- using a <br /> here is less buggy than other choices -->
 
</div>
			
<?php 
include 'footer.inc'; 
?>
