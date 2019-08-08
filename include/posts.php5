
<?php
    
    global $yearArray;
    global $albumArray;
    global $imagesArray;
    global $imagesForPostArray;
    global $imagesForAllYearsArray;
    global $postsArray;
    global $latestSet;
    global $lastImage;
    global $secondLastImage;
    global $thirdLastImage;
    
    #echo $_SERVER['PHP_SELF'];
    #echo "<br>";
    
    $dirname=dirName($_SERVER['PHP_SELF']); 
    #echo "dirname=" . $dirname . "<br/>";
    #echo "count=" . substr_count($dirname, '/') . "<br/>";
    
    // hack for prod server
    if ($dirname == "/") {
       $dirname = "";
    }
     
    $prefix = "";
    for ( $counter = 0; $counter < substr_count($dirname, '/'); $counter += 1) {
       #echo "counter=" + $counter . "<br/>";
       $prefix = $prefix . "../";
    }

    $prefix = $prefix . "savedArrays/";

     $testFileName = $prefix . "yearArray.txt";
     #echo "<br/>testFileName=" . $testFileName . "<br/>"; 

     $arr=array("blah1","blah2","blah3");  
     if (file_exists($testFileName)) {
        #echo "file exists, so get from files<br/>";   

        $file = file_get_contents($prefix . "yearArray" . ".txt");  
        $yearArray = unserialize(trim($file));  

        $file = file_get_contents($prefix . "albumArray" . ".txt");  
        $albumArray = unserialize(trim($file));  

        $file = file_get_contents($prefix . "imagesArray" . ".txt");  
        $imagesArray = unserialize(trim($file));  

        $file = file_get_contents($prefix . "imagesForPostArray" . ".txt");  
        $imagesForPostArray = unserialize(trim($file));  

        $file = file_get_contents($prefix . "imagesForAllYearsArray" . ".txt");  
        $imagesForAllYearsArray = unserialize(trim($file));  

        $file = file_get_contents($prefix . "postsArray" . ".txt");  
        $postsArray = unserialize(trim($file));  

        $file = file_get_contents($prefix . "latestSet" . ".txt");  
        $latestSet = unserialize(trim($file));  

        $file = file_get_contents($prefix . "lastImage" . ".txt");  
        $lastImage = unserialize(trim($file));  

        $file = file_get_contents($prefix . "secondLastImage" . ".txt");  
        $secondLastImage = unserialize(trim($file));  

        $file = file_get_contents($prefix . "thirdLastImage" . ".txt");  
        $thirdLastImage = unserialize(trim($file));  

     } else {
        #echo "file does NOT exists, so process xml<br/>";   
        setUpSession();
        
        #file_put_contents($testFileName,implode(",",$arr));
        
        file_put_contents( $prefix . "yearArray" . ".txt", serialize($yearArray));
        file_put_contents( $prefix . "albumArray" . ".txt", serialize($albumArray));
        file_put_contents( $prefix . "imagesArray" . ".txt", serialize($imagesArray));
        file_put_contents( $prefix . "imagesForPostArray" . ".txt", serialize($imagesForPostArray));
        file_put_contents( $prefix . "imagesForAllYearsArray" . ".txt", serialize($imagesForAllYearsArray));
        file_put_contents( $prefix . "postsArray" . ".txt", serialize($postsArray));
        file_put_contents( $prefix . "latestSet" . ".txt", serialize($latestSet));
        file_put_contents( $prefix . "lastImage" . ".txt", serialize($lastImage));
        file_put_contents( $prefix . "secondLastImage" . ".txt", serialize($secondLastImage));
        file_put_contents( $prefix . "thirdLastImage" . ".txt", serialize($thirdLastImage));
        
     }  



  function addToAlbumArray($albumsToAdd, $imageArray) {
    global $albumArray;
    $i = 0;
	$continue = true;
    while ($continue) {	
      if (is_a($albumsToAdd->item($i), 'DOMElement')) {
        $albumName = $albumsToAdd->item($i)->nodeValue;
        #echo "inloop=" . $albumName . "<br>";
		$i += 1;

		# add array
		if(array_key_exists($albumName, $albumArray)){
          #echo "exists<br>";
		  $tempImageForAlbumArray = $albumArray[$albumName];
		} else {
          #echo "NOT exists<br>";
		  $tempImageForAlbumArray = array();
		}
    	array_push ($tempImageForAlbumArray, $imageArray);
		// put it back
	    $albumArray[$albumName] = $tempImageForAlbumArray;

	  } else {
	    $continue = false;
	  }
	  
	  #echo "<br>albumArray<br>";
	  #print_r($albumArray);
	  #echo "<br>";
	  
	}

#    foreach ($albumsToAdd as $album) {  
#      echo "album=" . $album->item(0)->nodeValue . "<br>";
#    }
	
  }

	
  function addToYearArray($yearToAdd) {
    global $yearArray;
    #echo "checking if in using key=" . $yearToAdd . "<br>";
	#echo $yearArray[$yearToAdd];
	if(array_key_exists($yearToAdd, $yearArray)){
       #echo $yearToAdd. " - addToYearArray - in so don't add, count=" . $yearArray[$yearToAdd] . "<br>";
	   $count = $yearArray[$yearToAdd];
	   $yearArray[$yearToAdd] += 1;
	   #$count = $yearArray["count"];
    } else {
       #echo $yearToAdd . " - addToYearArray - now add<br>";
	   #$tempYearArray = array("year" => $yearToAdd, "count" => 0); ??????????????????????????????????????????????
       $yearArray[$yearToAdd] = 1;
	}
    #echo print_r($yearArray) . "<br>";
  }
  
  
  function addToImagesArray($imageUniqueIdToAdd, $yearToAdd, $dateToAdd, $titleToAdd, $keywordsToAdd, $altToAdd, $topLevelDescriptionToAdd, $imageUrlToAdd, $imageLinkUrlToAdd, $postLinkUrlToAdd, $latest, $imageAlbumsToAdd, $ignoreLatest) {
    global $imagesForAllYearsArray;
    global $imagesArray;
    global $imagesForPostArray;
    global $latestSet;
    global $lastImage;
    global $secondLastImage;
    global $thirdLastImage;

    #echo $altToAdd . " - ignoreLatest = ". $ignoreLatest . "<br/>";
	
	if (!$latestSet && !$ignoreLatest) {
      #echo "IN<br/>";
	  if (count($thirdLastImage) == 0 || ($thirdLastImage["title"] != $titleToAdd)) {
	    $lastImage = $secondLastImage;
	    $secondLastImage = $thirdLastImage;
	    $thirdLastImage = array("uniqueId" => $imageUniqueIdToAdd, "date" => $dateToAdd, "title" => $titleToAdd, "keywords" => $keywordsToAdd, "alt" => $altToAdd, "imageUrl" => $imageUrlToAdd, "imageLinkUrl" => $imageLinkUrlToAdd, "postLinkUrl" => $postLinkUrlToAdd);
		}
	}
	if ($latest) {
	  $latestSet=true;
	}

    # echo "just about to checkIfInArray <br>";
	# check if we already have an entry for this year
	if (array_key_exists($yearToAdd, $imagesArray)) {
	  # get the array for this year
      #echo "DOES EXIST<br>";
      $tempImageArray = $imagesArray[$yearToAdd];
      # print_r($tempImageArray);
      # echo "<br>";
      #$tempPostArray = $postsArray[$yearToAdd];
      #print_r($tempPostArray);
      #echo "<br>";
    } else {
	  # create a new array for this year
      #echo "DOESN'T EXIST<br>";
      $tempImageArray = array();
      # print_r($tempImageArray);
      # echo "<br>";
      #$tempPostArray = array();
      #print_r($tempPostArray);
      #echo "<br>";
	}

    # echo "just about to checkIfInArray <br>";
	# check if we already have an entry for this year
	$arrayKey = $yearToAdd . $topLevelDescriptionToAdd;
	if (array_key_exists($arrayKey, $imagesForPostArray)) {
	  # get the array for this year
      #echo "DOES EXIST<br>";
      $tempImageForPostArray = $imagesForPostArray[$arrayKey];
      # print_r($tempImageArray);
      # echo "<br>";
    } else {
	  # create a new array for this year
      #echo "DOESN'T EXIST<br>";
      $tempImageForPostArray = array();
      # print_r($tempImageArray);
      # echo "<br>";
	}

	# create an array that represents the image
    $imageArray = array("uniqueId" => $imageUniqueIdToAdd, "date" => $dateToAdd,  "year" => $yearToAdd, "title" => $titleToAdd, "keywords" => $keywordsToAdd, "alt" => $altToAdd, "imageUrl" => $imageUrlToAdd, "imageLinkUrl" => $imageLinkUrlToAdd, "postLinkUrl" => $postLinkUrlToAdd);
	
	addToAlbumArray($imageAlbumsToAdd, $imageArray);
	
    # add the array to the array for this year
	array_push ($tempImageArray, $imageArray);
  
    # add the array to the array for this post
	array_push ($tempImageForPostArray, $imageArray);
  
    # add the array to the array for all years
	array_push ($imagesForAllYearsArray, $imageArray);
  
    # put this array back onto the main array
	$imagesArray[$yearToAdd] = $tempImageArray;

    # put this array back onto the post array
	$imagesForPostArray[$arrayKey] = $tempImageForPostArray;

	# create an array that represents the post TODO do we need this ??????????????????????
    $postArray = array("description" => $topLevelDescriptionToAdd, "link" => $postLinkUrlToAdd);
	
    # add the array to the array for this year if not already there
	#array_push ($tempPostArray, $postArray);
  
    # put this array back onto the main array
	#$postsArray[$yearToAdd] = $tempPostArray;

    # print_r($tempImageArray);
    # echo "<br>";
  }
  
  function getRandomYear() {
    global $yearArray;
    $random_number = rand(0, count($yearArray) -1 );
    return $yearArray[$random_number];
}
  #  get a list of random images - it does this by selecting year first
  function getRandomImagesSelectYearFirst($imagesArrayIn, $numOfImages) {
  $alreadySelectedArray = array();
  $returnedImages = array();
  # check that it is possible to get all unique images
	if ($numOfImages > count($imagesArrayIn)) {
		$numOfImages = count($imagesArrayIn);
	}
    for ( $counter = 0; $counter < $numOfImages; $counter += 1) {
		#echo $counter, "<br>";

		# get a random year:
		$selectedYear = getRandomYear();

		$imagesForAYear = $imagesArrayIn[$selectedYear];
	  
		$random_number = rand(0, count($imagesForAYear) -1 );

		$selectedImage = $imagesForAYear[$random_number];
		
		# only go ahead if we haven't already selected this image
		#echo "<br>", $selectedImage["uniqueId"],"<br>";
		if(in_array($selectedImage["uniqueId"], $alreadySelectedArray)){
		  # echo "<br>ALREADY IN<br>";
		  $counter -= 1;
		} else {
		  # put in alreadySelectedArray
		  array_push($alreadySelectedArray, $selectedImage["uniqueId"]);
		  array_push($returnedImages, $selectedImage);
		}
    }
	return $returnedImages;
  }
  
  #  get a list of random images - completely random
  function getRandomImages($imagesArrayIn, $numOfImages) {
  $alreadySelectedArray = array();
  $returnedImages = array();
  # check that it is possible to get all unique images
	if ($numOfImages > count($imagesArrayIn)) {
		$numOfImages = count($imagesArrayIn);
	}
    for ( $counter = 0; $counter < $numOfImages; $counter += 1) {
		#echo $counter, "<br>";

		$random_number = rand(0, count($imagesArrayIn) -1 );

		$selectedImage = $imagesArrayIn[$random_number];
		
		# only go ahead if we haven't already selected this image
		#echo "<br>", $selectedImage["uniqueId"],"<br>";
		if(in_array($selectedImage["uniqueId"], $alreadySelectedArray)){
		  # echo "<br>ALREADY IN<br>";
		  $counter -= 1;
		} else {
		  # put in alreadySelectedArray
		  array_push($alreadySelectedArray, $selectedImage["uniqueId"]);
		  array_push($returnedImages, $selectedImage);
		}
    }
	return $returnedImages;
  }
  
  #  get a list of random images for A KEY
  function getRandomImagesForAKey($imagesArrayIn, $key, $numOfImages) {
    $alreadySelectedArray = array();
    $returnedImages = array();
	#echo "key=", $key, "<br>";

    #echo "<br>" . print_r($imagesArrayIn) . "<br>";

	# get a images for a year:
    $imagesForKey = $imagesArrayIn[$key];
  
    # check that it is possible to get all unique images
	#echo "<br>count($imagesForKey)=", count($imagesForKey), "<br>";
	if ($numOfImages > count($imagesForKey)) {
		$numOfImages = count($imagesForKey);
	}
    for ( $counter = 0; $counter < $numOfImages; $counter += 1) {
		# echo $counter, "<br>";

		$random_number = rand(0, count($imagesForKey) -1 );

		$selectedImage = $imagesForKey[$random_number];
		
		# only go ahead if we haven't already selected this image
		# echo "<br>", $selectedImage["uniqueId"],"<br>";
		# echo "<br>";
		# print_r($alreadySelectedArray);
		# echo "<br>";
		if(in_array($selectedImage["uniqueId"], $alreadySelectedArray)){
		# echo "<br>ALREADY IN<br>";
		  $counter -= 1;
		} else {
		  # put in alreadySelectedArray
		  array_push($alreadySelectedArray, $selectedImage["uniqueId"]);
		  array_push($returnedImages, $selectedImage);
		}
    }
	return $returnedImages;
  }
  
  function setUpSession() {
  
  global $yearArray;
  global $albumArray;
  global $imagesArray;
  global $imagesForPostArray;
  global $imagesForAllYearsArray;
  global $postsArray;
  global $latestSet;
  global $lastImage;
  global $secondLastImage;
  global $thirdLastImage;
  
  $yearArray = array();
  $albumArray = array();
  $imagesArray = array();
  $imagesForPostArray = array();
  $imagesForAllYearsArray = array();
  $postsArray = array();
  $latestSet = false;
  $lastImage = array();
  $secondLastImage = array();
  $thirdLastImage = array();
  
  srand ((double) microtime( )*1000000);

  # echo "-------------------------------------<br>";
  # read XML file
  $doc = new DOMDocument();
  $times = substr_count($_SERVER['PHP_SELF'],"/");
  $rootaccess = "";
  $i = 1;

  while ($i < $times) {
   $rootaccess .= "../";
   $i++;
  }
  
    $zp = gzopen( $rootaccess . 'xml/posts.gz' , "r" );
    $data = fread ( $zp, 10000000);
    gzclose( $zp );
   
    // writing uncompressed file
    //$fp = fopen( $rootaccess . 'xml/posts.xml', "w" );
    //fwrite( $fp, $data );
    //fclose( $fp );
  
  //$fp = gzopen("xml/posts.gz", "r");
  //$fp = fopen("compress.zlib://http://some.website.org/example.gz", "r");
  #echo "$rootaccess=" , $rootaccess, ".";
  #$doc->load($rootaccess . 'xml/posts.xml' );
  $doc->loadXML($data);
  
  $years = $doc->getElementsByTagName( "YEAR" );
  #echo "start<br>";
  foreach( $years as $year )
  {
    $yearName = $year->getAttribute ( "ID" );
	#$tempYearArray = array("year" => $yearName,"count" => 0);
	#addToYearArray($tempYearArray);
	#addToYearArray($yearName);
    
	$images = $year->getElementsByTagName( "IMAGE" );
    foreach( $images as $image)
	{
      addToYearArray($yearName);
	  #echo "in2<br>";

      $imageAlbums = $image->getElementsByTagName( "ALBUM" );

      $imageUniqueIds = $image->getElementsByTagName( "UNIQUE-ID" );
	  $imageUniqueId = $imageUniqueIds->item(0)->nodeValue;

      $imageTitles = $image->getElementsByTagName( "TITLE" );
	  $imageTitle = $imageTitles->item(0)->nodeValue;

      $imageKeywords = $image->getElementsByTagName( "KEYWORDS" );
	  $imageKeyword = $imageKeywords->item(0)->nodeValue;

      $imageAlts = $image->getElementsByTagName( "ALT" );
	  $imageAlt = $imageAlts->item(0)->nodeValue;

      $imageDates = $image->getElementsByTagName( "DATE" );
	  $imageDate = $imageDates->item(0)->nodeValue;

      $topLevelDescriptions = $image->getElementsByTagName( "TOP-POST-DESC" );
	  $topLevelDescription = $topLevelDescriptions->item(0)->nodeValue;

      $imageUrls = $image->getElementsByTagName( "IMAGE-URL" );
	  $imageUrl = $imageUrls->item(0)->nodeValue;
      
      $imageLinkUrls = $image->getElementsByTagName( "IMAGE-LINK-URL" );
	  $imageLinkUrl = $imageLinkUrls->item(0)->nodeValue;
      
      $postLinkUrls = $image->getElementsByTagName( "POST-LINK-URL" );
	  $postLinkUrl = $postLinkUrls->item(0)->nodeValue;
      
      $latestFlags = $image->getElementsByTagName( "LATEST" );
	  if (is_a($latestFlags->item(0), 'DOMElement')) {
		  #echo "latestTRUE<br>";
    	  $latest = TRUE;
	  } else {
		  #echo "latestFALSE<br>";
    	  $latest = FALSE;
	  }
      
      $ignoreLatestFlags = $image->getElementsByTagName( "IGNORE" );
	  if (is_a($ignoreLatestFlags->item(0), 'DOMElement')) {
		  #echo "ignoreLatestTRUE<br>";
    	  $ignoreLatest = TRUE;
	  } else {
		  #echo "ignoreLatestFALSE<br>";
    	  $ignoreLatest = FALSE;
	  }
      
	  addToImagesArray($imageUniqueId, $yearName, $imageDate, $imageTitle, $imageKeyword, $imageAlt, $topLevelDescription, $imageUrl, $imageLinkUrl, $postLinkUrl, $latest, $imageAlbums, $ignoreLatest);

      #echo $imageTitle, "<br>";
      #echo $imageUrl, "<br>";
      #echo $linkUrl, "<br>";
      
	}
  }
  }
  ?>