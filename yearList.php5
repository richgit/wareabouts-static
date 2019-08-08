<?php 

#include 'php/posts.php5'; 

?>

<?php 
# This needs 'php/posts.php5' included

# list all years (latest first)
  arsort($yearArray);
  foreach ($yearArray as $key => $val) {
    #echo "YEAR=" . $val;
    echo "<a href='";
	echo "/" . $val . "/index.php5";
	echo "' class='smallLink'>";
	echo $val;
	echo "</a><br>";
  }

?>
