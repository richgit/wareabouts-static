<?php

function getComments($folderName) {
  $commentFolder = "../../comments" . $folderName . "/";
  $commentFolder = str_replace  ("localhost/", "", $commentFolder);
  $commentFolder = str_replace  ("www.wareabouts.com/", "", $commentFolder);


  //echo "commentFolder=" . $commentFolder . "#</br>";

  $fileArray=array();
  $i=0;
  if (file_exists($commentFolder)) {
  
      if ($handle = opendir($commentFolder)) {

          /* This is the correct way to loop over the directory. */
          while (false !== ($file = readdir($handle))) {
              //echo "file=" . $file . "#</br>";
              if (EndsWith($file, '.comments')) {
                  $fileArray[$i]=$file;
                  $i++;
              }
          }

          closedir($handle);

          sort($fileArray);

          for($i=0; $i<sizeof($fileArray); $i++) {

              $file = $fileArray[$i];
              $fullFileName = $commentFolder . $file;
              //echo "fullFileName=" . $fullFileName . "#</br>";
              $contents = file_get_contents ($fullFileName);
              $commentArray = unserialize(trim($contents));  

              echo formatComment($commentArray);
          }

      }
  }
}

?>

