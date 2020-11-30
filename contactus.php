
<?php
include_once("data/server.php");
?>


<!doctype html>
<html lang="en">
 <head>
       <title>select form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="styling.css">	

  <style>
  body {margin:0;}
  body {
  background-image: url("db1 (3).jpg");
  background-repeat: no-repeat;
  background-position: right top;
  margin-right: 200px;
  background-attachment: fixed;

}
    <style>
        form {
        	 text-align: center;
        }
    
    	input {
    		
    		width: 50%;
    	}
    	select {
    		width: 50%;

    	}
    	option {
    		text-align: center;
    	}
    	button {
    		width: 50%;
    	}
    </style>
</head>
<body> 
	
	 <ul>
  <li><a class="active" href="web.php">Home</a></li>
  <li><a href="aboutus.php">About Us</a></li>
  <li><a href="recent.php">Recents</a></li>
  <li><a href="contactus.php">Contact Us</a></li>
  </ul>
	<br><br><br>
	<br><br><br>
	<br><br><br>
	
<h1 align="center">CONTACT US</h1><center>
<form name="form1" method="post" action="select.php">
	
<input type="text" name="username"  placeholder=" Enter Your Name Here"><br><br>
	

    <input type="password" name="password"  placeholder="Enter Your Email Address Here"><br><br>
   
    
    
     <button type="button" name="login_user">Contact Us</button>

</form>
	</center>	







	</body>
</html>
     
     