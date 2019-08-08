
<?php 
ini_set("include_path", "../include");
?>

<?php
if (isset($_GET['album'])) {
  $titleToInsertInHead = $_GET['album'];
} else {
  $titleToInsertInHead = "Album";
}
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
						<div>
							<h1>
<?php
  if (isset($_GET['album'])) {
    $album = $_GET['album'];

    echo $album;
	$selectedAlbum = $albumArray[$album];
	$count = count($selectedAlbum);
    $plural = "";
	if ($count != 1) {
	   $plural = "s";
	}
	echo " (" . $count . " photo" . $plural . ")";
  }
?>
                            </h1>
                        </div>
						
<?php

  if (isset($_GET['album'])) {

  # look through albumArray
	
	#echo "<br>albumArray<br>";
	#print_r($albumArray);
	#echo "<br>";
	  
	#echo "<br>selectedAlbum<br>";
	#print_r($selectedAlbum);
	#echo "<br>";
    
	foreach ($selectedAlbum as $image) {  
      $date = $image["date"];
      $alt = $image["alt"];
      $title = $image["title"];
      $lowerTitle = strtolower($title);
      $imageLinkUrl = $image["imageLinkUrl"];
      $imageUrl = $image["imageUrl"];
	
      echo "<div class=\"searchResult\">";
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
	  echo "<img width=\"65%\" src=\"";
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
	}
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
<div class="container-right">

<?php 
include 'rightRandom.inc'; 
?>

</div>
</div> <!-- end right div -->
<br class="clear"/>  <!-- using a <br /> here is less buggy than other choices -->
 
</div>
			
<?php 
include 'footer.inc'; 
?>
