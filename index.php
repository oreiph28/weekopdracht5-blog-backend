
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="generator" content="ORNELIO REIPH">
        <meta name="dcterms.created" content="di, 20 nov 2018 14:45:23 GMT">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>BLOG</title>
        <link rel="stylesheet" href="qw.css">
        <link rel="stylesheet" href="navigation.css"> 
	    <link id="stylesheet" rel="stylesheet" type="text/css" href="stylesheet1.css"/>
		<link  rel="stylesheet" type="text/css" href="stylesheets/style_table.css"/>
		
		<script>
                function setStyleSheet(url){
                                            var stylesheet = document.getElementById("stylesheet");
                                            stylesheet.setAttribute('href', url);
                                           }
        </script>	  
    </head>

<body>
<?php include 'topic.php';?>

<div id="header" ></div>
<!-- ====================NAVIGATION BAR -->
<div class="navbar">
 
  <div class="subnav">
  <a href="about.php">About</a>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Topics <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
    <a href="index_news.php">NEWS</a>
	 <a href="index_sport.php">SPORT</a>
	 <a href="index_culture.php">CULTURE</a>
	 <a href="index_politics.php">POLITICS</a>
	 <a href="index.php">MOST POPULAR TOPICS</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Login <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
       <a href="javascript:void(0);" class="icon" onclick="document.getElementById('id02').style.display='block'">Admin_Login</a>
       <a href="javascript:void(0);" class="icon" onclick="document.getElementById('id01').style.display='block'">User_Login</a>
    </div>
  </div>
   <a href="contact_form.php">Contact</a>
    <a href="registration.php">Register</a>
</div>

 <!-- ===========================user change font style========================= -->

<table class="button">
             
			 <th>Text size</th>
      <tr>
         <td>
             <button onclick="setStyleSheet('stylesheets/stylesheet1.css')" >xx-small Text</button>
         </td>
      </tr>
    
	  <tr>
	     <td>
            <button onclick="setStyleSheet('stylesheets/stylesheet2.css')" >x-small Text</button> 
         </td>
      </tr>

      <tr>
         <td>
           <button onclick="setStyleSheet('stylesheets/stylesheet3.css')" >small Text</button> 
         </td>	 
     </tr>

     <tr> 
         <td>
           <button onclick="setStyleSheet('stylesheets/stylesheet4.css')" >larg Text</button> 
         </td>
    </tr>

    <tr>
         <td>
           <button onclick="setStyleSheet('stylesheets/stylesheet5.css')" >x-larg Text</button> 
         </td>
    </tr>

    <tr>
        <td>
          <button onclick="setStyleSheet('stylesheets/stylesheet6.css')" >xx-larg Text</button>
        </td>
    </tr>

</table>


<!-- =======================User Login============================== -->
<h1 id="text3">BLOGS OF THE DAY</h1>

<form id="id01"  class="login"  action="user_login.php" method="post">
      <div class="imgcontainer">
	       <img src="images/login.jpg" alt="login" class="login">
	  </div>
	  
	  <div class="container">
	       <label ><b>Username</b></label>
		   <input type="text" placeholder="Enter Username" name="uname" required>
		   
		   <label ><b>Password</b></label>
	       <input type="password" placeholder="Enter Password" name="psw" required>
		   
		   <button class="button_login" type="submit">Login</button>
		   
		   <label>
		       <input type="checkbox" checked="checked" name="remember">Remember
		   </label>	   
	  </div>

	  <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
	
  </div>
</form>

<!-- =======================Admin Login============================== -->

<form id="id02"  class="login"  action="login.php" method="post">
      <div class="imgcontainer">
	       <img src="images/login.jpg" alt="login" class="login">
	  </div>
	  
	  <div class="container">
	       <label ><b>Username</b></label>
		   <input type="text" placeholder="Enter Username" name="uname" required>
		   
		   <label <b>Password</b></label>
	       <input type="password" placeholder="Enter Password" name="psw" required>
		   
		   <button class="button_login" type="submit">Login</button>
		   
		   <label>
		       <input type="checkbox" checked="checked" name="remember">Remember
		   </label>	   
	  </div>

	  <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
	
  </div>
</form>

  <!-- ===========================================================================================
  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  ============================================================================================= -->

   <?php
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   if($conn->connect_errno){
                            echo "Connection failed " . $conn->connect_error; 
                            exit();
                           }

$sqlCommand ="SELECT * FROM popular ORDER BY ID DESC LIMIT 4";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){
         while ($row = mysqli_fetch_array($sqlUitvoer)) {
      	echo "<p id='blog2'>"."<img id='img1' src='images/".$row['file']."' >";
		echo "<br>"."<br>"."<br>"."<b>"."Name:  "."</b>".$row['name']."<br>";
		echo "<b>"."Title:  "."</b>".$row['title']."<br>";
		echo "<b>"."Email:  "."</b>".$row['email']."<br>";
		echo "_________________________________________________________________"."<br>"."<br>"."<br>";
      	echo $row['blog']."</p>";
     
    }}
?> 

  <!-- ===========================================================================================
  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  ============================================================================================= -->  
   <script type="text/javascript">
 function myNews(){
document.getElementById("text3").innerHTML = "NEWkllkS";
var result="<?php news1();?>";
document.getElementById("blog").innerHTML = result;
 } 
</script> 

  <?php
function news1() {
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
  
  
<!--  =======================================politics============================ -->

   <script type="text/javascript">
 function myPolitics(){
  
  document.getElementById("text3").innerHTML = "POLITICS";
var result="<?php politics1();?>";
document.getElementById("blog").innerHTML = result;
 } 
</script> 

  <?php
function politics1() {
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
  
  
 <!--  =======================================sport============================ -->

   <script type="text/javascript">
 function mySport(){
  
  document.getElementById("text3").innerHTML = "SPORT";
var result="<?php sport1();?>";
document.getElementById("blog").innerHTML = result;
 } 
</script> 


  <?php
function sport1() {
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
  
  
 <!--  =======================================Culture============================ -->

   <script type="text/javascript">
 function myCulture(){
  
  document.getElementById("text3").innerHTML = "CULTURE";
var result="<?php culture1();?>";
document.getElementById("blog").innerHTML = result;
 } 
</script> 



  <?php
function culture1() {
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
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){

         while ($row = mysqli_fetch_array($sqlUitvoer)) {    
      	echo "<p id='blog2'>"."<img src='images/".$row['file']."' >";
		echo "<br>".$row['name']."<br>";
		echo $row['title']."<br>";
		echo $row['email']."<br>";
      	echo $row['blog']."</p>";
     
    }}
    				   
echo "connected to server";

}
?> 
  <br />
  <br />
  <br />
<div id="footer"></div>
  </body>
</html>