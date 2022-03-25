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
 


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>File Download</title>
  <style>



form {
	margin: 50px auto;
    width: 60%;
	height: 300px;
    padding: 30px 25px;
    background: white;
}

html {
	background-color: #3e4144;
	
}

input {
  width: 100%;
  
  display: block;
  padding: 5px 10px;
  
  
}

table {
  width: 60%;
  
  margin: 100px auto;
  background:white;
  text-align:center;
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

.try{
	color : black;
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
<body>
<div class="topnav">
  <a href="nav.php">HOME</a>&nbsp &nbsp &nbsp
  <a href=" encrypt.php">ENC/DEC</a>&nbsp &nbsp &nbsp
  <a href="index.php">UPLOAD</a>&nbsp &nbsp &nbsp
  <a class="active" href="downloadtry.php">DOWNLOAD</a>&nbsp &nbsp &nbsp
  <a href="logout.php" style="float:right;">LOGOUT</a> &nbsp &nbsp &nbsp
</div>
<table>
<thead style="color:#55a1ff">
    <th>ID</th>
    <th>FILE NAME</th>
    <th>SIZE</th>
    <th>DOWNLOAD</th>
    <th>ACTION</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a class="try" href="downloadtry.php?file_id=<?php echo $file['id'] ?>">DOWNLOAD</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>




<?php
 
 }
 
}
 
?>	
</body>
</html>