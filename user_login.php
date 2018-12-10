<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  
  <body>

<?php
     $name = $_POST["uname"];
     $psw = $_POST["psw"];		
     $servername = "localhost";
     $username = "oreiph";
     $password = "1771128903";
     $dbname = "myblog";

     $conn = mysqli_connect($servername, $username, $password, $dbname);
  
if($conn->connect_errno){
                         echo "Connection failed" . $conn->connect_error; 
                         exit();
                         }

$query ="SELECT * FROM login  WHERE username='$name' and password='$psw'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){
                 require('index_blog.php');
                 }
	else
	    {
	     require('index.php');
	    }
?>

</body>
</html>