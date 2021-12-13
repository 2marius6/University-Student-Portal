<?php
session_start();
echo "<head><title>Redirecting.....</title><body style='background-color:#002933'></head>";
$link = mysqli_connect("localhost", "root", "admin", "users");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$password_old = $_POST['password_old'];
$password_new = $_POST['password_new'];
$password_new_conf = $_POST['password_new_conf'];
$id=$_SESSION['id'];
if($password_new!==$password_new_conf)
{
	echo "<html><head><link rel='stylesheet' type='text/css' href='http://localhost/WD/css/check.css'></head><body><div class='center'><p style='text-align:center;'>Passwords does not match, try again:</p></div></body></html>";
	header("refresh:3;url=http://localhost/WD/main/changepass.php");
}
else
{
	$sql = "UPDATE login SET pass='$password_new' WHERE id='$id'";
	if (mysqli_query($link, $sql)) 
	{
		echo "<html><head><link rel='stylesheet' type='text/css' href='http://localhost/WD/css/check.css'></head><body><div class='center'><p style='text-align:center;'>Password updated succesfully, you wil soon be redirected back.</p></div></body></html>";
		header("refresh:5;url=http://localhost/WD/main/changepass.php");
		exit;
	} 
	else 
	{
		echo "Error changing the password: " . mysqli_error($link);
	}
}
mysqli_close($link);
?>