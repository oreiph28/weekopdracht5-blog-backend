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
$table = $_POST["table"];
$db = $_POST["database"];
$value = $_POST["values"];

$conn = mysqli_connect($servername, $username, $password);

	?>   


<!-- ===================
==================================
============================================================================ -->
 <?php
 $sqlCommand ="use $db";
 $sqlUitvoer	= mysqli_query($conn,$sqlCommand);
 $sqlCommand ="CREATE TABLE $table ($value)";
 $sqlUitvoer	= mysqli_query($conn,$sqlCommand);

$conn->close();

?>

<script>
    location.replace("../admin.php")
</script>

  </body>
</html>