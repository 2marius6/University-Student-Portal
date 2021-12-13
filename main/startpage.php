<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
$link = mysqli_connect("localhost", "root", "admin", "users");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$row="SELECT * FROM news WHERE id=1";
if($result = mysqli_query($link, $row))
{
	while($row = mysqli_fetch_assoc($result)) 
	{
		$news_1 = $row["news"];
	}
}
$row="SELECT * FROM news WHERE id=2";
if($result = mysqli_query($link, $row))
{
	while($row = mysqli_fetch_assoc($result)) 
	{
		$news_2 = $row["news"];
	}
}
$row="SELECT * FROM news WHERE id=3";
if($result = mysqli_query($link, $row))
{
	while($row = mysqli_fetch_assoc($result)) 
	{
		$news_3 = $row["news"];
	}
}
$row="SELECT * FROM news WHERE id=4";
if($result = mysqli_query($link, $row))
{
	while($row = mysqli_fetch_assoc($result)) 
	{
		$news_4 = $row["news"];
	}
}
$row="SELECT * FROM news WHERE id=5";
if($result = mysqli_query($link, $row))
{
	while($row = mysqli_fetch_assoc($result)) 
	{
		$news_5 = $row["news"];
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<script src="https://kit.fontawesome.com/67ce579b40.js" crossorigin="anonymous"></script>
		<meta charset="UTF-8">
		<title>Startpage - WebGrad</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/WD/css/pages_style.css">
	</head>
	<body>
		<div class="sidebar">
			<ul>
				<li>
					<a href="http://localhost/WD/main/startpage.php">
						<span class="icon"><i class="fas fa-home" aria-hidden="true"></i></span>
						<span class="title">Home</span>
					</a>
				</li>
				<li>
					<a href="http://localhost/WD/main/personalinfo.php">
						<span class="icon"><i class="fas fa-user" aria-hidden="true"></i></span>
						<span class="title">Personal info</span>
					</a>
				</li>
				<li>
					<a href="http://localhost/WD/main/grades.php">
						<span class="icon"><i class="fas fa-user-graduate" aria-hidden="true"></i></span>
						<span class="title">Grades</span>
					</a>
				</li>
				<li>
					<a href="http://localhost/WD/main/changepass.php">
						<span class="icon"><i class="fas fa-key" aria-hidden="true"></i></span>
						<span class="title">Change Password</span>
					</a>
				</li>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<li>
					<a href="http://localhost/WD/php/logout.php">
						<span class="icon"><i class="fas fa-sign-out-alt" aria-hidden="true"></i></span>
						<span class="title">Sign Out</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="header">
		<div class="content">
			<div class="topright"> 
				<?php
				echo $_SESSION['firstname'], ' ',$_SESSION['lastname'];
				?>
			</div>
			<div class="center">
			<h2>Welcome to WebGrad. Here you can see all your grades and personal info, as well as the latest news:</h2>
			<br>
			<br>
			<p><?php echo $news_1;?></p>
			<br>
			<p><?php echo $news_2;?></p>
			<br>
			<p><?php echo $news_3;?></p>
			<br>
			<p><?php echo $news_4;?></p>
			<br>
			<p><?php echo $news_5;?></p>
			</div>
		</div>
	</body>
</html>