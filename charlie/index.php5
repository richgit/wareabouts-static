
<?php 
ini_set("include_path", "../include");
?>

<?php
$titleToInsertInHead="Charlie";
?>

<?php 
include 'fullHeader.inc'; 
?>


<div id="contentwrapper">
<div id="contentcolumn">
<div class="innertube">
  <a name="Charlie"></a>
  <div><h2>
2006 - Charlie
  </h2></div>
  <?php
  // Define your username and password
  $password_Charlie = 'chas';
  if (!isset($_POST['txtpassword_Charlie']) || $_POST['txtpassword_Charlie'] != $password_Charlie) {
  ?>
  <div id="passwordArea">
  <form name='form' method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Enter password to view this post<br/>
  <label for='txtpassword_Charlie'>Password:</label>
  <input type='password' title='Enter your password' name='txtpassword_Charlie'
  id='txtpassword_Charlie'/>
  <input type='submit' name='Submit' value='Let me in' />
  </form>
  </div>
  <?php
  }
  else {
  ?>
    <a name="img_1868.jpg"></a>
    <div class='imageContainer'>
    <a class='tipSource' href='#tip_img_1868'>
    <img border="0" src='../image/point.gif' alt="" /></a>
 <a href="../photo/2006/Charlie/img_1868.jpg"><img src="../thumb/2006/Charlie/img_1868.jpg" alt= "2006 - Charlie"  border="0" height="337" width="450"/></a>
    </div>
<div id='tip_img_1868' class="tipContent" >
<h4>img_1868.jpg</h4>
<table cellspacing='5' cellpadding='5'>
<tbody>
<tr><td class='tableTitle'>Dimension (width/height):</td><td class='tableText'>
350/262
</td></tr>
</tbody></table></div>
  <div style='clear:left;'><hr/></div>
  <?php
  }
  ?>


</div>
</div>
</div>

<?php 
include 'leftYearsWithRandom.inc'; 
?>

<?php 
include 'footer.inc'; 
?>


