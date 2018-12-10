<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="registration.css">
<link rel="stylesheet" href="navigation.css"> 
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #FF8D2E;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #FF8D2E;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>


<body>
<div id="header"></div>

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
   <a href="contact_form.php">Contact</a>
    </div>


<br />
<br />

<!--  ==========================registration form ============= -->
<form action="functions/register_page.php" method="post">
  <div class="container">
        <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
             <hr>

    <label ><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label ><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label ><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label ><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="terms.php">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
    </div>
  
 <div class="container signin">
       <p>Already have an account? <a href="javascript:void(0);" class="icon" onclick="document.getElementById('id01').style.display='block'">Login</a>.</p>

  </div>
</form>


<!-- =======================Login============================== -->


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

</body>
</html>