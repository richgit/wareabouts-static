<?php
# write to file
# DEPRECATED
# DEPRECATED
# DEPRECATED
# DEPRECATED
# DEPRECATED
# DEPRECATED
# DEPRECATED
# DEPRECATED
# DEPRECATED
# DEPRECATED
# DEPRECATED
# DEPRECATED
# DEPRECATED
# DEPRECATED
# DEPRECATED
# DEPRECATED
 
$myFile = "../sitetracker/message-image" . date('Ym') . ".log";
$fh = fopen($myFile, 'a-') or die("can't open file");

$currentDate = date('d M Y H:i:s');
$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
#$currentPage = $_SERVER['PHP_SELF'];
$currentPage = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

$name = $_GET['name'];
$image = $_GET['image'];
$email = $_GET['email'];
$message = $_GET['message'];

$stringData = $currentDate . "," . $ip . "," . $image . "," . $name . "," . $email . "," . $message . "\n";
fwrite($fh, $stringData);
fclose($fh);

?>

Message Sent
