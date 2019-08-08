<?php 
ini_set("include_path", "./include");
?>

<?php
$titleToInsertInHead="Richard Ware, Nicki Ware, Robert Ware and Charlie Ware";
$metaKeywordsInHead="Richard Ware, Nicki Ware, Richard and Nicki, Robert Ware, Charlie Ware, Pika, Thatcham, New Zealand, wareabouts limited";
?>

<?php 
include 'fullHeader.inc'; 
?>
<div class="outer">

<div class="float-wrap">

  <div class="center">

        <div class="innertube">

<?php 
include 'breadcrumbs.inc'; 
?>
	
    <div id="latestHeaderDiv">
        <span id="latestHeader">Latest 3 Posts</span><span id="latestLink"><a href="http://www.wareabouts.com/rss.xml">RSS feed</a>&nbsp;<a href="http://www.wareabouts.com/rss.xml"><img src="/image/rss.gif" border="0" alt="RSS feed"/></a></span>
    </div>
<?php
    function displayLatestImage($image) {    
		echo "<div class=\"searchResultOuter\">";
		echo "<div class=\"searchResultInner\">";
		echo "<a class=\"searchResultDate\" href=\"";
	    echo substr($image["imageLinkUrl"], 0, strrpos($image["imageLinkUrl"], "/"));
	    echo "/\" title=\"";
        echo $image["alt"];
	    echo "\">";
        echo $image["date"];
        echo "</a>";
	    echo "<a class=\"searchResultImage\" href=\"";
	    echo $image["imageLinkUrl"];
	    echo "\" title=\"";
        echo $image["alt"];
	    echo "\">";
	    echo "<img width=\"93%\" src=\"";
	    echo $image["imageUrl"];
	    echo "\" border=\"0\" alt=\"";
        echo $image["alt"];
        echo"\"/></a>";
		echo "<a class=\"searchResultDesc\" href=\"";
	    echo substr($image["imageLinkUrl"], 0, strrpos($image["imageLinkUrl"], "/"));
	    echo "/\" title=\"";
	    echo $image["alt"];
	    echo "\">";
        echo $image["title"];
        echo "</a><br/>";
		echo "</div>";
		echo "</div>";
	}

	displayLatestImage($lastImage);
	displayLatestImage($secondLastImage);
	displayLatestImage($thirdLastImage);

?>
						<div style="clear: left;">
						</div>
						<div>
							<h1>All Posts</h1>
                        </div>
<?php 
include 'homePageInsert.inc'; 
?>
						<div style="clear: left;">
						</div>
						<div>
							<h1>Mosaic</h1>
                        </div>
                         
<div>
<br/>
<br/>
<script 
  type="text/javascript"
  src="http://www.zumyn.com/export/2018392061/1">
</script></div>			 
<br/>

						<div style="clear: left;">
						</div>
<?php 
include 'homer.inc'; 
?>
<br/>
<br/>

<div style="clear: left;">  </div>


                </div>

        <?php 
                include 'endOfPage.inc'; 
        ?>

		<div id="socialBookMarks" class="sharesb">
  <ul>
    <li class="delicious">
      <a href="http://del.icio.us/post?url=http://www.wareabouts.com&amp;title=wareabouts" title="Post this story to Delicious">Delicious</a>
    </li>
    <li class="digg">
      <a href="http://digg.com/submit?url=http://www.wareabouts.com&amp;title=wareabouts" title="Post this story to Digg">Digg</a>
    </li>
    <li class="reddit">
      <a href="http://reddit.com/submit?url=http://www.wareabouts.com&amp;title=wareabouts" title="Post this story to reddit">reddit</a>
    </li>
    <li class="facebook">

      <a href="http://www.facebook.com/sharer.php?u=http://www.wareabouts.com" title="Post this story to Facebook">Facebook</a>
    </li>
    <li class="stumbleupon">
      <a href="http://www.stumbleupon.com/submit?url=http://www.wareabouts.com&amp;title=wareabouts" title="Post this story to StumbleUpon">StumbleUpon</a>
    </li>
    <li class="rss">
      <a href="http://www.wareabouts.com/rss.xml" title="wareabouts RSS feed">RSS feed</a>
    </li>
  </ul>
</div>


					</div> <!-- end center div -->
<div class="left">
<div class="container-left">

<?php 
include 'leftYearsWithRandom.inc'; 
?>
			</div>

			
			</div>
				</div>

<div class="right">

<?php 
include 'rightColumn.inc';  
?>

</div> <!-- end right div -->

<br class="clear"/>  <!-- using a <br /> here is less buggy than other choices -->

</div>
			
<?php 
include 'footer.inc'; 
?>
