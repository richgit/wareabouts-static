
<?php

include 'commonFunctions.php5'; 

//echo "comment=" . $_GET['comment'] . "<br/>";

$name = strip_tags($_GET['name']);
$fileExt = strip_tags($_GET['fileExt']);
$image = $_GET['image'];
$email = strip_tags($_GET['email']); 
$comment = strip_tags($_GET['comment']);

$commentArray = array("name"=>$name,
                      "email"=>$email,
                      "date"=>time(),
					  "comment"=>$comment);
					  
//echo "image=" . $image . "<br/>";

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

$prefix = "../comments" . $image;

//echo "prefix=" . $prefix . "<br/>";

$fullFileName = $prefix . "/" . time() . ".comments";
//echo "fullFileName=" . $fullFileName . "<br/>";
//echo "name=" . $name . "<br/>";

if (!file_exists($prefix)) { 
   //echo "trying to make dir - " . $prefix . "<br/>";
   mkdir($prefix, 0777, true);
   //echo "mkdir";
}
 
if (!empty($name) && !empty($comment)) {
   file_put_contents( $fullFileName, serialize($commentArray));
   echo formatComment($commentArray);
}

# write to file

//echo "logging - start"; 

$myFile = "../sitetracker/comments.log";
$fh = fopen($myFile, 'a-') or die("can't open file");

$currentDate = date('d M Y H:i:s');
$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

$stringData = $currentDate . "," . $ip . ",file=" . $image . "." . $fileExt . ",comment=" . $comment . ", name=" . $name . ", email=" . $email . "\n";
fwrite($fh, $stringData);
fclose($fh);

//echo "logging - end";


?>
