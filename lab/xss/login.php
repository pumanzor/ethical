<?php


$user=$_POST['username'];
$pass=$_POST['password'];

include('configdb.php');

$conn = mysqli_connect($host, $login, $password, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully to DB";

$query = mysqli_query($conn,"SELECT * from usuarios where username='$user' and password='$pass'");

$count = mysqli_num_rows($query);

if($count == 0)

{

	echo '<h2>Clave o usuario incorrecto</h2>';
echo "<a href=index.php>volver</a>";
exit;
}

else {


echo "$user - $pass - $result";

$row = mysqli_fetch_array($query);


$user_pass = md5($_POST['password']);
$username = $row['username'];
echo "$username";

 # Start the session
 session_start();
 $_SESSION['USERNAME'] = $username;
 echo "<head> <meta http-equiv=\"Refresh\" content=\"0;url=home.php\" > </head>";

}
?>
