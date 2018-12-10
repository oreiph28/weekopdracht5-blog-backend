<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="Ornelio">
    <title>Topic</title>   
  </head>
  
  <body>

  <!-- ==========================
 ============== NEWS===================
 ===================================
 ====================================== -->
  
 <script type="text/javascript">
        function myNews(){
                          var result="<?php news();?>";
                          document.getElementById("blog").innerHTML = result;
                          document.getElementById("text3").innerHTML = "NEWSqwerty";
                          return false; 
                         }
</script>


<h1>
    <font color="#FDFFFA">
<?php

function news() {
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   if($conn->connect_errno){
                            echo "Connection failed " . $conn->connect_error; 
                            exit();
                           }

$sqlCommand ="SELECT * FROM news ORDER BY ID DESC LIMIT 4";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

   if ($sqlUitvoer->num_rows>0){
                                while ($row = mysqli_fetch_array($sqlUitvoer)) {
                                                                                echo "<p id='blog'>"."<img src='images/".$row['file']."' >";
		                                                                        echo "<br>".$row['name']."<br>";
		                                                                        echo $row['title']."<br>";
		                                                                        echo $row['email']."<br>";
                                                                             	echo $row['blog']."</p>"; 
                                                                                }
				               }
    				   
echo "connected to server";
                           }

?>
</font>
</h1>


  <!-- ==========================
 ============== SPORT===================
 ===================================
 ====================================== -->
  
  <script type="text/javascript">
 function mySport(){
 var result="<?php sport();?>";
 document.getElementById("blog").innerHTML = result;
  document.getElementById("text3").innerHTML = "SPORT";
 //alert(result);
  return false; 
 }
</script>


<h1>
<font color="#FDFFFA">
<?php

function sport() {
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   if($conn->connect_errno){
                            echo "Connection failed " . $conn->connect_error; 
                            exit();
                           }

$sqlCommand ="SELECT * FROM sport ORDER BY ID DESC LIMIT 4";
  //$sqlCommand ="SELECT * FROM blog ORDER BY ID DESC LIMIT 4";

$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){

         while ($row = mysqli_fetch_array($sqlUitvoer)) {
      
      	echo "<p id='blog'>"."<img src='images/".$row['file']."' >";
		echo "<br>".$row['name']."<br>";
		echo $row['title']."<br>";
		echo $row['email']."<br>";
      	echo $row['blog']."</p>";
     
    }}
    				   
echo "connected to server";

}

?>
</font>
</h1>

  
  
 

  <!-- ==========================
 ============== CULTURE===================
 ===================================
 ====================================== -->
  
  <script type="text/javascript">
 function myCulture(){
 var result="<?php culture();?>";
 document.getElementById("blog").innerHTML = result;
  document.getElementById("text3").innerHTML = "CULTURE";
 //alert(result);
  return false; 
 }
</script>


<h1>
<font color="#FDFFFA">
<?php

function culture() {
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   if($conn->connect_errno){
                            echo "Connection failed " . $conn->connect_error; 
                            exit();
                           }

$sqlCommand ="SELECT * FROM culture ORDER BY ID DESC LIMIT 4";
  //$sqlCommand ="SELECT * FROM blog ORDER BY ID DESC LIMIT 4";

$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){

         while ($row = mysqli_fetch_array($sqlUitvoer)) {
      
      	echo "<p id='blog'>"."<img src='images/".$row['file']."' >";
		echo "<br>".$row['name']."<br>";
		echo $row['title']."<br>";
		echo $row['email']."<br>";
      	echo $row['blog']."</p>";
     
    }}
    				   
echo "connected to server";

}

?>
</font>
</h1>
  
  
  <!-- ==========================
 ============== POLITICS===================
 ===================================
 ====================================== -->
  
  <script type="text/javascript">
 function myPolitics(){
 var result="<?php politics();?>";
 document.getElementById("blog").innerHTML = result;
  document.getElementById("text3").innerHTML = "POLITICS";
 //alert(result);
  return false; 
 }
</script>


<h1>
<font color="#FDFFFA">
<?php

function politics() {

$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   if($conn->connect_errno){
                            echo "Connection failed " . $conn->connect_error; 
                            exit();
                           }

$sqlCommand ="SELECT * FROM politics ORDER BY ID DESC LIMIT 4";
  //$sqlCommand ="SELECT * FROM blog ORDER BY ID DESC LIMIT 4";

$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){

         while ($row = mysqli_fetch_array($sqlUitvoer)) {
      
      	echo "<p id='blog'>"."<img src='images/".$row['file']."' >";
		echo "<br>".$row['name']."<br>";
		echo $row['title']."<br>";
		echo $row['email']."<br>";
      	echo $row['blog']."</p>";
     
    }}
    				   
echo "connected to server";
}

?>
</font>
</h1>

  
  
  </body>
</html>