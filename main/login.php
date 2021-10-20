<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login - WebGrad</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/WD/css/login_style.css">
	</head>
	<body>
		<div class="center">
			<h2>Login</h2>
			<br>
			<form action="http://localhost/WD/php/check.php" method="post">
				<div class="container">
					<label for="email"><b>Email</b></label>
					<input type="email" placeholder="Enter Email" name="email" required>
					<label for="password"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="password" required>
				</div>
				<button type="submit">Login</button>
				<p>You haven't recived your account? Contact your supervisor teacher.</p>
			</form>
		</div>
	</body>
</html>