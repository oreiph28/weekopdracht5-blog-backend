<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="ma, 03 dec 2018 13:15:26 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
	      <link rel="stylesheet" href="navigation.css"> 
	        <link rel="stylesheet" href="index_blog2.css">
    <title> index_blog</title>
  </head>
  
  <body>
<!-- <?php include 'topic.php';?> -->
  <p id="demo"></p>
<div id="header"></div>

<!-- ====================NAVIGATION BAR =====================================
============================================================================
====================================================================  -->

<div class="navbar">
  <a href="index.php">Home</a>
  <div class="subnav">
    <a href="about.php">About</a>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Topics <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
     <a href="index_blog_news.php">NEWS</a>
	 <a href="index_blog_sport.php">SPORT</a>
	 <a href="index_blog_culture.php">CULTURE</a>
	 <a href="index_blog_politics.php">POLITICS</a>
	 <a href="index_blog.php">MOST POPULAR TOPICS</a>
    </div>
  </div> 
  
  <div class="subnav">
    <button class="subnavbtn">Admin <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
    <a href="javascript:void(0);" class="icon" onclick="document.getElementById('id01').style.display='block'">Login</a>
    </div>
  </div>
    <a href="contact_form.php">Contact</a>
    <a href="registration.php">Register</a>
</div>


<!--   =================================================================
==================================BLOG TEXT==========================
==================================================================== -->
<h1 id="text3">Sport</h1>

<!--   =================================================================
=================================LOGIN==================================
==================================================================== -->
<form id="id01"  class="login"  action="login.php" method="post">
      <div class="imgcontainer">
	       <img src="images/login.jpg" alt="login" class="login">
	  </div>
	  
	  <div class="container">
	       <label><b>Username</b></label>
		   <input type="text" placeholder="Enter Username" name="uname" required>
		   
		   <label><b>Password</b></label>
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

<!--   =================================================================
=============================BLOG INPUT FORM============================
==================================================================== -->

    <form class="blog" id="blog_news" name="Blogform" method="post" action="topics/sport.php" enctype="multipart/form-data"> 
             <table  class="table">
	               <tr>
					        <td>
					        <input type="hidden" name="size" value="1000000">
							</td>
  	               </tr>
					 
				   <tr>
				             <td>
							 <label>name</label>
							 </td>
				             <td>
							 <input type="text" name="name" maxlength="50" size="31" placeholder="Enter Name" required/>
							 </td>
				   </tr>
	
	               <tr>
				             <td>
							 <label>title</label>
							 </td>
				             <td>
							 <input type="text" name="title" maxlength="50" size="31" placeholder="Enter Title" required/>
							 </td>
				   </tr>
	          
			       <tr>
				             <td>
							 <label>email</label>
							 </td>
				             <td>
							 <input type="text" name="email" maxlength="50" size="31" placeholder="Enter email" required/>
							 </td>
				   </tr>
	               
				   <tr>
				             <td id="btn">
							 <label>bericht</label>
							 </td>
				           
						     <td id="blog_b">
							 <textarea id="text" cols="28" rows="9" name="image_text" placeholder="Say something about this image..."></textarea>
  	                         </td>
				   </tr>			   
	         </table>
			 
			  <input id="submit" type="submit" />
			  <br/>
		      <input id="file" type="file" name="image">
 
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

$sqlCommand ="SELECT * FROM sport ORDER BY ID DESC LIMIT 4";
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

  </body>
</html>