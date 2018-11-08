<?php
include_once('configdb.php');

$conn = mysqli_connect($host, $login, $password, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['search'])){
	$pais = $_POST['pais'];

//$pais = htmlspecialchars($pais); 
//changes characters used in html to their equiv

//$pais = mysql_real_escape_string($pais);
// makes sure nobody uses SQL injection

$query = mysqli_query($conn,"SELECT * FROM listado WHERE pais like ('$pais%')"); 
	$count = mysqli_num_rows($query);
	if($count == "0"){
		$output = '<h2>No result found!</h2>';
	}

else
{
	while($row = mysqli_fetch_array($query)){
	$p = $row['pais']; 
	$c = $row['capital']; 	
	echo "$p - $c</br>";			
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
	</head>
	<body>
		<form method="POST" action="search.php">
			<input type="text" name="pais" placeholder="query">
			<input type="submit" name="search" value="Search">
		</form>
		<?php //echo $p - $c - ok; ?>
	</body>
</html>
