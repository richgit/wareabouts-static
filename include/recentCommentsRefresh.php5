
<?php 
ini_set("include_path", "../include");
?>

<?php 
include 'posts.php5'; 
?>

<?php

    #get comments file
  
    $times = substr_count($_SERVER['PHP_SELF'],"/");
    $rootaccess = "";
    $i = 1;

    while ($i < $times) {
        $rootaccess .= "../";
        $i++;
    }

    $fileName =  $rootaccess . '/sitetracker/comments.log';

    if (file_exists ($fileName)) {
    
        $contents = file_get_contents ($fileName);
        $explodedContents = explode(',',$contents);
        for ( $counter = 0; $counter < count($explodedContents) ; $counter += 1) {
            $word = $explodedContents[$counter];
            echo "counter=" . $counter . ", contents=" . $word;
#            if (substr($word,0,strlen($ajaxTerm)) == $ajaxTerm) {
#                echo $word . "<br/>";
#            }
        }
    }
  
  
  
  
?>						
