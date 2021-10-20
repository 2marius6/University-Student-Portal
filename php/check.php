<?php
session_start();
echo "<head><title>Redirecting.....</title><body style='background-color:#002933'></head>";
$message="";
$link = mysqli_connect("localhost", "admin", "MZ@26102001n", "users");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$password = $_POST['password'];
$email = $_POST['email'];
$sql="SELECT * FROM login WHERE email='$email' AND pass='$password'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)) {
			$_SESSION["firstname"]=$row["firstname"];
			$_SESSION["lastname"]=$row["lastname"];
			$_SESSION["id"]=$row["id"];
		}
        mysqli_free_result($result);
		echo "<html><head><link rel='stylesheet' type='text/css' href='http://localhost/WD/css/check.css'></head><body><div class='center'><p style='text-align:center;'>Welcome, you wil soon be redirected to the starting page.</p></div></body></html>";
		header("refresh:4;url=http://localhost/WD/main/startpage.php");
        exit;
    } else{
        echo "<html><head><link rel='stylesheet' type='text/css' href='http://localhost/WD/css/check.css'></head><body><div class='center'><p style='text-align:center;'>Invalid username or Password, going back....</p></div></body></html>";
		header("refresh:3;url=http://localhost/WD/main/login.php");
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>