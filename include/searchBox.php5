<div id="searchListElement">
          <form id='searchForm' name='searchForm' method='get' action="/search/">
            <input type="text" title="Search:" name="search" id="search" size="16" value='<?php
if (isset($_POST['search'])) {
  echo $_POST['search'];
}
?>
'/>
           <input type="submit" name="Submit" value="Go" onclick="splash('Searching for ' + $('#search').val() + ' ...')"/>
          </form>
</div>
