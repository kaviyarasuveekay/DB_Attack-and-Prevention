
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
 
 <div id="main">
 	<center><h1>Database Emulating</h1></center>
 </div>
 <div id="contain">
 <div>
 	
        
 	<form action="apply.php" method="get"><center><br>
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
 

</body>
</html>