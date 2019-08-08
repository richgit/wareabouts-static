<script type="text/javascript">
        
 $(document).ready(function(){
       refreshLeft();
 });
 
        function refreshLeft() {
           
            $(".container-left .innertube").empty();
            $(".container-left .innertube").append("<img class='loading' src='/image/loading.gif'/>");
            
            // use dummy request param to force post instead of get, so IE doesn't cache response
            $(".container-left .innertube").load("/include/leftRandomRefresh.php5", { 'dummy': ["dummy"] }, function(){
               bodyLoad(".container-left");
            });
        }
</script>   
<br/> 
<p class="noHoverBG sidebar-top">		

<script type="text/javascript"><!--
google_ad_client = "pub-0901114600077971";
/* 120x240, created 03/12/09 */
google_ad_slot = "1513214684";
google_ad_width = 120;
google_ad_height = 240;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
			
<a href="http://www.cancerresearchuk.org/bobbymoorefund/"><img src="/marathon/image/bm%20logo.gif" border="0" alt="Bobby Moore"/></a>
</p>
						<div class="banner"> 
						    <div class="leftbanner">
    						    <h1>All Years</h1>
                            </div>
						    <div class="rightbanner">
    						    <a href="#" onclick="refreshLeft();">refresh</a>
                            </div>
                        </div>

<div class="innertube">

</div>
