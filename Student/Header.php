<div id="header">
		<?php 
		
		if(!isset($_SESSION['fal']))
		{
			$logoutGoTo = "../index.php";


header("Location: $logoutGoTo");
		}
		
		?>
		<ul class="glossymenu">
			<li><a href="index.php">Home</a></li>
			<li><a href="Profile.php">My Profile</a></li>
			<li><a href="StartExam.php">Take Exam</a></li>
			<li><a href="Result.php">Check Result</a></li>
			<li><a href="uploadCredentials.php">Upload Credentials</a></li>

			<li><a href="Logout.php">Logout</a></li>
		</ul>
	</div>