
     <?php
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";
$servername = "localhost";
$date = date("Y-m-d H:i:s");

  
$conn = mysqli_connect($servername, $username, $password);
	?> 
	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="administration2.css">
	<link rel="stylesheet" href="navigation.css">
    <title>Administration</title>
  </head>
  
  
  <body>
  
  
<div id="header"></div>

<!-- ====================NAVIGATION BAR =====================================
============================================================================
====================================================================      -->
 <div class="navbar">
	  <div class="subnav">
         <a href="index.php">Home</a>
		 <a href="about.php">About</a>
		 <a href="index_blog.php">User</a>
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
				  <a href="contact_form.php">Contact</a>
                  <a href="registration.php">Register</a>
      </div> 
       
 </div>

   
<!--   =================================================================
============================ADMINISTRATION TEXT=========================
==================================================================== -->
<h1 id="text3">Administration</h1>




 <!-- ==============================================================
 ===========================AdminBack===========================
 ================================================================ -->
<div class="admin_Back">
<h1 id="panel_T">User Panel</h1>
</div>



 <!-- ==============================================================
 ===========================AdminMenu CREATE DATABASE===============
 ================================================================ -->
<!-- Admin  Menu -->
<div class="adminMenu">
<!--  create -->
<form action="functions/create_db.php" method="post">
<br /><br />
  <button>Create DB</button><br/>
            <table class="table">
                 
                     
                <tr>
                   <td>
                         <label><b>Database:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Database Name" name="database" required>
                   </td>
                </tr>  
           </table>

</form>	 
  <br />

<form action="functions/delete_db.php" method="post">
		    <button>Delete DB</button><br/>
            <table class="table">
			     <tr>
                   <td>
                         <label><b>Database</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Database Name " name="database" required>
                   </td>
                </tr>
  
                
           </table>
             
</form>
  <br />
</div>


<!-- ===================================================================================
====================================AdminMenu1  READ====================================
==================================================================================== -->
<div class="adminMenu1">
<!--  read -->
<form action="functions/read.php" method="post">
<br /><br />
     <button>Read Topic</button><br/>
            <table class="table">     
                <tr>
                   <td>
                         <label><b>Topic:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Table Name" name="table" required>
                   </td>
                </tr>
               
			     <tr>
                   <td>
                         <label><b>Rows:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter number of Table Rows" name="rows" required>
                   </td>
                </tr>
           </table>

</form>	 
  <br />

<form action="functions/read_Id.php" method="post">
		    <button >Read ID</button><br/>
            <table class="table">    
                <tr>
                   <td>
                         <label><b>Topic:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Table Name" name="table" required>
                   </td>
                </tr>
               
			     <tr>
                   <td>
                         <label><b>Id:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter ID Numer " name="id" required>
                   </td>
                </tr>   
           </table>
             
</form>
  <br />

		   
<form action="functions/read_Subject.php" method="post">
		    <button>Read subject</button><br/>
            <table class="table">  
                <tr>
                   <td>
                         <label><b>Topic:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Table Name" name="table" required>
                   </td>
                </tr>
               
			     <tr>
                   <td>
                         <label><b>Subj:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Topic Subject " name="subject" required>
                   </td>
                </tr>

               <tr>
                   <td>
                         <label><b>Rows:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Number of Table Rows" name="rows" required>
                   </td>
                </tr>
           </table>
		   
</form>
 </div>
 

 
 <!-- ===================================================================================
====================================AdminMenu2 CREATE TABLE==============================
===================================================================================== -->
<!-- Admin  Menu -->
<div class="adminMenu2">
<!--  update -->
<form action="functions/create_table.php" method="post">
<br /><br />
     <button>Create Table</button><br/>
            <table class="table">
                  <tr>
                   <td>
                         <label><b>Database</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Database Name " name="database" required>
                   </td>
                </tr>
  
                   <tr>
                   <td>
                         <label><b>Table</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Table Name " name="table" required>
                   </td>
                </tr>
                
				 <tr>
                   <td>
                         <label><b>Values</b></label><br />
                   </td>
                   <td> 
				   <textarea cols="28" rows="10" placeholder="Enter Values " name="values" required></textarea>       
                   </td>
                </tr>
           </table>
</form>	 
  <br />

<form action="functions/delete_table.php" method="post">
		    <button>Delete Table</button><br/>
            <table class="table">
			     <tr>
                   <td>
                         <label><b>Database</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Database Name " name="database1" required>
                   </td>
                </tr>
  
                   <tr>
                   <td>
                         <label><b>Table</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Table Name " name="table" required>
                   </td>
                </tr>    
           </table>
             
</form>
 </div>
 
 <br/>
 
 
  <!-- ==============================================================
 ==================AdminMenu3 DATABASES AND TABLES===================
 ================================================================ -->

<!-- Admin  Menu -->
<div class="adminMenu3">
<form>
<table class="table">
                 <br/>     
                <tr>   
                 <td
<p id='databases'>
<b>Databases:</b>
<br/><br/>
 <?php
		 $sqlCommand1= "show databases";
         $sqlUitvoer	= mysqli_query($conn,$sqlCommand1);
		 while ($row = mysqli_fetch_array($sqlUitvoer)) {
                                                         echo "<b>"."Db: ".$row['Database']."</b>". "\n"."<br>";
                                                        }
?>
  </p>
                 
             </td>
              <td> 
<p id='databases'>
<b>Databases:</b>
<br/><br/>
 <?php
       
         $sqlCommand ="use myblog";
         $sqlUitvoer	= mysqli_query($conn,$sqlCommand);
		 $sqlCommand1= "show tables";
         $sqlUitvoer	= mysqli_query($conn,$sqlCommand1);
		 while ($row = mysqli_fetch_array($sqlUitvoer)) {
                                                         echo "<b>"."Db: ".$row[0]."</b>". "\n"."<br>";
                                                         }
?>
  </p>  
			</td>
            </tr> 	    
 </table>
             

</form>
</div>

 
 
 <!-- ===================================================================================
====================================AdminMenu4=========================================
==================================================================================== -->
<!-- Admin  Menu -->
<div class="adminMenu4">
<!--  right -->
<form action="functions/right.php" method="post">

     <button id="btn_right">Right</button><br/>
            <table class="table">
                  <tr>
                     <td>
                         <label><b>Id:</b></label>
                     </td>
					 
                     <td>
                         <input id="id21" type="text" placeholder="Enter Id" name="id" required><br/>
                     </td>
                   </tr>
 
 
                 <tr>
                    <td>
                         <label><b>Name:</b></label>
                    </td>
                    <td>
                         <input id="id22" type="text" placeholder="Enter name" name="name" required><br/>
                    </td>
                 </tr>
 
                <tr>
                   <td>
                         <label><b>Title:</b></label>
                   </td>             
				   <td>
                         <input id="id23" type="text" placeholder="Enter title" name="title" required><br/>
                   </td>
                </tr>

                <tr>
                   <td>
                         <label><b>Email:</b></label>
                   </td>
                   <td>
                         <input id="id24" type="text" placeholder="Email" name="email" required>
                   </td>
                </tr>
  
                <tr>			             
                   <td>
                         <label><b>Bericht:</b></label>
                   </td>
                   <td id="25">
                         <textarea name="blog" cols="28" rows="9"  placeholder="Enter Blog" required></textarea>
                   </td>
                </tr>
           </table>

</form>
 </div>
 

 <!-- ===================================================================================
====================================AdminMenu5=========================================
==================================================================================== -->
<!-- Admin  Menu -->
<div class="adminMenu5">
<!--  left -->
<form action="functions/left.php" method="post">

     <button id="btn_left">Left</button><br/>
            <table class="table">
                  <tr>
                     <td>
                         <label><b>Id:</b></label>
                     </td>
					 
                     <td>
                         <input id="id26" type="text" placeholder="Enter Id" name="id" required><br/>
                     </td>
                   </tr>
 
 
                 <tr>
                    <td>
                         <label><b>Name:</b></label>
                    </td>
                    <td>
                         <input id="id27" type="text" placeholder="Enter name" name="name" required><br/>
                    </td>
                 </tr>
 
                <tr>
                   <td>
                         <label><b>Title:</b></label>
                   </td>             
				   <td>
                         <input id="id28" type="text" placeholder="Enter title" name="title" required><br/>
                   </td>
                </tr>

                <tr>
                   <td>
                         <label><b>Email:</b></label>
                   </td>
                   <td>
                         <input id="id29" type="text" placeholder="Email" name="email" required>
                   </td>
                </tr>
  
                <tr>			             
                   <td>
                         <label><b>Bericht:</b></label>
                   </td>
                   <td id="30">
                         <textarea name="blog" cols="28" rows="9"  placeholder="Enter Blog" required></textarea>
                   </td>
                </tr>
           </table>

</form>
 </div>
  

   <div id="AdminText"></div>

 



  </body>
</html>