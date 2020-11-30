
<?php
//including the database connection file
include_once("data/config.php");

session_start();

if(!isset($_SESSION['login'])){
  header("Location:contactus.php");
}


?>

<!doctype html>
<html lang="en">
 <head>
       <title>select form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="styling.css">	
<style>	
<style>
body {margin:0;}
body {
  background-image: url("select.JPEG");
  background-repeat: no-repeat;
  background-position: right top;
  margin-right: 200px;
  background-attachment: fixed;

}
	
.b {
  background-color: #21092A; 
  border: none;
  color: white;
  padding: 20px;
  text-align:center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 8px 4px;
  cursor: pointer;
  
}

.b{border-radius: 8px;}	
	
		
	
</style>	

</head>

<body>
 <ul>
  <li><a class="active" href="web.php">Home</a></li>
  <li><a href="aboutus.php">About Us</a></li>
  <li><a href="recent.php">Recents</a></li>
  <li><a href="contactus.php">Contact Us</a></li>
  </ul>
	<br><br><br><br>
	
 
  <div class="column">
	 	
	<h1><u><font face="Algerian" color="#2B0935"><center>Make Changes To Your Website</center></font></u></h1>	 
	  
    <h2><center>Want to add a  news?</center></h2>
    <p>
	<form name="frm1" method="post" action="contactus.php"><center>
		<input class="b" type="submit" name="ins" value="INSERT"></center>
	  
	</form>
	</p>
  </div>
  
  <div class="column">
    <h2><center>Want to delete your news?</center></h2>
    <p>
	<form name="frm2" method="post" action="test.php"><center>
    <input class="b" type="submit" name="del" value="DELETE"></center> 
	</form>  
	</p>
  </div>
  
  
  


</body>
</html>