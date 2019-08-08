<?php
function writeToFile($fileName, $message) {

# write to file
 
$myFile = "logs/" . $fileName . date('Ym') . ".log";
echo $myFile;
$fh = fopen($myFile, 'a-') or die("can't open file");

$currentDate = date('d M Y H:i:s');
$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

$stringData = $currentDate . "," . $ip . "," . $message . "\n";
fwrite($fh, $stringData);
fclose($fh);

}

?>