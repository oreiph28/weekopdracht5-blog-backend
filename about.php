
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="generator" content="ORNELIO REIPH">
        <meta name="dcterms.created" content="di, 20 nov 2018 14:45:23 GMT">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>BLOG</title>
        <link rel="stylesheet" href="about.css">
        <link rel="stylesheet" href="navigation.css"> 
			  
    </head>

<body>
<?php include 'topic.php';?>

<div id="header" ></div>
<!-- ====================NAVIGATION BAR -->
<div class="navbar">
 
  <div class="subnav">
     <a href="index.php">Home</a>
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

  

<!-- =======================User Login============================== -->
<h1 id="text3">ABOUT</h1>

<br />
<br />
<br />

<div id="div1">
<h1 id="h1">The Blog</h1>
<p id="text1">Deze blog is gemaakt door Ornelio reiph.<br />
   Je bent vrij om blogs toe te voegen.<br />
   Maak een account aan via de 'register-menu' om blogs toe te voegen.<br />
   Er is de mogelijkheid om plaatjes of andere 'file's bij je blog toe tevoegen.<br />
   Ook is er een 'users-menu' toegevoegd om de tekts-opmaak te veranderen.<br />
   <br />
   U kunt via de 'contact-menu' contact opnemen met de 'blog-administrator'.<br /><br />
   
   Met vriendelijke groet,<br />
   Ornelio Reiph<br />
   Blog administrator.<br />

   </p>
   <img id="img1" src="images/nelio1.png" width="192" height="192" alt="" title="blog administartor" />
</div>


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

  <br />
  <br />
  <br />
<div id="footer"></div>
  </body>
</html>