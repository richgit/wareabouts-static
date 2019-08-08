
<?php 
ini_set("include_path", "../include");
?>

<?php
$titleToInsertInHead="Email";
?>

<?php
# write to file
 
$myFile = "../sitetracker/message" . date('Ym') . ".log";
$fh = fopen($myFile, 'a-') or die("can't open file");

$currentDate = date('d M Y H:i:s');
$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
#$currentPage = $_SERVER['PHP_SELF'];
$currentPage = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$stringData = $currentDate . "," . $ip . "," . $name . "," . $email . "," . $message . "\n";
fwrite($fh, $stringData);
fclose($fh);

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
						  <h1>Message Sent</h1>
                        </div>
                        <br/> 
                          
						<br/>
						<br/>
						Your message has been sent.
						<br/>
						<br/>
                     
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
