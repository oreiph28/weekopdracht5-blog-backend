
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="ORNELIO REIPH">
    <meta name="dcterms.created" content="di, 20 nov 2018 14:45:23 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>BLOG</title>
    <link rel="stylesheet" href="creates.css">
	<link rel="stylesheet" href="navigation.css"> 
  </head>
  
<body>
  sport
 <div id="header" align="center"></div>
<!-- ====================NAVIGATION BAR -->
<div class="navbar">
  <a href="index.php">Home</a>
  <div class="subnav">
    <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#company">Company</a>
      <a href="#team">Team</a>
      <a href="#careers">Careers</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Topics <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#bring">NEWS</a>
      <a href="#deliver">SPORT</a>
      <a href="#package">CULTURE</a>
      <a href="#express">POLITICS</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Admin <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="admin.php">ADMINISTRATION</a>
      <a href="create.php">DATABASE</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
    </div>
  </div>
  <a href="#contact">Contact</a>
</div>
 
  
  
  

  <form class="blog" name="Blogform" method="post"> 

<h1 id="text">DATABASE</h1>
	
   <table id="data" align="center" border="4px" style="width:600px; line-height=30px;"  method="post" >
            <colgroup>
                      <col span="1" style="background-color:red">
                      <col span="3" style="background-color:#FFDC7B">
	                  <col style="background-color:white">
            </colgroup>
			
	<thead>
            <tr>
                 <th>ID</th>
				 <th>Name</th>
				 <th>Title</th>
				 <th>Email</th>
			     <th>Blog</th>
            </tr>
   </thead>
            <tbody>
		
        <?php
	
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";
$servername = "localhost";
$date = date("Y-m-d H:i:s");

$conn = mysqli_connect($servername, $username, $password);		
		
$name = $_POST["name"];
$title = $_POST["title"];
$email = $_POST["email"];
//$blog = $_POST["bericht"];
//$file = $_POST["fileToUpload"];
$file = $_FILES['image']['name'];
$blog = mysqli_real_escape_string($conn, $_POST['image_text']);

 
          

$sqlCommand1= "use myblog";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand1);

//=========================sending to database=========================
$sqlCommand = "INSERT INTO sport (name, title, blog,email,file)
VALUES ('$name', '$title', '$blog', '$email','$file')";
//$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($conn->query($sqlCommand) === TRUE) 
{
 $last_id = $conn->insert_id;   
 ?>
 <h1 id="record">
 
 <?php echo "New record created succesfully with ID: #". $last_id;?>
 
 </h1>
 <?php
} 
else 
{ 
echo "Error: " . $sqlUitvoer . "<br>" . $conn->error; 
} 
echo "<br>";		
			
// =========================retreiving from database==================== 		
$sqlCommand ="SELECT * FROM sport ORDER BY ID DESC LIMIT 15";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);
          
			while ($row = $sqlUitvoer -> fetch_assoc())
             {
            ?>
		
                <tr>
                    <td><?php echo $row['ID']?></td>
                    <td><?php echo $row['name']?></td>
					<td><?php echo $row['title']?></td>
                    <td><?php echo $row['email']?></td>
					<td><?php echo $row['blog']?></td>                  
                </tr>
            <?php
           }
            ?>
            </tbody>
     </table>
  
   <?php
$conn->close();
?>
<script>

    location.replace("../index_blog_sport.php")

</script>
 </form>
   

</div>


     
 <div id="footer" align="center"></div>
 </body>
</html>