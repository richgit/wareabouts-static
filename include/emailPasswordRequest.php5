
<?php

include 'commonFunctions.php5'; 

$name = strip_tags($_GET['name']);
$dirName = $_GET['dirName'];
$email = strip_tags($_GET['email']);
$comment = strip_tags($_GET['comment']);

# write to file

echo "logging - start";

$myFile = "../sitetracker/passwordRequests.log";
$fh = fopen($myFile, 'a-') or die("can't open file");

$currentDate = date('d M Y H:i:s');
$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

$stringData = $currentDate . "," . $ip . ",dirName=" . $dirName . ",comment=" . $comment . ", name=" . $name . ", email=" . $email . "\n";
fwrite($fh, $stringData);
fclose($fh);

echo "logging - end";


?>
