<?php
session_start();
if(!$_SESSION['USERNAME']) {
 echo "Need to login<br>";
echo "<a href=index.php>volver a inicio</a>";
}

else 

{$id =$_SESSION['USERNAME'];
 
echo "conectado como <b>$id</b><br>";
echo "<a href=salir.php>logout</a><br>";
//if($_SERVER['REQUEST_METHOD'] == "POST" &&  $id == "admin")  
if($_SERVER['REQUEST_METHOD'] == "POST") { 
$pais=$_POST['pais'];
$capital=$_POST['capital'];
include('configdb.php');
$conn = mysqli_connect($host, $login, $password, $database);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());}
$sql = "UPDATE listado set capital = '$capital' WHERE pais = '$pais'";
if (mysqli_query($conn, $sql)) 
{echo "Record updated successfully<br><hr>";
echo "<a href=home.php>volver</a>";

}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
mysqli_close($conn);}
else 
{
if ($id == 'admin' || $id == 'student') 
{echo "Welcome<br><hr>";
echo "List of countries are<br>";

include('configdb.php');
$conn = mysqli_connect($host, $login, $password, $database);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());}

$sql1 = mysqli_query($conn,"SELECT * FROM listado WHERE 1");

 while($row = mysqli_fetch_array($sql1))
 {
	 
	 
  $p = $row['pais']; 
  $c = $row['capital']; 	

  if ($id == 'admin') 
  {
  echo "<a href=delete.php?pais=$p>Eliminar</a>";
 }

  echo "<a href=#> $p - $c</a><br>";

}
}
echo "<hr><br>";
echo "<form action='home.php' method='POST' name=form1>";
echo "<tr><th align=left>Actualizar";
echo " <tr><td align=right><font color=red>*</font>Pais <input type='text' name='pais' VALUE='' size=11>";
echo "<td align=right><font color=red>*</font>Capital<input type='text' name='capital' VALUE=''>";
echo "<tr><th colspan=3 align=center><font color=#c06080><input type=submit value='Actualizar'></font>";
echo "</form>";
}
}
?>
