<?php
if (isset($_COOKIE['user_id'])) {
	
	setcookie('user_id', " ", time()-3600);
	setcookie('user_pass', " ", time()-3600);
	print "Bye..<br>";
	print "<a href='login2.php'>Log In</a>";
}
?>