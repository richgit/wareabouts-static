<script type="text/javascript">
 $(document).ready(function(){
       refreshComments();
 });

        function refreshComments() {
            $(".container-right #rightComments").empty();
            $(".container-right #rightComments").append("<img class='loading' src='/image/loading.gif'/>");
            // use dummy request param to force post instead of get, so IE doesn't cache response
            $(".container-right #rightComments").load("/include/recentCommentsRefresh.php5", { 'dummy': ["dummy"] } , function(){
               bodyLoad("#rightComments");
            });
        }

</script>

						<div class="banner"> 
						    <div class="leftbanner">
    						    <h1>Comments</h1>
                            </div>
						    <div class="rightbanner">
    						    <a href="#" onclick="refreshComments();">refresh</a>
                            </div>
                        </div>
<div id="rightComments" class="innertube">

</div>
