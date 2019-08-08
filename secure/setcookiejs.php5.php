

<html>
<head>
    <title>WA-cookie</title>
    <meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.cookie.min.js"></script>

    <script type="text/javascript">

        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }


        $(function(){
            $.cookie('secure', "yes", {path: '/' });
            window.location.replace(getParameterByName('url'));
        });

    </script>

</head>

<body>
<p>setting cookie</p>

<?php
echo "red=<a href='" . $_GET['url'] . "'>" . $_GET['url']. "</a>";


?>

</body>
</html>
