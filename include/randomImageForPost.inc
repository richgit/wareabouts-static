<?php
    #echo "arrayKey=" . $arrayKey . "<br>";
    #echo "<br>" . print_r(end($imagesArray)) . "<br>";
	$imagesForKey = $imagesForPostArray[$arrayKey];
    #echo "<br>" . print_r($imagesForKey) . "<br>";

	$selectedImageArray = getRandomImagesForAKey($imagesForPostArray, $arrayKey, 1);
	$selectedImage = $selectedImageArray[0];

	echo "<a href=\"";
	echo $selectedImage["imageLinkUrl"];
	echo "\">";
	echo "<img src=\"";
	echo $selectedImage["imageUrl"];
	echo "\" border=\"0\" width='90%' alt=\"";
	echo $selectedImage["title"];
	echo "\"/>";
	echo "</a>";
 
?>
