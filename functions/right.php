<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Admin Right</title>
    

  </head>
  <body>
  
        <?php
$name = $_POST["id"];	
$name = $_POST["name"];
$title = $_POST["title"];
$email = $_POST["email"];

$test="testtrdfgfgf";
$blog="";
$file="";

$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "oreiph_blog";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   if($conn->connect_errno){
                            echo "Connection failed " . $conn->connect_error; 
                            
                           }
 
//=========================sending to database=========================
$sqlCommand = "INSERT INTO blog (name, title, blog,email,file)
VALUES ('$name', '$title', '$blog', '$email','$file')";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

echo $name."<br>";
echo $title."<br>";
echo $email."<br>";
echo $test."<br>";
 

$sqlCommand ="SELECT * FROM blog ORDER BY ID DESC LIMIT 4";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){

                             while($row = $sqlUitvoer->fetch_assoc()){
?>   
     <p id="blog" align="center">
<?php
   
      echo "<b>Naam: </b>". $row['name'] . "<br>";
      echo "<b>Title: </b>".$row['title'] . "<br>";
      echo "<b>Email: </b>". $row['email']. "<br>". "<br>";
      echo "<b>Bericht: </b>". $row['blog']. "<br>";
	  echo "<b>File: </b>". $row['file']. "<br>". "<br>";
      echo "<br>";
      echo "<br>";
	  }}
?> 

    </p>

  </body>
</html>




