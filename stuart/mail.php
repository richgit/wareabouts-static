<?php
ini_set("include_path", "include");
include 'commonFunctions.php5'; 

$screenName="";
$screenEmail="";
$screenComment="";
$valid = true;

// validate name
if (isset($_POST['name'])) {
   $submittedName = $_POST['name']; 
   if ($submittedName == "") {
      $valid = false;
      $errorName = "Name must be entered";
   }
} else {
   $valid = false;
}

// validate email
if (isset($_POST['email'])) {
   $submittedEmail = $_POST['email']; 
   if ($submittedEmail == "") {
      $valid = false;
      $errorEmail = "Email must be entered";
   }
} else {
   $valid = false;
}
// validate comment
if (isset($_POST['comment'])) {
   $submittedComment = $_POST['comment']; 
   if ($submittedComment == "") {
      $valid = false;
      $errorComment = "Comment must be entered";
   }
} else {
   $valid = false;
}

if ($valid) {
   $logMessage = "name:" . $submittedName . ", email:" . $submittedEmail . ", comment:" . $submittedComment; 
   //$headers = 'From: webmaster@example.com';
   //mail('richard.ware@gmail.com', 'My Subject', $logMessage, $headers);
   writeToFile("email", $logMessage); 
};

?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Email</title>
    
    <meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
    <meta http-equiv="description" content="this is my page">
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
    
    <link rel="stylesheet" type="text/css" href="css/stuart.css">

  </head>
  
  <body>
    
          <form id='emailForm' name='emailForm' method='post' action="#">
<?php
if (isset($errorName)) {
  echo "<p class='error'>" . $errorName . "</p>";
}
?>
            <p>Name:</p>
            <input type="text" name="name" id="name" size="16" value='
<?php
if (isset($submittedName)) {
  echo $submittedName;
}
?>
'/>
<?php
if (isset($errorEmail)) {
  echo "<p class='error'>" . $errorEmail . "</p>";
}
?>
            <p>Email:</p>
            <input type="text" name="email" id="email" size="16" value='
<?php
if (isset($submittedEmail)) {
  echo $submittedEmail;
}
?>
'/>
<?php
if (isset($errorComment)) {
  echo "<p class='error'>" . $errorComment . "</p>";
}
?>
            <p>Comment:</p>
            <input type="text" name="comment" id="comment" size="16" value='
<?php
if (isset($submittedComment)) {
  echo $submittedComment;
}
?>
'/>
           
           <br/>
           <br/>
           <br/>
           <input type="submit" name="Submit" value="Go" >
          </form>

    
  </body>
</html>
