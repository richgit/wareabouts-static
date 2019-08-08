<?php
$url = 'http://192.168.1.15/all.xml';

$response = file_get_contents($url);
    //**The url looks like http://api.music.com/album?song=Black&artist=Pearl+Jam

//** For purposes of this demo, we will manually assume the JSON response from the API:
//$response = '{ "album": "Ten" }'; //(Raw JSON returned by API)
echo $response;
?>


