<?php 

  function printMiddleBit($content) {
    // remove first bit
    $pos = strpos($content,'<div class="leftSplit">');
    $content = substr($content,$pos,strlen($content) ); 
    //echo "pos=" . $pos . "<br>";
    // remove end bit
    $pos = strrpos($content,'<div style="clear:both;">');
    $content = substr($content,0,$pos); 

    echo $content;
  }
?>

<?php 
ini_set("include_path", "../include");
?>

<?php
$titleToInsertInHead="World"; 
?>

<?php 
include 'fullHeader.inc'; 
?>

<div class="outer_2col">

<div class="float-wrap_2col">

  <div class="center_2col">

        <div class="innertube">
<?php 
include 'breadcrumbs.inc'; 
?>
						<div>
							<h1><a href="/1994/">1994 - Europe</a></h1>
                        </div>
						<br/>
<?php 

$content = file_get_contents('http://www.wareabouts.com/1994/index.php5');
printMiddleBit($content)

?>


<div style="clear:both;"><br/></div>
						<div>
							<h1><a href="/1995/">1995 - Asia to Australia</a></h1>
                        </div>
						<br/>
<?php 

$content = file_get_contents('http://www.wareabouts.com/1995/index.php5');
printMiddleBit($content)

?>


<div style="clear:both;"><br/></div>
						<div>
							<h1><a href="/1996/">1996 - Australia to Home</a></h1>
                        </div>
						<br/>
<?php 


$content = file_get_contents('http://www.wareabouts.com/1996/index.php5');
printMiddleBit($content)

?>

<div style="clear:both;"><br/></div>
						<div>
							<h1><a href="/1998/">1998 - USA</a></h1>
                        </div>
						<br/>
<?php 


$content = file_get_contents('http://www.wareabouts.com/1998/index.php5');
printMiddleBit($content)

?>


                </div>


					</div> <!-- end of center -->
<div class="left">
<div class="container-left">

<?php 
include 'leftYearsWithRandom.inc'; 
?>
				</div>

<br class="clear"/>  <!-- using a <br /> here is less buggy than other choices -->
 
</div>
			
<?php 
include 'footer.inc'; 
?>
