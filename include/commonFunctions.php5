 <?php
   function formatComment($commentArray) {
		$name = $commentArray["name"];
		$email = $commentArray["email"];
		$date = date('j/n/y g:ia', $commentArray["date"]);
		$comment = $commentArray["comment"];

		$commentString = "<div class='displaycommentbox'><p>&quot;" . $comment . "&quot;</p></div>";
		$commentString = $commentString . "<div class='displaycommentfooter'><br/>";
		$commentString = $commentString . "<p>by " . $name;
//		if ($email != "") {
//			$commentString = $commentString . " (" . $email . ")";
//		};
		$commentString = $commentString . " on " . $date . "</p></div>";
		$commentString = $commentString;
		return $commentString;
	  }

	function EndsWith($FullStr, $EndStr) {
	    // Get the length of the end string
	    $StrLen = strlen($EndStr);
	    // Look at the end of FullStr for the substring the size of EndStr
	    $FullStrEnd = substr($FullStr, strlen($FullStr) - $StrLen);
	    // If it matches, it does end with EndStr
	    return $FullStrEnd == $EndStr;
	}

?>