<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	      <link rel="stylesheet" href="navigation.css"> 
	      <link rel="stylesheet" href="contact2.css">
    <title>contact</title>
  </head>
  
  
  <body>
<div id="footer"></div>

<!-- ====================NAVIGATION BAR -->
<div class="navbar">
   <a href="index.php">Home</a>
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
    <a href="registration.php">Register</a>
</div>

<!-- =======================User Login============================== -->
<form id="id01"  class="login"  action="user_login.php" method="post">
      <div class="imgcontainer">
	       <img src="images/login.jpg" alt="login" class="login">
	  </div>
	  
	  <div class="container1">
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
	       <img src="images/login.jpg" alt="login" class="login1">
	  </div>
	  
	  <div class="container1">
	       <label ><b>Username</b></label>
		   <input type="text" placeholder="Enter Username" name="uname" required>
		   
		   <label> <b>Password</b></label>
	       <input type="password" placeholder="Enter Password" name="psw" required>
		   
		   <button class="button_login" type="submit">Login</button>
		   
		   <label>
		       <input type="checkbox" checked="checked" name="remember">Remember
		   </label>	   
	  </div>

	  <div class="container1" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
	
  </div>
</form>

<br />
<br />
<br />

<!--   =============registration form=========================
==============================================================
========================================================== -->
<form action="mail.php" method="post">
  <div class="container">
    <h1>Contact</h1>

    <hr>

	 <label><b>Username</b></label>
    <input id="contact_name" type="text" placeholder="Enter Username" name="username" required>
<br />
    <label><b>Email</b></label><br />
    <input id="contact_email" type="text" placeholder="Enter Email" name="email" required>

	<br />
    <label><b>Subject</b></label><br />
    <input id="contact_subject" type="text" placeholder="Enter Subject" name="subject" required>


<br />
	<label><b>Text</b></label>
	<textarea name="form" cols="80" rows="10" placeholder="Enter Text" required></textarea>
    <hr>

    <button type="submit"  class="registerbtn">Send</button>
  </div>
</form>

<br />
<div id="header"></div>
  </body>
</html>