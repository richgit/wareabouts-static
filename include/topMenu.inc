<!-- START OF topMenu -->
<div class="wide top">
 <div class="topWrapper">
  <div id="topMenu">
	<ul class="jd_menu jd_menu_slate">

		<li><a href="#">Albums&raquo;</a>
		<ul>
<?php

  # get all albums
  krsort($albumArray);
  
  while (list($albumName) = each($albumArray)) {
    echo "<li><a href=\"";
	echo "/albums/?album=" . $albumName;
	echo "\">";
	echo $albumName;
	echo "</a>";
	echo "</li>";
  }

?>
		</ul>
</li>
	
	<li class="top_menu"><a href="#">Clients&raquo;</a>
		<ul>
          <li><a href="http://www.pwapublicity.co.uk">PWA Publicity</a></li>
          <li><a href="http://www.robbiehicks.co.uk/">Robbie Hicks Driving School</a></li>
		</ul>
	</li>

	<li class="top_menu"><a href="#">Friends Blogs&raquo;</a>
		<ul>
          <li><a href="http://www.the3arns.blogspot.com">3 Arns</a></li>
          <li><a href="http://www.thesods.blogspot.com/">Sods</a></li>
          <li><a href="http://blog.mangospice.com/">Henlichs</a></li>
		</ul>
	</li>

    <li class="top_menu"><a href="/random/">Random</a></li>
    <li><a href="http://www.facebook.com/people/Richard_Ware/746223950">Facebook</a></li>
    <li><a href="/world/">World Trip</a></li>

	<li><a href="#">Links&raquo;</a>
		<ul>
        <li><a href="http://quotes.wordpress.com/tag/useless-quotes/">Funny Quotes</a></li>
        <li><a href="http://www.smacie.com/randomizer/simpsons/homer.html">Homer Quotes</a></li>
        <li><a href="http://www.youtube.com/richardwareabouts">Our YouTube</a></li>
        <li><a href="/adverts/">Classic Adverts</a></li>
        <li><a href="http://www.bbc.co.uk/weather/5day.shtml">Weather</a></li>
        <li><a href="http://www.newburytoday.co.uk/">NWN</a></li>
        <li><a href="http://slashdot.org/">SlashDot</a></li>
        <li><a href="http://news.bbc.co.uk/sport1/hi/football/eng_prem/table/default.stm">Prem Table</a></li>
        <li><a href="http://www.newsnow.co.uk/newsfeed/?name=West+Ham+United">West Ham News</a></li>
        <li><a href="http://en.wikipedia.org/wiki/Thatcham">Thatcham</a></li>
        <li><a href="http://www.josiedew.co.uk">Josie Dew </a></li>
        <li><a href="http://en.wikipedia.org/wiki/Category:Touring_cyclists">Long Distance Cycle Tourists</a></li>
</ul>
	</li>
    <li><a href="/contact/">Contact Us</a></li>
    <li><a href="/marathon/">Marathon</a></li>
	</ul>
	</div>

    <?php 
      include 'searchBox.php5'; 
    ?>

  </div>
</div>
<!-- END OF topMenu -->
