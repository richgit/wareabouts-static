<?php
# write to file
 
$myFile = "../sitetracker/image-request" . date('Ym') . ".log";
$fh = fopen($myFile, 'a-') or die("can't open file");

$currentDate = date('d M Y H:i:s');
$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
#$currentPage = $_SERVER['PHP_SELF'];
$currentPage = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

$image = $_POST['image'];
$image = str_replace  ("http://localhost/", "", $image);
$image = str_replace  ("http://www.wareabouts.com/", "", $image);

$stringData = $currentDate . "," . $ip . "," . $image . "\n";
fwrite($fh, $stringData);
fclose($fh);

?>

Message Sent
