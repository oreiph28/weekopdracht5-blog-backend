<!DOCTYPE html>
<html lang="en">
  <head>
    <title> admin Create</title>
  </head>
  
  <body>

        <?php
$psw = $_POST["psw"];
$repeat_pasw = $_POST["psw-repeat"];
$email = $_POST["email"];
$name = $_POST["username"];

$test="testtrdfgfgf";

$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";
$time= "time";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   if($conn->connect_errno){
                            echo "Connection failed " . $conn->connect_error;              
                           }
 
 $sqlCommand="USE myblog";
 $sqlUitvoer	= mysqli_query($conn,$sqlCommand);
 
 
 
 if($psw === $repeat_pasw){
//=========================sending to database=========================
$sqlCommand = "INSERT INTO login (username, password,email,time)
VALUES ('$name', '$psw', '$email','$time')";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);
}

else
{
   echo "<script>";
   echo "alert('password not Matching! try registrating again! ');";
   echo "</script>";
   
}

?>

<script>

    location.replace("../index.php")

</script>



  </body>
</html>




