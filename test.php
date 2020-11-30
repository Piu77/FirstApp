<!DOCTYPE html>
<html lang="en">
    <head>
        <title>delete form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="styling.css">	
<style>
body {margin:0;}
  body {
  background-image: url("delete.jpg");
  background-repeat: no-repeat;
  background-position: right top;
  margin-right: 200px;
  background-attachment: fixed;
	}
        form {
        	 text-align: center;
        }
    
    	input {
    		
    		width: 50%;
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
		
 <br> <br> <br>
 <br> <br> <br>	
 <br> <br> <br>
 <h1 align="center" >DELETING A POST</h1>
 
  <form name="code" method="POST" action="test.php">

  <input type="text" name="del" placeholder="ENTER A TITLE"><br><br>
    
  <button type="reset">DELETE</button>

</form>
  <?php
	
  $Tit=$_POST["del"];
	
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="Website";
	
 
 
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn)
 {
  die("Connection failed".mysqli_connect_error());
 }

  $sql="DELETE FROM news where Title='$Tit'";
  $r=mysqli_query($conn,$sql);
  if($r)
  {
    "delete successfully";
  }
  else
  {
    "error";
  }
  mysqli_close($conn);
  ?>
	
</body>
</html>

