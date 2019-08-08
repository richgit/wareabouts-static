<?php

  if (isset($_GET['q'])) {
 
    $times = substr_count($_SERVER['PHP_SELF'],"/");
    $rootaccess = "";
    $i = 1;

    while ($i < $times) {
        $rootaccess .= "../";
        $i++;
    }

    $ajaxTerm = $_GET['q'];
    $firstLetter = substr($ajaxTerm,0,1);
    $fileName =  $rootaccess . 'search/words/' . $firstLetter . '.txt';

    if (file_exists ($fileName)) {
    
        $contents = file_get_contents ($fileName);
        $explodedContents = explode('|',$contents);
        for ( $counter = 0; $counter < count($explodedContents) ; $counter += 1) {
            $word = $explodedContents[$counter];
            //echo "trying " . $word . "<br/>";
            #echo "counter=" . $counter . ", contents=" . $word;
            if (substr($word,0,strlen($ajaxTerm)) == $ajaxTerm) {
                echo $word . "\n";
            }
        }
    }
  }
?>

