
<?php 
ini_set("include_path", "../include");
?>

<?php
$titleToInsertInHead="Random Photos";
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
						  <h1>Random Posts</h1>
                        </div>
                        <br/>
<?php
  #get random images (all years)
  $listOfRandomImages = getRandomImages($imagesForAllYearsArray, 20);
  # echo "<br>";
  # print_r($listOfRandomImages);
  # echo "<br>";
  foreach ($listOfRandomImages as $selectedImage) {


  echo "<div class=\"imageContainer\" id=\"id";
  echo $selectedImage["uniqueId"];
  echo "\">";
  echo "<a href=\"";
  # get URL to photo
  $photoString = str_replace("/thumb/", "/photo/" , $selectedImage["imageUrl"]);
  echo $photoString;
  echo "\" class=\"highslide\" ";
  echo "onclick=\"return hs.expand(this,{wrapperClassName : 'highslide-white', spaceForCaption: 30, outlineType:";
  echo "'rounded-white', captionId: 'caption";
  echo $selectedImage["uniqueId"];
  echo "'})\">";
  echo "<img border=\"0\" title=\"Click to enlarge\"";
  echo "alt=\"";
  echo $selectedImage["alt"];
  echo "\" src=\"";
  echo $selectedImage["imageUrl"];
  echo "\" id=\"thumb";
  echo $selectedImage["uniqueId"];
  echo "\"/></a>";
  echo "</div>";
  echo "<div id=\"caption";
  echo $selectedImage["uniqueId"];
  echo "\" class=\"highslide-caption\">";
  echo "<a href=\"";
  echo $selectedImage["imageLinkUrl"];
  echo "\">";
  echo $selectedImage["alt"];
  echo " (Click for post)";
  echo "</a>";
  echo "</div>";




  }
?>						
                </div>


					</div> <!-- end of center -->
<div class="left">
<div class="container-left">

<?php 
include 'leftYearsWithRandom.inc'; 
?>
			</div>

			
			</div>
				</div>

<br class="clear"/>  <!-- using a <br /> here is less buggy than other choices -->
 
</div>
			
<?php 
include 'footer.inc'; 
?>
