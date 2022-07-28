<?php
session_start();
include "connection.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
 
 <div id="main">
 	<center><h1>Database Emulation</h1></center>
 </div>
 <div id="contain">
 <div>
 	<form action="" method="post"><center>
 		<table><tr><td>
 			<label>Username:</label>
 			<input type="text" name="user"></td></tr>
            <tr><td>
 			<label>Password:</label>
 			<input type="password" name="pass"></td></tr>
            <tr><td></td><td>
 			<input type="submit" name="log" value="login"></td></tr>
 			
		<div id="fail" style="color: black;display: none;">
  <strong style="color: red">Does not Match</strong>Invalid Username or password.
</div>
        </table>
    </center>
 	</form>
 </div>	
 </div>
 <?php
if (isset($_POST["log"])) {
	$username=$_POST["user"];
	$password=$_POST["pass"];
$res=mysqli_query($a,"select * from admin where username='$username' && password='$password'");
$count=mysqli_num_rows($res);
if($count==0)
{
?>
<script type="text/javascript">
	document.getElementById('fail').style.display="block";
</script>
<?php
}
else
{
	$_SESSION["username"]=$username;
?>
<script type="text/javascript">
	window.location="home.php";
</script>
<?php
}
}
?>

</body>
</html>