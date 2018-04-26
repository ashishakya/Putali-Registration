
<html>
<head>
	<style>
		
		body {
			background: url("putali.jpg");
			background-size: 100% 100%;
			background-repeat: no-repeat;
			padding-top: 40px;
			}

		h1{
			
			text-align:center;
			color:white;
			color:green;
			
		}
		h2{
			margin:0px;
			text-align:center;
			color:white;
			color:green;
			
		}
		
	</style>
	<body>
	
		<?php
			
			function upper($str)
			{
				return strtoupper($str);
			}
			function lower($str)
			{
				return strtolower($str);
			}
			include 'connection.php';
			$fname=upper($_POST['fname']);
			$lname=upper($_POST['lname']);
			$email=lower($_POST['email']);
			$phone=$_POST['phone'];
			$colz=upper($_POST['colz']);
			$faculty=upper($_POST['faculty']);
			$sem=upper($_POST['sem']);

			$insert="INSERT INTO `emc`(`SN`, `First Name`, `Last Name`, `Email`, `Contact`, `College/Organisation`, `Faculty`, `Semester`) VALUES (null,'$fname','$lname','$email','$phone','$colz','$faculty','$sem')";
			$run=mysqli_query($link,$insert);

			if($run)
				echo "<h2>THANK YOU</h2>"."<h1>$fname $lname</h1>"."<h2>FOR PARTICIPATING IN THIS EVENT</h2>"."<br>";
		?>
		<center><a href="index.php"><input type="button" value="CLICK HERE FOR NEW REGISTRATION"></a></center>
	</body>
</head>
</html>














