<html><head><title>Agregar Pais</title></head>
<body bgcolor=white link=blue alink=CC9966 vlink=purple>
<font color=black>
<br>
<center>

<P>

<?php

$pais=$_POST['pais'];
$capital=$_POST['capital'];


include('configdb.php');

echo "8888";

$conn = mysqli_connect($host, $login, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO listado (pais, capital) VALUES ('$pais', '$capital')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
	echo "<a href=index.html>volver</a>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
