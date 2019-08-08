
<?php 
ini_set("include_path", "../include");
?>

<?php 
include 'posts.php5'; 
?>

<?php
  #get random images (all years)
  $listOfRandomImages = getRandomImages($imagesForAllYearsArray, 20);
  # echo "<br>";
  # print_r($listOfRandomImages);
  # echo "<br>";
  foreach ($listOfRandomImages as $selectedImage) {
		echo "<a href=\"";
	    echo substr($selectedImage["imageLinkUrl"], 0, strrpos($selectedImage["imageLinkUrl"], "/"));
	    echo "/\" title=\"";
	    echo $selectedImage["alt"];
	    echo "\">";
        echo $selectedImage["year"] . ": " . $selectedImage["title"];
        echo "</a><br/>";
	  echo "<a href=\"";
	  echo $selectedImage["imageLinkUrl"];
	  echo "\" title=\"";
	  echo $selectedImage["alt"];
	  echo "\">";
	  echo "<img src=\"";
	  echo $selectedImage["imageUrl"];
	  echo "\" width=\"93%\" border=\"0\" alt=\"";
      echo $selectedImage["alt"];
      echo"\"/></a>";
      echo"<br/>";
      echo"<br/>";
  }
?>						
