







<?php
 
session_start();
 
if(!isset($_SESSION['username']))
 
{
 
    echo "<p align='center'>Please Login again ";
 
    echo "<a href='login.php'>Click Here to Login</a></p>";
 
}
 
else
 
{
 
    $now = time();
 // checking the time now when home page starts
 
    if($now > $_SESSION['expire'])
 
    {
 
        session_destroy();
 
        echo "<p align='center'>Your session has expire ! <a href='login.php'>Login Here</a></p>";
 
    }
 
    else
 
    {
 //starting this else one [else1]
 
?>
 
 
 
<html>
 
<head>
 
	<title>Home Page</title>
	

	<style>
	
	


form {
  margin: 50px auto;
    width: 60%;
	height: 300px;
    padding: 30px 25px;
    background: white;
}



input {
  width: 100%;
  border: 1px solid #f1e1e1;
  display: block;
  padding: 5px 10px;
  
  
}
button {
  border: none;
  padding: 10px;
  border-radius: 5px;
  align:center;
  background-color: white;
  color: black;
  width:300px;
  height:50px;
  border: 2px solid #55a1ff;
}
table {
  width: 60%;
  border-collapse: collapse;
  margin: 100px auto;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 1px solid black;
}

a {
		color : white;
		
}

.topnav {
	display: block;
	color: white;
	text-align:left;
	background-color: #000000;
	padding: 14px 16px;
		
	
}

.active {
	background-color:#55a1ff;
}
	</style>	


 
</head>
 
<body style="background: #3e4144;">
<div class="topnav">
  <a class="active" href="nav.php">HOME</a>&nbsp &nbsp &nbsp
  <a href=" encrypt.php">ENC/DEC</a>&nbsp &nbsp &nbsp
  <a href="index.php">UPLOAD</a>&nbsp &nbsp &nbsp
  <a href="downloadtry.php">DOWNLOAD</a>&nbsp &nbsp &nbsp
  <a href="logout.php" style="float:right;">LOGOUT</a>&nbsp &nbsp &nbsp
</div>
 
<br><br><br>

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img1.jpeg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img2.jpeg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img3.jpeg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>













<h1 style="color:white">About the project</h1>
<p style="color:white">The user will transfer plain text record which our framework will 
encode and store the information on the server and give the scrambled/encrypted 
document as a result which the user can download, then, at that point, the user 
can unscramble/decrypt the document by uploading the encoded document .We have 
likewise consolidated sessions in which the user will be logged out once the session 
time is over which will make it safer for user to store their documents.</p>


<h1 style="color:white">About each page</h1>
<h3 style="color:white">Home</h3>
<p style="color:white">This gives brief introduction about the project</p>

<h3 style="color:white">Enc/Dec</h3>
<p style="color:white">The user can encode and decode their archives,to store them securely</p>

<h3 style="color:white">upload</h3>
<p style="color:white">The user can upload their significant reports, which have been encoded on the previous tab, and can likewise access it remotely.</p>

<h3 style="color:white">Download</h3>
<p style="color:white"> The user can downloaded their significant reports, which have been decoded on the previous tab, and can likewise access it remotely.</p>








<h1 style="color:white">Key Words</h1>
<h3 style="color:white">Encyption</h3>
<p style="color:white">
Encryption is a means of securing digital data using one or more mathematical techniques, along with a password or "key" used to decrypt the information. The encryption process translates information using an algorithm that makes the original information unreadable.
</p>


<h3 style="color:white">Decryption</h3>
<p style="color:white">
The conversion of encrypted data into its original form is called Decryption. It is generally a reverse process of encryption. It decodes the encrypted information so that an authorized user can only decrypt the data because decryption requires a secret key or password.
</p>

<h3 style="color:white">Encrypt</h3>
<p style="color:white">
The process to put information into a special form (code) especially in order to stop people being able to look at or understand it
</p>

<h3 style="color:white">Decypt</h3>
<p style="color:white">
The process to change information that is in a special code back into a simple, ordinary form so that people can look at it and understand it
</p>




<?php
 
 }
 
}
 
?>
 
</body>
 
</html>