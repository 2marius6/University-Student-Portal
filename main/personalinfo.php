<?php
session_start();
$link = mysqli_connect("localhost", "admin", "MZ@26102001n", "users");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id=$_SESSION['id'];
$row="SELECT * FROM user_data WHERE id='$id'";
if($result = mysqli_query($link, $row))
{
	while($row = mysqli_fetch_assoc($result)) 
	{
		$first_name = $row["firstname"];
		$last_name = $row["lastname"];
		$specialization = $row["specialization"];
		$type = $row["type"];
		$birthdate = $row["birthdate"];
		$citizenship = $row["citizenship"];
		$reg_number = $row["reg_number"];
		$year = $row["year"];
		$group = $row["group"];
		$subgroup = $row["subgroup"];
		$home_adress = $row["home_adress"];
		$city = $row["city"];
		$county = $row["county"];
		$country = $row["country"];
		$phone_number = $row["phone_number"];
		$email = $row["email"];
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<script src="https://kit.fontawesome.com/67ce579b40.js" crossorigin="anonymous"></script>
		<meta charset="UTF-8">
		<title>Personal Info - WebGrad</title>
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
				<table class="table">
					<tr>
						<th>Firstname</th>
						<td><?php echo $first_name;?></td>
					</tr>
					<tr>
						<th>Lastname</th>
						<td><?php echo $last_name;?></td>
					</tr>
					<tr>
						<th>Specialization</th>
						<td><?php echo $specialization;?></td>
					</tr>
					<tr>
						<th>Type</th>
						<td><?php echo $type;?></td>
					</tr>
					<tr>
						<th>Birthdate</th>
						<td><?php echo $birthdate;?></td>
					</tr>
					<tr>
						<th>Citizenship</th>
						<td><?php echo $citizenship;?></td>
					</tr>
					<tr>
						<th>Registration Number</th>
						<td><?php echo $reg_number;?></td>
					</tr>
					<tr>
						<th>Year</th>
						<td><?php echo $year;?></td>
					</tr>
					<tr>
						<th>Group</th>
						<td><?php echo $group;?></td>
					</tr>
					<tr>
						<th>Subgroup</th>
						<td><?php echo $subgroup;?></td>
					</tr>
					<tr>
						<th>Home Address</th>
						<td><?php echo $home_adress;?></td>
					</tr>
					<tr>
						<th>City</th>
						<td><?php echo $city;?></td>
					</tr>
					<tr>
						<th>County</th>
						<td><?php echo $county;?></td>
					</tr>
					<tr>
						<th>Country</th>
						<td><?php echo $country;?></td>
					</tr>
					<tr>
						<th>Phone Number</th>
						<td><?php echo $phone_number;?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><?php echo $email;?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>