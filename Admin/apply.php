<?php 
session_start();
$name=$_GET["user"];
$pass=$_GET["pass"];
$a=mysqli_connect("localhost","root","");
mysqli_select_db($a,"construction");

$sql="SELECT * FROM admin where username='$name' AND password='$pass'";
$res=mysqli_query($a,$sql);
$che=mysqli_fetch_array($res);
if(isset($che))
{
	$_SESSION['username']=$name;
	header("Location:ad_home.php");
}
else
{
	echo "fail";
}
?>