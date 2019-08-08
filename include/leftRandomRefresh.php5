
<?php 
ini_set("include_path", "../include");
?>

<?php 
include 'posts.php5'; 
?>

<?php

  # list all years (latest first)
  krsort($yearArray);
  #echo print_r($yearArray) . "<br>";
  
  while (list($year, $count) = each($yearArray)) {
    #echo "year" . $year . "<br>";
    #echo "count" . $count . "<br>";
	$selectedImageArray = getRandomImagesForAKey($imagesArray, $year, 1);
	$selectedImage = $selectedImageArray[0];
    echo "<a href=\"";
	echo "/" . $year . "/";
	echo "\">";
	echo $year . " (" . $count . ")";
	echo "</a>";
	echo "<br/>";

    echo "<a href=\"";
	echo $selectedImage["imageLinkUrl"];
	echo "\" title=\"" . $selectedImage["alt"] . "\">";
	echo "<img src=\"";
	echo $selectedImage["imageUrl"];
	echo "\" border=\"0\" width=\"93%\" alt=\"";
	echo $selectedImage["alt"];
	echo "\"/>";
	echo "</a><br/><br/>";

}

?>


