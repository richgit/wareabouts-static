
<?php
include 'posts.php5';
include 'getComments.php5';
include 'commonFunctions.php5';
?>

<?php

$includePath = ini_get ("include_path");

$positionOfInclude = strrpos($includePath,"include");
$relRoot = substr($includePath,0,$positionOfInclude);

$myFile = $relRoot . "/sitetracker/" . date('Ym') . ".log";
$fh = fopen($myFile, 'a-') or die("can't open file");

$currentDate = date('d M Y H:i:s');
$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

$referrer = "no ref";

if (isset($_SERVER['HTTP_REFERER'])) {
    $referrer = $_SERVER['HTTP_REFERER'];
}

$referrer = str_replace  ("http://localhost/", "", $referrer);
$referrer = str_replace  ("http://www.wareabouts.com/", "", $referrer);

$currentPage = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

$agent = $_SERVER['HTTP_USER_AGENT'];

if (stristr($agent,"firefox")) {
    $agent = "Firefox";
}
elseif (stristr($agent,"safari")) {
    $agent = "Safari";
}
elseif (stristr($agent,"msie 7")) {
    $agent = "IE 7";
}
elseif (stristr($agent,"opera")) {
    $agent = "Opera";
}
elseif (stristr($agent,"msie 6")) {
    $agent = "IE 6";
}
else {
    if ($ip == "66.249.72.83") {
        $agent = "Google";
    } else if ($ip == "72.30.215.78") {
        $agent = "Yahoo";
    }
}

$stringData = $currentDate . "," . $ip . "," . $referrer . "," . $agent . "," . $currentPage . "\n";
fwrite($fh, $stringData);
fclose($fh);

?>


<?php
include 'startOfHead.inc';
?>


</head>

<body>

<div class="wrapper">

    <?php
    include 'topMenu.inc';
    ?>
