<?php
$newTitle = str_replace("%20", " ", $HTTP_GET_VARS["title"]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META Http-Equiv="Cache-Control" Content="no-cache">
<META Http-Equiv="Pragma" Content="no-cache">
<META Http-Equiv="Expires" Content="0">
<META NAME="description" CONTENT="wareabouts">
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>wareabouts</title>
<link rel="shortcut icon" href="../image/favicon.ico" />
<style type="text/css">
<!--
body{
margin:10;
padding:0;
line-height: 1.5em;
}

#maincontainer{
width: 740px; /*Width of main container*/
margin: 0 auto; /*Center container on page*/
}

#topsection{
	height: 40px; /*Height of top section*/
	background-color: #FFFFFF;
	background-position: bottom;
}

#contentwrapper{
float: left;
width: 100%;
}

#contentcolumn{
margin-left: 180px; /*Set left margin to LeftColumnWidth*/
}

#leftcolumn{
	float: left;
	width: 180px; /*Width of left column*/
	margin-left: -740px;
	background-color: #FFFFFF;
}

#footer{
	clear: left;
	width: 100%;
	color: #FFF;
	text-align: left;
	padding: 4px 0;
	background-color: #FFFFFF;
}

.innertube{
margin: 10px; /*Margins for inner DIV inside each column (to provide padding)*/
margin-top: 0;
}
-->
</style>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="maincontainer">

<div id="topsection"><div class="innertube">
        <table width="100%" border="0">
          <tr>
            <td><a href="http://www.wareabouts.com" class="largeLink">www.wareabouts.com</a></td>
            <td valign="bottom"><div align="right" class="smallLink">Richard</div></td>
            <td valign="bottom"><div align="right" class="smallLink">Nicki</div></td>

            <td valign="bottom"><div align="right"><a class="smallLink" href="/robert/">Robert</a></div></td>
            <td valign="bottom"><div align="right"><a class="smallLink" href="../charlie/">Charlie</a></div></td>
          </tr>
      </table>
</div></div>

  <div id="contentwrapper">
    <div id="contentcolumn">
      <div class="innertube">
        <div class="medium"><?php echo$newTitle ?></div>
        <div class='imageContainer'> <a href="../photo/<?php echo$HTTP_GET_VARS["photo"]; ?>"> <img src="../thumb/<?php echo$HTTP_GET_VARS["photo"]; ?>" border=\"0\"> </a> </div>
        <div class="medium"><a class="mediumLink" href="<?php echo$HTTP_GET_VARS["link"]; ?>">click here for blog</a></div>
      </div>
    </div>
  </div>
</div>


<div id="leftcolumn">
<div class="innertube">

  <!-- #BeginLibraryItem "/htdocs/Library/menu.lbi" -->
  <p><a href="2007" class="smallLink">2007</a><br />
      <a href="2005" class="smallLink"></a><a href="2006/index.html" class="smallLink">2006</a><br />
      <a href="2005" class="smallLink"></a><a href="2005/index.html" class="smallLink">2005</a><br />
  &nbsp;&nbsp;&nbsp;&nbsp;<a href="2005/index.html" class="smallLink">New Zealand</a><br />
  &nbsp;&nbsp;&nbsp;&nbsp;<a href="2005/usa2005.html" class="smallLink">USA</a><br />
  <a href="1998/index.html" class="smallLink">1998</a><br />
  <a href="1995/index.html" class="smallLink">1995</a><br />
  <a href="1994/index.html" class="smallLink">1994</a><br />
  <a href="1969/index.html" class="smallLink">1969</a><br />
  <a href="1967/index.html" class="smallLink">1967</a><br />
  </p>
  <!-- #EndLibraryItem -->
</div>
</div>

</div>
</body>
</html>

</body>
