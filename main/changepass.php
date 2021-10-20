<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<script src="https://kit.fontawesome.com/67ce579b40.js" crossorigin="anonymous"></script>
		<meta charset="UTF-8">
		<title>Change Password - WebGrad</title>
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
		<div class="content">
			<div class="topright"> 
				<?php
				echo $_SESSION['firstname'], ' ',$_SESSION['lastname'];
				?>
			</div>
			<div class="center">
			<h2>Change Password</h2>
			<br>
			<form action="http://localhost/WD/php/checkchange.php" method="post">
				<div class="container">
					<label for="password_old"><b>Old Password</b></label>
					<input type="password" placeholder="Enter Old Password" name="password_old" required>
					<label for="password_new"><b>New Password</b></label>
					<input type="password" placeholder="Enter New Password" name="password_new" required>
					<label for="password_new_conf"><b>Repeat the New Password</b></label>
					<input type="password" placeholder="Enter New Password Again" name="password_new_conf" required>
				</div>
				<button type="submit">Change Password</button>
			</form>
			</div>
		</div>
	</body>
</html>