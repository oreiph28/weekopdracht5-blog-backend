<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="function.css">
 
	<link rel="stylesheet" href="../navigation.css">
    <title> admin Create</title>
  </head>
  
  <body>
<div id="header"></div>
    <?php
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";
$servername = "localhost";
$date = date("Y-m-d H:i:s");

$table = $_POST["table"];
$rows = $_POST["rows"];

$conn = mysqli_connect($servername, $username, $password);
$sqlCommand1= "use myblog";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand1);

	
	?>   
<!-- ====================NAVIGATION BAR =====================================
============================================================================
====================================================================      -->
 <div class="navbar">
	  <div class="subnav">
         <a href="../index.php">Home</a>
		 <a href="../admin.php">Back</a>
		 
	   </div>
     
	  <div class="subnav">
        
                  </div>
      </div> 
     
 </div>

<!-- ===================
==================================
============================================================================ -->
 <?php
 $sqlCommand ="SELECT topic FROM $table";
         $sqlUitvoer	= mysqli_query($conn,$sqlCommand);
		 
		 $row = mysqli_fetch_assoc($sqlUitvoer); 
         echo "<p id='create'>"."<b>"."Topic: "."</b>".$row["topic"]."</p>";
?>



<!-- ==========================================================================
=========================DATABASE OUTPUT=======================================
============================================================================ -->

 
 
 <!-- Admin Input -->
 <div class="AdminInput"></div>

 <!--  Server Data -->  
   <table id="data" width="1350">
            <colgroup>
                      <col span="1" style="background-color:red">
                      <col span="3" style="background-color:#FFDC7B">
	                  <col span="2" style="background-color:white">
            </colgroup>
			
	<thead>
            <tr>
                 <th id="col_id">ID</th>
				 <th id="col_name">Name</th>
				 <th id="col_title">File Title</th>
				 <th id="col_email">Email</th>
			     <th id="col_blog">Blog</th>
				 <th id="col_file">File</th>
            </tr>
   </thead>
            <tbody>
		
        <?php         

			
// =========================retreiving from database==================== 		
$sqlCommand ="SELECT * FROM $table ORDER BY ID DESC LIMIT $rows";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);
          
			//while ($row = $sqlUitvoer -> fetch_assoc())
			while ($row = mysqli_fetch_array($sqlUitvoer)) 
             {
            ?>	
                <tr>
                    <td><?php echo $row['ID']?></td>
                    <td><?php echo $row['name']?></td>
					<td><?php echo $row['title']?></td>
                    <td><?php echo $row['email']?></td>
					<td><?php echo $row['blog']?></td>   
					<td><?php echo $row['file']?></td>                
                </tr>
            <?php
           }
            ?>
            </tbody>
     </table>
  
   <?php
   
 $sqlCommand ="SELECT * FROM $table ORDER BY ID DESC LIMIT $rows";

$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){

         while ($row = mysqli_fetch_array($sqlUitvoer)) {
      
      	
		echo "<p id='blog2'>"."<b>"."File Id: "."</b>".$row['ID']."<br>";
		echo "<b>"."User Name: "."</b>".$row['name']."<br>";
		echo "<b>"."User Email: "."</b>".$row['email']."<br>";
		echo "<b>"."File Name: "."</b>".$row['title']."<br>";
		echo "<img id='img1' src='../images/".$row['file']."' >"."</p>";
		
		
     
    }}
    				   
        
		   
		  
		   
		   
$conn->close();
?>

</div>
   <div id="AdminText">
 </div>

  </body>
</html>
