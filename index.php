<?php include 'filesLogic.php';?>

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
    
    <title>File Upload </title>
	
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
  <a href="nav.php">HOME</a> &nbsp &nbsp &nbsp
  <a href="encrypt.php">ENC/DEC</a> &nbsp &nbsp &nbsp
  <a class="active" href="index.php">UPLOAD</a> &nbsp &nbsp &nbsp
  <a href="downloadtry.php">DOWNLOAD</a> &nbsp &nbsp &nbsp 
  <a href="logout.php" style="float:right;">LOGOUT</a> &nbsp &nbsp &nbsp
</div>
    <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h1 align="center" >UPLOAD FILE</h1>		
          <input type="file" name="myfile" id="filling">
		  <br><br><br><br><br><br>
          <center><button type="submit" name="save" style="font-size:25px;" ><u>UPLOAD</u></button>
        </form>
      </div>
    </div>
	
<?php
 
 }
 
}
 
?>	


  </body>
</html>
	