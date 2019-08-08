
<script type="text/javascript">
 $(document).ready(function(){
       refreshRightRandom();
 });

        function refreshRightRandom() {
            $(".container-right #rightRandom").empty();
            $(".container-right #rightRandom").append("<img class='loading' src='/image/loading.gif'/>");
            // use dummy request param to force post instead of get, so IE doesn't cache response
            $(".container-right #rightRandom").load("/include/rightRandomRefresh.php5", { 'dummy': ["dummy"] } , function(){
               bodyLoad("#rightRandom");
            });
        }

</script>

						<div class="banner"> 
						    <div class="leftbanner">
    						    <h1>Random</h1>
                            </div>
						    <div class="rightbanner">
    						    <a href="#" onclick="refreshRightRandom();">refresh</a>
                            </div>
                        </div>
<div id="rightRandom" class="innertube">

</div>

