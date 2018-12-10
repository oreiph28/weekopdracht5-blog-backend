<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="function.css">
 
	<link rel="stylesheet" href="../navigation.css">
    <title> admin Create</title>
  </head>
  
  <body>
<div id="header"></div>
    <?php
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";
$servername = "localhost";
$date = date("Y-m-d H:i:s");
$db = $_POST["database"];


$conn = mysqli_connect($servername, $username, $password);

	?>   


<!-- ===================
==================================
============================================================================ -->
 <?php
 $sqlCommand ="create database $db";
         $sqlUitvoer	= mysqli_query($conn,$sqlCommand);

$conn->close();


?>

<script>
    location.replace("../admin.php")
</script>
  </body>
</html>