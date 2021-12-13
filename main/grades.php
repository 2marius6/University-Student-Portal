<?php
session_start();
$link = mysqli_connect("localhost", "root", "admin", "users");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id=$_SESSION['id'];
$row="SELECT * FROM grades WHERE id='$id'";
if($result = mysqli_query($link, $row))
{
	while($row = mysqli_fetch_assoc($result)) 
	{
		$grade_calculus = $row["grade_calculus"];
		$grade_programming = $row["grade_programming"];
		$grade_sport = $row["grade_sport"];
		$grade_practice_stage = $row["grade_practice.stage"];
		$grade_web_design = $row["grade_web.design"];
		$grade_formal_languages = $row["grade_formal.languages"];
		$grade_algorithms_and_data_structures= $row["grade_algorithms.and.data.structures"];
	}
	$simple_avreage=($grade_calculus+$grade_programming+$grade_practice_stage+$grade_web_design+$grade_formal_languages+$grade_algorithms_and_data_structures)/6;
	$weighted_avreage=(($grade_calculus*5)+($grade_programming*6)+($grade_practice_stage*2)+($grade_web_design*4)+($grade_formal_languages*5)+($grade_algorithms_and_data_structures*6))/28;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<script src="https://kit.fontawesome.com/67ce579b40.js" crossorigin="anonymous"></script>
		<meta charset="UTF-8">
		<title>Grades - WebGrad</title>
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
						<th>Calculus</th>
						<td><?php echo $grade_calculus;?></td>
					</tr>
					<tr>
						<th>Programming</th>
						<td><?php echo $grade_programming;?></td>
					</tr>
					<tr>
						<th>Sport</th>
						<td><?php echo $grade_sport;?></td>
					</tr>
					<tr>
						<th>Practice Stage</th>
						<td><?php echo $grade_practice_stage;?></td>
					</tr>
					<tr>
						<th>Web Design</th>
						<td><?php echo $grade_web_design;?></td>
					</tr>
					<tr>
						<th>Formal Languages</th>
						<td><?php echo $grade_formal_languages;?></td>
					</tr>
					<tr>
						<th>Algorithms and Data Structures</th>
						<td><?php echo $grade_algorithms_and_data_structures;?></td>
					</tr>
					<tr>
						<th>Simple Avreage</th>
						<td><?php echo number_format((float)$simple_avreage,2,'.','');?></td>
					</tr>
					<tr>
						<th>Weighted Avreage</th>
						<td><?php echo number_format((float)$weighted_avreage,2,'.','');?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>