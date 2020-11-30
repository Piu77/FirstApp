<html lang="en">
    <head>
        <title>Home Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="styling.css">	
<style>
body {margin:0;}
	
/* Slideshow container */
  .slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
 }
	fieldset {
  background-color: black;
  color: white;
  }
  
	
		
.footer {
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
   clear: both;
   position: relative;
   height: 240px;
   margin-top: -40px;
   font-family: Berlin Sans FB;
   font-size: 20px;
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
	<h1 style="font-size:10vw;color:purple;text-align: center">D-O-LCE DEC-O</h1>
	
	<center>
	<div class="slideshow-container">

  <div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slideshow1 (5).jpg" style="width:30%;height:70%">
  </div>

  <div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slideshow1 (1).jpg" style="width:30%;height:70%">
  </div>

  <div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slideshow1 (3).jpg" style="width:30%;height:70%">
  </div>
		
	
  <div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slideshow1 (4).jpg" style="width:30%;height:70%">
  </div>

  <div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slideshow1 (6).jpg" style="width:30%;height:70%">
  </div>

  <div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slideshow1 (2).jpg" style="width:30%;height:70%">
  </div>

  </div>
  <br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
	</center>	
	
		
			<h1 align="center">Creating your dream cake, is our goal<br>(Cake For All Occasions)</h1>
			
		<table>
		<tr>
		<td style="width: 50%">
			<fieldset style="color: plum">
			<p>
			
			Over the last 6 years, we have adapted to the rapidly changing trends and improved our range of cakes consistently. We have also improved our recipes with every cake we innovated. We are dedicated to offering a comprehensive variety of cakes for any occasion and we believe that we can better ourselves with 
            every cake we do and this is what we put forth as our uniqueness. We love challenges and turning your dream cake into a reality is what we love doing best.
			</p>
			</fieldset>
			
			<fieldset style="color: plum">
			<p>We are an artisan cakery who takes pride in delivering uniquely crafted cakes after taking into account your very own ideas and inspirations. We are capable of depicting any figures or designs, related to any sort of theme, that run through your mind,
            and then bring out the same in the form of a cake to suit your celebration or occasion.
            <li>FRESH DELICIOUS CAKE FOR REASONALBLE PRICE</li><br>
			<li>VALUE FOR MONEY</li><br>
			<li>USED HIGH QUALITY INGREDIANTS </li><br>
			<li>FRESH DELICIOUS CAKE FOR REASONALBLE PRICE</li><br>
				</p>
				</fieldset>
			</td>
			<td style="width: auto;height:50%;">
		     <center><embed src="home.mp4" autostart="false" height="200%" width="100%" /></center>
		
			</td>
		</tr>	
	</table>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
	
	
	
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Website";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT InNo,Title,Img,Info FROM news";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
	
    while($row = mysqli_fetch_assoc($result)) 
	{
		echo "<table><tr><td><h1><u>".$row["Title"]."</h1></U></td></tr>"."<tr><td>".$row["Info"]."</td></tr><br>";
	
		echo "<img src='",$row['Img'],"' width='175' height='200' />";
    }
    echo "</table>";
        
    }
else {
    echo "0 results";
}

mysqli_close($conn);
?>
   <br>   <br>   <br>	
   <br>   <br>   <br>	
<br>   <br>   <br>	
    <br>   <br>   <br>	
	<br>   <br>   <br>	
<div class="footer">
      <br>
	  <center><p>Follow Us On...</p></center>
	 
	  
	<div>
<a href="../Downloads/[full link to your Twitter]">
<img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter.png" width="35" height="35" />
</a>
<a href="../Downloads/[full link to your Pinterest]">
<img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest.png" width="35" height="35" />
</a>
<a href="../Downloads/[full link to your Facebook page]">
<img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook.png" width="35" height="35" />
</a>
<a href="../Downloads/[full link to your LinkedIn]">
<img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin.png" width="35" height="35" />
</a>
<a href="../Downloads/[full link to your Instagram]">
<img title="Instagram" alt="RSS" src="https://socialmediawidgets.files.wordpress.com/2014/03/10_instagram.png" width="35" height="35" />
</a>
</div>
	 <center><p>Contact us</p></center>
	  <center><p><a href="">0112346789</a></p></center>
	  
</div>

	
 
	
</body>
</html>