<html>
<head>
    <title>WA-cookie</title>
    <meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />

    <script type='text/javascript' src='/js/jquery.js'></script>
    <script type='text/javascript' src='/js/jquery.cookie.js'></script>

    <script type="text/javascript">

        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }


        $(function(){
            $.cookie('secure', "yes", {path: '/' });
            var url = getParameterByName('url');
            var img = getParameterByName('img');
            if (img) {
                url = url + "#" + img;
            }
//            console.log(url);
            window.location.replace(url);
        });

    </script>

</head>

<body>
<p>setting cookie</p>

<?php
echo "You are being redirected to <a href='" . $_GET['url'] . "'>" . $_GET['url']. "</a>";


?>

</body>
</html>
