
<?php
$cookie_name = "secure";
$cookie_value = "yes";


setcookie($cookie_name, $cookie_value, time() + (86400 * 300), "/"); // 86400 = 1 day

echo "red=" . $_GET['url'];

if(isset ($_GET['url'])) {
    header( 'Location: ' .urlencode($_GET['redirected_url']));
}

?>

<html>
<head>
    <title>WA-cookie</title>
    <meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />


</head>

<body>
<p>setting cookie</p>



</body>
</html>
