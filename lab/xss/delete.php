<?php

session_start();
if(!$_SESSION['USERNAME']) {
	 echo "Need to login<br>";
	 echo "<a href=index.php>volver a inicio</a>";
}

else 

{$id =$_SESSION['USERNAME'];

$pais=$_GET['pais'];

include('configdb.php');

$conn = mysqli_connect($host, $login, $password, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully to DB";

$query = mysqli_query($conn,"delete from listado where pais='$pais'");

echo "$pais deleted!<br>";

echo "<a href=home.php>volver</a>";
}
?>
