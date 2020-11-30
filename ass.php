<!doctype html>
<html lang="en">
  <head>
        <title>insert form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="styling.css">	
<style>
body, html {
  height: 100%;
  margin: 0;
}
body {
  background-image: url("ass1.jpg");
  background-repeat: repeat-x;
}

	
		form
 {

    width: 700px;
    border: 2px solid grey;
    padding: 60px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 55px;
 }

</style>
	
</head>

	<body>
	
  <ul>
  <li><a class="active" href="web.php">Home</a></li>
  <li><a href="aboutus.php">About Us</a></li>
  <li><a href="recent.php">Recents</a></li>
  <li><a href="contactus.php">Contact Us</a></li>
  <li><a href="ass.php">Login</a></li>
  </ul>
		<br><br>
		<br><br>
	
	<form name="form" action="ass.php" method="post">
	<table width="200" border="0" bgcolor="#ABABAB">
  <tbody>
    <tr>
      <td>Title</td>
      <td><input type="text" name="title" size="70"></td>
    </tr>
    <tr>
      <td>Image</td>
      <td><input type="file" name="image"> </td>
    </tr>
    <tr>
      <td>Info</td>
      <td><textarea rows="5" cols="80" name="info"></textarea></td>
    </tr>
   
    <tr>
      <td align="center"><input type="submit" name="submit" value="Submit"></td>
      <td align="center"><input type="reset" name="cancel" value="Cancel"></td>
    </tr>
    
  </tbody>
</table>
		
	<?php
	$Tit=$_POST["title"];
	$sqlimage=$_POST["image"];
	
	$Info=$_POST["info"];
	
	
		
	
	
	$server="localhost";
	$username="root";
	$password="";
	$db="Website";
	$con = mysqli_connect($server,$username,$password,$db);
	
	if(!$con) 
	{
		die("Connection Error".mysqli_connect_error());
	}
	
	("Connected Successfully <br>");
	$sql = "INSERT INTO News(Title,Img,Info) VALUES ('$Tit','$sqlimage','$Info') ";
		if ($con->query($sql) == TRUE) 
		{
         "sucess";

		} 
		else {
    
			echo "Error: " . $sql . "<br>" . $con->error;

		}

	
	
	mysqli_close($con);
	?>
	
</body>
</html>