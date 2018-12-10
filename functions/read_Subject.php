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
$subject = $_POST["subject"];

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
         echo "<p id='create'>"."<b>"."Subject: ".$subject."s of "."</b>".$row["topic"]."</p>";
?>



<!-- ==========================================================================
=========================DATABASE OUTPUT=======================================
============================================================================ -->

 
 
 <!-- Admin Input -->
 <div class="AdminInput"></div>

 <!--  Server Data -->  
   <table id="data" width="1350">
            <colgroup>
                      
	                  <col span="6" style="background-color:white">
            </colgroup>
			
	<thead>
            <tr>
                 <th id="col_id">ID</th>
				 <th id="col_name">Subject</th>
				 <th id="col_title">Subject Name</th>
				
            </tr>
   </thead>
            <tbody>
		
        <?php         

			
// =========================retreiving from database==================== 		
    $sqlCommand ="SELECT ID, $subject FROM $table";
	//$sqlCommand ="SELECT * FROM $table WHERE $subject";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);
          
			//while ($row = $sqlUitvoer -> fetch_assoc())
			while ($row = mysqli_fetch_array($sqlUitvoer)) 
             {
            ?>	
                <tr>
				    <td><?php echo $row['ID']?></td>  
				    <td><?php echo $subject?></td> 
                    <td><?php echo $row[$subject]?></td>             
                </tr>
            <?php
           }
            ?>
            </tbody>
     </table>
  
   <?php
   	   
$conn->close();
?>

</div>
   <div id="AdminText">
 </div>

  </body>
</html>