<?php
session_start();
if(!$_SESSION['USERNAME']) {
 echo "no session - need to <a href=index.php>login</a><br>";
}
else {
// Unset all of the session variables. 
$_SESSION = array(); 

// If it's desired to kill the session, also delete the session cookie. 
// Note: This will destroy the session, and not just the session data! 
if (isset($_COOKIE[session_name()])) { 
   setcookie(session_name(), '', time()-42000, '/'); 
} 

// Finally, destroy the session. 
session_destroy(); 
echo "<a href=index.php>home</a>";

}
?>
